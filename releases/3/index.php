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

	  <p>See <a href="https://github.com/bredelings/BAli-Phy/blob/master/NEWS">NEWS</a> file for detailed change log.</p>

	  <div class="release_dates"><b style="font-size:125%">Version 3 (stable):</b>
          <ul>
	    <li><b>[3.0]</b> - Feb-12-2018</li>
	    <li><b>[3.1]</b> - May-02-2018</li>
	    <li><b>[3.2]</b> - Jun-25-2018</li>
	    <li><b>[3.3]</b> - Aug-06-2018</li>
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
	      <li class="heading2">Priors:
		<ul>
		  <li>Explicit priors, <em>including default priors</em></li>
		  <li>Sample initial branch-lengths from prior.</li>
		  <li><em>substitution model</em>: <span class="userinput">-S 'hky85[kappa=2]'</span></li>
		  <li><em>insertion/deletion model</em>: <span class="userinput">-I 'rs07[log_rate~laplace[-4,0.707]]'</span></li>
		  <li><em>branch lengths</em>: <span class="userinput">-B '~iid[num_branches[T],gamma[0.5,div[2,num_branches[T]]]]'</span></li>
		  <li><em>partition-specific scale factors</em>: <span class="userinput">-R 'scale=1,3:~gamma[0.5,2]'</span></li>
		</ul>
	      </li>
	      <li><span class="heading2">New syntax</span>:
		<ul>
		  <li><span class="userinput"><b>let</b>[m=hky85,mixture[models=List[m,m,m+Rates.gamma]]]</span> (user-defined variables)</li>
		  <li><span class="timepoint-new">[3.3]</span> <span class="userinput"><b>function</b>[w,gy94[omega=w]]</span> (functions)</li>
		</ul>
	      </li>
	      <li><span class="heading2">New models</span>:
		<ul>
		  <li><span class="userinput"><b>mixture</b>[models=List[hky85,jc69]]</span> (rates-across sites mixtures)</li>
		  <li><span class="userinput">hky85+<b>multi_rate</b>[beta[2,3]]</span> (rates-across sites with any distribution)</li>
		  <li><span class="timepoint-new">[3.3]</span> <span class="userinput">+<b>fe</b></span> for equal frequencies.</li>
		</ul>
	      <li><span class="heading2">Codon and triplet models</span>
		<ul>
		  <li>Codon and Triplet alphabets automatically determined from model.</li>
		  <li><span class="timepoint-new">[3.3]</span> Improved codon models:
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
		  <li><span class="timepoint-new">[3.3]</span> dNdS mixtures with mg94 and fMutSel: <span class="userinput">m3[function[w,fMutSel[omega=w]]]</span></li>
		  <li><span class="timepoint-new">[3.3]</span> <span class="userinput">gtr+<b>x3</b>+<b>dNdS</b></span> (syntax for building up codon models piecewise)</li>
		</ul>
	      <li>Alternative syntax for linking partitions: <span class="userinput">--smodel 1:hky85 --smodel 2:hky85 <b>--link 1,2</b></span></li>
	    </ul>
	  </li>
	  <li>Summarization tools
	    <ul>
	      <li>Beautify and condense MCMC statistics.</li> 
	      <li>Show 2D &amp; 3D topology convergencs figures (MDS).</li> 
	      <li><span class="timepoint">[3.1]</span> Show priors.</li> 
	      <li><span class="timepoint">[3.2]</span> Reorganize HTML report.</li> 
	    </ul>
	  </li>

	  <li>Help
	    <ul>
	      <li>Add diagnostics when loading <b>codon sequences</b>.</li>
	      <li>Help for <em>models</em>/<em>functions</em>/<em>distributions</em>/<em>commands</em> via <b>bali-phy help </b><em>topic</em>.</li>
	      <li>Give readable information under the <b>--verbose</b> flag.</li>
	      <li><span class="timepoint">[3.1]</span> Unix manual pages for <em>bali-phy</em> and tools</li>
	      <li><span class="timepoint-new">[3.3]</span> Rewrite documentation for substitution models and insertion/deletion models.</li>
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
	      <li><span class="timepoint">[3.1]</span> Change spelling of many models/functions/distributions to lower-case.</li>
	    </ul>
	    </li>
	      
	    <li>Fixes
	      <ul>
		<li><span class="timepoint">[3.1]</span> Fix crash in <em>alignment-thin</em>.</li>
		<li><span class="timepoint">[3.2]</span> Fix prior on <span class="userinput">alpha</span> in <span class="userinput">Rates.gamma</span>.</li>
		<li><span class="timepoint">[3.2]</span> Link all programs with correct libstdc++ (Linux).</li>
		<li><span class="timepoint">[3.2]</span> Correctly write alignment for fixed-alignment partitions.</li>
		<li><span class="timepoint-new">[3.3]</span> Fix incorrect LG model.</li>
		<li><span class="timepoint-new">[3.3]</span> Fix run file for f81 model.</li>
		<li><span class="timepoint-new">[3.3]</span> bp-analyze: parse output files from 3.0-betal.</li>
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
