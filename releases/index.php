<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='..'; ?>
  <?php $page='Versions'; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <style>
.main > ul li {padding: 0.5em}    
  </style>
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

          <ul>
	    <li>(<a href="./3/"><em>BAli-Phy 3 alpha</em></a>: <em><b>unreleased/development</b></em> -- <a href="https://github.com/bredelings/BAli-Phy">github.com:bredelings/BAli-Phy</a>)
	    <li><a href="./2.3/">BAli-Phy 2.3</a>: <b>current stable release</b> -- [<a href="../download.php">Download</a>]
	    <li><a href="./2.2/">BAli-Phy 2.2</a>
	    <li><a href="./2.1/">BAli-Phy 2.1</a>
	    <li><a href="./2.0/">BAli-Phy 2.0</a>
	    <li><a href="./pre/">Older releases</a>
	  </ul>

	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
