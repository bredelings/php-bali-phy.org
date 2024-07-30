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
	  <h2><a name="news">Version 4 (unreleased)</a></h2>

          <p>Version 4 is under development.  It already contains a number of new features, and more are in progress.
          See the <a href="https://github.com/bredelings/BAli-Phy/blob/master/NEWS">NEWS</a> for current progress.</p>

          <p>You can try out the development by <a href="https://github.com/bredelings/BAli-Phy/releases">downloading a pre-release</a>.
          You can also compile the <a href="https://github.com/bredelings/BAli-Phy">source code from github</a>.</p>

          <h3>New features</h3>
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
            <!-- li><b>better command-line model language</b></li -->
          </ul>

          <h3>In progress features</h3>
          <ul>
            <li><b>Faster alignment</b> for long sequences.</li>
	    <li><b>Time Trees and the relaxed clock</b>. Rooted trees implemented as a data structure within the language. (<em>partially implemented</em>)</li>
            <li><b>Custom MCMC moves</b>. The ability to add custom MCMC transition kernels will be added. (<em>partially implemented</em>)</li>
            <li><b>RNA stem models</b> - model RNA stems and loops (fixed alignments)</li>
            <li><b>Site and letter properties</b>: evolutionary rate, positive selection, etc.</li>
            <li><b>ascertainment bias</b>: variable sites.</li>
            <li><b>allow simulating from phyloCTMC</b></li>
            <li><b>Add dNdS branch models</b></li>
          </ul>

          
	</div>
	</td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
