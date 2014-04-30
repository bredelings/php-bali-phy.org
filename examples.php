<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $page='Examples'; ?>
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
	<?php navbar(); ?>

	<div class="main">
	    
	  <h2><a name="examples">Examples</a></h2>

	<!-- h3>Large Examples</h3 -->

	<ol>
	  <!-- li><a href="Examples/5S/25-log-normal-B-2">5S rRNA - 25 sequences</a><br/>% bali-phy 25-muscle.fasta --smodel GTR+log-normal[8] --iterations 400000 --name 25-log-normal-B</li -->
	  <li><a href="Examples/5S/25-GTR-DP4">5S rRNA - 25 sequences</a><br/>
	    % bali-phy 25.fasta --smodel GTR+DP[4]</li>
	  <li><a href="Examples/5S/48-GTR-DP4">5S rRNA - 48 sequences</a><br/>
	    % bali-phy 48-fsa.fasta --smodel GTR+DP[4]</li>
	  <li><a href="Examples/Globins/few-LG-DP6">Globins - 28 sequences</a></li>
	    % bali-phy few-globins.fasta --smodel LG+DP[6]</li>
	</ol>
      </div>
      </td>  
    </tr>
  </table>
    
  <?php baliphy_footer(); ?>
</body>
</html>
