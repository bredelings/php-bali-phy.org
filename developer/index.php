 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <?php $top=".."; ?>
  <?php $page='Developer'; ?>
  <?php require("{$top}/lib/phplib.inc") ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Developer Information</title>
    <style type="text/css">
    ul.floatlist {float: left; padding-top: 0; margin-top: 0; }
    ul.floatlist li {float: left; padding-right: 4em; }
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

	      <h4>Joining the BAli-Phy development community</h4>

	    <p>BAli-Phy is an open-source project with a collaborative development model.  Everyone is free to clone the <a href="http://github.com/bredelings/BAli-Phy">GitHub repository</a>.  Questions can be asked on the <a href="">mailing list</a>.</p>
	    <p>If you would like to implement new models, distributions, or statistical methods inside the BAli-Phy framework, you can </p>

	    <h3>Developers Guide</h3>
	    <ul class="floatlist">
	      <li><a href="developer.html">Introduction</a>: How to add new models, distributions, etc.</li>
	      <li><a href="../models.php">Experimental: Graphical Models</a></li>
	    </ul>
	    </div>
	  </td>
      </tr>
    </table>

    <?php baliphy_footer(); ?>
  </body>
</html>
