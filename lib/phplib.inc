<?php
function baliphy_footer() {
   $real_date = date("F d, Y.", getlastmod()); 

   echo  "<div style=\"font-size:70%;\">\n";
   echo "<hr>\n";
   echo "<strong>comments and suggestions:</strong> benjamin . redelings * gmail + com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
//   echo "Last revised: ".Date("M d g:i:s, Y",getLastMod())."<br>";
   print "</div>\n\n";
};

function baliphy_page_scripts()
{
   print '<script>
  (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,"script","//www.google-analytics.com/analytics.js","ga");

  ga("create", "UA-46786781-1", "bali-phy.org");
  ga("send", "pageview");

</script>

<script type="text/javascript">

function get_path()
{
  var dir = location.pathname;
  dir = dir.replace(/\/[^\/]*$/,"/")
  return dir;
}

function bp_path()
{
  var dir = get_path();
  dir = dir.replace(/bali-phy.*/,"bali-phy/")
  return dir;
}

function full_path_name(name)
{
  if (!name.match(/^\/.*$/)) {
    name = get_path()+name;
  }
  return name;
}

function register_download(name)
{
  ga("send","pageview",full_path_name(name));
  ga("send","event","link", "download", full_path_name(name), 1);
}
</script>
';
}

function baliphy_logo()
{
  global $top;
  print"<h1 style=\"display:table-cell;padding:0.2em;padding-bottom:0.8em\">";
  include "{$top}/bali-phy-logo.html";
  print"</h1>\n";
}

function baliphy_header() 
{
  baliphy_page_scripts();

#  baliphy_logo();

#  print "<h2 style=\"display:table-cell\">";
#  print "<span style=\"font-style:italic\"><u>B</u>ayesian <u>Ali</u>gnment an#d <u>Phy</u>logeny estimation</span>";
#  print "</h2>\n";
}

function baliphy_head() {
  global $menutree;
  global $page;
  global $top;
  $id = $page;
  if (func_num_args()==1) 
    $id = func_get_arg(0);

  print  "<title>BAli-Phy: $id </title>";

    print "
	<link rel=\"icon\" href=\"{$top}/favicon.ico\" type=\"image/x-icon\"/>
	<link rel=\"shortcut icon\" href=\"{$top}/favicon.ico\" type=\"image/x-icon\"/>

    	<link rel=\"stylesheet\" type=\"text/css\" href=\"{$top}/Style/layout.css\"/>
    	<link rel=\"stylesheet\" type=\"text/css\" href=\"{$top}/Style/colorscheme.css\"/>
    	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"/>

    	<meta name=\"keywords\" content=\"bayesian, statistical alignment, phylogeny, indel\"/>
";
}

function navbar() {
  global $page;
  $id = $page;
  if (func_num_args()==1) {
    $id = func_get_arg(0);
  }
  
  print "\n";
  print "<div class=\"menubar\">\n";
  
  global $menutree;

  /*    
  print "	<span class=\"path\">";
  $menutree->print_path($id);
  print "</span>\n";
  */

  $root = $menutree->get_entry('Top');
  print "	<span class=\"navbar\">\n";
  foreach($root->children as $child) {
    print "<span class=\"navitem\">";
    if (isset($child->url)) {
      print "<a href=\"{$child->url}\">{$child->title}</a>";
    }
    else {
      print "<a>{$child->title}</a>";
    }
    print "</span>\n";
  }

  print "	</span>\n";
  print "</div>\n";
}

/*
  make it go two steps, then two steps down, but three step down through parent
  reorganize sections that have one giant page
  have a context-sensitive 'related links' section below the <hr> that would include
     current/past students, and the links to the grad program for the 'Grad Program' sections
  fix the styling so that top sections headings can get highlighted also
  try to get it working on IE
  steal the arrows from smb.org for unexpanded sections

  also make context-sensitive links for class names
  check IE5?
*/

function dirtree() {
  global $menutree;

  print "<td valign=\"top\" class=\"sidebar\">\n";

  baliphy_logo();

  print "  <div class=\"sidemenu\">";
  $menutree->draw_id('Top',2);
  print "  </div>\n";

  print "</td>\n";
}

/*  How shall we store the tree?
	Shall we store them in an array, and have them refer to one another by index?
	Shall we store them in a tree, using references?
    I think the content should just be a simple HTML string - but then how can we refer to pages by their title?
    Do the path first!  Maybe do it w/o links first.
*/

class MenuEntry {
  var $title;
  var $url;
  var $parent;
  var $children;
  function MenuEntry($arg1,$arg2) {
    $this->title = $arg1;
    if ($arg2 != "") $this->url   = $arg2;
    $this->children = array();
  }
}

class Menu {
  var $entries;

  function& get_entry($title) {
    $entry =& $this->entries[$title];
    if (!isset($entry)) {
      print "<p><b>error:</b> there is no node called '{$title}'</p>\n";
      return NULL;
    }
    if ($entry == "ambiguous") {
      print "<p><b>error:</b> '{$title}' is ambiguous</p>\n";
      return NULL;
    }
    return $entry;
  }

  function exists($title) {
    $entry =& $this->entries[$title];
    if (isset($entry)) return 1;
    return 0;
  }

