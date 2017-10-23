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

	  <div class="release_dates"><b style="font-size:125%">Version 3 (in development):</b>
          <ul>
	    <li><b>[3.0-beta1]</b> - May-05-2017</li>
	    <li><b>[3.0-beta2]</b> - Jul-13-2017</li>
	    <li><b>[3.0-beta3]</b> - Aug-14-2017</li>
	    <li><b>[3.0-beta4]</b> - Oct-23-2017</li>
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
  	        <li><span style="color:red">[65%-300% faster]</span> Rewrite core.</li>
	        <li><span style="color:red">[0%-300% less memory]</span> Rewrite core.</li>
		<li><b>[3.0-beta2]</b> <span style="color:red">Decrease memory use for large trees</span>.</li>
		<li><b>[3.0-beta3]</b> <span style="color:red">Decrease memory use up to 3-fold</span>.</li>
		<li><b>[3.0-beta3]</b> <span style="color:red">7-15% faster</span>.</li>
		<li><b>[3.0-beta4]</b> <span style="color:red">site compression for fixed alignments.</span></li>
		<!-- li><span style="color:red">[??% faster]</span> Cache tree prior.</li>
		<li><span style="color:red">[??% faster]</span> Avoid recomputing alignment matrix.</li>
		<li><span style="color:red">[??% faster]</span> Eliminate alignment index matrices: Faster computation.</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (fixed A).</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (variable A).</li -->
	      </ul>
	    </li>
	    
	    <li>Features
	      <ul>
		<li>Likelihood rescaling (<em>compute likelihoods for large trees</em>).</li>
		<li>New treelength prior: don't prefer huge treelengths for trees with lots of leaves.</li>
		<li>Allow analyzing 1- and 2-sequence alignments.</li>
		<li>Print out the model and priors (<em>including defaults</em>)</li>
		<li>Allow specifying priors for substitution model and indel model, 
		  <ul style="font-family:times,monospace">
		    <li>--smodel=HKY[kappa=2]. </li>
		    <li>--imodel=RS07[logLambda~Laplace[-4,0.707],meanIndelLength=Add[1,~Exponential[10]]]</li>
		  </ul>
		</li>
		
		<li>Allow specifying priors on scale factors for branch lengths in each partition:
		  <ul style="font-family:times,monospace">
		    <li>--scale=~Gamma[0.5,2]</li>
		    <li>--scale=1</li>
		  </ul>
		</li>
		<li>Allow specifying priors on branch lengths.
		  <ul style="font-family:times,monospace">
		    <li>--branch-length=~Gamma[0.5,0.1]</li>
		  </ul>
		</li>
		<li><b>[3.0-beta4]</b> Sample ancestral sequences in sampled alignments.</li>
		<li><b>[3.0-beta4]</b> Add helpful error messages for loading codon sequences.</li>
		<li><b>[3.0-beta4]</b> Add initial help on various topics via --help=<em>topic</em>.</li>
		<li><b>[3.0-beta4]</b> Add initial documentation on functions via e.g. --help=HKY.</li>
	      </ul>
	    <!-- li>Models
	      <ul>
	      </ul>
	    </li -->


	    <li>Misc
	      <ul>
		<li>Add unit tests.</li>
		<li><b>[3.0-beta2]</b> Expand likelihood testsuite.</li>
	      </ul>
	    </li>

	    <!--
	    <li>Input
	    <ul>
	      <li></li>
	      </ul>
	    </li>
	    -->

	    <li>Summarization tools
	    <ul>
	      <li><b>[3.0-beta2]</b> <em>bp-analyze.pl</em> - Beautify and condense MCMC statistics.</li> 
	      <li><b>[3.0-beta2]</b> <em>bp-analyze.pl</em> - Show 2-D MDS topology convergence figures.</li> 
	      <li><b>[3.0-beta4]</b> <em>bp-analyze.pl</em> - Show 3-D MDS topology convergence figures.</li> 
	      <li><b>[3.0-beta2]</b> <em>bp-analyze.pl</em> - Don't compute trace plots (too slow, large files).</li> 
	      </ul>
	    </li>

	    <li>Changes
	    <ul>
	      <li>Simplify command-line options (<em>some old options have been removed</em>).</li>
	      <li><b>[3.0-beta2]</b> Suffix parameter files with <em>*.log</em> instead of <em>*.p</em> to match other software.</li>
	      <li><b>[3.0-beta4]</b> Change spelling for gamma rate variation to Rates.Gamma: <em>GTR+Rates.Gamma[4]+INV</em>
	      <li><b>[3.0-beta4]</b> Change spelling for log-normal rate variation to Rates.logNormal: <em>GTR+Rates.logNormal[4]+INV</em>
	      <li><b>[3.0-beta4]</b> Change <em>meanIndelLengthMinus1</em> to just <em>meanIndelLength</em>.</li>
	    </ul>
	    </li>
	      
	    <li>Fixes
	      <ul>
		<li><b>[3.0-beta2]</b> Fix compile on XCode 6.</li>
	      </ul>
	    </li>

	    <!--li>Internals
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
	[beta1]
		<li><b>05/11/17</b> Remove triggers</li>
		<li><b></b> </li>
		<li><b>05/17/17</b> Allow +INV again.</li>
		<li><b>05/18/17</b> Eliminate Parameters::recalc( )</li>
		<li><b>05/19/17</b> Fix exp(Q*t) for small t by using expm1</li>
		<li><b>05/26/17</b> Case-of-case</li>

		<li><b>06/21/17</b> Add new SEV likelihood calculator</li>
		<li><b>06/29/17</b> Connect leaf characters in linear time.</li>
        [beta2]
        [beta3]
		<li><b>8/18/17</b> Allow multiparameter models to operate on multiparameter models.</li>
		<li><b>8/22/17</b> Allow --help=topic.</li>
		<li><b>8/22/17</b> Expand EM,MM,MMM, and FM.</li>
		<li><b>9/1/17</b> Don't output space before PPs in newicks with PPs on internal nodes.</li>
		<li><b>9/12/17</b> MeanIndelLength instead of meanIndellengthMinus1.</li>
		<li><b>9/28/17</b> Split Decl groups, in preparation for let-floating.</li>
		<li><b>10/03/17</b> Avoid multiple runs starting in same dir.</li>
		<li><b>10/07/17</b> Add pattern compression for fixed alignments.</li>
	[beta4]
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
