<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php $page='News'; ?>
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
	  <?php navbar(); ?>
	  <div class="main">
	  <h2><a name="news">Release Notes</a></h2>

	  <div class="release_dates"><b style="font-size:125%">Version 2.3:</b>
          <ul>
	    <li><b>[2.3.0]</b> - 04-29-2014</li>
	    <li><b>[2.3.1]</b> - 04-30-2014</li>
	    <li><b>[2.3.2]</b> - 05-08-2014</li>
	    <li><b>[2.3.3]</b> - 05-11-2014</li>
	    <li><b>[2.3.4]</b> - 05-24-2014</li>
	  </ul>
	  </div>

	  <ul class="changelog">
	    <li>Speed
	      <ul>
		<li><span style="color:red">[0-100% faster]</span> Rewrite new model framework.</li>
		<li><b>[2.3.2]</b> - Resample letter frequencies more, but not too much.</li>
		<li><b>[2.3.3]</b> <span style="color:red">[30% faster]</span> Don't recalculate likelihoods unless necessary.</li>
                <li><b>[2.3.4]</b> <span style="color:red">[0-25% faster]</span> Work with large trees more efficiently.</li>
		<li><b>[2.3.4]</b> <span style="color:red">[0-100% faster]</span> Compute likelihoods on ambiguous sequences better.</li>

		<li>Note: faster than 2.2, but a bit slower than 2.1.
	      </ul>
	    </li>

	    <li>Models
	      <ul>
		<li><b>[2.3.3]</b> - Fix and enable M1a, M2a, M2a_Test, M7, M8, M8a, M8a_Test.</li>
	      </ul>
	    </li>

	    <li>Internals
	      <ul>
		<li>Rewrite alignment MCMC</li>
	      </ul>
	    </li>

	    <li>Input
	      <ul>
		<li><b>[2.3.4]</b> Handle ambiguous nucleotides K, B, D, M, H, and V in nucleotide and codon alphabets.</li>
	      </ul>
	    </li>

	    <li>Summarization tools
	      <ul>
		<li><em>bp-analyze.pl</em> - Generate prettier HTML reports.</li>
		<li><em>bp-analyze.pl</em> - Log all sub-commands.</li>
		<li><em>bp-analyze.pl</em> - Handle /cygdrive/ on cygwin.</li>
		<li><b>[2.3.2]</b> <em>bp-analyze.pl</em> - Correctly handle not having R.</li>
		<li><b>[2.3.2]</b> - Update alignment diffs to be more useful.</li>
	      </ul>
	    </li>

	    <li>Changes
	      <ul>
		<li>Replace 'meanIndelLengthminusOne' with 'meanIndelLength'</li>
	      </ul>
	    </li>
	      

	  </ul>



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
	  
	  <h3><a name="2.1.1">Version 2.1.1 (02/03/11)</a></h3>

	  <p>Version 2.1.1 fixes bugs and is easier to use.</p>

	  <ul class="changelog">
	    <li>Bug fixes
	      <ul>
	        <li>Fixed: 2.1.0 would sometimes crash randomly during long runs.</li>
		<li>Fixed: Windows binaries used the same random seed every time.</li>
		<li>Fixed: Broken M0 and M7 model priors.</li>
	      </ul>
	    </li>
	    <li>Usability
 	      <ul>
	        <li>Read files in old macintosh format on UNIX and Windows.</li>
	      </ul>
	    </li>
	    <li>Build
	      <ul>
	         <li>Fix build from source with system BOOST libraries.</li>
              </ul>
	    </li>
	  </ul>

	  <h3><a name="2.1.0">Version 2.1.0 (07/07/10)</a></h3>

	  <p>Version 2.1.0 adds some major new features:</p>

	  <ul class="changelog">
	    <li>Major new features.
	    <ol>
	      <li>Allow multiple separate genes (i.e. data partitions).
  	      <ul>
	        <li>The alignment of each gene may be either fixed or variable.</li>
	      </ul>
	      </li>
	      <li>Improve mixing when the tree has many tips (for MCMC)</li>
	      <li>Improve initial search when the tree has many tips (for estimation)</li>
	      <li>Use much less RAM.</li>
	    </ol>
	    </li>

	    <li>MCMC Speed and reliability
	    <ul>
	      <li>Use slice sampling for continous parameters -- automatically detect step-size.</li>
	      <li>Allow SPR moves to intelligently propose attachment sites.</li>
	      <li>Improve CPU efficiency when the alignment is constrained.</li>
	      <li>Spend more time resampling topology and alignment, versus substitution parameters.</li>
	    </ul>
	    </li>

	    <li>Models
	    <ul>
	      <li>Default to more conservative gamma prior for branch
	      lengths.</li>
	      <li>New substitution models: C10 and C20.</li>
	    </ul>
	    </li>

	    <li>Usability
	    <ul>
	      <li>Stop requiring --data-dir option: the information is now internal.</li>
	      <li>Handle amino-acid code <b>J</b>.</li>
	      <li>Warn on illegal characters.</li>
	      <li>New analysis script <em>bp-analyze.pl</em> replaces GNUmakefile.</li>
	    </ul>
	    </li>

	    <li>Summarization tools
	      <ul>
		<li>Report the maximum posterior decoding alignment.</li>
		<li>Simplify computing the consensus tree and other
		summaries.</li>
		<li>Check mixing and effective sample sizes by
		comparing multiple runs.</li>
	      </ul>
	    </li>

	  </ul>

	  <h3><a name="2.0.2">Version 2.0.2 (02/03/09)</a></h3>

	  <p>Version 2.0.2 fixes some bugs and updates the auxiliary tools to be more
	  similar to the development version.  It also has some
	  speedups when the alignment is partially fixed (constrained).</p>

	  <ul class="changelog">
	    <li>General
	    <ul>
	      <li>Make alignment constraints work again.</li>
	      <li>Represent stop codons as "*" instead of "!".</li>
	    </ul>
	    </li>

	    <li>Executables
	    <ul>
	      <li>Compile windows executables with an up-to-date compiler</li>
	    </ul>
	    </li>

	    <li>Don't crash...
	    <ul>
	      <li>Don't crash in MCMC when using the gamma distribution. (really)</li>
	    </ul>
	    </li>

	    <li>Useability
	    <ul>
	      <li>Capitalize model names WAG, PAM, JTT, etc.</li>
	      <li>Improve checks for illegal characters in sequence names.</li>
	      <li>Improve checks for illegal characters in alignment.</li>
	      <li>Generate correct colors for DNA AU plots</li>
	      <li>In case of errors in the post hoc analysis, give useful error messages.</li>
	    </ul>
	  </li>

	  <li>Experimental...
	  <ul>
	    <li>alignment-align: align two alignments to compare them.</li>
	    <li>alignment-max: generate a representative alignment.</li>

	  </ul>
	  </li>
	  </ul>



	  <h3><a name="2.0.1">Version 2.0.1 (12/11/07)</a></h3>

	  <p>Version 2.0.1 fixes several bugs.  In order to ensure stability, no major features were added in this release.</p>

	  <p>This release fixes a bug that affected results in
	  default gap model, and so we recommend that all users
	  upgrade to this release.  This bug previously resulted in
	  under-estimates of the mean gap length. </p>

	  <ul class="changelog">
	    <li>Correctness
	    <ul>
	      <li style="color:red">Fix sampling of the mean gap length (epsilon) under the (default) RS07 model.</li>
	    </ul></li>

	    <li>Executables
	    <ul>
	      <li>Make Macintosh executables run  correctly (static linkage)</li>
	    </ul>
	    </li>

	    <li>Don't crash...
	    <ul>
	      <li>Don't crash in MCMC when changing branch lengths.</li>
	      <li>Don't crash in MCMC when using the gamma distribution.</li>
	      <li>Don't crash on --show-only.</li>
	      <li>Don't crash analyzing collection of FastA alignments.</li>
	    </ul>
	    </li>
	      
	    <li>Usability
	    <ul>
	      <li>Don't quit reading a FastA file on blank lines.</li>
	      <li>Generate better consensus alignment.</li>
	      <li>[configure] Correctly check for GSL version 1.8 of higher.</li>
	      <li>[configure] Don't blame GSL for bad compiler flags for cpu architecture.</li>
	      <!-- li>Documentation update: how to set PATH.</li>
	      <li>Documentation update: running the post-hoc analysis
	      under csh.</li -->
	    </ul>
	    </li>


	  </ul>

	  <h3><a name="2.0.0">Version 2.0.0 (08/10/07)</a></h3>

	  <p>In version 2.0.0 I have added a few new features and fixed many bugs.  I have made <strong>bali-phy</strong> much simpler and easier to use.  Several new features and improvements are listed below:</p>

	  <ul class="changelog">
	    <li>Variables
	    <ul>
	      <li style="color:red">Use <em>Tracer</em> to visualize MCMC runs.</li>
	      <li>Unified handling of variables including frequencies, mu (branch length mean), etc.</li>
	      <li>Variables can all be monitored with Tracer, and can be fixed.</li>
	    </ul>
	    </li>
	    <li>Data
	    <ul>
	      <li style="color:red">Use information in ambiguous letters (below).</li>
	      <li>Handle {R, Y, W, S} in codon alphabets.</li>
	      <li>Handle {B, Z} in amino acid alphabets.</li>
	      <li>Allow non-standard genetic codes.</li>
	    </ul>
	    </li>
	    <li>New Substitution Models
	    <ul>
	      <li style="color:red">GTR  (nucleotides)</li>
	      <li>HKYx3 / TNx3 / GTRx3 (triplets)</li>
	      <li>rates ~ log-normal[n]</li>
	    </ul>
	    </li>
	    <li>MCMC improvements
	    <ul>
	      <li>Topology constraints.</li>
	      <li>Fix the alignment along a branch.</li>
	      <li>Improve proposals: use Cauchy and safe-Dirichlet proposals.</li>
	      <li>Tunable proposals: new parameters for tuning the size of jumps.</li>
	      <li>Smarter tree/alignment SPR proposals.</li>
	      </ul>
	    </li>
	    <li>Alignment Uncertainty (Au) Plots
	    <ul>
	      <li>Color by certainty (Rainbow) or by certainty+type (AA+fade).</li>
	      <li>Prettier/cleaner HTML output.</li>
	    </ul>
	    </li>
	    <li>Easier to compile/install
	    <ul>
	      <li style="color:red">Use autoconf for compilation.</li>
	      <li>Don't require external BOOST library.</li>
	      <li>Expanded description in <em>User's Guide</em>.</li>
	    </ul>
	    </li>
	    <li>Easier to use
	    <ul>
	      <li style="color:red">Windows version much improved.</li>
	      <li>Read configuration file <em>~/.bali-phy</em></li>
	      <li>Give helpful messages when errors occur.</li>
	      <li>Expanded <em>User's Guide</em>.</li>
	      <li>[workstations] Don't die when the user logs out.</li>
	      <li>[workstations] Don't die after 20 minutes when (soft) CPU limit expires.</li>
	    </ul>
	    </li>
	  </ul>
	  <hr/>

	  <h2><a name="old">Older News</a></h2>

	  <ul>
	    <li>10/25/05: <strong>version 1.9.8 released.</strong>
	    <ul>
	      <li>Documentation improvements.</li>
	      <li>Analysis phase: usability improvements.</li>
	      <li>Analysis phase: better handle partial partitions. (n-taxon statements)</li>
	      <li>FIX mistranslation of 3 codons.</li>
	      <li>FIX compilation on Mac OS X.</li>
	      <li>FIX crash with wildcards.</li>
	      <li>Print N or X for wildcard instead of *.</li>
	      <li>Allow user to specify alphabet more specifically.</li>
	      <li>Add alphabets for including STOP codon and amino acid.</li>
	    </ul>
	    </li>
	    
	    <li>07/19/05: <strong>version 1.9.7 released.</strong>
	    <ul>
	      <li>Some speed/memory improvements.</li>
	      <li>FIX prior on mu.</li>
	      <li>FIX branch length proposals to include effect on alignment prior.</li>
	      <li>FIX Codon models - correctly find nucleotides inside codons.</li>
	      <li>FIX Codon models - scale branch lengths to match singlet models.</li>
	      <li>FIX Codon model YangM2</li>
	      <li>NEW indel model "fragments" that is time-independant</li>
	      <li>NEW asymmetric NNI and SPR proposals.</li>
	      <li>NEW documentation in HTML from docbook.</li>
	      <li>NEW statistics for transition kernels.</li>
	      <li>NEW tool: alignment-consensus.</li>
	      <li>NEW parameters for transition kernels.</li>
	    </ul>
	    </li>

	    <li>04/14/05: <strong>version 1.9.6 released.</strong>
	    <ul>
	      <li> SPEED improvements!</li>
	      <li> FIX Alignment constraints should work.</li>
	      <li> FIX Codon models to work again.  YangM2 Codon model fixed. </li>
	      <li> NEW drawing schemes in alignment-draw...</li>
	      <li> NEW command line help availabe with "--help".</li>
	      <li> The form of arguments has changed to "--option arg" from "option=arg"</li>
	      <li> Setting/fixing/unfixing parameters works better now</li>
	      <li> Alignment format defaults to FASTA now </li>
	      <li> <em>FASTA files should not contain blank lines between sequences!</em></li>
	    </ul>
	    </li>
	    
	    <li>01/24/05: <strong>version 1.9.4 (BETA) released.</strong>
	    <ul>
	      <li>this release "should work" (many bugs fixed!).</li>
	      <li>use new indel model by default.</li>
	      <li>update tools to compile and work in new framework.</li>
	      <li>use less  memory for conditional likelihoods.</li>
	      <li>initial support for multifurcating trees.</li>
	      <li>add invariant fraction to indel model.</li>
	      <li>add more color schemes to alignment-draw (needs more work).</li>
	      <li>speed up tree-dist-compare, print out M[l] consensus tree.</li>
	      <li>speed up alignment-gild: both I/O, and processing time.</li>
	      <li>speed up output (use buffered I/O).</li>
	      <li>speed up likelihood calculation, slightly.</li>
	      <li>speed up conditional likelihood calculations for DP.</li>
	      <li>fix fixing of parameters on command line.</li>
	      <li>put compiled tools in build/bin directory.</li>
	    </ul>
	    </li>

	    <li>12/23/04: <strong>version 1.9.3 (BETA) released.</strong>
	    <ul>
	      <li>fixed many bugs - but several remain.</li>
	      <li>removed internal copy of uBLAS matrix library. (use BOOST version).</li>
	      <li>started to update tools to match new tree code (not done).</li>
	      <li>started re-writing alignment-draw for more color-schemes (not done).</li>
	      <li>started dealing with std::bad_alloc() exception.</li>
	    </ul>
	    </li>

	    <li>11/27/04: <strong>version 1.9.2 (BETA) released.</strong>
	    <ul>
	      <li>improved indel model</li>
	      <li>alignment constraints</li>
	      <li>likelihood-caching to speed up likelihood calculation.</li>
	    </ul>
	    </li>

	    <li>09/16/04: <strong>version 1.8.24 released.</strong></li>

	    <li>06/28/04: <strong>version 1.8.14 developed (release notes)</strong>
	    <ul>
	      <li>Began version control (SubVersion)</li>
	      <li>No longer need uBlas "bindings"</li>
	    </ul>
	    </li>

	    <li>6/9/04: <strong>version 1.8.10 developed (release notes)</strong></li>
	  </ul>

	</div>
	  </td>	      
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
