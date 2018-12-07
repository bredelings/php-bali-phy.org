<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Graphical&nbsp;Models'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <link rel="stylesheet" href="highlight/styles/arta2.css"></link>
    <style type='text/css'>
code {background: #f0f0f0}      
    </style>
  </head>
  <body>
    <?php baliphy_header(); ?>

    <script src="highlight/highlight.pack.js"></script>
    <script>
      $('code').each(function(i, block) {
          hljs.highlightBlock(block);
      });
    </script>
    <script>hljs.initHighlightingOnLoad();</script>
    <table class="layout">
      <tr>
	<?php dirtree(); ?>
	<td class="center" valign="top">
	  <!-- ?php navbar(); ? -->
	  <div class="main">
	  <h1>Probabilistic Programming</h1>

	  <h2>Rapid, easy model development</h2>

	  <p>BAli-Phy contains a simple language for expressing probabilistic models as programs.  Such languages are called <em>probabilistic programming languages</em>. Other well-known languages include <a href="https://www.mrc-bsu.cam.ac.uk/software/bugs/">BUGS</a>, <a href="https://revbayes.github.io">RevBayes</a>, and <a href="http://mc-stan.org">Stan</a>.</p>

	  <p>The goal of this language is to allow researchers to spend their time designing models instead of MCMC software.  The inference should take care of itself.</p>

	  <p>The modeling language uses Haskell syntax.  Here is what a short program that performs linear regression looks like using that syntax:</p>

<pre><code class="haskell"><?php include('LinearRegression.hs') ?></code></pre>

<ul>
  <li><code class="haskell">let f x = b*x +a</code> defines the prediction function f</li>
  <li><code class="haskell">b &lt;- sample $ normal 0.0 1.0</code> places a prior on the slope of the line.</li>
  <li><code class="haskell">observe y (normal mu_y s)</code> says that the data y comes from a normal distribution with mean mu_y and standard deviation s.</li>
</ul>

	  <p>You can find this file <a href="https://github.com/bredelings/BAli-Phy/blob/master/examples/models">here</a> and run it as <b>bali-phy -m LinearRegression.hs --iter=1000</b>.</p>

	  <p>This language is beta quality.  There is currently no type-checking.  The language should be ready sometime during 2019.</p>

	  <h2>Extending graphical models</h2>
	  <p>In traditional graphical models, variables may be random, but the number of variables and the relationship between them remains constant.
	  BAli-Phy extends the graphical paradigm by allowing the graph to change and treating functions as first-class objects.  This enables</p>
	  
	    <ol>
	      <li> random data structures</li>
	      <li> random control flow (if-then-else, loops) </li>
	      <li> random numbers of random variables (coming soon)</li>
	      <li> lazy evaluation of random variables (coming soon)</li>
	    </ol>

<h3>Random data structures</h3>
<p>The <em>iid</em> distribution returns a list of random values from another distribution.  We can apply the <em>map</em> and <em>sum</em> operations to such lists to sample a sum of squares.</p>
<pre><code class="haskell"><?php include('Demo2.hs') ?></code></pre>
<p>Here <em>(\x -> x*x)</em> describes an un-named function that takes an argument <em>x</em> and returns <em>x*x</em>.
</p>


<h3>Random control flow I: if-then-else</h3>
<p>The modeling language can handle graphs that change. One thing that leads to a changing graph is control-flow statements like <em>if-then-else</em>:</p>
<pre><code class="haskell"><?php include('Demo3.hs') ?></code></pre>
<!-- 
While <em>x</em> always depends on <em>i</em>, it depends on either <em>y</em> or <em>z</em>, but not both.  The dynamic graphical model can represent this by updating the graph to handle the cases where <em>i=0</em> or <em>i=1</em>:

<div>
<img src="graphical_model3.svg" style="width:10em; padding:1em; padding-left: 3em; padding-right:3em"/>
<img src="graphical_model4.svg" style="width:10em; padding:1em; padding-left: 3em; padding-right:3em"/>
</div>
In contrast, a traditional graphical model makes <em>x</em> always depend on everything that it <em>might</em> depend on.
<div>
<img src="graphical_model5.svg" style="width:10em; padding:1em; padding-left: 3em; padding-right:3em"/>
</div>
-->
<h3>Random control flow II: arrays with random subscripts</h3>
<p>Traditional graphical modelling languages, like BUGS, allow arrays of random variables.  However, they do not allow selecting a random element of these arrays.  Dynamic graphs allow random subscripts. This can be used to divide observations into categories.  Here different elements of <em>ys</em> will be exactly equal, if they belong to the same category:</p>

<pre><code class="haskell"><?php include('Demo4.hs') ?></code></pre>
<p>  Haskell uses the <em>!!</em> operator to subscript a list.  The C equivalent of <em>xs!!(categories!!i))</em> would be something like <em>xs[categories[i]]</em>.</p>

<h3>Random sampling via recursive functions: Brownian Bridge</h3>
<p>We can use recursive functions to randomly sample lists of random values.  Here, we define a function <em>random_walk</em> that produces a list of random values starting from <em>x0</em>.</p>
<pre><code class="haskell"><?php include('Demo5.hs') ?></code></pre>
  The argument <em>f</em> is a function.  In Haskell, we write <em>f x</em> instead of <em>f(x)</em> to apply a function.  Here, <em>f x</em> gives the distribution of the point after <em>x</em>.</p>

<p>The <code class="haskell">observe</code> command specifies observed data.  Here we observe that the next point after element 10 of <em>zs</em> is 2.0.  This constrains the random walk to end at 2.0, creating a Brownian Bridge.</p>
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
