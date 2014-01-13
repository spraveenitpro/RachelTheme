<!DOCTYPE html>
<!-- add a class to the html tag if the site is being viewed in IE, to allow for any big fixes -->
<!--[if lt IE 8]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><html><![endif]-->
<!--[if !IE]><html><![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	
	<?php 

		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo('name' );
		$site_description = get_bloginfo('description', 'display');

		if ($site_description && (is_home() || is_front_page() ) )
			echo " | $site_description ";
	 ?>



</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php  bloginfo('stylesheet_url' ); ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header role="banner">

		<div class="site-name half left">
			
			<!-- site name and description  -->
			<h1 id="site-title" class="one-half-left">
				<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<h2 id="site-description"><?php bloginfo('description' ); ?></h2>
		
		</div>

		<!-- an aside in the header - this will be populated via a widget area later -->	
		<aside class="header widget-area half right" role="complementary">
		
			<div class="widget-container">	
				This will be a widget area in the header - address details (or anything else you like) goes here
			</div><!-- .widget-container -->

		</aside><!-- .half right -->
	
	</header><!-- header -->
	
	<!-- full width navigation menu - delete nav element if using top navigation -->
	<nav class="menu main">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Latest news</a></li>
			<li><a href="#">Featured articles</a></li>
		</ul>
	</nav><!-- .main -->

	<div class="main">