<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php echo ot_get_option( 'description' ); ?>" />
	<meta name="keywords" content="<?php echo ot_get_option( 'keywords' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<!-- custom script -->
	<script>
	<?php echo ot_get_option( 'custom_scripts' ); ?>
	</script>
	<!-- custom script -->
	<!-- custom CSS -->
	<style>
		<?php echo ot_get_option( 'custom_css' ); ?>
	</style>
	<!-- custom CSS -->
</head>
<body <?php body_class() ?>>
	<!-- custom html -->
	<?php echo ot_get_option('custom_html') ?>
	<!-- custom html -->
	
	<div id="wrapper">
		
		<header class="header" id="header">
			<div class="hero-unit">
				<div class="uk-grid">
					<!-- logo -->
					<div class="uk-width-medium-3-10 uk-width-large-4-10">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name')?>"><img src="<?php echo ot_get_option('website_logo') ?>" class="site-logo" alt="theTechr.com" /></a>
					</div>
					<!-- banner -->
					<div class="uk-width-medium-7-10 uk-width-large-6-10 uk-text-right">
						<div class="rev-block rev-top">
							<?php echo ot_get_option('banner_top') ?>
						</div>
					</div>					
				</div>
				<!-- mobile pull -->
				<div class="pull-block">
					<a href="#mobile-navigation" class="mobile-pull" data-uk-offcanvas><i class="uk-icon-bars"></i> MENU</a>
				</div>
				<!-- navigation -->
				<div class="uk-grid">
					<div class="uk-width-1-1">
						<nav class="top-navigation uk-navbar">
							<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'uk-navbar-nav') ); ?>
							<!-- ontop -->
							<div class="go-top-block">
								<a href="#header" title="Go to top" class="go-top-button" data-uk-smooth-scroll><i class="uk-icon-arrow-up"></i></a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>