<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='Models'; ?>
    <?php require('lib/phplib.inc') ?>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <link rel="stylesheet" href="highlight/styles/arta2.css"></link>
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
	  <h2>Graphical Models</h2>

  <p>BAli-Phy has been extended to handle <em>dynamic</em> graphical models.  This approach lets the graph that relates the variables change in a natural way, allows the use of data-structures, and will eventually allow random numbers of random variables.  The modelling framework is under rapid development, and I haven't written much documentation yet.</p>

	  <p>We take the probabilistic programming approach with Haskell as the modelling language.  It currently uses monads to represent sampling random variables. Not all Haskell language features are ready yet.  In particular, type checking is not implemented yet, and curly braces are required.</p>

<pre><code class="haskell"><?php include('Demo.hs') ?></code></pre>

	  <p> Some more example files are <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/Models">here</a>.  For example, you might run <b>bali-phy -m CoalMine.hs --iter=1000</b> to perform a poisson regression.</p>

	  
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
