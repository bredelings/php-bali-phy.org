<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <style type="text/css">
ul.changelog li {font-weight: bold; color: blue}
ul.changelog li li {font-weight: normal; color: black}
.release_dates ul {display: inline; padding: 0; padding-left: 0.5}
.release_dates li {display: inline; padding-left: 1em; white-space:nowrap}
    </style>
  </head>
  <body>
    <?php baliphy_header(); ?>

    <table class="layout">
      <tr>
	<?php dirtree(); ?>
	<td class="center" valign="top">
	  <!-- ?php navbar(); ? -->
	  <div class="main">
	  <h2><a name="news">Release Notes</a></h2>

	  <h2><a name="old">Older News</a></h2>

	  <ul>
	    <li>10/25/05: <strong>version 1.9.8 released.</strong>
	    <ul>
	      <li>Documentation improvements.</li>
	      <li>Analysis phase: usability improvements.</li>
	      <li>Analysis phase: better handle partial partitions. (n-taxon statements)</li>
	      <li>FIX mistranslation of 3 codons.</li>
	      <li>FIX compilation on Mac OS X.</li>
	      <li>FIX crash with wildcards.</li>
	      <li>Print N or X for wildcard instead of *.</li>
	      <li>Allow user to specify alphabet more specifically.</li>
	      <li>Add alphabets for including STOP codon and amino acid.</li>
	    </ul>
	    </li>
	    
	    <li>07/19/05: <strong>version 1.9.7 released.</strong>
	    <ul>
	      <li>Some speed/memory improvements.</li>
	      <li>FIX prior on mu.</li>
	      <li>FIX branch length proposals to include effect on alignment prior.</li>
	      <li>FIX Codon models - correctly find nucleotides inside codons.</li>
	      <li>FIX Codon models - scale branch lengths to match singlet models.</li>
	      <li>FIX Codon model YangM2</li>
	      <li>NEW indel model "fragments" that is time-independant</li>
	      <li>NEW asymmetric NNI and SPR proposals.</li>
	      <li>NEW documentation in HTML from docbook.</li>
	      <li>NEW statistics for transition kernels.</li>
	      <li>NEW tool: alignment-consensus.</li>
	      <li>NEW parameters for transition kernels.</li>
	    </ul>
	    </li>

	    <li>04/14/05: <strong>version 1.9.6 released.</strong>
	    <ul>
	      <li> SPEED improvements!</li>
	      <li> FIX Alignment constraints should work.</li>
	      <li> FIX Codon models to work again.  YangM2 Codon model fixed. </li>
	      <li> NEW drawing schemes in alignment-draw...</li>
	      <li> NEW command line help availabe with "--help".</li>
	      <li> The form of arguments has changed to "--option arg" from "option=arg"</li>
	      <li> Setting/fixing/unfixing parameters works better now</li>
	      <li> Alignment format defaults to FASTA now </li>
	      <li> <em>FASTA files should not contain blank lines between sequences!</em></li>
	    </ul>
	    </li>
	    
	    <li>01/24/05: <strong>version 1.9.4 (BETA) released.</strong>
	    <ul>
	      <li>this release "should work" (many bugs fixed!).</li>
	      <li>use new indel model by default.</li>
	      <li>update tools to compile and work in new framework.</li>
	      <li>use less  memory for conditional likelihoods.</li>
	      <li>initial support for multifurcating trees.</li>
	      <li>add invariant fraction to indel model.</li>
	      <li>add more color schemes to alignment-draw (needs more work).</li>
	      <li>speed up tree-dist-compare, print out M[l] consensus tree.</li>
	      <li>speed up alignment-gild: both I/O, and processing time.</li>
	      <li>speed up output (use buffered I/O).</li>
	      <li>speed up likelihood calculation, slightly.</li>
	      <li>speed up conditional likelihood calculations for DP.</li>
	      <li>fix fixing of parameters on command line.</li>
	      <li>put compiled tools in build/bin directory.</li>
	    </ul>
	    </li>

	    <li>12/23/04: <strong>version 1.9.3 (BETA) released.</strong>
	    <ul>
	      <li>fixed many bugs - but several remain.</li>
	      <li>removed internal copy of uBLAS matrix library. (use BOOST version).</li>
	      <li>started to update tools to match new tree code (not done).</li>
	      <li>started re-writing alignment-draw for more color-schemes (not done).</li>
	      <li>started dealing with std::bad_alloc() exception.</li>
	    </ul>
	    </li>

	    <li>11/27/04: <strong>version 1.9.2 (BETA) released.</strong>
	    <ul>
	      <li>improved indel model</li>
	      <li>alignment constraints</li>
	      <li>likelihood-caching to speed up likelihood calculation.</li>
	    </ul>
	    </li>

	    <li>09/16/04: <strong>version 1.8.24 released.</strong></li>

	    <li>06/28/04: <strong>version 1.8.14 developed (release notes)</strong>
	    <ul>
	      <li>Began version control (SubVersion)</li>
	      <li>No longer need uBlas "bindings"</li>
	    </ul>
	    </li>

	    <li>6/9/04: <strong>version 1.8.10 developed (release notes)</strong></li>
	  </ul>

	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
