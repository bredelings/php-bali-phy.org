 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php $top=".."; ?>
  <?php $page='Developer'; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Developer Information</title>
    <style type="text/css">
    ul.floatlist {float: left; padding-top: 0; margin-top: 0; }
    ul.floatlist li {list-style-type:none;
		     float: left;
		     padding: 1em;
		     margin:1em;
		     width:10em;
		     background-color:rgb(235,235,235);
		     border-radius: 1em;
		     height: 3em;
		    }
h1,h2,h3,h4 {clear: both;}
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

	      <h2>Developer Information</h2>

	      <h3>Joining the BAli-Phy development community</h3>

	    <p>BAli-Phy is an open-source project with a collaborative development model.  Everyone is free to clone the <a href="http://github.com/bredelings/BAli-Phy">GitHub repository</a>. If you would like to implement new models, distributions, or statistical methods inside the BAli-Phy framework, you can contribute your work by issuing a pull request on GitHub. Questions can be asked on the <a href="http://groups.google.com/group/bali-phy-users/">mailing list</a>. Before starting the developer documentation, you might want to start with the <a href="../docs.php">user documentation</a>.</p>

	    <h3>Developers Guide</h3>
	    <ul class="floatlist">
	      <li><a href="git.html">Contributing changes with Git</a></li>
	      <li><a href="building.html">Building and installing bali-phy</a></li>
	      <li><a href="code.html">Overview of source code</a></li>
	      <li><a href="add_function.html">Adding a function</a></li>
	      <li><a href="builtin.html">Adding a C++ function</a></li>
	      <li><a href="distribution.html">Adding a probability distribution</a></li>
	      <li><a href="mcmc_move.html">Adding an MCMC move</a></li>
	      <li><a href="tests.html">Adding a test</a></li>
	      <li><a href="binding.html">Binding a command line function</a></li>
	      <!-- li><a href="developer.html">Adding new models, distributions, etc.</a></li -->
	      <li><a href="../models.php">Experimental: Graphical Models</a></li>
	    </ul>
	    </div>
	  </td>
      </tr>
    </table>

    <?php baliphy_footer(); ?>
  </body>
</html>
