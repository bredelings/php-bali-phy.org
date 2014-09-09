 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <?php $page='Contact'; ?>
  <?php require('lib/phplib.inc') ?>
  <head>
    <?php baliphy_head(); ?>
    <title>BAli-Phy: Software for Bayesian Estimation of Alignment and Phylogeny</title>
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
	    <?php navbar(); ?>
	    <div class="main">

            <h2><a name="bug_reports">Bug reports</a></h2>
	    <p>Bug reports are appreciated!  Please send bug reports
	    to <a href="mailto:bali-phy-users@googlegroups.com">bali-phy-users@googlegroups.com</a>.
	    Please include the full error message, the version number
	    and command line for bali-phy, and any other relevant information.
	    </p> 

            <h2><a name="lists">Mailing Lists</a></h2>
            <h3>bali-phy-announce</h3>
            <p><a href="http://groups.google.com/group/bali-phy-announce/">bali-phy-announce</a> is a low-volume mailing list for announcements of new BAli-Phy versions.  Subscribe if you want to be notified when a new version is released.</p>
            <ul class="floatlist">
              <li><a href="http://groups.google.com/group/bali-phy-announce/about">Info</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/subscribe">Join</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/post">Post</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-announce/topics">Past&nbsp;Announcements</a></li>
            </ul>


            <h3>bali-phy-users@googlegroups.com</h3>
            <p><a href="http://groups.google.com/group/bali-phy-users/">bali-phy-users</a> is a list for asking and answering questions about using bali-phy.  Just send e-mail to bali-phy-users@googlegroups.com if you have questions!</p>

            <ul class="floatlist">
              <li><a href="http://groups.google.com/group/bali-phy-users/about">Info</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/subscribe">Join</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/post">Post</a></li>
              <li><a href="http://groups.google.com/group/bali-phy-users/topics">Discussions</a></li>
            </ul>

	    </div>
	  </td>
      </tr>
    </table>
    
    <?php baliphy_footer(); ?>
  </body>
</html>
