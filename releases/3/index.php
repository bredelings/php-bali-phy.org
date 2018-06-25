<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Release 3.*"; ?>
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

	  <div class="release_dates"><b style="font-size:125%">Version 3 (stable):</b>
          <ul>
	    <!-- li><b>[3.0-beta1]</b> - May-05-2017</li>
	    <li><b>[3.0-beta2]</b> - Jul-13-2017</li>
	    <li><b>[3.0-beta3]</b> - Aug-14-2017</li>
	    <li><b>[3.0-beta4]</b> - Oct-23-2017</li>
	    <li><b>[3.0-beta5]</b> - Dec-06-2017</li>
	    <li><b>[3.0-beta6]</b> - Jan-05-2018</li -->
	    <li><b>[3.0]</b> - Feb-12-2018</li>
	    <li><b>[3.1]</b> - May-02-2018</li>
	    <li><b>[3.2]</b> - Jun-25-2018</li>
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
  	        <li><b>Speed:</b> 0-300% faster.&nbsp;&nbsp;&nbsp;&nbsp;<b>Memory:</b> 0-300% less memory.</li>
		<li><b>Site-compression</b> for fixed-alignment partitions.</li>
  	        <!-- li><span style="color:red">[65%-300% faster]</span> Rewrite core.</li>
	        <li><span style="color:red">[0%-300% less memory]</span> Rewrite core.</li>
		<li><span class="timepoint">[3.0-beta2]</span> <span style="color:red">Decrease memory use for large trees</span>.</li>
		<li><span class="timepoint">[3.0-beta3]</span> <span style="color:red">Decrease memory use up to 3-fold</span>.</li>
		<li><span class="timepoint">[3.0-beta3]</span> <span style="color:red">7-15% faster</span>.</li>
		<li><span class="timepoint">[3.0-beta6]</span> <span style="color:red">~16% faster</span></li-- >
		<!-- li><span style="color:red">[??% faster]</span> Cache tree prior.</li>
		<li><span style="color:red">[??% faster]</span> Avoid recomputing alignment matrix.</li>
		<li><span style="color:red">[??% faster]</span> Eliminate alignment index matrices: Faster computation.</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (fixed A).</li>
		<li><span style="color:red">[??% faster]</span> Faster computation when lots of gaps (variable A).</li -->
	      </ul>
	    </li>
	    
	  <li>Alignments
	    <ul>
		<li>Allow analyzing 1-sequence and 2-sequence alignments.</li>
		<li>Include <b>ancestral sequences</b> in sampled alignments.</li>
	    </ul></li>
	  <li>Large Trees
	    <ul>
	      <li>Compute likelihoods for very large trees (<em>likelihood rescaling</em>).</li>
	      <li>New treelength prior: don't prefer huge treelengths for trees with lots of leaves.</li>
	    </ul>
	  </li>
	  <li>Models
	    <ul>
	      <li>New model language that allows setting all parameter values <em>and priors</em>:
		<ul>
		  <li><span class="userinput">--smodel=hky85[kappa=2]</span></li>
		  <li><span class="userinput">--imodel=rs07[log_rate~laplace[-4,0.707]]</span></li>
		</ul>
	      <li>Allow specifying priors on (i) shared branch lengths and (ii) partition-specific scale factors:
		<ul>
		  <li><span class="userinput">--branch-lengths=~iid[num_branches[T],gamma[0.5,div[2,num_branches[T]]]]</span></li>
		  <li><span class="userinput">--scale=1,3:~gamma[0.5,2]</span></li>
		</ul>
	      </li>
	      <li>New models:
		<ul>
		  <li><span class="userinput"><b>mixture</b>[models=List[hky85,jc69]]</span> (rates-across sites mixtures)</li>
		  <li><span class="userinput">hky85+<b>multi_rate</b>[beta[2,3]]</span> (rates-across sites with any distribution)</li>
		  <!-- li>Triplet models + frequency models: <span class="userinput">gtr_sym+x3+mg94</span>)</li -->
		  <li><span class="userinput"><b>let</b>[m=hky85,mixture[models=List[m,m,m+Rates.gamma]]]</span> (user-defined variables)</li>
		</ul>
	      <li>Explicit priors, <em>including default priors</em></li>
	      <!-- li><span class="timepoint">[3.0-beta5]</span> priors for frequencies and GTR.</li --> 
	      <!-- li><span class="timepoint">[3.0-beta5]</span> super-long parameter names fixed.</li -->
	      <li>Codon and Triplet alphabets automatically determined from model.</li>
	      <!-- li><span class="timepoint">[3.0-beta5]</span> Prior on branch-length can reference tree.</li -->
	      <li>Sample initial branch-lengths from prior.</li>
	      <!-- li><span class="timepoint">[3.0-beta6]</span> Branch-length prior now takes a list.</li -->
	      <li>Alternative syntax for linking partitions: <span class="userinput">--smodel 1:hky85 --smodel 2:hky85 <b>--link 1,2</b></span></li>
	    </ul>
	  </li>
	  <li>Summarization tools
	    <ul>
	      <li>Beautify and condense MCMC statistics.</li> 
	      <li>Show 2D &amp; 3D topology convergencs figures (MDS).</li> 
	      <!-- li><span class="timepoint">[3.0-beta2]</span> Don't compute trace plots (too slow, large files).</li --> 
	      <li><span class="timepoint">[3.1]</span> Show priors.</li> 
	      <li><span class="timepoint-new">[3.2]</span> Reorganize HTML report.</li> 
	    </ul>
	  </li>

	  <li>Help
	    <ul>
	      <li>Add diagnostics when loading <b>codon sequences</b>.</li>
	      <li>Help for <em>models</em>/<em>functions</em>/<em>distributions</em>/<em>commands</em> via <b>bali-phy help </b><em>topic</em>.</li>
	      <!-- li>Help levels via <b>bali-phy help </b>simple|advanced|expert.</li -->
	      <li>Give readable information under the <b>--verbose</b> flag.</li>
	      <li><span class="timepoint">[3.1]</span> Unix manual pages for <em>bali-phy</em> and tools</li>
	    </ul>
	    </li>
	    <!-- li>Models
	      <ul>
	      </ul>
	    </li -->


	    <li>Misc
	      <ul>
		<li>Add unit tests.</li>
		<li>Expand likelihood testsuite.</li>
		<li>Improve pre-burnin.</li>
	      </ul>
	    </li>

	    <li>Install
	      <ul>
		<li>New install documentation.</li>
		<li>New homebrew tap for bali-phy.</li>
		<li><span class="timepoint">[3.1]</span> Debian package for bali-phy.</li>
	      </ul>
	    </li>
	  <li>Compile
	    <ul>
	      <li>Autodetect Cairo library.</li>
	      <li><span class="timepoint">[3.1]</span> Use <a href="http://mesonbuild.com">Meson Build</a> to build bali-phy, instead of autotools.</li>
	      <li><span class="timepoint">[3.1]</span> Automatically use system libraries for <em>boost</em>, <em>eigen</em>, and <em>nlohmann::json</em> if available.</li>
	    </ul>
	  </li>
	  
	    <!--
	    <li>Input
	    <ul>
	      <li></li>
	      </ul>
	    </li>
	    -->

	    <li>Changes
	    <ul>
	      <li>Simplify command-line options (<em>some old options have been removed</em>).</li>
	      <li>Rename parameter logs: <b>C1.p  <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> C1.log</b>.</li>
	      <li>Rename script: <b>bp-analyze.pl <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> bp-analyze</em></li>
	      <!-- li><span class="timepoint">[3.0-beta5]</span> Shorter parameter names: <b>INV.submodel.Rates.Gamma.submodel.F.pi.A <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> F:pi[A]</b></li -->
	      <!-- li><span class="timepoint">[3.0-beta2]</span> Change spelling: <b>gamma_inv <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> Rates.gamma+inv</b>.</li -->
	      <!-- li><span class="timepoint">[3.0-beta4]</span> Change spelling: <b>Gamma <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> Rates.Gamma</b>.</li -->
	      <!-- li><span class="timepoint">[3.0-beta4]</span> Change spelling: <b>log-normal <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> Rates.logNormal</b>.</li -->
	      <!-- li><span class="timepoint">[3.0-beta4]</span> Change spelling: <b>meanIndelLengthMinus1 <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> meanIndelLength</b>.</li -->
	      <li><span class="timepoint">[3.1]</span> Change spelling of many models/functions/distributions to lower-case.</li>
	    </ul>
	    </li>
	      
	    <li>Fixes
	      <ul>
		<!-- li><span class="timepoint">[3.0-beta2]</span> Fix compile on XCode 6.</li -->
		<!-- li><span class="timepoint">[3.0-beta5]</span> Fix crash on triplet models like TN+x3.</li -->
		<!-- li><span class="timepoint">[3.0-beta6]</span> Fix order of rate categories for DP model.</li -->
		<!-- li><span class="timepoint">[3.0-beta6]</span> Fix order of omega categories for M3 model.</li -->
		<!-- li><span class="timepoint">[3.0-beta6]</span> Fix very long initial tree.</li -->
		<!-- li><span class="timepoint">[3.0-beta6]</span> Make subsampling (-x number) work again for <em>trees-consensus</em>, etc.</li -->
		<li><span class="timepoint">[3.1]</span> Fix crash in <em>alignment-thin</em>.</li>
		<li><span class="timepoint-new">[3.2]</span> Fix prior on <span class="userinput">alpha</span> in <span class="userinput">Rates.gamma</span>.</li>
		<li><span class="timepoint-new">[3.2]</span> Link all programs with correct libstdc++ (Linux).</li>
		<li><span class="timepoint-new">[3.2]</span> Correctly write alignment for fixed-alignment partitions.</li>
	      </ul>
	    </li>

	    <!-- li>Internals
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
		<li><b>8/22/17</b> Allow -\-help=topic.</li>
		<li><b>8/22/17</b> Expand EM,MM,MMM, and FM.</li>
		<li><b>9/1/17</b> Don't output space before PPs in newicks with PPs on internal nodes.</li>
		<li><b>9/12/17</b> MeanIndelLength instead of meanIndellengthMinus1.</li>
		<li><b>9/28/17</b> Split Decl groups, in preparation for let-floating.</li>
		<li><b>10/03/17</b> Avoid multiple runs starting in same dir.</li>
		<li><b>10/07/17</b> Add pattern compression for fixed alignments.</li>
	[beta4]
		<li><b>10/24/17</b>Change default to 200,000 iterations, improve error message.</li>
		<li><b>10/24/17</b>Autodetect presence of cairo.</li>
		<li><b>10/28/17</b>bp-analyze: Only print cmd-line once if they are all the same.</li>
		<li><b>10/30/17</b>Allow building with cygwin again.</li>
		<li><b>11/07/17</b>Rename bp-analyze.pl to bp-analyze.</li>
		<li><b>11/07/17</b>FIX: don't run MDS if we don't have R.</li>
		<li><b>11/11/17</b>Allow logging lists of key-value pairs.</li>
		<li><b>11/13/17</b>Use "::" to separate path elements.</li>
		<li><b>11/15/17</b>(**)Load function defs from external files.</li>

		<li><b>11/16/17</b>(**)Use List[Pair[String,Double]] for frequencies, and change priors to DirichletOn[].</li>
		<li><b>11/16/17</b>(**)Use List[Pair[String,Double]] for exchangabilities, and change priors to DirichletOn[].</li>
		<li><b>11/16/17</b>(**)Use short parameter names.</li>
		<li><b>11/20/17</b>FIX: complain if smodel groups have different alphabets, and if alphabet="" groups have different alphabets.</li>
		<li><b>11/20/17</b>(**)Add -\-link option.</li>
		<li><b>11/21/17</b>Look for help in external files.</li>
		<li><b>//</b>.</li>
		<li><b>//</b>.</li>
		<li><b>//</b>.</li>
		<li><b>//</b>.</li>
		<li><b>//</b>.</li>
        [beta5]
		<li>TODO ... improve -\-with-include-dir=... to update pkgconfig search path?</li>
		<li>TODO ... compute categories for each letter by default ... </li>
		<li>TODO ... compute probability of positive selection for sites/letters? ...</li>
        [todo]
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
