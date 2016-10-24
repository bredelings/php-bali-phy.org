<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Unreleased 3 (alpha)"; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
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

	  <div class="release_dates"><b style="font-size:125%">Version 3 (unreleased, in development):</b>
          <ul>
	    <li><b>[3.0]</b> - ??-??-2017</li>
	  </ul>
	  </div>

	  <ul class="changelog">
	    <!--
	    <li>New features
	      <ul>
	      </ul>
	    </li>
	    -->

	    <li>Speed
	    <ul>
		<li><span style="color:red">[>50% faster]</span> So far.</li>
		<!-- li><span style="color:red">[??% faster]</span> Cache tree prior.</li>
		<li><span style="color:red">[??% faster]</span> Avoid recomputing alignment matrix.</li>
		<li><span style="color:red">[??% faster]</span> Eliminate alignment index matrices: Faster computation.</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (fixed A).</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (variable A).</li -->
	      </ul>
	    </li>

	    <li>Models
	      <ul>
		<li><b>04/14/16</b> Allow specifying constant model parameters with e.g. <b>HKY[kappa=2]</b></li>
		<!-- li><b>04/14/16</b> Add Jukes-Cantor model name.</li -->
		<!-- li><b>[planned]</b> Allow specifying random parameters.</li -->
	      </ul>
	    </li>


	    <!-- li>MCMC
	    <ul>
	      <li></li>
		<li><b>[planned]</b> Improve burnin by resampling pairwise A + branch length.
		<li><b>[planned]</b> Improve mixing by resampling all pairwise As + (lambda,epsilon).
	      </ul>
	      </li -->

	    <!-- 
	    <li>Internals
	    <ul>
	      <li></li>
	      <!-- 
		<li><b>10/22/15</b> Allow sharing unchanged steps when called result changes.</li>
		<li><b>03/17/16</b> Move tree into the machine.</li>
		<li><b>04/07/16</b> Compute likelihoods in separate contexts - no more invalid indices/CLs</li>
		<li><b>04/23/16</b> Remove subA indices.</li>
		<li><b>04/29/16</b> Avoid recomputing alignment matrix.</li>
		<li><b>05/18/16</b> Replace conditional likelihoods vector<Matrix> with a slab of memory</li>
		<li><b>06/09/16</b> Incremental GC (part 1) - unmap unused steps/results <em>before</em> we destroy regs. </li>
		<li><b>06/22/16</b> Cache tree prior</li>
		<li><b>07/14/16</b> Incremental GC (part 2) - Rewrite the trace function to be incremental.</li>
		<li><b>07/25/16</b> Compute likelihood in the machine.</li>
	      </ul>
	    </li>
	    -->

	    <li>Misc
	      <ul>
		<li>Update BOOST, Eigen.</li>
	      </ul>
	    </li>

	    <!--
	    <li>Input
	    <ul>
	      <li></li>
	      </ul>
	    </li>
	    -->

	      <!-- 
	    <li>Summarization tools
	    <ul>
	      <li></li>
	      <li><em>bp-analyze.pl</em> - ??.</li> 
	      </ul>
	    </li>
	    -->

	    <li>Changes
	    <ul>
	      <li><b>04/27/16</b> - Clean up command-line options somewhat.</li>
	    </ul>
	    </li>
	      
	    <li>Fixes
	      <ul>
		<li><b>04/14/16</b> Fix gwF to actually use 'f' parameter.</li>
		<li><b>06/21/16</b> New priors that do not favor huge treelengths the trees have lots of leaves.</li>
		<li>Allow analyzing 1- and 2-sequence alignments.</li>
	      </ul>
	    </li>
	  </ul>



	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
