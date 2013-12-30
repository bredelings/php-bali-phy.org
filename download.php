<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<?php navbar(); ?>

	<div class="main">
	    
	  <h2><a name="download">Download</a></h2>

	<p>We provide both source code and binary executables.  We
	currently provide executables for Windows, Mac OS X, and Linux.
	If you provide us with additional executables then we
	will post these as well. 
	Some <a href="#req">additional software</a> may be required.</p>

	<h3>Current Release</h3>
	<ul>
	  <li style="padding-bottom:1em"><b>2.2.0</b>: <?php track_link("bali-phy-2.2.0.tar.gz","source") ?>  (4.5M) - <a href="news.php#2.2.0">What's new?</a>
	    <ul>
	      <li>Linux
		<ul>
		  <!-- li>32-bit: <?php track_link("bali-phy-2.2.0-linux32.tar.gz","Pentium4 (43M)") ?></li -->
		  <li>64-bit: <?php track_link("bali-phy-2.2.0-linux64.tar.gz","Intel (41M)") ?></li>
		</ul>
	      </li>
	      <li>Mac OS 10.8 and up
		<ul>
		  <!-- li>32-bit: <?php track_link("bali-phy-2.2.0-mac32.tar.gz","Intel (??M)") ?></li -->
		  <li>64-bit: <?php track_link("bali-phy-2.2.0-mac64.tar.gz","Intel (55M)") ?></li>
		  <!-- li><a href="http://www.macports.org">MacPorts</a>: not ready yet. -->
		</ul>
	      </li>
	      <li>Windows (Vista, XP, 7, 8)
		<ul>
		  <li>32-bit: <?php track_link("bali-phy-2.2.0-win32.tar.gz","Intel (51M)") ?></li>
		  <li>62-bit: <?php track_link("bali-phy-2.2.0-win64.tar.gz","Intel (59M)") ?></li>
		</ul>
	      </li>
	    </ul>
	  </li>
	</ul>

	<h3>Previous Release</h3>
	<ul>
	  <li style="padding-bottom:1em"><b>2.1.1</b>: <?php track_link("bali-phy-2.1.1.tar.gz","source") ?>  (11M) - <a href="news.php#2.1.1">What's new?</a>
	    <ul>
	      <li>Linux 2.6.18+
		<ul>
		  <li>32-bit: <?php track_link("bali-phy-2.1.1-linux32.tar.gz","Pentium4 (43M)") ?></li>
		  <li>64-bit: <?php track_link("bali-phy-2.1.1-linux64.tar.gz","Intel (50M)") ?></li>
		</ul>
	      </li>
	      <li>Mac OS 10.4 and up
		<ul>
		  <li>32-bit: <?php track_link("bali-phy-2.1.1-mac32-intel.tar.gz","Intel (17M)") ?></li>
		  <li>64-bit: <?php track_link("bali-phy-2.1.1-mac64-intel.tar.gz","Intel (18M)") ?></li>
		</ul>
	      </li>
	      <li>Windows (7, Vista, XP)
		<ul>
		  <li>32-bit: <?php track_link("bali-phy-2.1.1-mingw32-p4.tar.gz","Pentium 4 (29M)") ?></li>
		  <li>64-bit: not available yet.</li>
		</ul>
	      </li>
	    </ul>
	  </li>
	</ul>
	


	<!-- p>Mac OS X users note: some browsers may automatically append a '.gtar' to the end of these files.  Uncompression tool 'tar' will still recognize and uncompress these files.</p -->

	<h3><a name="req">Requirements</a></h3>

	<p>BAli-Phy should run on any hardware with any modern operating
	system, including Linux, Windows, and Mac OS X.  Some
	additional software must be installed, such as <a
	href="http://www.cygwin.com">cygwin</a> on Windows.
	To see the requirements in detail, view these sections in the
	Users Guide:</p> 

	<h4><a href="README.html#pre-requisites">1. Pre-requisites</a></h4>
	<ol>
	  <li><a href="README.html#hardware_requirements">Hardware Requirements</a></li>
	  <li><a href="README.html#os_requirements">Operating System requirements</a>
	  <ol>
	    <li>Linux and Unix</li>
	    <li>Windows</li>
	    <li>Mac OS X</li>
	  </ol>
	  </li>
	  <li><a href="README.html#software_req">Software Requirements</a>
	  <ol>
	    <li>Compilation Requirements</li>
	    <li>Requirements for analyzing BAli-Phy Output</li>
	    <li>Recommendations for analysis and documentation</li>
	  </ol>
	  </li>
	</ol>

	<h3><a name="compilation">Compilation</a></h3>
	<p>Note that most people won't need to compile BAli-Phy - you can just use the precompiled binaries posted above.</p>
	<p>To compile BAli-Phy, first download the source code posted above.  Then see the section in the <a href="help.php#usersguide.php">User's Guide</a> on compilation:</p>
	<ul>
	<li><a href="README.html#compilation">2. Compiling BAli-Phy</a></li>
	</ul>
	<h3><a name="sourcecode">"Live" Source Code</a></h3>

	<p>Snapshots of current unreleased BAli-Phy source code including recent changes can be 
obtained using <a href="http://git-scm.com/">git</a>.  Git is a free source-code management system, as are CVS and subversion.  However, Git is a distributed instead of centralized.  You can <a href="http://github.com/bredelings/BAli-Phy">view the source code</a> online.
	</p>
	<ul>
	  <li><strong>Public repository:</strong> git://github.com/bredelings/BAli-Phy.git</li>
          <li><strong>Development:</strong> "master" branch. (version 2.1 - next version)
          <li><strong>Stable:</strong> "2.0" branch. (version 2.0 - current version)
	</ul>

<p>You can type "git clone git://github.com/bredelings/BAli-Phy.git" to download a local copy.</p>

      </div>
      </td>  
    </tr>
  </table>
    
  <?php baliphy_footer(); ?>
</body>
</html>
