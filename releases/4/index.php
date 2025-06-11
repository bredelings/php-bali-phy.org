<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top="../.."; ?>
  <?php $page="Release 4.*"; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
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

	  <p>See the <a href="https://github.com/bredelings/BAli-Phy/blob/master/NEWS">NEWS</a> file for more information.</p>

	  <div class="release_dates"><b style="font-size:125%">Version 4 (stable):</b>
          <ul>
	    <li><b>[4.0]</b> - Feb-28-2025</li>
	    <li><b>[4.1]</b> - Jun-09-2025</li>
          </ul>
          </div>

	  <ul class="changelog">
	    <li>Speed &amp; Memory
	      <ul>
  	        <li><b>Memory:</b> Fix excess memory usage on large trees in 3.5-3.6</li>
              </ul>

	    <li>Models
	      <ul>
	        <li class="heading2">Codon models:
                  <ul>
                    <li>BUSTED and BUSTED-S model</li>
                    <li>Multi-nucleotide mutation (MNM) models</li>
                    <li>Non-standard genetic codes</li>
                  </ul>
                <li class="heading2">Modeling language:
                  <ul>
                    <li>See <a href="../../models.php">Probabilistic Programming language</a></li>
                  </ul>
                <li class="heading2">Non-reversible and non-equilibrium substitution models
                </li>
                <li class="heading2">Relaxed rates
                  <ul>
                    <li>Branch-specific insertion-deletion rates.</li>
                  </ul>
              </ul>
            </ul>
          </ul>

          <!-- h3>New features</h3>
          <ul>
            <li><b><a href="../../models.php">Model language</a></b> - describe your own phylogenetic models.</li>
            <li><b>more flexible models</b> - easily change dimensions without reversible jump. (<em>partially implemented</em>)</li>
            <li><b>Non-reversible and non-equilibrium markov models</b>.
              <ul>
                <li>Compositional heterogeneity model (in progress)</li>
                <li>Non-reversible rate matrix.</li>
              </ul>
            </li>
            <li>Codon models: allow using any genetic code</li>
            <!-- li><b>type checking</b> for the model language</li -->
            <!-- li><b>improved MCMC</b> - slice-sampling by doubling.</li -->
            <!-- li><b>decreased RAM usage</b></li -->
            <!-- li><b>better command-line model language</b></li>
          </ul>

          <h3>In progress features</h3>
          <ul>
            <li><b>Faster alignment</b> for long sequences.</li>
	    <li><b>Time Trees and the relaxed clock</b>. Rooted trees implemented as a data structure within the language. (<em>partially implemented</em>)</li>
            <li><b>Custom MCMC moves</b>. The ability to add custom MCMC transition kernels will be added. (<em>partially implemented</em>)</li>
            <li><b>RNA stem models</b> - model RNA stems and loops (fixed alignments)</li>
            <li><b>Site and letter properties</b>: evolutionary rate, positive selection, etc.</li>
            <li><b>ascertainment bias</b>: variable sites.</li>
            <li><b>Simulation from phyloCTMC/phyloAlignment</b></li>
            <li><b>dNdS branch models</b></li>
            <li><b>dNdS using Bayesian inference tutorial</b></li>
          </ul-- >

          
	</div>
	</td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
