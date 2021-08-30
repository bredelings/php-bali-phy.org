import           Probability
import           Bio.Alphabet
import           Bio.Sequence
import           Tree
import           Tree.Newick
import           SModel
import           Probability.Distribution.OnTree
import           System.Environment  -- for getArgs

modulated_smodel codons = do

    -- GTR model parameters
    let nucs = getNucleotides codons
    sym <- symmetric_dirichlet_on (letter_pair_names nucs) 1.0
    pi  <- symmetric_dirichlet_on (letters nucs) 1.0
    let gtr_model = gtr' sym pi nucs

    -- fMutSel model and parameters
    let aas       = letters (getAminoAcids codons)
    ss <- zip aas <$> iid (length aas) (normal 0.0 1.0)
    let mut_sel_model = gtr_model & x3 codons & mut_sel_aa' ss

    -- M7 model parameters
    mu    <- uniform 0.0 1.0            -- mean of dN/dS
    gamma <- beta 1.0 10.0              -- spread of dN/dS
    let m7_model = (\w -> mut_sel_model & dNdS w) & m7 mu gamma 4

    -- Modulated Markov model (Galtier '01) parameters
    nu                 <- exponential 0.1
    fraction_modulated <- uniform 0.0 1.0
    let modulated_model = m7_model & galtier_01 nu fraction_modulated

    let loggers =
            [ "gtr:sym" %=% sym
            , "gtr:pi" %=% pi
            , "mut_sel_aa:ss" %=% ss
            , "m7:mu" %=% mu
            , "m7:gamma" %=% gamma
            , "galtier01:nu" %=% nu
            , "galtier01:pi" %=% fraction_modulated
            ]
    return (modulated_model, loggers)

branch_length_dist topology b = gamma 0.5 (2.0 / intToDouble n) where n = numBranches topology

model seq_data = do

    let taxa = map sequence_name seq_data

    tree   <- uniform_labelled_tree taxa branch_length_dist

    scale1 <- gamma 0.5 2.0
    let tree1 = scale_branch_lengths scale1 tree

    (smodel, log_smodel) <- modulated_smodel (codons dna standard_code)

    seq_data ~> ctmc_on_tree_fixed_A tree1 smodel

    return
        [ "tree1" %=% write_newick tree1
        , "scale" %=% scale1
        , "S1" %>% log_smodel
        , "|T|" %=% tree_length tree
        , "scale1*|T|" %=% tree_length tree1
        ]

main = do
    [filename] <- getArgs

    let seq_data = load_sequences filename

    mcmc $ model seq_data
