<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top='.'; ?>
  <?php $page='Download'; ?>
  <?php require('lib/phplib.inc') ?>
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
	    
	  <h2><a name="download">Download</a></h2>

	  <p>Please see the detailed <a href="README.xhtml#installation">installation instructions</a>.</p>
	  <!-- I should add an outline here of subsections under installation -->

	  <h3>Current (stable) release</h3>
	  <ul>
	    <li style="padding-bottom:1em"><b>3.6.0</b> (<a href="releases/3/">Changes</a>): 

	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.6.0-linux64.tar.gz","Linux&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.6.0-mac64.tar.gz","Mac&nbsp;64-bit&nbsp;(Mavericks)") ?>]
	    &nbsp;&nbsp;[<?php track_link("files/bali-phy-3.6.0-win64.tar.gz","Windows&nbsp;64-bit") ?>]
	    &nbsp;&nbsp;[<a href="https://github.com/bredelings/BAli-Phy">git</a>]</li>
	  </ul>
	  <p>You can now install using a package manager on some systems:
	    <ul>
	      <li><b>Mac</b>: homebrew users can install with <em>brew</em>.
		<pre class="screen"><code class="prompt">% </code><strong><code>brew tap brewsci/bio</code></strong>
<code class="prompt">% </code><strong><code>brew install bali-phy</code></strong></pre>

	      </li>
	      <li><b>Linux</b>: Debian and Ubuntu users can install with <em>apt-get</em>.
	      	<pre class="screen"><code class="prompt">% </code><strong><code>apt-get install bali-phy</code></strong>
<code class="prompt">% </code><strong><code>bali-phy --version</code></strong></pre>
	      </li>
	      <p>Check the latest version available in: [<a href="https://packages.debian.org/search?keywords=bali-phy&searchon=names&section=all">Debian</a>] [<a href="https://launchpad.net/ubuntu/+source/bali-phy/">Ubuntu</a>]</p>

              <p class="warningbox"><b>Note</b>: 
                For now, Ubuntu LTS users should probably download the TAR archives above instead of using apt. (See <a href="https://github.com/bredelings/BAli-Phy/issues/9">issue #9</a>)
              </p>

	    </ul>
	    
	  </p>

	<h3>Older releases</h3>
	<ul>
	  <li><b>2.3</b> (<a href="releases/2.3/">Changes</a>)</li>
	  <li><b>2.2</b> (<a href="releases/2.2/">Changes</a>)</li>
	  <li><b>2.1</b> (<a href="releases/2.1/">Changes</a>)</li>
	  <li><b>2.0</b> (<a href="releases/2.0/">Changes</a>)</li>
	  <li><b>&lt;2</b> (<a href="releases/pre/">Changes</a>)</li>
	</ul>

      </div>
      </td>  
    </tr>
  </table>
    
  <?php baliphy_footer(); ?>
</body>
</html>
