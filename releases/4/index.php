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

          <p>Version 4 is under development and will contain a number of new features.  You can preview it by
            <a href="https://github.com/bredelings/BAli-Phy/releases">downloading a pre-release</a> or compiling the git master branch at
            <a href="https://github.com/bredelings/BAli-Phy">https://github.com/bredelings/BAli-Phy</a>.</p>

          <p>New features so far include:
            <ul>
              <li><b><a href="../../models.php">probabilistic programming language</a></b> - describe your own phylogenetic models.</li>
              <li><b>type checking</b> for the model language</li>
              <li><b>improved MCMC</b> - slice-sampling by doubling.</li>
              <li><b>decreased RAM usage</b></li>
              <li><b>better command-line model language</b></li>
            </ul>
          </p>

          <p>New features will include
            <ul>
              <li><b>Non-reversible markov models</b>.</li>
              <li><b>Faster alignment</b> for long sequences.</li>
	      <li><b>Time Trees and the relaxed clock</b>. Rooted trees implemented as a data structure within the language. (<em>partially implemented</em>)</li>
              <li><b>more flexible models</b> - easily change dimensions without reversible jump. (<em>partially implemented</em>)</li>
              <li><b>Custom MCMC moves</b>. The ability to add custom MCMC transition kernels will be added. (<em>partially implemented</em>)</li>
              <li><b>RNA stem models</b> - model RNA stems and loops (fixed alignments)</li>
          </ul>

          <p>See the <a href="https://github.com/bredelings/BAli-Phy/blob/master/NEWS">NEWS</a> file for more details</p>



	</div>
	  </td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
