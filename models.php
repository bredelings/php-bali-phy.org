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

         <img src="developer/architecture.png" style="float:right;width:15em"/>
	  <h2>Rapid, easy model development</h2>

	  <p>BAli-Phy contains a simple language for expressing probabilistic models as programs.  Inference on parameters can then be performed automatically. Such languages are called <a href="https://en.wikipedia.org/wiki/Probabilistic_programming_language">probabilistic programming languages</a> (PPL). Other well-known PPLs include <a href="https://www.mrc-bsu.cam.ac.uk/software/bugs/">BUGS</a>, <a href="https://revbayes.github.io">RevBayes</a>, and <a href="http://mc-stan.org">Stan</a>. The goal of the language is to allow researchers to spend their time designing models instead of designing new inference programs.  The inference should take care of itself after the model is specified.</p>

	  <h4>Language properties</h4>
	  <p>The modeling language is a <a href="https://en.wikipedia.org/wiki/Functional_programming">functional language</a>, and uses <a href="https://en.wikipedia.org/wiki/Haskell_(programming_language)">Haskell</a> syntax.  Features currently implemented include:</p>
	  <ol>
	    <li><b>Functions</b> work, and can be used to define random variables.</li>
	    <li><b>Modules</b> work, and allow code to be factored in a clean manner.</li>
	    <li><b>Packages</b> work, and allow researchers to distribute their work separately from the BAli-Phy architecture.</li>
	    <li><b>Optimization</b> works, and speeds up the code written by the user by using techniques such as inlining.</li>
	    <li><b>Composite Objects</b> work, and can be used to define random data structures.</li>
	    <li><b>Random control flow</b> works, allowing if-then-else and loops that depend on random variables.</li>
	    <li><b>Recursive random variables</b>. Random processes on trees that are not known in advance.</li>
	    <li><b>JSON logging</b>. This enables logging inferred parameters when their dimension and number is not fixed.</li>
	  </ol>

	  <p>Features that are expected to be completed during 2019 include:</p>
	  <ul>
	    <li><b>Rooted Trees</b>. Rooted trees implemented as a data structure within the language. (<em>partially implemented</em>)</li>
	    <li><b>Random numbers of random variables</b>. Random variables can be conditional created, without the need for reversible-jump methods.</li>
	    <li><b>Lazy random variables</b>. Infinite lists of random variables can be created.  Random variables are only instantiated if they are accessed.</li>
	    <li><b>Type checking</b>. Type checking will enable polymorphism and give useful error messages for program errors.</li>
	  </ul>

	  <h2>Examples</h2>
          <ol>
            <li><a href="#regression">Linear regression</a></li>
            <li><a href="#rec_random_tree">Trait evolution on random tree</a></li>
            <li><a href="#random_data_structures">Random data structures</a></li>
            <li><a href="#random_control_flow1">Random control flow: if-then-else</a></li>
            <li><a href="#random_control_flow2">Random control flow: random array subscripts</a></li>
            <li><a href="#recursive_sampling">Recursive sampling: a Brownian Bridge</a></li>
          </ol>

          <p>These examples work with current git version of <b>bali-phy</b>.</p>
          <hr/>          
	  <h3><a name="regression">Linear regression</a></h3>
	  <p>Here is a short program that performs linear regression (i) given normally-distributed errors (ii) at fixed values of x.</p>
          <p>Changing the error distribution to another distribution simply invoves replacing <code class="haskell">normal</code> with another distribution, such as <code class="haskell">cauchy</code>.

<pre><code class="haskell"><?php include('LinearRegression.hs') ?></code></pre>

<ul class="uncompressed">
  <li>the <b>priors</b> look like <code class="haskell">b &lt;- normal 0.0 1.0</code>
  <li>the <b>prediction function</b> <code class="haskell">let f x = b*x + a</code> defines the best fit line.</li>
  <li>the <b>error distribution</b> <code class="haskell">normal (f x) s</code> indicates how far points might fall from the line.</li>
  <li>the <b>likelihood</b> is given by <code class="haskell">observe <i>distribution data</i></code>.</li>
  <li>the <b>parameters are logged as JSON</b> and are given by the <code class="haskell">return $ log_all [...]</code> command.</li>
