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

	  <p>See <a href="https://github.com/bredelings/BAli-Phy/blob/master/NEWS">NEWS</a> file for more details, and for older changes.</p>

	  <div class="release_dates"><b style="font-size:125%">Version 3 (stable):</b>
          <ul>
	    <li><b>[3.0]</b> - Feb-12-2018</li>
	    <li><b>[3.1]</b> - May-02-2018</li>
	    <li><b>[3.2]</b> - Jun-25-2018</li>
	    <li><b>[3.3]</b> - Aug-06-2018</li>
	    <li><b>[3.4]</b> - Dec-13-2018</li>
	    <li><b>[3.4.1]</b> - Jan-18-2019</li>
	    <li><b>[3.5.0]</b> - Mar-02-2020</li>
	    <li><b>[3.6.0]</b> - Feb-05-2021</li>
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
	      </ul>
	    </li>
	    
	    <li>Alignments
	      <ul>
		<li>Allow analyzing 1-sequence and 2-sequence alignments.</li>
		<li><span class="timepoint">[3.5]</span> Automatically <b>reconstruct ancestors</b> for summary alignment.</li>
	      </ul>
	    </li>
	    <li>Large Trees
	    <ul>
	      <li>Compute likelihoods for very large trees (<em>likelihood rescaling</em>).</li>
	      <li>New treelength prior: don't prefer huge treelengths for trees with lots of leaves.</li>
	    </ul>
	    </li>
	    <li>General
	      <ul>
		<li>Add unit tests and likelihood testsuite.</li>
		<li>Allow selecting character sets from a file: <span class="userinput"><em>sequences</em>.fasta<b>:100-240,300-900</b></span></li>
		<li>Allow recovering from initial -Infinity log-likelihood in MCMC.</li>
		<li>Install package manager <b>bali-phy-pkg</b>.</li>
		<!-- li>Make <a href="https://github.com/bredelings/BayesianEstimatorSelfing">BES</a> package work again.</li -->
	      </ul>
	  <li>Models
	    <ul>
	      <li class="heading2">Priors:
		<ul>
		  <li>Explicit priors, <em>including default priors</em></li>
		  <li>Sample initial branch-lengths from prior.</li>
		  <li><em>substitution model</em>: <span class="userinput">-S 'hky85[kappa=2]'</span></li>
		  <li><em>insertion/deletion model</em>: <span class="userinput">-I 'rs07[log_rate~laplace[-4,0.707]]'</span></li>
		  <li><em>branch lengths</em>: <span class="userinput">-B '~iid[num_branches[T],gamma[0.5,div[2,num_branches[T]]]]'</span></li>
		  <li><em>partition-specific scale factors</em>: <span class="userinput">-R '1,3:~gamma[0.5,2]'</span></li>
		</ul>
	      </li>
	      <li><span class="heading2">New syntax</span>:
		<ul>
		  <li><span class="userinput"><b>let</b>[m=hky85,mixture[List[m,m,m+Rates.gamma]]]</span> (user-defined variables)</li>
		  <li><span class="userinput"><b>function</b>[w,gy94[omega=w]]</span> (functions)</li>
		</ul>
	      </li>
	      <li><span class="heading2">New models</span>:
		<ul>
		  <li><span class="userinput"><b>mixture</b>[List[hky85,jc69]]</span> (rates-across sites mixtures)</li>
		  <li><span class="userinput">hky85+<b>multi_rate</b>[beta[2,3]]</span> (rates-across sites with any distribution)</li>
		  <li><span class="userinput">+<b>fe</b></span> for equal frequencies.</li>
		  <li><span class="timepoint">[3.5]</span> <span class="userinput">+<b>mut_sel</b></span> or <span class="userinput">+<b>mut_sel_aa</b></span> to add selection on a model.</li>
		</ul>
	      <li><span class="heading2">RNA stem (16-state) models</span>
		<ul>
		  <li><b>RNA models</b> for <em>fixed</em> alignments. (Preliminary, because you have to pair the letters manually.)</li>
		  <li>RNA stem models:
		    <span class="userinput"><b>RNA.16a</b></span>,
		    <span class="userinput">gtr_sym+<b>x2_sym</b>+f</span>,
		    <span class="userinput">gtr+<b>x2</b>+mut_sel</span>
		  </li>
		</ul>
	      <li><span class="heading2">Codon and triplet models</span>
		<ul>
		  <li>Improved codon models:
		    <span class="userinput">gy94</span>,
		    <span class="userinput">mg94</span>,
		    <span class="userinput">f1x4</span>,
		    <span class="userinput">f3x4</span>,
		    <span class="userinput">gy94_ext</span>,
		    <span class="userinput">mg94_ext</span>,
		    <span class="userinput">x3</span>,
		    <span class="userinput">dNdS</span>,
		    etc.
		 </li>
		  <li>dNdS mixtures with mg94 and fMutSel: <span class="userinput">m3[function[w,fMutSel[omega=w]]]</span></li>
		  <li><span class="userinput">gtr+<b>x3</b>+<b>dNdS</b>+<b>mut_sel</b></span> (syntax for building up codon models piecewise)</li>
		</ul>
              <li><span class="heading2">Heterotachy/Covarion models</span>
                <ul>
		  <li><span class="timepoint">[3.5]</span> Tuffley-Steel (1998) ON/OFF model.</li>
		  <li><span class="timepoint">[3.5]</span> Huelsenbeck (2002) ON/OFF + Gamma rates-across-sites model.</li>
		  <li><span class="timepoint">[3.5]</span> Galtier (2001) Gamma rate-switching model.</li>
		  <li><span class="timepoint">[3.5]</span> Wang et al (2007) ON/OFF + Gamma rate-switching model.</li>
                </ul>
              </li>
	      </ul>
	      </li>
	  <li>Summarization tools
	    <ul>
	      <li>Show 2D &amp; 3D topology convergencs figures (MDS).</li> 
	      <li>Reorganize logged statistics.</li>
	      <li>Compute alignment summaries over all runs, not just the first one.</li>
              <li><span class="timepoint">[3.5]</span> Rewrite <b>bp-analyze</b> in python.</li>
	    </ul>
	  </li>

	  <li>Help
	    <ul>
	      <li>Help for <em>models</em>, <em>functions</em>, <em>distributions</em>, and <em>commands</em> via <b>bali-phy help </b><em>topic</em>.</li>
	      <li>Rewrite documentation for substitution models and insertion/deletion models.</li>
	    </ul>
	    </li>

	  <li>Tools
	    <ul>
	      <li><b>cut-range:</b> allow reading alignments from multiple files.</li>
	      <li><b>alignment-distances:</b> new tool, add accuracy and recal metrics</li>
	      <li><b>tree-tool:</b> scales trees, prunes trees, computes diameter, etc.</li>
	      <li><b>alignment-thin:</b> clean up options and man pages</li>
	      <li><b>bali-subsample:</b> rename from <span class="userinput">subsample</span> to avoid conflict with phylobayes.</li>
	      <li><span class="timepoint">[3.5]</span> <b>extract-ancestors:</b> Extract and name ancestral sequences.</li>
	      <li><span class="timepoint">[3.5]</span> <b>summarize-ancestors:</b> Construct summary alignment with ancestral sequences.</li>
	      <li><span class="timepoint">[3.5]</span> <b>tree-tool:</b> add option to remove internal node names.</li>
              <li><span class="timepoint">[3.5]</span> Speed up tree drawing in <b>bp-analyze</b>.</li>
	    </ul>
	  </li>


	    <li>Install
	      <ul>
		<li>Transition homebrew package to <a href="https://github.com/brewsci/homebrew-bio">brewsci/bio</a>.</li>
	      </ul>
	    </li>
	      <!-- li>Compile
	    <ul>
	      <li>Autodetect Cairo library.</li>
	      <li><span class="timepoint">[3.1]</span> Use <a href="http://mesonbuild.com">Meson Build</a> to build bali-phy, instead of autotools.</li>
	      <li><span class="timepoint">[3.1]</span> Automatically use system libraries for <em>boost</em>, <em>eigen</em>, and <em>nlohmann::json</em> if available.</li>
	    </ul>
	  </li -->
	  
	    <!--
	    <li>Input
	    <ul>
	      <li></li>
	      </ul>
	    </li>
	    -->

	    <!-- li>Changes
	    <ul>
	      <li>Simplify command-line options (<em>some old options have been removed</em>).</li>
	      <li>Rename parameter logs: <b>C1.p  <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> C1.log</b>.</li>
	      <li>Rename script: <b>bp-analyze.pl <span style="color:rgb(0,220,0)">&nbsp;&rarr;&nbsp;</span> bp-analyze</em></li>
	      <li><span class="timepoint">[3.1]</span> Change spelling of many models/functions/distributions to lower-case.</li>
	    </ul>
	    </li -->
	      
	    <li>Fixes
	      <ul>
		<li><span class="timepoint">[3.3]</span> Fix incorrect LG model.</li>
		<li><span class="timepoint">[3.3]</span> Fix run file for f81 model.</li>
		<li><span class="timepoint">[3.3]</span> bp-analyze: parse output files from 3.0-betal.</li>
		<li><span class="timepoint">[3.4]</span> Don't crash if the scale is set to a constant (e.g. <span class="userinput">--scale 1</span>)</li>
		<li><span class="timepoint">[3.4]</span> Don't replace ambiguous nucleotides (W,N,etc.) in observed sequences unless given <span class="userinput">--set infer-ambiguous-observed=true</span></li>
		<li><span class="timepoint">[3.4]</span> Properly handle Newick labels with quotes or underscore.</li>
		<li><span class="timepoint">[3.4.1]</span> Fix for sequence names with underscore.</li>
		<li><span class="timepoint">[3.4.1]</span> Fix windows binaries.</li>
		<li><span class="timepoint">[3.5]</span> Stabilize matrix exponential.</li>
		<li><span class="timepoint">[3.5]</span> Fix dirichlet process prior.</li>
		<li><span class="timepoint">[3.5]</span> Don't print out Newick trees rooted at a leaf.</li>
                <li><span class="timepoint">[3.5]</span> Compute posterior probabilities for MAP and greedy consensus.</li>
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
