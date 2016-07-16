<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Release 2.2"; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
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
	  <h2><a name="news">Release Notes</a></h2>

	  <div class="release_dates"><b style="font-size:125%">Version 2.2:</b>
          <ul>
	    <li><b>[2.2.0]</b> - 12-30-2013</li>
	    <li><b>[2.2.1]</b> - 03-20-2014</li>
	  </ul>
	  </div>

<!-- 2.1.1 - 2.2.0
P1.
?03/25/11 - AIS

P2.
?07/26/11 - Add new function get_x_ranges_for_band( )
?07/29/11 - Add DPmatrix::forward_band( )
?08/02/11 - Modify sample_tri_multi to optionally use a (relative) bandwidth.
?08/02/11 - Add initial code for new bandwidth-based interface.

P3.
?02/06/12 - Add sparse_increasing_index_matrix
?02/09/12 - Switch to using sparse subA index results everywhere.
?02/09/12 - Completely remove the dense matrix from subA indices.

P4.
?02/22/12 - Allow 2-leaf trees (for substitution, at least).

P5.
?06/07/12 - Add infrastructure for back-sampling.

P6.
?04/02/12 - Add beginning of document on HMMs.
?05/03/12 - Add initial gdb pretty-printer code for expression_refs.
?05/31/12 - Add new HMM code.
?08/02/12 - Convert Glue( , ) to operate on HMM's and remove mhmm.
?08/18/12 - Start actually using the new A-machinery in sample-node.C

P7.
*11/26/11 - Finish adding *attributes() accessors to branch-node.H
*11/28/11 - Actually read in NHX format.  Also read in BEAST-formatted extensions.
*11/28/11 - Start storing labels as attribute 0.

P8.
*07/05/11 - Switch setup-smodel.C to be based on formula_expression_ref's.
*07/19/11 - First implementation of 
*12/02/11 - Add initial garbage collection.
*12/22/11 - Rewrite uniquify_reg( )
*12/29/11 - Begin using let-floating in the graph machine.
*01/05/12 - Rewrite the M8b model to use the new model framework.
*01/11/12 - Introduce Programs!
*04/02/12 - Add a Get_Eigensystem operation.
*04/09/12 - Remove MultiModelObject from all files.
*04/13/12 - Switch object_ref and expression_ref away from cow_ptr's
*04/20/12 - Switch to using intrusive_ptr instead of shared_ptr for Objects
*04/28/12 - Write converter of (simplified) expressions to de Bruijn indices.
*05/14/12 - Avoid doing so much free-ing and malloc-ing when adding and removing roots. (Add CacheList.H)
*05/18/12 - Switch the gamma distribution over to the new framework.
*05/21/12 - Begin adding framework for ownership *categories* to improve speed.
*06/15/12 - Switch to multiple mixtures. (e.g. branch-dependent models)
*06/23/12 - Do branch-site test2, not test1.
*08/01/12 - Add simple boost::qi parser example
*09/04/12 - Parse infix expressions.
*09/22/12 - Add some (templatized) IO operations!
*10/25/12 - Move imodels to new model framework.
*10/27/12 - Eliminate class SuperModel at long last!
*12/03/12 - Add i.i.d. distribution.
*12/05/12 - Add operation to compute AFS.
*12/20/12 - Add infrastructure for loading modules from files.
*01/01/13 - Load builtins from modules.
*02/25/13 - Add Modifiable_Slice_Move( ).
*03/20/13 - Eliminate indices in favor of triggers.
*05/17/13 - Add an MCMC move that performs a head as an IO action.
*08/17/13 - Re-base parser on Lexer


04/06/11 - Lazily calculate eigensystems
04/07/11 - Lazily calculate branch hmms
05/16/11 - Write out trees with internal node labels if alignments have internal nodes.
08/02/13 - Eliminate GSL code.
02/23/12 - Add framework for storing branch lengths as parameters.
04/11/12 - Always compile in c++11 mode now.
04/24/12 - Allow alignment-cat to reorder or select sequences.
           Allow reversing sequences.
 	   Better handle collections of different-length sequences.
08/28/12 - Add Rao-Blackwellized outputs for parameters selected on cmdline.
06/08/12 - Print out the ancestral sequence alignment, not just the sequences.
07/09/12 - Update method of specifying substitution models. (e.g. model[arg,arg]+...+model[arg,arg]).
10/10/12 - Fix alignment-thin -down-to=num.
-->
	  <ul class="changelog">
	    <li>Internals
	      <ul>
		<li>New model representation framework</li>
	      </ul>
	    </li>

	    <li>Models
	      <ul>
		<li>site-dependent codon models: <strong>M1a</strong>, <strong>M2a</strong>, <strong>M2a_Test</strong>.</li>
		<li>branch and site-dependent codon models: <strong>branch-site.</strong></li>
		<li>frequency models: <strong>+F</strong>, <strong>+gwF</strong>, <strong>F1x4</strong>, <strong>F3x4</strong>, <strong>MG94</strong>, <strong>MG94w9</strong>, <strong>F61</strong>.</li>
	      </ul>
	    </li>
	    <li>Output
	      <ul>
		<li>Inference of ancestral sequences at internal nodes (optional).</li>
		<li>Trees are written with names for internal nodes.</li>
		<li>Allow computing Rao-Blackwellized expectations for some variables.</li>
	      </ul>
	    </li>
	    <li>Input
	    <ul>
	      <li>Substitution models may now take multiple arguments:
	      <strong>branch-site[2,HKY,F3x4]</strong>.</li>
	    </ul>
	    </li>
	    <li>Speed
	      <ul>
		<li>Lazily calculate eigensystems for substitution rate matrices.</li>
		<li>[0-100% <span style="color:red">slower</span>] Rewrite model framework.</li>
	      </ul>
	    </li>
	    <li>Summarization tools
	      <ul>
		<li><b>alignment-cat</b>: improved ability to select, reorder, strip gaps, and reverse the input sequences.</li>
		<li><b>trees-consensus</b>: allow reading trees with node and branch attributes</li>
		<li><b>trees-consensus</b>: allow reading trees with internal node names</li>
		<li><b>[2.2.1]</b> Make post-processing accept line endings in Linux/Mac/Windows format.</li>
	      </ul>
	    </li>
	    <li>Build
	      <ul>
		<li>Stop depending on the GSL library.</li>
		<li>Switch to C++11.</li>
	      </ul>
	    </li>
	    <li>Changes
	      <ul>
		<li>'lambda' renamed to logLambda.</li>
		<li>'epsilon' replaced with meanIndelLengthMinusOne.</li>
	      </ul>
	    </li>
	  </ul>
	  
	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
