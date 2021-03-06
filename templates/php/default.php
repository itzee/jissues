<?php
/**
 * User: elkuku
 * Date: 16.05.13
 * Time: 15:33
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo $this->uri->base->path ?>css/template.css" rel="stylesheet" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
	<style type="text/css">
		h1, h2, h3, h4, h5, h6, .site-title {
			font-family: 'Open Sans', sans-serif;
		}
	</style>
	<title>Joomla! Tracker<!--{% block title %}Joomla! Tracker{% endblock %}--></title>
</head>

<body class="site">
<!--{% block nav %}-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<div class="nav-collapse">
				<ul id="nav-joomla" class="nav ">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true"
						                                                                 class="icon-joomla"></span>
							Joomla!
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="http://www.joomla.org/"><span aria-hidden="true" class="icon-joomla"></span>
									Joomla! Home</a>
							</li>
							<li class="divider"><span></span></li>
							<li class="nav-header"><span>Recent News</span></li>
							<li><a href="http://www.joomla.org/announcements.html">Announcements</a></li>
							<li><a href="http://community.joomla.org/blogs/community.html">Blogs</a></li>
							<li><a href="http://magazine.joomla.org/">Magazine</a></li>
							<li class="divider"><span></span></li>
							<li class="nav-header"><span>Support Joomla!</span></li>
							<li><a href="http://shop.joomla.org/">Shop Joomla Gear</a></li>
							<li><a href="http://opensourcematters.org/support-joomla.html">Contribution</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.joomla.org/about-joomla.html">About Joomla!</a>
							<li><a href="http://www.joomla.org/about-joomla.html">The Software</a></li>
							<li><a href="http://www.joomla.org/about-joomla/the-project.html">The Project</a></li>
							<li>
								<a href="http://www.joomla.org/about-joomla/the-project/leadership-team.html">Leadership</a>
							</li>
							<li><a href="http://opensourcematters.org/index.php">Open Source Matters</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Community
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://people.joomla.org/">Joomla! People Site</a></li>
							<li><a href="http://community.joomla.org/events.html">Joomla! Events</a></li>
							<li><a href="http://community.joomla.org/connect.html">Joomla! User Groups</a></li>
							<li><a href="http://community.joomla.org/user-groups.html">Joomla! Connect</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Support
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://forum.joomla.org/">Joomla! Forum</a></li>
							<li><a href="http://docs.joomla.org/">Joomla! Documentation</a></li>
							<li><a href="http://resources.joomla.org/">Joomla! Resources</a></li>
							<li><a href="http://www.joomla.org/mailing-lists.html">Joomla! Mailing Lists</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Extend
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://extensions.joomla.org/">Extensions Directory</a></li>
							<li><a href="http://community.joomla.org/showcase/">Showcase Directory</a></li>
							<li><a href="http://resources.joomla.org/">Resource Directory</a></li>
							<li><a href="http://community.joomla.org/translations.html">Translations</a></li>
							<li><a href="http://ideas.joomla.org/">Idea Pool</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Developers
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://developer.joomla.org/">Developer Site</a></li>
							<li><a href="http://docs.joomla.org/">Documentation</a></li>
							<li><a href="http://ux.joomla.org/">Joomla! User Experience</a></li>
							<li><a href="http://docs.joomla.org/Bug_Squad">Joomla! Bug Squad</a></li>
							<li><a href="http://api.joomla.org/">Joomla! API</a></li>
							<li><a href="http://joomlacode.org/">JoomlaCode</a></li>
							<li><a href="https://github.com/joomla/joomla-platform">Joomla! Platform</a></li>
						</ul>
					</li>
				</ul>
				<ul id="nav-international" class="nav pull-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true"
						                                                                 class="icon-comments"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://community.joomla.org/translations.html">Translations</a></li>
							<li><a href="http://multilingual-joomla-demo.cloudaccess.net/">Multilingual Demo</a>
							</li>
							<li>
								<a href="http://docs.joomla.org/Translations_Working_Group">Translation Working
									Group</a>
							</li>
							<li><a href="http://forum.joomla.org/viewforum.php?f=11">Translations Forum</a></li>
						</ul>
					</li>
				</ul>
				<form id="nav-search" class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
</nav>
<!--{% endblock %}-->


<header class="header">
	<div class="container">
		<div class="row-fluid">
			<!--{% block header %}-->
			<div class="span7">
				<h1 class="page-title"><!--{% block headerText %}-->Joomla! Tracker<!--{% endblock %}--></h1>
			</div>
			<div class="span5">
				<div class="btn-toolbar pull-right">
					<div class="btn-group">
						<a href="http://www.joomla.org/download.html" class="btn btn-large btn-warning">Download
							<span class="hidden-tablet">Joomla</span></a>
					</div>
					<div class="btn-group">
						<a href="http://demo.joomla.org/" class="btn btn-large btn-primary">Demo
							<span class="hidden-tablet">Joomla</span></a>
					</div>
				</div>
			</div>
			<!--{% endblock %}-->
		</div>
	</div>
</header>

<div class="subnav" data-spy="affix" data-offset-top="68">
	<div class="container">
		<!--{% block subnav %}-->
		<?php include __DIR__ . '/trackerMenu.php' ?>
		<!--{% endblock %}-->
	</div>
</div>

<div class="body">
	<div class="container">
		[[component]]
	</div>
</div>

<div class="footer center">
	<div class="container">
		<!--{% block footer %}-->
		<div class=" footer-menu">
			<ul class="nav-inline">
				<li class="item97">
					<a href="http://www.joomla.org"><span>Home</span></a>
				</li>
				<li class="item110"><a href="http://www.joomla.org/about-joomla.html"><span>About</span></a>
				</li>
				<li class="item98"><a href="http://community.joomla.org"><span>Community</span></a></li>
				<li class="item99"><a href="http://forum.joomla.org"><span>Forum</span></a>
				</li>
				<li class="item100"><a href="http://extensions.joomla.org"><span>Extensions</span></a></li>
				<li class="item206"><a href="http://resources.joomla.org"><span>Resources</span></a>
				</li>
				<li class="item102"><a href="http://docs.joomla.org"><span>Docs</span></a></li>
				<li class="item101"><a href="http://developer.joomla.org"><span>Developer</span></a>
				</li>
				<li class="item103"><a href="http://shop.joomla.org"><span>Shop</span></a>
				</li>
			</ul>

			<ul class="nav-inline">
				<li><a href="http://www.joomla.org/accessibility-statement.html">Accessibility Statement</a></li>
				<li><a href="http://www.joomla.org/privacy-policy.html">Privacy Policy</a></li>
				<li>
					<a href="https://www.rochen.com/joomla-hosting" target="_blank">Joomla Hosting by Rochen Ltd.</a>
				</li>
			</ul>

			<p>&copy; 2005 - <?php echo date('Y') ?>
				<a href="http://www.opensourcematters.org">Open Source Matters, Inc.</a> All rights reserved.</p>
		</div>
		<!--{% endblock %}-->
	</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo $this->uri->base->path ?>js/bootstrap.min.js"></script>
</body>
</html>
