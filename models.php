<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='Models'; ?>
    <?php require('lib/phplib.inc') ?>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <link rel="stylesheet" href="highlight/styles/default.css">
    <style type="text/css">
ul.changelog li {font-weight: bold; color: blue}
ul.changelog li li {font-weight: normal; color: black}
.release_dates ul {display: inline; padding: 0; padding-left: 0.5}
.release_dates li {display: inline; padding-left: 1em; white-space:nowrap}
    </style>
  </head>
  <body>
    <?php baliphy_header(); ?>

    <script src="highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <table class="layout">
      <tr>
	<?php dirtree(); ?>
	<td class="center" valign="top">
	  <!-- ?php navbar(); ? -->
	  <div class="main">
	  <h2>Models</h2>

	  <p>BAli-Phy has been extended to handle dynamic graphical models.  This approach lets the graph that relates the variables change in a natural way.  The modelling framework is under rapid development, and I haven't written much documentation yet.</p>

	  <p>We take the probabilistic programming approach with Haskell as the modelling language.  It currently uses monads to represent sampling random variables. Not all Haskell language features are ready yet.  In particular, type checking is not implemented yet.</p>

<pre>
<code class="haskell">module Demo where
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
</pre>

	  <p> Some example files are <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/Models">here</a>.  For example, you might run <b>bali-phy -m CoalMine.hs --iter=1000</b> to perform a poisson regression.</p>

	  
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
