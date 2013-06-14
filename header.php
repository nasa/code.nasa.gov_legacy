<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="description" content="A resource for open source software at NASA">
	<meta name="author" content="Sean Herron">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tablesorter.min.js"></script>
	<?php if ( is_search() == 1 ) {
		print '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.twitter.js"></script>';
	}
	?>
	<?php if ( is_archive() == 1 ) {
		print '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.twitter.js"></script>';
	}
	?>
	<?php if ( is_404() == 1 ) {
		print '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jquery.twitter.js"></script>';
	}
	?>
	<?php wp_head(); ?>
  </head>

  <body>
	<div class="container">
	
		<header>
			<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/code.png" alt="code.nasa.gov"></h1>
			<nav>
				<ul>
					<li><a href="http://open.nasa.gov/blog/tag/code/">Blog</a></li>
					<li><a href="<?php bloginfo('url'); ?>/project">Projects</a></li>
					<li><a href="<?php bloginfo('url'); ?>/guide">Guide</a></li>
					<li><a href="<?php bloginfo('url'); ?>/share">Share your Code</a></li>
				</ul>
			</nav>
		</header>
<!--  <div class="alert-message block-message info">
<a class="close" href="#">×</a>
	  <p><strong>Thanks for visiting!</strong> code.nasa.gov is still in early alpha. Enjoy this early preview and expect much more very soon!</p>
	</div>-->
	

	  <!-- Example row of columns -->
<?php get_search_form(); ?>