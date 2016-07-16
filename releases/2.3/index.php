<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Release 2.3 *"; ?>
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

	  <div class="release_dates"><b style="font-size:125%">Version 2.3:</b>
          <ul>
	    <li><b>[2.3.0]</b> - 04-29-2014</li>
	    <li><b>[2.3.1]</b> - 04-30-2014</li>
	    <li><b>[2.3.2]</b> - 05-08-2014</li>
	    <li><b>[2.3.3]</b> - 05-11-2014</li>
	    <li><b>[2.3.4]</b> - 05-24-2014</li>
	    <li><b>[2.3.5]</b> - 09-09-2014</li>
	    <li><b>[2.3.6]</b> - 03-26-2015</li>
            <li><b>[2.3.7]</b> - 06-15-2015</li>
	    <li><b>[2.3.8]</b> - 01-30-2016</li>
	  </ul>
	  </div>

	  <ul class="changelog">
	    <li>Speed
	      <ul>
		<li><span style="color:red">[0-100% faster]</span> Rewrite new model framework.</li>
		<li><b>[2.3.2]</b> - Resample letter frequencies more, but not too much.</li>
		<li><b>[2.3.3]</b> <span style="color:red">[30% faster]</span> Don't recalculate likelihoods unless necessary.</li>
                <li><b>[2.3.4]</b> <span style="color:red">[0-25% faster]</span> Work with large trees more efficiently.</li>
		<li><b>[2.3.4]</b> <span style="color:red">[0-100% faster]</span> Compute likelihoods on ambiguous sequences better.</li>
		<li><b>[2.3.6]</b> <span style="color:red">[0-50% faster]</span> Speed improvements for graphical models.</li>
		<li><b>[2.3.8]</b> <span style="color:red">[~10% faster]</span> More efficient object representation.</li>
	      </ul>
	    </li>

	    <li>Models
	      <ul>
		<li><b>[2.3.5] - Enable <a href="models.php">generic models written as Haskell</a>.</b></li>
		<li><b>[2.3.3]</b> - Fix and enable M1a, M2a, M2a_Test, M7, M8, M8a, M8a_Test.</li>
		<li><b>[2.3.5]</b> - Fix crashes with gamma and log-normal rate variation</li>
		<li><b>[2.3.5]</b> - Fix parsing of frequency models like "+F" in LG+F+gamma_inv</li>
		<li><b>[2.3.6]</b> - Add M3 and M3_Test.</li>
		  <!-- Oct 16 Build bali-phy.exe before builtins. Otherwise the import lib isn't defined. -->
		  <!-- Oct 16 Fix mismatched new[]/delete -->
		  <!-- Nov 1  Don't crash if there is no argument to frequency model. -->
		  <!-- Nov 18 Add a \-\-mode function to statreport -->
		  <!-- Mar 18 Also search in %~/.local/share/bali-phy/ for plugins -->
		  <!-- Mar 18 Switch to a single plugins path -->
		  <!-- Mar 18 Move selfing stuff out of PopGen.hs. -->
  		  <!-- Mar 20 Merge \-\-show-only and \-\-show-graph into \-\-test. -->
		  <!-- Mar 23 Look for packages in .local/share/bali-phy/packages/ -->
		  <!-- Mar 25 Add smodels M3, M3_Test, and dp_omega -->
		  <!-- Mar 26 Fix bug printing lambda expressions (use after free) -->
		  <!-- Mar 26 Fix bug checking for non-existant bounds on Heat.Beta -->
		  <!-- Mar 26 Don't try to add a slice more on *.M3.omega* \-\- now thats a list! -->
		  <!-- Mar 26 Default to HPD credible intervals for statreport -->
	      </ul>
	    </li>

	    <li>Internals
	      <ul>
		<li>Rewrite alignment MCMC</li>
	      </ul>
	    </li>

	    <li>Input
	      <ul>
		<li><b>[2.3.4]</b> Handle ambiguous nucleotides K, B, D, M, H, and V in nucleotide and codon alphabets.</li>
	      </ul>
	    </li>

	    <li>Summarization tools
	      <ul>
		<li><em>bp-analyze.pl</em> - Generate prettier HTML reports.</li>
		<li><em>bp-analyze.pl</em> - Log all sub-commands.</li>
		<li><em>bp-analyze.pl</em> - Handle /cygdrive/ on cygwin.</li>
		<li><b>[2.3.2]</b> <em>bp-analyze.pl</em> - Correctly handle not having R.</li>
		<li><b>[2.3.2]</b> - Update alignment diffs to be more useful.</li>
		<li><b>[2.3.6]</b> <em>statreport</em> - Allow reporting posterior mode.</li>
		<li><b>[2.3.6]</b> <em>statreport</em> - Report HPD credible intervals.</li>
	      </ul>
	    </li>

	    <li>Changes
	      <ul>
		<li>Replace 'meanIndelLengthminusOne' with 'meanIndelLength'</li>
		<li><b>[2.3.6]</b> - Change <em>--show-only</em> option to <em>--test</em>.</li>
	      </ul>
	    </li>
	      
	    <li>Fixes
	      <ul>
		<li><b>[2.3.8]</b> Stop crashing on <em>gamma[n]</em> models.</li>
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
