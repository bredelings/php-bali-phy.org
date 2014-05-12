 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <?php $page='Help'; ?>
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
	    <?php navbar(); ?>
	    <div class="main">

	    <h2><a name="usersguide">User's Guide</a></h2>

	    <h4 style="margin-bottom: 0.5em">Available formats:</h4>
	    <ul class="floatlist">
	      <li><a href="README.html">HTML</a></li>
	      <li><a href="README.xhtml">XHTML</a> (shows math)</li>
	      <li><?php track_link("README.pdf","PDF")?></li>
	    </ul>

	    <h4><a href="README.html">Table of Contents</a></h4>
	    <ol>
	      <li><a href="README.html#intro">Introduction</a></li>
	      <li><a href="README.html#installation">Installation</a></li>
	      <li><a href="README.html#compilation">Compiling BAli-Phy</a></li>
	      <li><a href="README.html#running">Running the program</a></li>
	      <li><a href="README.html#input">Input</a></li>
	      <li><a href="README.html#output">Output</a></li>
	      <li><a href="README.html#subst_models">Substitution models</a></li>
	      <li><a href="README.html#indel_models">Insertion/deletion models</a></li>
	      <li><a href="README.html#alignment_constraints">Alignment constaintsInsertion/deletion models</a></li>
	      <li><a href="README.html#mixing_and_convergence">Convergence and Mixing: Is it done yet?</a></li>
	      <li><a href="README.html#auxiliary_tools">Auxiliary tools</a></li>
	      <li><a href="README.html#FAQ">Frequently Asked Questions (FAQ)</a></li>
	    </ol>
		      
	    <h2><a name="usersguide">Tutorial</a></h2>

	    <h4 style="margin-bottom: 0.5em">Available formats:</h4>
	    <ul class="floatlist">
	      <li><a href="Tutorial2.html">HTML</a></li>
	      <li><a href="Tutorial2.xhtml">XHTML</a> (shows math)</li>
	      <li><?php track_link("Tutorial2.pdf","PDF")?></li>
	    </ul>

	    </div>
	  </td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
