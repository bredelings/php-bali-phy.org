<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../../"; ?>
  <?php $page="Release 2.0"; ?>
  <?php require("{$top}/lib/phplib.inc"); ?>
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

	  <h3><a name="2.0.2">Version 2.0.2 (02/03/09)</a></h3>

	  <p>Version 2.0.2 fixes some bugs and updates the auxiliary tools to be more
	  similar to the development version.  It also has some
	  speedups when the alignment is partially fixed (constrained).</p>

	  <ul class="changelog">
	    <li>General
	    <ul>
	      <li>Make alignment constraints work again.</li>
	      <li>Represent stop codons as "*" instead of "!".</li>
	    </ul>
	    </li>

	    <li>Executables
	    <ul>
	      <li>Compile windows executables with an up-to-date compiler</li>
	    </ul>
	    </li>

	    <li>Don't crash...
	    <ul>
	      <li>Don't crash in MCMC when using the gamma distribution. (really)</li>
	    </ul>
	    </li>

	    <li>Useability
	    <ul>
	      <li>Capitalize model names WAG, PAM, JTT, etc.</li>
	      <li>Improve checks for illegal characters in sequence names.</li>
	      <li>Improve checks for illegal characters in alignment.</li>
	      <li>Generate correct colors for DNA AU plots</li>
	      <li>In case of errors in the post hoc analysis, give useful error messages.</li>
	    </ul>
	  </li>

	  <li>Experimental...
	  <ul>
	    <li>alignment-align: align two alignments to compare them.</li>
	    <li>alignment-max: generate a representative alignment.</li>

	  </ul>
	  </li>
	  </ul>

	  <h3><a name="2.0.1">Version 2.0.1 (12/11/07)</a></h3>

	  <p>Version 2.0.1 fixes several bugs.  In order to ensure stability, no major features were added in this release.</p>

	  <p>This release fixes a bug that affected results in
	  default gap model, and so we recommend that all users
	  upgrade to this release.  This bug previously resulted in
	  under-estimates of the mean gap length. </p>

	  <ul class="changelog">
	    <li>Correctness
	    <ul>
	      <li style="color:red">Fix sampling of the mean gap length (epsilon) under the (default) RS07 model.</li>
	    </ul></li>

	    <li>Executables
	    <ul>
	      <li>Make Macintosh executables run  correctly (static linkage)</li>
	    </ul>
	    </li>

	    <li>Don't crash...
	    <ul>
	      <li>Don't crash in MCMC when changing branch lengths.</li>
	      <li>Don't crash in MCMC when using the gamma distribution.</li>
	      <li>Don't crash on --show-only.</li>
	      <li>Don't crash analyzing collection of FastA alignments.</li>
	    </ul>
	    </li>
	      
	    <li>Usability
	    <ul>
	      <li>Don't quit reading a FastA file on blank lines.</li>
	      <li>Generate better consensus alignment.</li>
	      <li>[configure] Correctly check for GSL version 1.8 of higher.</li>
	      <li>[configure] Don't blame GSL for bad compiler flags for cpu architecture.</li>
	      <!-- li>Documentation update: how to set PATH.</li>
	      <li>Documentation update: running the post-hoc analysis
	      under csh.</li -->
	    </ul>
	    </li>


	  </ul>

	  <h3><a name="2.0.0">Version 2.0.0 (08/10/07)</a></h3>

	  <p>In version 2.0.0 I have added a few new features and fixed many bugs.  I have made <strong>bali-phy</strong> much simpler and easier to use.  Several new features and improvements are listed below:</p>

	  <ul class="changelog">
	    <li>Variables
	    <ul>
	      <li style="color:red">Use <em>Tracer</em> to visualize MCMC runs.</li>
	      <li>Unified handling of variables including frequencies, mu (branch length mean), etc.</li>
	      <li>Variables can all be monitored with Tracer, and can be fixed.</li>
	    </ul>
	    </li>
	    <li>Data
	    <ul>
	      <li style="color:red">Use information in ambiguous letters (below).</li>
	      <li>Handle {R, Y, W, S} in codon alphabets.</li>
	      <li>Handle {B, Z} in amino acid alphabets.</li>
	      <li>Allow non-standard genetic codes.</li>
	    </ul>
	    </li>
	    <li>New Substitution Models
	    <ul>
	      <li style="color:red">GTR  (nucleotides)</li>
	      <li>HKYx3 / TNx3 / GTRx3 (triplets)</li>
	      <li>rates ~ log-normal[n]</li>
	    </ul>
	    </li>
	    <li>MCMC improvements
	    <ul>
	      <li>Topology constraints.</li>
	      <li>Fix the alignment along a branch.</li>
	      <li>Improve proposals: use Cauchy and safe-Dirichlet proposals.</li>
	      <li>Tunable proposals: new parameters for tuning the size of jumps.</li>
	      <li>Smarter tree/alignment SPR proposals.</li>
	      </ul>
	    </li>
	    <li>Alignment Uncertainty (Au) Plots
	    <ul>
	      <li>Color by certainty (Rainbow) or by certainty+type (AA+fade).</li>
	      <li>Prettier/cleaner HTML output.</li>
	    </ul>
	    </li>
	    <li>Easier to compile/install
	    <ul>
	      <li style="color:red">Use autoconf for compilation.</li>
	      <li>Don't require external BOOST library.</li>
	      <li>Expanded description in <em>User's Guide</em>.</li>
	    </ul>
	    </li>
	    <li>Easier to use
	    <ul>
	      <li style="color:red">Windows version much improved.</li>
	      <li>Read configuration file <em>~/.bali-phy</em></li>
	      <li>Give helpful messages when errors occur.</li>
	      <li>Expanded <em>User's Guide</em>.</li>
	      <li>[workstations] Don't die when the user logs out.</li>
	      <li>[workstations] Don't die after 20 minutes when (soft) CPU limit expires.</li>
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
