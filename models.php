<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='Graphical&nbsp;Models'; ?>
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
	  <h1>Dynamic Graphical Models</h1>

  <p>BAli-Phy has been extended to handle <em>dynamic</em> graphical models.  This approach lets the graph that relates the variables change in a natural way, allows the use of data-structures with random fields, and will eventually allow random numbers of random variables.  The modelling framework is under rapid development, and I haven't written much documentation yet.</p>

<h2>Graphical Models</h2>
	  <p>We use Haskell as the modelling language.  We currently use monads to represent sampling random variables. Unfortunately, not all Haskell language features are ready yet.  In particular, type checking is not implemented yet, and curly braces are required.</p>

<pre><code class="haskell"><?php include('Demo1.hs') ?></code></pre>

	  <p> Some more example files are <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/Models">here</a>.  For example, you might run <b>bali-phy -m CoalMine.hs --iter=1000</b> to perform a poisson regression.</p>

<h2>Random data structures</h2>
<p>We can also sample random data structures.  For example, the <em>iid</em> distribution returns a random list.  We can apply the <em>map</em> and <em>sum</em> operations to such lists to sample a sum of squares.
<pre><code class="haskell"><?php include('Demo2.hs') ?></code></pre>
Here <em>(\x -> x*x)</em> describes an un-named function that takes an argument <em>x</em> and returns <em>x*x</em>.
</p>


<h2>Dynamic graphs I: if-then-else</h2>
<p>Traditional graphical models contain graphs that never change.  Changing the graph involves changing the model.  In contrast, <em>dynamic</em> graphical models use a single model to specify a changing graph.
<pre><code class="haskell"><?php include('Demo3.hs') ?></code></pre>
While <em>x</em> always depends on <em>i</em>, it depends on either <em>y</em> or <em>z</em>, but not both.  The dynamic graphical model can represent this by updating the graph to handle the cases where <em>i=0</em> or <em>i=1</em>:
<div align="center">
<img src="graphical_model3.svg" style="padding:1em; padding-left: 3em; padding-right:3em"/>
<img src="graphical_model4.svg" style="padding:1em; padding-left: 3em; padding-right:3em"/>
</div>
In contrast, a traditional graphical model makes <em>x</em> always depend on everything that it <em>might</em> depend on.
<div align="center">
<img src="graphical_model5.svg" style="padding:1em; padding-left: 3em; padding-right:3em"/>
</div>

<h2>Dynamic graphs II: arrays with random subscripts</h2>
<p>Traditional graphical modelling languages, like BUGS, allow arrays of random variables.  However, they do not allow selecting a random element of these arrays.  Dynamic graphs allow random subscripts. This can be used to divide observations into categories.  Here different elements of <em>ys</em> will be exactly equal, if the belong to the same category:

<pre><code class="haskell"><?php include('Demo4.hs') ?></code></pre>
  In Haskell, we use the <em>!!</em> operator to subscript a list.  The C equivalent of <em>xs!!(categories!!i))</em> would be something like <em>xs[categories[i]]</em>.

<h2>Random sampling via recursive functions: Brownian Bridge</h2>
<p>We can use recursive functions to randomly sample lists of random values.  Here, we define a function <em>random_walk</em> that produces a list of random values starting from <em>x0</em>.
<pre><code class="haskell"><?php include('Demo5.hs') ?></code></pre>
  The argument <em>f</em> is a function.  In Haskell, we write <em>f x</em> instead of <em>f(x)</em> to apply a function.  Here, <em>f x</em> gives the distribution of the point after <em>x</em>.</p>

<p>The <em>Observe</em> command specifies observed data.  Here we observe that the next point after element 10 of <em>zs</em> is 2.0.  This constraints the random walk to end at 2.0, creating a Brownian Bridge.</p>
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
