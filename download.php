<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Download'; ?>
  <?php require('lib/phplib.inc') ?>
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
	    
	  <h2><a name="download">Download</a></h2>

	  <p>Please see the <a href="docs.php">documentation</a> for more detailed instructions on how to install the software, including software and hardware requirements.</p>
	  <!-- I should add an outline here of subsections under installation -->

	  <h3>Development</h3>
	  <ul>
	    <li style="padding-bottom:1em"><b>3.0-beta1</b> (<a href="releases/3/">Changes</a>): 

	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.0-beta1-linux64.tar.gz","Linux&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.0-beta1-mac64.tar.gz","Mac&nbsp;64-bit&nbsp;(Mavericks)") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.0-beta1-win64.tar.gz","Windows&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.0-beta1.tar.gz","C++&nbsp;source") ?>]
	    &nbsp;&nbsp;[<a href="https://github.com/bredelings/BAli-Phy">git</a> ]</li>
	  </ul>

	  <h3>Current (Stable) Release</h3>
	  <ul>
	    <li style="padding-bottom:1em"><b>2.3.8</b> (<a href="releases/current/">Changes</a>): 

	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-2.3.8-linux64.tar.gz","Linux&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-2.3.8-mac64.tar.gz","Mac&nbsp;64-bit&nbsp;(Mavericks)") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-2.3.8-win64.tar.gz","Windows&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-2.3.8.tar.gz","C++&nbsp;source") ?>]
	    &nbsp;&nbsp;[<a href="https://github.com/Homebrew/homebrew-science/blob/master/README.md">homebrew/science</a>]</li>
	</ul>

	<h3>Older releases</h3>
	<ul>
	  <li><b>2.2</b> (<a href="releases/2.2/">Changes</a>)</li>
	  <li><b>2.1</b> (<a href="releases/2.1/">Changes</a>)</li>
	  <li><b>2.0</b> (<a href="releases/2.0/">Changes</a>)</li>
	  <li><b>&lt;2</b> (<a href="releases/pre/">Changes</a>)</li>
	</ul>

      </div>
      </td>  
    </tr>
  </table>
    
  <?php baliphy_footer(); ?>
</body>
</html>
