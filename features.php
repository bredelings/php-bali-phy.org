<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" xmlns="http://www.w3.org/199/xhtml">
<html>
  <?php $page='Features'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
  </head>
  <body>
    <?php baliphy_header(); ?>
	    
    <table>
      <tr>
      <?php dirtree(); ?>
	  <td valign="top" class="main">
	    <?php navbar(); ?>
	    
	    <h2><a name="features">Features</a></h2>
	    <ol>
	      <li>Estimates trees and alignments <strong>simultaneously</strong>
	      <p>Input consist of <em>un-aligned</em> sequences as input.</p></li>
	      <li>Avoids biased tree estimates by not assuming a single alignment
	      <p>By dealing with alignment uncertainty <em>within</em> the estimation
		     routine, <b>bali-phy</b> by-passes the need to censor regions of the
                     alignment.</p>
		   </li>
	      <li>Utilizes information in shared indels to infer the phylogeny</li>
	      <li>Incorporates alignment uncertainty into tree estimates</li>
	      <li>Can handle RNA, DNA, amino acids, and codon alphabets</li>
	      <li>Models rate variation among sites: INV+Gamma
	          <p><b>bali-phy</b> can apply complex substitution models to alignment as well as phylogeny.</p></li>
	      <li>Can generate alignment-uncertainty (AU) plots</li>
	      <li>You can now specify alignment constraints.</li>
	    </ol>
	    
	  </td>  
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