  function ambiguous($title) {
    return ($this->entries[$title] == "ambiguous");
  }

  function AddEntry($entry,$parents_id) {
    /* Attatch to parents */
    $parent =& $this->get_entry($parents_id);
    array_push($parent->children,$entry);
    $entry->parent =& $parent;

    /* Insert into name hash */
    $id = $entry->title;
    $here =& $entry;

    do {
      if ($this->exists($id)) {
	$ambiguous = "ambiguous";
	$this->entries[$id] =& $ambiguous;
      } 
      else {
	$this->entries[$id] =& $entry;
      }
      if (isset($here->parent)) {
	/*	print "<p>$id</p>"; */
	$here =& $here->parent;
	$id = $here->title.">>".$id;
      } 
      else
	break;
      
    } while(1);
    /*    print "<p>$id</p>"; */
  }

  function Menu() {
    global $top;
    $this->entries['Top'] = new MenuEntry('Top',"{$top}");
  }

  function add_children($parent,$children) {
    global $top;
    foreach($children as $child) {
      list($title,$url) = explode('::',$child);
      $this->AddEntry(new MenuEntry($title,"{$top}/{$url}"),$parent);
    }
  }

  /* make this function take a node, and do a depth first traversal */

  function id($node) {
    $id = $node->title;
    while($this->ambiguous($id)) {
      $node =& $node->parent;
      $id = $node->title.">>".$id;
    }
    return $id;
  }

  function ancestor($parent,$child) {
    while (isset($child)) {
      if ($this->id($parent) == $this->id($child))
	return 1;
      $child =& $child->parent;
    }
    return 0;
  }

  function draw_id($root_id) {
    $depth = -1;
    if (func_num_args()==2)
      $depth = func_get_arg(1);

    $root = $this->get_entry($root_id);
    $this->draw($root,$depth,array());
  }

  function draw($root,$depth,$attributes) {
    print "<ul>\n";
    global $page;

    $depth--;
    foreach($root->children as $child) {
      print "<li";
      if (isset($page) && $this->id($child) == $page)
	print ' class="current"';
#      if (sizeof($child->children)>0 && $depth ==0)
#	print ' style="list-style-image:url(\'/images/false.png\')"';
      print  ">";

      if (isset($child->url)) 
	print "<a href=\"{$child->url}\">{$child->title}</a>";
      else 
	print "<a>{$child->title}</a>";
      if ($depth >= 0 && sizeof($child->children)>0) 
         $this->draw($child,$depth,$attributes);
      print "</li>\n";
    }

    print "</ul>\n";
  }

  function get_ancestors($id) {
    $entry =& $this->get_entry($id);
    $path = array(&$entry);
    while (isset($entry->parent)) {
      $entry =& $entry->parent;
      array_unshift($path,$entry);
    }
    return $path;
  }


  function print_path($id) {
    $path = $this->get_ancestors($id);
    $entry = array_pop($path);
    $title = $entry->title;

    foreach ($path as $item) {
      if (isset($item->url)) {
	print "<a href=\"{$item->url}\">{$item->title}</a> > ";
      }
      else {
	print "{$item->title} > ";
      }
    }
    print "$title";
  }

  function print_path2($id) {
    $path = $this->get_ancestors($id);
    array_shift($path);

    foreach ($path as $item) 
      print " > ".$item->title;

  }
}

$menutree = new Menu();

$menutree->add_children('Top',
			array('Welcome!::index.php',
#			      'Graphical&nbsp;Models::models.php',
#			      'Versions::releases/',
			      'Download::download.php',
			      'Examples::examples.php',
			      'Documentation::docs.php',
			      'Developer::developer/',
			      'Contact::contact.php')
			);

#$menutree->add_children('Versions',
#			array('3.0 beta1::releases/3/',
#			      'Release 2.3 *::releases/2.3/',
#			      'Release 2.2::releases/2.2/',
#			      'Release 2.1::releases/2.1/'
#			      )
#			);
		 
$menutree->add_children('Welcome!',
			array('Introduction::index.php#intro',
			      'References::index.php#refs')
			);
		 
#$menutree->add_children('Download',
#			array('Versions::download.php#releases',
# 		  	      'Requirements::download.php#req',
#			      'Compilation::download.php#compilation'
#			      '"Live"&nbsp;Sources&nbsp;(GIT)&nbsp;&nbsp;&nbsp;&nbsp;::download.php#sourcecode'
#			      )
#			);
		 

$menutree->add_children('Documentation',
			array('Users Guide::docs.php#usersguide',
			      'Tutorial::Tutorial4.html',
			      'Manual pages::docs.php#manpages')
			);
		 
$menutree->add_children('Developer',
			array('Developers Guide::developer/',
			      'Probabilistic<br/>&nbsp;&nbsp;&nbsp;Programming::models.php' )
			);

$menutree->add_children('Contact',
			array('Bug reports::contact.php#bug_reports',
			      'Mailing lists::contact.php#lists')
			);
		 
#$menutree->add_children('Mailing lists',
#			array('bali-phy-announce',
#	                      'bali-phy-users')
#			);
		 

function track_link($link,$name){
  print "<a href=\"{$link}\" onclick=\"javascript:register_download('{$link}');\">{$name}</a>";
}


