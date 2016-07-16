<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Release 2.1"; ?>
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

	  <h3><a name="2.1.1">Version 2.1.1 (02/03/11)</a></h3>

	  <p>Version 2.1.1 fixes bugs and is easier to use.</p>

	  <ul class="changelog">
	    <li>Bug fixes
	      <ul>
	        <li>Fixed: 2.1.0 would sometimes crash randomly during long runs.</li>
		<li>Fixed: Windows binaries used the same random seed every time.</li>
		<li>Fixed: Broken M0 and M7 model priors.</li>
	      </ul>
	    </li>
	    <li>Usability
 	      <ul>
	        <li>Read files in old macintosh format on UNIX and Windows.</li>
	      </ul>
	    </li>
	    <li>Build
	      <ul>
	         <li>Fix build from source with system BOOST libraries.</li>
              </ul>
	    </li>
	  </ul>

	  <h3><a name="2.1.0">Version 2.1.0 (07/07/10)</a></h3>

	  <p>Version 2.1.0 adds some major new features:</p>

	  <ul class="changelog">
	    <li>Major new features.
	    <ol>
	      <li>Allow multiple separate genes (i.e. data partitions).
  	      <ul>
	        <li>The alignment of each gene may be either fixed or variable.</li>
	      </ul>
	      </li>
	      <li>Improve mixing when the tree has many tips (for MCMC)</li>
	      <li>Improve initial search when the tree has many tips (for estimation)</li>
	      <li>Use much less RAM.</li>
	    </ol>
	    </li>

	    <li>MCMC Speed and reliability
	    <ul>
	      <li>Use slice sampling for continous parameters -- automatically detect step-size.</li>
	      <li>Allow SPR moves to intelligently propose attachment sites.</li>
	      <li>Improve CPU efficiency when the alignment is constrained.</li>
	      <li>Spend more time resampling topology and alignment, versus substitution parameters.</li>
	    </ul>
	    </li>

	    <li>Models
	    <ul>
	      <li>Default to more conservative gamma prior for branch
	      lengths.</li>
	      <li>New substitution models: C10 and C20.</li>
	    </ul>
	    </li>

	    <li>Usability
	    <ul>
	      <li>Stop requiring --data-dir option: the information is now internal.</li>
	      <li>Handle amino-acid code <b>J</b>.</li>
	      <li>Warn on illegal characters.</li>
	      <li>New analysis script <em>bp-analyze.pl</em> replaces GNUmakefile.</li>
	    </ul>
	    </li>

	    <li>Summarization tools
	      <ul>
		<li>Report the maximum posterior decoding alignment.</li>
		<li>Simplify computing the consensus tree and other
		summaries.</li>
		<li>Check mixing and effective sample sizes by
		comparing multiple runs.</li>
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
