<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php $page='Links'; ?>
    <?php require('lib/phplib.inc') ?>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
    <style type="text/css">
ol.references li {padding-bottom:0.6em}
.rs {color: red}
.oxford {color: green}
.vienna {color: blue}
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
	    <h2><a name="links">Links</a></h2>
	  <p>Here are a <em>few</em> links relating to statistical alignment,
	  and especially to joint estimation of trees and alignments.
	  This page is not intended to be an overall survey of the
	  field, nor is it intended to fully credit all the important
	  work that has been done. Nevertheless, in order for this page to be useful, 
	  feel free to point out glaring omissions.</p>

	  <h2><a name="papers">Papers</a></h2>
	  <h3>Joint Estimation</h3>
	  <ol class="references">
	    <li><span class="oxford">Lunter GA, Miklós I, Drummond A,
	    Jensen JL, Hein J</span> <b>Bayesian coestimation of
	    phylogeny and sequence alignment</b> <em>BMC
	    Bioinformatics</em> <b>6</b>:83, 2005&nbsp; &nbsp; [<a href="http://www.biomedcentral.com/1471-2105/6/83">WWW</a>]</li>
	    <li><span class="rs">Redelings BD and Suchard MA</span> <b>Joint Bayesian Estimation of Alignment
	    and Phylogeny</b>, <em>Systematic Biology</em>, <b>54</b>(3):401-418, 2005&nbsp; &nbsp; [<a href="Redelings_and_Suchard_2005.pdf">PDF</a>]</li>
	    <li><span class="vienna">Roland Fleißner, Dirk Metzler and
	    Arndt von Haeseler</span>, <b>Simultaneous Statistical
	    Multiple Alignment and Phylogeny Reconstruction.</b>
	    <em>Syst. Biol.</em>, <b>54</b>:548-561, 2005</li>
	    <li><span class="rs">Suchard MA and Redelings BD</span>
	    <b>BAli-Phy: simultaneous Bayesian inference of alignment
	    and phylogeny</b>, <em>Bioinformatics</em>,
	    <b>22</b>:2047-2048, 2006 &nbsp; &nbsp; [<a
	    href="Suchard_and_Redelings_2006.pdf">PDF</a>]</li>
	    <li><span class="rs">Redelings BD and Suchard
	    MA</span>. <b>Incorporating indel information into
	    phylogeny estimation for rapidly emerging
	    pathogens</b>. <em>BMC Evolutionary Biology</em>,
	    <b>7</b>:40, 2007&nbsp; &nbsp;
	    [<a href="http://www.biomedcentral.com/1471-2148/7/40">WWW</a>, <a href="Redelings_and_Suchard_2007.pdf">PDF</a>]</li>
	  </ol>
	  
	  <h3>Statistical Multiple alignment</h3>
	  <ol class="references">
	    <li><span class="oxford">Holmes I and Bruno WJ</span>,
	    <b>Evolutionary HMMs: A Bayesian approach to multiple
	    alignment.</b>  <em>Bioinformatics</em> <b>17</b>:802-820,
	    2001. 
	    <a href="http://bioinformatics.oxfordjournals.org/cgi/reprint/17/9/803">PDF</a>
	    </li>

	    <li><span class="oxford">Holmes I</span>,
	    <b>Using guide trees to construct multiple-sequence evolutionary HMMs.</b>  <em>Bioinformatics</em> <b>19 Suppl. 1</b>:i147-i157, 2003
	    <a href="http://bioinformatics.oxfordjournals.org/cgi/reprint/19/suppl_1/i147.pdf">PDF</a>
	    </li>

	    <li><span class="oxford">Lunter GA, Drummond AJ, Miklós I, Hein J</span>, <b>Statistical Alignment: Recent Progress, New Applications, and Challenges</b>, chapter in: Rasmus Nielsen (ed), Statistical Methods in Molecular Evolution,  2004.
	    <a href="http://mathgen.stats.ox.ac.uk/bioinformatics/publications/lunter_etal_2004.pdf">PDF</a>
	    </li>

	    <li><span class="vienna">D. Metzler, R. Fleißner, A. Wakolbinger, A. von Haeseler</span>, <b>Stochastic Insertion-Deletion Processes and Statistical Sequence Alignment</b>, in: "Interacting Stochastic Systems" (J. D. Deuschel, A. Greven, eds), pp. 247-267, Springer-Verlag Berlin Heidelberg 2005. <a href="http://ismi.math.uni-frankfurt.de/wakolbinger/research/MFWvH04.pdf">PDF</a></li>
	  </ol>
	  
	  <h3>Indel models</h3>
	  <ol class="references">
	    <li>[TKF1] Thorne JL, Kishino H, Felsenstein J <b>An evolutionary model for maximum likelihood alignment of DNA sequences</b> <em>J. Mol. Evol.</em> <b>33</b>: 114-124, 1991</li>
	    <li>[TKF2] Thorne JL, Kishino H, Felsenstein J <b>Inching towards reality: An improved likelihood model of sequence evolution</b> <em>J. Mol. Evol.</em> <b>34</b>: 3-16 1992</li>
	    <li><span class="oxford">Miklós I, Lunter GA, and Holmes I</span> <b>A "Long Indel" Model For Evolutionary Sequence Alignment</b> <em>Mol. Biol. Evol.</em> <b>21</b>(3):529-540, 2004.</li>
	  </ol>

	  <hr/>

	  <h2><a name="software">Software</a></h2>
	  <ul>
	    <li><a href="http://statalign.github.io/">StatAlign</a>: Statistical Alignment in Java</li>
	    <li><a href="http://biowiki.org/HandelPackage">Handel</a>: evolutionary alignment & reconstruction with string transducers</li>
	    <li><a href="http://www.bali-phy.org">BAli-Phy</a>: <u>B</u>ayesian <u>Ali</u>gnment and <u>Phy</u>logeny Estimation</li>
	    <!-- li><a href="http://www.cibiv.at/software/alifritz/">Alifritz</a>: Simultaneous Statistical Multiple Alignment and Phylogeny Reconstruction</li> 
	    <li><a href="http://beast.bio.ed.ac.uk/Main_Page">BEAST</a>: <u>B</u>ayesian <u>E</u>volutionary <u>A</u>nalysis <u>S</u>ampling <u>T</u>rees</li -->
	  </ul>

	  <hr/>

	  <h2><a name="people">People and Research Groups</a></h2>
	  <ul>
	    <li class="oxford">Oxford &amp;c.
	    <ul>
	      <li>Jotun Hein [<a href="http://www.stats.ox.ac.uk/people/academic_staff/jotun_hein">WWW</a>]</li>
	      <li>Gerton A. Lunter [<a href="http://wwwfgu.anat.ox.ac.uk/~gerton/">WWW</a>]</li>
	      <li>István Miklós [<a href="http://www.renyi.hu/~miklosi/">WWW</a>]</li>
	      <li>Ian Holmes [<a href="http://biowiki.org/HolmesLab">WWW</a>]</li>
	      <li>Jens L. Jensen [<a href="http://home.imf.au.dk/jlj/">WWW</a>]</li>
	      <li>Alexei Drummond [<a href="http://www.cs.auckland.ac.nz/~alexei/">WWW</a>]</li>
	    </ul>
	    </li>

	    <li class="vienna">Vienna &amp;c.
	    <ul>
	      <li>Roland Fleißner [WWW???]</li>
	      <li>Dirk Metzler [<a href="http://www.informatik.uni-frankfurt.de/~metzler/">WWW</a>]</li>
	      <li>Arndt von Haeseler [<a href="http://www.cibiv.at/~haeseler/">WWW</a>]</li>
	    </ul>
	  </li>
	    
	    <li class="rs">UCLA &amp;c.
	    <ul>
	      <li>Marc A. Suchard [<a href="http://www.biomath.ucla.edu/msuchard/">WWW</a>]</li>
	      <li>Benjamin D. Redelings [<a href="http://www4.ncsu.edu/~bdredeli/">WWW</a>]</li>
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
