<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='Welcome!'; ?>
    <?php require('lib/phplib.inc') ?>
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
	<?php navbar(); ?>

	<div class="main">
	    
	  <!-- we will need a 'full news': only put recent news here -->
	  <!-- I suppose I also need a site w/ my bio to link to -->
	   
	    <h3><a name="intro">Introduction</a></h3>
	    
	    <div style="margin-left:1em">
	      <p>09/01/13: <strong>Branch-site model for positive 
selection</strong></br>
		Unreleased version successfully accounts for alignment 
uncertainty in testing for (diversifying) positive selection. Submitted <a href="branch-site-article.pdf">manuscript</a>.  Source code available on github.
	      <p>05/01/11: <strong>Success with large 68-taxon 
tree!</strong></br> 
	      See <a 
href="http://www.mycologia.org/cgi/content/short/103/2/361">Gaya et 
al (2011) </a> for information on models and convergence criteria.</p>
	      <p>02/03/11: <strong>BAli-Phy 2.1.1 released</strong><br/>
	      This release fixes a few bugs. (<a href="news.php#2.1.1">What else is new?</a>) 	    </div>

	    <div style="margin-left:1em">
	      <p>08/06/10: <strong>BAli-Phy 2.1.0 now available via MacPorts</strong><br/>
	You can now install BAli-Phy for Mac using 
	<a href="http://www.macports.org">MacPorts</a> -- thanks to 
        Andrew Fernandes!</p>

	      <p>07/07/10: <strong>BAli-Phy 2.1.0 released</strong><br/>
	      This release can handle multiple separate genes.  (<a href="news.php#2.1.0">What else is new?</a>)
	    </div>

	    <p><strong>BAli-Phy</strong> is MCMC software developed by <a
	    href="http://www4.ncsu.edu/~bdredeli">Ben Redelings</a>
	    with <a href="http://www.biomath.ucla.edu/msuchard">Marc
	    Suchard</a> for simultaneous Bayesian estimation of
	    alignment and phylogeny (and other parameters).  [See the
	    <a href="Redelings_and_Suchard_2005.pdf">paper</a> and the
	    <a href="Suchard_and_Redelings_2006.pdf">Application
	    Note</a>.]</p> 

	    <p><strong>BAli-Phy</strong> can estimate phylogenetic
	    trees from sequence data when the alignment is uncertain.
	    Instead of conditioning on a single alignment estimate,
	    BAli-Phy accounts for  alignment uncertainty by
	    integrating over <span style="color:red">all
	    alignments</span>.  BAli-Phy does not rely on a guide tree
	    because the alignment and the tree are co-estimated.
	    Therefore it can construct phylogeny estimates of widely
	    divergent sequences <span style="color:red">without bias
	    toward a guide tree.</span></p> 

	    <p><strong>BAli-Phy</strong> also produces high-quality
	    alignment estimates for highly divergent sequences, because it
	    uses advanced substitution models and a realistic model of
	    indels occurring on an (uncertain) tree. BAli-Phy can
	    produce alignment uncertainty (AU) plots that are colored
	    to indicate uncertain areas of the alignment.</p>  
	      
	    <p><strong>BAli-Phy</strong> works on the nucleotide,
	    amino acid, and codon levels and can utilize complex
	    substitution models, such as GTR+gamma[n],
	    WAG+log-normal[n]+INV, M0, M7, and more.  It can be used
	    to estimate substitution rates, frequencies, and indel
	    rates when the tree and alignment are uncertain.</p>  

	    <div class="AU">
	      <?php 
		mt_srand((double)microtime() * 1000000);
		if (rand()%2 == 0) {
		include 'AU-sample2.html'; 
		}
		else  {
		include 'AU-sample3.html';
		}
	      ?>
	    </div>

		<!-- make an expanded references page with all papers + related papers -->
	    <h2><a name="refs">References</a></h2>
	    <ol>
	      <li>Redelings BD and Suchard MA <b>Joint Bayesian Estimation of Alignment
	      and Phylogeny</b>, <em>Systematic Biology</em>, <b>54</b>(3):401-418, 2005&nbsp; &nbsp; [<a href="Redelings_and_Suchard_2005.pdf">PDF</a>]</li>
	      <li>Suchard MA and Redelings BD <b>BAli-Phy: simultaneous Bayesian inference of alignment and phylogeny</b>, <em>Bioinformatics</em>, <b>22</b>:2047-2048, 2006. &nbsp; &nbsp; [<a href="Suchard_and_Redelings_2006.pdf">PDF</a>]</li>
	      <li>Redelings BD and Suchard MA. <b>Incorporating indel information into phylogeny estimation for rapidly emerging pathogens</b>. <em>BMC Evolutionary Biology</em>, <b>7</b>:40, 2007.&nbsp; &nbsp; [<a href="Redelings_and_Suchard_2007.pdf">PDF</a>]</li>
	    </ol>
	    <p>[See more <a href="links.php#papers">papers on
	    statistical alignment</a> on my "<a
	    href="links.php">links</a>" page.]</p>
	</div>
	</td>  
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>

  </body>
</html>
