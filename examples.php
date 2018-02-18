<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Examples'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <style type="text/css">
.padded_list li {margin-bottom: 1em}  
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
	    
	  <h2><a name="examples">Example analyses with results</a></h2>

	<!-- h3>Large Examples</h3 -->

	<ol class="padded_list">
	  <!-- <li><a href="Examples/5S/25-log-normal-B-2">5S rRNA - 25 sequences</a><br/>% bali-phy 25-muscle.fasta --smodel GTR+log-normal[8] --iterations 400000 --name 25-log-normal-B</li> -->
	  <li><a href="Examples/5S/25-GTR-Gamma-INV/">5S rRNA - 25 sequences</a><br/>
	    % bali-phy <a href="Examples/25.fasta">25.fasta</a> --smodel GTR+Rates.Gamma[4]+INV</li>
	  <li><a href="Examples/5S/48-GTR-DP4">5S rRNA - 48 sequences</a><br/>
	    % bali-phy <a href="Examples/48-fsa.fasta">48-fsa.fasta</a> --smodel GTR+DP[4]</li>
	  <li><a href="Examples/Globins/few-LG-DP6">Globins - 28 sequences</a><br/>
	    % bali-phy <a href="Examples/few-globins.fasta">few-globins.fasta</a> --smodel LG+DP[6]</li>
	  <li><a href="Examples/ITS/ITS1-TN-DP3">Transcribed Spacers + 5.8S - 68 sequences</a><br/>
	    % bali-phy -c <a href="Examples/8.script.html">8.script</a></li>
	</ol>
      </div>
      </td>  
    </tr>
  </table>
    
  <?php baliphy_footer(); ?>
</body>
</html>
