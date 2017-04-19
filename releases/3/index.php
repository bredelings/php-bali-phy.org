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
	    <li><b>[3.0]</b> - May-??-2017</li>
	  </ul>
	  </div>

	  <ul class="changelog">
	    <!--
	    <li>New features
	      <ul>
	      </ul>
	    </li>
	    -->

	    <li>Speed &amp; Memory
	    <ul>
  	        <li><span style="color:red">[65%-300% faster]</span> So far.</li>
	        <li>0-3 times reduction in memory usage.</li>
		<!-- li><span style="color:red">[??% faster]</span> Cache tree prior.</li>
		<li><span style="color:red">[??% faster]</span> Avoid recomputing alignment matrix.</li>
		<li><span style="color:red">[??% faster]</span> Eliminate alignment index matrices: Faster computation.</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (fixed A).</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (variable A).</li -->
	      </ul>
	    </li>

	    <li>Features
	      <ul>
		<li><b>06/21/16</b> New treelength prior: don't prefer huge treelengths for trees with lots of leaves.</li>
		<li><b>10/01/16</b> Allow analyzing 1- and 2-sequence alignments.</li>
		<li><b>11/30/16</b> Allow specifying model and priors:
		<ul style="font-family:times,monospace">
		  <li>HKY[kappa=2]. </li>
		  <li>HKY[kappa~logNormal[log[2],0.25]]. </li>
		</ul>
		</li>
		<li><b>02/13/17</b> Likelihood rescaling (<em>compute likelihoods for large trees</em>).</li>
		<li><b>04/17/17</b> Print out the model and priors (<em>including defaults</em>)</li>

		<li><b>04/17/17</b> Allow specifying priors on scale factors for branch lengths in each partition:
		<ul style="font-family:times,monospace">
		  <li>--scale=~Gamma[0.5,2]</li>
		  <li>--scale=1</li>
		</ul>
		</li>
	      </ul>
	    </li>

	    <!-- li>Models
	      <ul>
	      </ul>
	    </li -->


	    <li>Misc
	      <ul>
		<li>Update BOOST, Eigen.</li>
		<li><b>04/14/17</b> Add unit tests.</li>
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
	      <li><b>04/17/17</b> - Simplify command-line options (<em>some old options have been removed</em>).</li>
	    </ul>
	    </li>
	      
	    <!-- li>Fixes
	      <ul>
		<li><b>04/14/16</b> Fix gwF to actually use 'f' parameter.</li>
	      </ul>
	    </li>

	    <li>Internals
	    <ul>
	      <li></li>

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
		<li><b>08/20/16</b> Remove source_token field, allow root token to change, stop calling swap_token( )</li>

		<li><b>02/26/17</b> Allow generating the IO functions for each rule.
		<li><b>

		<li> ... allow specifying distribution for branch lengths </li>
		<li> ... compute reconstructed ancestral sequences by default ... </li>
		<li> ... don't break scripts that assume N/X at internal nodes ... </li>
		<li> ... compute categories for each letter by default ... </li>
		<li> ... compute probability of positive selection for sites/letters? ...</li>
	      </ul>
	    </li>
	    -->

	  </ul>



	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
