<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Graphical&nbsp;Models'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <link rel="stylesheet" href="highlight/styles/arta2.css"></link>
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
	  <h1>Probabilistic Programming</h1>

	  <h2>Rapid, easy model development</h2>

	  <p>BAli-Phy contains a simple language for expressing probabilistic models.  The goal of this language is to allow researchers to spend there time designing models, not MCMC software.  The inference should take care of itself.</p>
	  <p>BAli-Phy's modelling language uses Haskell syntax:

<pre><code class="haskell"><?php include('Demo1.hs') ?></code></pre>

	  <p>Exaample files are <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/models">here</a>.  For example, you might run <b>bali-phy -m LinearCoalMine.hs --iter=1000</b> to perform a poisson regression.</p>

	  <p>Languages for expressing probabilistic models are called <em>probabilistic programming languages</em>.  Other well-known languages include BUGS, RevBayes, and Stan.</p>


<h2>Dynamic graphical models</h2>
<p>BAli-Phy attempts to extend this paradigm by implementing <em>dynamic</em> graphical models via <a href="http://en.wikipedia.org/wiki/Probabilistic_programming_language">probabilistic programming</a>.  The approach is similar to <a href="http://projects.csail.mit.edu/church/wiki/Church">Church</a> and <a href="http://probcomp.csail.mit.edu/venture/">Venture</a> because it uses execution traces to represent the dynamic graph and is <a href="http://en.wikipedia.org/wiki/Turing_completeness">Turing-complete</a>.  The approach
<ul>
<li> allows a single model to express a <strong>changing graph</strong>.
<li> treats <strong>functions</strong> as first-class objects and allows <strong>recursive</strong> functions.
<li> allows the use of <strong>data-structures</strong> with random fields.
<li> will allow random numbers of random variables.
</ul>
The modelling framework is under rapid development, and I haven't written much documentation yet.</p>

<h2>Random data structures</h2>
<p>We can also sample random data structures.  For example, the <em>iid</em> distribution returns a random list.  We can apply the <em>map</em> and <em>sum</em> operations to such lists to sample a sum of squares.
<pre><code class="haskell"><?php include('Demo2.hs') ?></code></pre>
Here <em>(\x -> x*x)</em> describes an un-named function that takes an argument <em>x</em> and returns <em>x*x</em>.
</p>


<h2>Dynamic graphs I: if-then-else</h2>
<p>The graph in a traditional graphical model never changes.  Changing the graph involves changing the model.  In contrast, <em>dynamic</em> graphical models use a single model to specify a changing graph.  One thing that leads to a changing graph is control-flow statements like <em>if-then-else</em>:
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
<p>Traditional graphical modelling languages, like BUGS, allow arrays of random variables.  However, they do not allow selecting a random element of these arrays.  Dynamic graphs allow random subscripts. This can be used to divide observations into categories.  Here different elements of <em>ys</em> will be exactly equal, if they belong to the same category:

<pre><code class="haskell"><?php include('Demo4.hs') ?></code></pre>
  In Haskell, we use the <em>!!</em> operator to subscript a list.  The C equivalent of <em>xs!!(categories!!i))</em> would be something like <em>xs[categories[i]]</em>.

<h2>Random sampling via recursive functions: Brownian Bridge</h2>
<p>We can use recursive functions to randomly sample lists of random values.  Here, we define a function <em>random_walk</em> that produces a list of random values starting from <em>x0</em>.
<pre><code class="haskell"><?php include('Demo5.hs') ?></code></pre>
  The argument <em>f</em> is a function.  In Haskell, we write <em>f x</em> instead of <em>f(x)</em> to apply a function.  Here, <em>f x</em> gives the distribution of the point after <em>x</em>.</p>

<p>The <em>Observe</em> command specifies observed data.  Here we observe that the next point after element 10 of <em>zs</em> is 2.0.  This constrains the random walk to end at 2.0, creating a Brownian Bridge.</p>
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
