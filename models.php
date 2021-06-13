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
	  <h2>Rapid model development</h2>

	  BAli-Phy contains a language for expressing probabilistic models as sampling programs.  The goals of the language are:
            <ul class="compressed">
              <li><b>expressivity</b>: to be expressive enough that researchers can spend their time designing models instead of designing new inference software.</li>
              <li><b>automatic inference</b>: the inference should take care of itself after the model is specified.</li>
            </ul>
          MCMC is used for inference.

          <p>BAli-Phy 4 (unreleased) implements a universal probabilistic programming language (PPL). Universal PPLs allow inferring the number and relationship of random variables (See <a href="https://www.nature.com/articles/s42003-021-01753-7">Ronquist et al, 2021</a>).
            This differs from probabilistic graphical modeling (PGM) languages, such as <a href="http://mc-stan.org">Stan</a>, <a href="https://www.mrc-bsu.cam.ac.uk/software/bugs/">BUGS</a>, and <a href="https://revbayes.github.io">RevBayes</a>, where the model structure is fixed, and cannot be changed after it is initialized.</p>

	  <h4>Language properties</h4>
	  <p>The modeling language is a <a href="https://en.wikipedia.org/wiki/Functional_programming">functional language</a>, and uses <a href="https://www.haskell.org">Haskell</a> syntax.  Features currently implemented include:</p>
	  <ol>
	    <li><b>Random control flow</b> works, allowing if-then-else and loops that depend on random variables.</li>
	    <li><b>Composite Objects</b> work, and can be used to define random data structures.</li>
            <li><span class="timepoint">[unreleased]</span> <b>Random numbers of random variables</b>. Random variables can be conditionally created, without the need for reversible-jump methods.</li>
            <li><span class="timepoint">[unreleased]</span> <b>Lazy random variables</b>. Infinite lists of random variables can be created.  Random variables are only instantiated if they are accessed</li>
            <li><b>MCMC</b> works, even when the number of variables is changing.</b>
	    <li><b>Functions</b> work, and can be used to define random variables.</li>
	    <li><b>Modules</b> work, and allow code to be factored in a clean manner.</li>
	    <li><b>Packages</b> work, and allow researchers to distribute their work separately from the BAli-Phy architecture.</li>
	    <li><b>Optimization</b> works, and speeds up the users code via techniques such as inlining.</li>
	    <li><b>Recursive random variables</b>. Random processes on trees that are not known in advance.</li>
	    <li><b>JSON logging</b>. This enables logging inferred parameters when their dimension and number is not fixed.</li>
	  </ol>

	  <p>Features that are expected to be completed by mid-2022 include:</p>
	  <ul>
	    <li><b>Type checking</b>. Type checking will enable polymorphism and give useful error messages for program errors.</li>
	    <li><b>Time Trees and the relaxed clock</b>. Rooted trees implemented as a data structure within the language. (<em>partially implemented</em>)</li>
            <li><b>Custom MCMC moves</b>. The ability to add custom MCMC transition kernels will be added. (<em>partially implemented</em>)</li>
            <li><b>Port alignment/tree inference</b>. Move alignment and tree inference completely to the model framework.</li>
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

          <p class="warningbox"><b>Note</b>: These examples won't work with version 3.  They will be part of version 4, which is expected to come out in mid-2022..<br/><br/>To run them you must first compile a development version of bali-phy from the <a href="https://github.com/bredelings/BAli-Phy">source on github</a>.</p>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
            <h3>Haskell syntax</h3>
            <p>It probably helps to know that
            </p>
              <ul class="spaced-item">
                <li><code class="haskell">f x</code> is the function <code class="haskell">f</code> applied to <code class="haskell">x</code></li>
                <li><code class="haskell">let x = y</code> is a simple assignment (no side-effects)</li>
                <li><code class="haskell">do...x &lt;- y...</code> performs some kind of action and assigns the result to x.<br/>
                  The action could be random sampling, an IO operation, etc, depending on the context.</li>
                <li><code class="haskell">map f [x1,x2,...]</code> applies the function <code>f</code> to every element of the list.<br/>
                  The result looks like <code>[f x1, f x2, ...]</code>.<br/>It is used instead of for-loops.</li>

              </ul>
            <p>For quick introductions to Haskell syntax you might want to take a look at the short interactive tutorial at <a href="https://tryhaskell.org">tryhaskell.org</a> or the <a href="https://prajitr.github.io/quick-haskell-syntax/">quick tour of Haskell syntax</a>.</p>
          </div>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
	    <h3><a name="regression">Linear regression</a></h3>
	    <p>Here is a short program that performs linear regression.  Here the goal is to find a line f(x)=a*x+b that best predicts y[i] from x[i].  The data <code>ys</code> gives y[i] at each location x[i] in <code>xs</code>.
            </p>

              <pre><code class="haskell"><?php include('LinearRegression.hs') ?></code></pre>

              <ul class="uncompressed">
                <li><b>sampling</b> from a distribution looks like <code class="haskell">b &lt;- normal 0.0 1.0</code>.<br/>  (This specifies a <em>prior</em> term.)</li>
                <li><b>observing</b> data from a distribution looks like <code class="haskell">data ~> distribution</code>.<br/>  (This specifies a <em>likelihood</em> term.)</li>
                <li><b>defining</b> a function looks like <code class="haskell">let f x = b*x + a</code>.<br/> (This defines the best fit line.)</li>
                <li><b>logging</b> parameters iis done by the code <code class="haskell">return ["b" %=% b, "a" %=% a, ...]</code>.<br/> (This writes a corresponding JSON object each MCMC iteration.)</li>
              </ul>
            <p>Note that for each <code>x</code>, the distribution of y(x) is <code class="haskell">normal (f x) sigma</code>.  The term <code class="haskell">f x</code> is the location predicted by the best-fit line, but there is a distribution because the observed point may not fall exactly on the line.</li>

                <p>You can find this file in <a href="https://github.com/bredelings/BAli-Phy/blob/master/tests/prob_prog/regression/">bali-phy/tests/prob_prog/regression/</a> and run it as <b>bali-phy -m LinearRegression.hs --iter=1000</b>.</p>
              </div>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
          <h3><a name="rec_random_tree">Trait evolution on random tree</a></h3>
          <p>Graphical models are a natural way to describe the evolution of a trait on a <strong>fixed</strong> tree.  This is because the value of the trait at each node depends on the value at its parent node.  This dependance can be encoded in a fixed graph with the same structure as the tree.</p>
          <p>However, graphical models cannot easily describe the evolution of a trait on a <strong>random</strong> tree.  This is because the parent node for each node is not known in advance, and is in fact random.</p>
          <p>One way to solve this problem is to allow <strong>recursive</strong> random sampling.  In this model below, the random variable <strong>xs</strong> recursively depends on itself.  In practice this avoids infinite loops because each element of <strong>xs</strong> only depends on <em>other</em> elements, and not on itself.</p>
          <pre><code class="haskell"><?php include('random_tree.hs')?></code></pre>
          <p>The keyword <strong>rec</strong> introduces a recursive block inside the do block.</p>
          </div>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
	  <h3><a name="random_data_structures">Random data structures</a></h3>
	  <p>The <em>iid</em> distribution returns a list of random values from another distribution.  We can apply the <em>map</em> and <em>sum</em> operations to such lists to sample a sum of squares.</p>
	  <pre><code class="haskell"><?php include('Demo2.hs') ?></code></pre>
	  <p>Here <em>(\x -> x*x)</em> describes an un-named function that takes an argument <em>x</em> and returns <em>x*x</em>.</p>
      <!-- p><em>(Currently the number <code class="haskell">10</code> of i.i.d. normal variables cannot be random.  Soon we will allow random numbers of random variables, and this restriction will be relaxed.)</em> </p -->

          </div>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
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

           </div>
          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
           <h3><a name="random_control_flow2">Random control flow II: arrays with random subscripts</a></h3>
      <p>Traditional graphical modelling languages, like BUGS, allow arrays of random variables.  However, they do not allow selecting a random element of these arrays.  Dynamic graphs allow random subscripts. This can be used to divide observations into categories.  Here different elements of <em>ys</em> will be exactly equal, if they belong to the same category:</p>

      <pre><code class="haskell"><?php include('Demo4.hs') ?></code></pre>
      <p>  Haskell uses the <em>!!</em> operator to subscript a list.  The C equivalent of <em>xs!!(categories!!i))</em> would be something like <em>xs[categories[i]]</em>.</p>

      </div>

          <div class="roundedbox" style="border-color:#666666; margin:1em; margin-top:2em">
            <h3><a name="recursive_sampling">Random sampling via recursive functions: Brownian Bridge</a></h3>
            <p>We can use recursive functions to randomly sample lists of random values.</p>

            <p>Here, we define a function <code class="haskell">random_walk</code> that produces a list of random values starting from <code>x0</code>.</p>
            <ul class="uncompressed">
              <li>The argument <code class="haskell">next</code> is a function: <code class="haskell">next x0</code> gives the distribution of the point after <code>x0</code>.</li>
              <li>In Haskell, we write <code class="haskell">next x0</code> instead of <code>next(x0)</code> to apply a function.</li>
            </ul>
            <pre><code class="haskell"><?php include('Demo5.hs') ?></code></pre>
</div>
  </div>
</td>	      
</tr>
</table>

<?php baliphy_footer(); ?>
</body>
</html>
