<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='Models'; ?>
    <?php require('lib/phplib.inc') ?>
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
	  <h2>Models</h2>

	  <p>BAli-Phy has been extended to handed generic models.  This ability is under rapid development, and documentation is not yet available.</p>

	  <p>The modelling language is based on Haskell.  It currently uses monads to represent sample random variables.  Some example files are <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/Models">here</a>.</p>

<code>
module Demo where
{
import Distributions;

main = do
{
  n <- geometric 0.5;
  Log "n" n;

  p <- beta 10.0 1.0;
  Log "p" p;

  q <- cauchy 0.0 1.0;
  Log "q" q;

  x <- iid 10 (normal 0.0 1.0);
  Log "x" x;
 
  y <- list [normal (x!!i) 1.0 | i <- [0..9]];
  Log "y" y;
}
}
</code>

	  <p>For example, you might run <b>bali-phy -m CoalMine.hs --iter=1000</b> to perform a poisson regression.</p>

	  
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
