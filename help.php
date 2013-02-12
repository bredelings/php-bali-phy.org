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
h3 {clear: both;}
h4 {clear: both;}
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
	      <li><a href="README.html#models">Models</a></li>
	      <li><a href="README.html#mixing_and_convergence">Convergence and Mixing: Is it done yet?</a></li>
	      <li><a href="README.html#tuning_the_markov_chain">Tuning the Markov Chain</a></li>
	      <li><a href="README.html#auxiliary_tools">Auxiliary tools</a></li>
	      <li><a href="README.html#FAQ">Frequently Asked Questions (FAQ)</a></li>
	    </ol>
		      
            <h2><a name="lists">Mailing Lists</a></h2>
            <h3>bali-phy-announce</h3>
            <p><a href="http://groups.google.com/group/bali-phy-announce/">bali-phy-announce</a> is a low-volume mailing list for announcements of new BAli-Phy versions.  Subscribe if you want to be notified when a new version is released.</p>
            <ul class="floatlist">
              <li><a href="http://groups.google.com/group/bali-phy-announce/about">Info</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/subscribe">Join</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/post">Post</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/topics">Past&nbsp;Announcements</a></li>
            </ul>


            <h3>bali-phy-users@googlegroups.com</h3>
            <p><a href="http://groups.google.com/group/bali-phy-users/">bali-phy-users</a> is a list for asking and answering questions about using bali-phy.  Just send e-mail to bali-phy-users@googlegroups.com if you have questions!</p>

            <ul class="floatlist">
              <li><a href="http://groups.google.com/group/bali-phy-users/about">Info</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/subscribe">Join</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/post">Post</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/topics">Discussions</a></li>
            </ul>

	    </div>
	  </td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