</ul>

<p>You can find this file in <a href="https://github.com/bredelings/BAli-Phy/blob/master/tests/prob_prog/regression/">bali-phy/tests/prob_prog/regression/</a> and run it as <b>bali-phy -m LinearRegression.hs --iter=1000</b>.</p>

          <hr/>          
          <h3><a name="rec_random_tree">Trait evolution on random tree</a></h3>
          <p>Graphical models are a natural way to describe the evolution of a trait on a <strong>fixed</strong> tree.  This is because the value of the trait at each node depends on the value at its parent node.  This dependance can be encoded in a fixed graph with the same structure as the tree.</p>
          <p>However, graphical models cannot easily describe the evolution of a train on a <strong>random</strong> tree.  This is because the parent node for each node is not known in advance, and is in fact random.</p>
          <p>One way to solve this problem is to allow <strong>recursive</strong> random sampling.  In this model below, the random variable <strong>xs</strong> recursively depends on itself.  In practice this avoids infinite loops because each element of <strong>xs</strong> only depends on <em>other</em> elements, and not on itself.</p>
          <pre><code class="haskell"><?php include('random_tree.hs')?></code></pre>
          <p>The keyword <strong>rec</strong> introduces a recursive block inside the do block.</p>
          
          <hr/>
	  <h3><a name="random_data_structures">Random data structures</a></h3>
	  <p>The <em>iid</em> distribution returns a list of random values from another distribution.  We can apply the <em>map</em> and <em>sum</em> operations to such lists to sample a sum of squares.</p>
	  <pre><code class="haskell"><?php include('Demo2.hs') ?></code></pre>
	  <p>Here <em>(\x -> x*x)</em> describes an un-named function that takes an argument <em>x</em> and returns <em>x*x</em>.</p>
      <!-- p><em>(Currently the number <code class="haskell">10</code> of i.i.d. normal variables cannot be random.  Soon we will allow random numbers of random variables, and this restriction will be relaxed.)</em> </p -->

          <hr/>          

          <h3><a name="random_control_flow1">Random control flow I: if-then-else</a></h3>
      <p>The modeling language can handle graphs that change automatically when the value of a random variable changes. One thing that leads to a changing graph is control-flow statements like <em>if-then-else</em>:</p>
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
           <hr/>
           <h3><a name="random_control_flow2">Random control flow II: arrays with random subscripts</a></h3>
      <p>Traditional graphical modelling languages, like BUGS, allow arrays of random variables.  However, they do not allow selecting a random element of these arrays.  Dynamic graphs allow random subscripts. This can be used to divide observations into categories.  Here different elements of <em>ys</em> will be exactly equal, if they belong to the same category:</p>

      <pre><code class="haskell"><?php include('Demo4.hs') ?></code></pre>
      <p>  Haskell uses the <em>!!</em> operator to subscript a list.  The C equivalent of <em>xs!!(categories!!i))</em> would be something like <em>xs[categories[i]]</em>.</p>

      <hr/>

      <h3><a name="recursive_sampling">Random sampling via recursive functions: Brownian Bridge</a></h3>
  <p>We can use recursive functions to randomly sample lists of random values.</p>

  <p>Here, we define a function <code class="haskell">random_walk</code> that produces a list of random values starting from <code>x0</code>.</p>
  <ul class="uncompressed">
    <li>The argument <code class="haskell">next</code> is a function.</li>
    <li>In Haskell, we write <code class="haskell">next x0</code> instead of <code>next(x0)</code> to apply a function.</li>
    <li>So <code class="haskell">next x0</code> gives the distribution of the point after <code>x0</code>.</li>
  </ul>
  <pre><code class="haskell"><?php include('Demo5.hs') ?></code></pre>

  </div>
</td>	      
</tr>
</table>

<?php baliphy_footer(); ?>
</body>
</html>
