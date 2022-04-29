<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Welcome!'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <style type="text/css">
      ol li {padding-bottom:0.5em}
    </style>
    <link rel="stylesheet" type="text/css" href="Style/au.css" />
  </head>
  <body>
    <?php baliphy_header(); ?>

    <table class="layout">
      <tr>
	<?php dirtree(); ?>

	<td class="center" valign="top">
	  <!-- ?php navbar(); ? -->

	  <div class="main">

	    <!-- we will need a 'full news': only put recent news here -->
	    <!-- I suppose I also need a site w/ my bio to link to -->

	    <h3><a name="intro">Introduction</a></h3>

	    <div style="margin-left:1em">
              <p>4/29/22: <strong>BAli-Phy 4.0-alpha5</strong> is available for download on <a href="https://github.com/bredelings/BAli-Phy/releases/tag/4.0-alpha5">github</a>.</a><br/>
              <em>BAli-Phy 4.0</em> will likely be released around Jan 2023.</p>

	      <p>08/24/21: <strong>BAli-Phy 3.6.1 released</strong> - <a href="download.php">Download</a><br/>
                Bug fixes for <a href="https://github.com/bredelings/BayesianEstimatorSelfing/">BES</a> (See <a href="releases/3/">release notes</a>)</p>
	      <p>03/02/21: <strong>New paper</strong> - <a href="https://academic.oup.com/bioinformatics/advance-article/doi/10.1093/bioinformatics/btab129/6156619?guestAccessKey=b1599c90-6c9b-4d78-9b7a-ef1af494d414">BAli-Phy version 3: Model-based co-estimation of Alignment and Phylogeny</a></p>
	      </div>

	      <p><em>BAli-Phy</em> is software by  <a href="http://ben-redelings.org/">Ben Redelings</a> that estimates multiple sequence alignments and evolutionary trees from DNA, amino acid, or codon sequences.
	      It uses likelihood-based evolutionary models of substitutions and insertions and deletions to place gaps.  It has been used in published analyses on data sets up to <a href="http://www.biomedcentral.com/1471-2164/15/718/figure/F1?highres=y">117 taxa</a>.</p>

	      <p><b>High alignment accuracy</b>: <a href="http://mbe.oxfordjournals.org/content/31/8/1979.long">Redelings (2014)</a> showed that <em>BAli-Phy</em> had 3.5 times fewer alignment errors than MUSCLE and MAFFT on simulated data:</p>
	      <p><img style="margin:auto;padding-right:5em;display:block" src="error-comparison.svg" width="600em" title="Redelings BD. Erasing Errors Due to Alignment Ambiguity When Estimating Positive Selection. Mol. Biol. Evo. 31(8), 2014." alt="Figure 4. from Redelings BD. Erasing Errors Due to Alignment Ambiguity When Estimating Positive Selection. Mol. Biol. Evo. 31(8), 2014."/></p>
		

	      <!-- Alignment uncertainty can lead to bias when estimating evolutionary trees, positive selection, and
	      branch lengths from a single alignment.  For example, using CodeML to infer positive selection under the
	      branch-site model lead to a 99% FPR from ClustalW alignments on simulated data, versus 5% for the true (simulated) alignment. -->

	    <p><b>Eliminate bias:</b> <a href="https://doi.org/10.1093/molbev/msq115">Fletcher and Yang (2010)</a> showed that relying on a ClustalW alignment
	      estimate could lead to a 99% false-positive rate in detecting positive selection.  Evolutionary trees and branch lengths that are inferred from a single alignment can also be biased if the alignment is ambiguous.
	      <em>BAli-Phy</em> solves the problem of alignment bias by using MCMC to estimate evolutionary trees, positive selection, and branch lengths
	      while simultaneously averaging over alternative alignments in a Bayesian paradigm.
	      </p>
 	         
	      <div class="AU">
		<?php 
		mt_srand((double)microtime() * 1000000);
		if (rand()%2 == 0) {
		include 'AU-sample2.html'; 
		}
		else  {
		include 'AU-sample3.html';
		}
	      ?></div>
	      
		<p>This ambiguity can be displayed graphically in an alignment uncertainty (AU) plot.</p>  
	      
            <p><b>Model-based alignment:</b> <em>BAli-Phy</em> can make use of complex substitution models while estimating alignments (and trees).  These include the free-rates and Gamma+INV models, codon models such as the M3 and M8 models, and covarion models such as Tuffley-Steel.</p>

	    <p><b>Fixed-alignment</b>: <em>BAli-Phy</em> can also estimate phylogenies from a fixed alignment (like MrBayes and BEAST) using complex substitution models like GTR+gamma. </p>

	    <p><b>Multi-gene:</b> <em>BAli-Phy</em> automatically estimates relative rates for each gene, as described in the <a href="README.xhtml">Manual</a> and the <a href="Tutorial4.html">tutorial</a>.</p>  

            <p><b>Ancestral sequence reconstruction:</b> <em>BAli-Phy</em> automatically reconstructs ancestral sequences (with gaps) for each gene, while averaging over both topological and alignment uncertainty, as described in the <a href="README.xhtml#ancestral_sequence_reconstruction">Manual</a>.</p>

	      </div>

	      <!-- make an expanded references page with all papers + related papers -->
	      <h2><a name="refs">References</a></h2>
	      <ol>
		<li>Redelings BD and Suchard MA <b>Joint Bayesian Estimation of Alignment
		    and Phylogeny</b>, <em>Systematic Biology</em>, <b>54</b>(3):401-418, 2005&nbsp; &nbsp; [<a href="Redelings_and_Suchard_2005.pdf">PDF</a>]</li>
		<li>Suchard MA and Redelings BD <b>BAli-Phy: simultaneous Bayesian inference of alignment and phylogeny</b>, <em>Bioinformatics</em>, <b>22</b>:2047-2048, 2006. &nbsp; &nbsp; [<a href="Suchard_and_Redelings_2006.pdf">PDF</a>]</li>
		<li>Redelings BD and Suchard MA. <b>Incorporating indel information into phylogeny estimation for rapidly emerging pathogens</b>. <em>BMC Evolutionary Biology</em>, <b>7</b>:40, 2007.&nbsp; &nbsp; [<a href="Redelings_and_Suchard_2007.pdf">PDF</a>]</li>
		<li>Redelings BD. <b>Erasing Errors Due to Alignment Ambiguity When Estimating Positive Selection</b>. <em>Mol. Biol. Evo.</em> <b>31</b>(8), 2014. [<a href="http://mbe.oxfordjournals.org/content/31/8/1979.long">WWW</a>]</li>
	      </ol>
	      </div>
	    </td>  
	  </tr>
	</table>
	
	<?php baliphy_footer(); ?>

      </body>
    </html>
