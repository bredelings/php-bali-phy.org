module M7 where

import Bio.Alignment
import Bio.Alphabet
import IModel
import Probability
import Probability.Distribution.OnTree
import SModel
import System.Environment -- for getArgs
import Tree
import Tree.Newick

gtr_m7_model codons = do
    -- GTR model parameters
    let nucs = getNucleotides codons
    sym <- prior $ symmetric_dirichlet_on (letter_pair_names nucs) 1
    pi <- prior $ symmetric_dirichlet_on (letters nucs) 1
    let gtr_model = gtr' sym pi nucs

    -- Positive selection model based on GTR
    let pos_sel_model w = gtr_model +> x3 codons +> dNdS w

    -- M7 model parameters
    mu <- prior $ uniform 0 1 -- mean of dN/dS
    gamma <- prior $ beta 1 10 -- spread of dN/dS
    let m7_model = pos_sel_model +> m7 mu gamma 4

    let loggers =
            [ "gtr:sym" %=% sym
            , "gtr:pi" %=% pi
            , "m7:mu" %=% mu
            , "m7:gamma" %=% gamma
            ]

    return (m7_model, loggers)

branch_length_dist topology b = gamma 0.5 (2 / fromIntegral n)
  where
    n = numBranches topology

model seq_data = do
    let the_codons = codons dna standard_code
        taxa = map sequenceName seq_data
        tip_seq_lengths = get_sequence_lengths the_codons seq_data

    -- Tree
    scale1 <- prior $ gamma 0.5 2
    tree <- prior $ uniform_labelled_tree taxa branch_length_dist
    let tree1 = scale_branch_lengths scale1 tree

    -- Indel model
    logLambda <- prior $ log_laplace (-4) 0.707
    mean_length <- (1 +) <$> prior (exponential 10)
    let imodel = rs07 logLambda mean_length tree

    -- Substitution model
    (m7_model, log_m7_smodel) <- gtr_m7_model the_codons

    -- Alignment
    alignment <- prior $ random_alignment tree1 imodel tip_seq_lengths

    -- Observation
    observe seq_data $ ctmc_on_tree tree1 alignment m7_model

    return
        [ "tree" %=% write_newick tree1
        , "scale" %=% scale1
        , "S1" %>% log_m7_smodel
        , "|T|" %=% tree_length tree
        , "scale1*|T|" %=% tree_length tree1
        ]

main = do
    [filename] <- getArgs

    seq_data <- load_sequences filename

    return $ model seq_data
