 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <?php $top='.'; ?>
  <?php $page='Documentation'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <style type="text/css">
    ul.floatlist {float: left; padding-top: 0; margin-top: 0; }
    ul.floatlist li {float: left; padding-right: 4em; }
h1,h2,h3,h4 {clear: both;}
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

	    <h2><a name="usersguide">User's Guide for version 3</a></h2>

	    <h4 style="margin-bottom: 0.5em">Available formats:</h4>
	    <ul class="floatlist">
	      <li><a href="README.xhtml">HTML</a></li>
	      <li><?php track_link("README.pdf","PDF")?></li>
	    </ul>

	    <h4><a href="README.html">Table of Contents</a></h4>
	    <ol>
	      <li><a href="README.html#intro">Introduction</a></li>
	      <li><a href="README.html#installation">Installation</a></li>
	      <li><a href="README.html#running">Running the program</a></li>
	      <li><a href="README.html#input">Input</a></li>
	      <li><a href="README.html#output">Output</a></li>
	      <li><a href="README.html#subst_models">Substitution models</a></li>
	      <li><a href="README.html#indel_models">Insertion/deletion models</a></li>
	      <li><a href="README.html#functions">Models and Priors</a></li>
	      <li><a href="README.html#idp64">Partitioned data sets</a></li>
	      <li><a href="README.html#ancestral_sequence_reconstruction">Ancestral sequence reconstruction</a></li>
	      <li><a href="README.html#mixing_and_convergence">Convergence and Mixing: Is it done yet?</a></li>
	      <li><a href="README.html#alignment-utilities">Alignment utilities</a></li>
	      <li><a href="README.html#tree-utilities">Tree utilities</a></li>
	      <li><a href="README.html#compilation">Compiling BAli-Phy</a></li>
	      <li><a href="README.html#FAQ">Frequently Asked Questions (FAQ)</a></li>
	    </ol>


	    <div style="padding-top:1.5em">
	      <hr/>
	      <h2><a name="usersguide-v4beta">User's guide for 4.0-beta versions.</a></h2>

	      <p><b>4.0-beta3</b>:
		[<a href="doc/4.0-beta3/README.xhtml">HTML</a>]&nbsp;&nbsp;
		[<a href="doc/4.0-beta3/README.pdf">PDF</a>]</p>
	    </div>

	    <div style="padding-top:1.5em">
	      <hr/>
	      <h2><a name="tutorialv3">Tutorial for version 3</a></h2>

	      <h4 style="margin-bottom: 0.5em">Available formats:</h4>

	      <ul class="floatlist">
		<li><a href="Tutorial4.html">HTML</a></li>
		<li><a href="Tutorial4.xhtml">XHTML</a> (shows math)</li>
		<li><?php track_link("Tutorial4.pdf","PDF")?></li>
	      </ul>
	    </div>

	    <!-- the float:left method of getting all the <li> items on the same line with bullets means that they don't count for spacing :-( -->

            <div style="padding-top:3.5em">
	      <hr/>
	      <h2><a name="manpages">Manual pages</a></h2>
	      <ul>
		<li><a href="man/bali-phy.html">bali-phy</a></li>
		<li><a href="man/bp-analyze.html">bp-analyze</a></li>
		<li><a href="man/bali-phy-pkg.html">bali-phy-pkg</a></li>
	      </ul>

	      <h2>Manual pages for tools</h2>

	      <ul>
		<li><a href="man/alignment-cat.html">alignment-cat</a></li>
		<li><a href="man/alignment-chop-internal.html">alignment-chop-internal</a></li>
		<li><a href="man/alignment-consensus.html">alignment-consensus</a></li>
		<li><a href="man/alignment-distances.html">alignment-distances</a></li>
		<li><a href="man/alignment-draw.html">alignment-draw</a></li>
		<li><a href="man/alignment-find.html">alignment-find</a></li>
		<li><a href="man/alignment-gild.html">alignment-gild</a></li>
		<li><a href="man/alignment-indices.html">alignment-indices</a></li>
		<li><a href="man/alignment-info.html">alignment-info</a></li>
		<li><a href="man/alignment-max.html">alignment-max</a></li>
		<li><a href="man/alignments-diff.html">alignments-diff</a></li>
		<li><a href="man/alignment-thin.html">alignment-thin</a></li>
		<li><a href="man/alignment-translate.html">alignment-translate</a></li>
		<li><a href="man/cut-range.html">cut-range</a></li>
		<li><a href="man/draw-tree.html">draw-tree</a></li>
		<li><a href="man/mctree-mean-lengths.html">mctree-mean-lengths</a></li>
		<li><a href="man/model_P.html">model_P</a></li>
		<li><a href="man/pickout.html">pickout</a></li>
		<li><a href="man/statreport.html">statreport</a></li>
		<li><a href="man/stats-cat.html">stats-cat</a></li>
		<li><a href="man/bali-subsample.html">bali-subsample</a></li>
		<li><a href="man/tree-mean-lengths.html">tree-mean-lengths</a></li>
		<li><a href="man/tree-partitions.html">tree-partitions</a></li>
		<li><a href="man/trees-bootstrap.html">trees-bootstrap</a></li>
		<li><a href="man/trees-consensus.html">trees-consensus</a></li>
		<li><a href="man/trees-distances.html">trees-distances</a></li>
		<li><a href="man/trees-to-SRQ.html">trees-to-SRQ</a></li>
		<li><a href="man/tree-tool.html">tree-tool</a></li>
	      </ul>

	      <h2>Manual pages for extra tools</h2>
	      <ul>
		<li><a href="man/stats-merge.html">stats-merge</a></li>
		<li><a href="man/stats-cat.html">stats-cat</a></li>
		<!-- li><a href="man/alignment-identity.html">alignment-identity</a></li -->
		<!-- li><a href="man/alignment-median.html">alignment-median</a></li -->
		<!-- li><a href="man/alignment-compare.html">alignment-compare</a></li -->
		<!-- li><a href="man/joint-indels.html">joint-indels</a></li -->
		<!-- li><a href="man/joint-parsimony.html">joint-parsimony</a></li -->
		<li><a href="man/alignment-smc.html">alignment-smc</a></li>
		<li><a href="man/alignment-convert.html">alignment-convert</a></li>
		<!-- li><a href="man/alignment-find-conserved.html">alignment-find-conserved</a></li -->
		<li><a href="man/partitions-supported.html">partitions-supported</a></li>
		<li><a href="man/draw-graph.html">draw-graph</a></li>
		<li><a href="man/trees-pair-distances.html">trees-pair-distances</a></li>
		<li><a href="man/tree-reroot.html">tree-reroot</a></li>
		<li><a href="man/path-graph.html">path-graph</a></li>

	      </ul>
	    </div>

	    <div style="padding-top:1.5em">
	      <hr/>
	      <h2><a name="developersguide">Developer's Guide</a></h2>

	      <h4 style="margin-bottom: 0.5em">Available formats:</h4>

	      <ul class="floatlist">
		<li><a href="developer.html">HTML</a></li>
	      </ul>
	    </div>

	    </div>
	  </td>
      </tr>
    </table>

    <?php baliphy_footer(); ?>
  </body>
</html>
