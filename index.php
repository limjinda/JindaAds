<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="theTechr เว็บไซต์ที่รวบรวมทั้งข่าวสารไอที แอพมือถือเจ๋งๆ ราคามือถือ มือถือออกใหม่ทุกรุ่นอย่าง ไอโฟน แอนดรอย รวมไปถึงอุปกรณ์คอมพิวเตอร์ notebook" />
	<meta name="keywords" content="theTechr, ข่าวไอที, ราคามือถือ, แอพมือถือ, มือถือมือสอง, ไอโฟน, มือถือออกใหม่, iphone, อุปกรณ์คอมพิวเตอร์, notebook">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- script -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/bower_components/uikit/css/uikit.almost-flat.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- script -->
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	
	<div id="wrapper">
		
		<header class="header">
			<div class="hero-unit">
				<div class="uk-grid">
					<!-- logo -->
					<div class="uk-width-medium-3-10 uk-width-large-4-10">
						<a href="#" title="<?php bloginfo('name')?>"><img src="http://www.placehold.it/200x80" class="site-logo" alt="theTechr.com" /></a>
					</div>
					<!-- banner -->
					<div class="uk-width-medium-7-10 uk-width-large-6-10 uk-text-right">
						<div class="rev-block rev-top">
							<img src="http://www.placehold.it/468x60" class="" alt="">
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
							<ul class="uk-navbar-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">ข่าวไอที</a></li>
								<li><a href="#">แอพมือถือ</a></li>
								<li><a href="#">มือถือออกใหม่</a></li>
								<li><a href="#">อุปกรณ์คอมพิวเตอร์</a></li>
								<li><a href="#">notebook</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- main -->
		<main class="main"></main>

		<!-- footer -->
		<footer class="footer">
			<div class="hero-unit">
				<div class="uk-grid">
					<div class="uk-width-small-6-10">
						<h1 class="footer-site-name"><?php bloginfo('name') ?></h1>
						<p class="footer-copyright">บทความในเว็บไซต์มีลิขสิทธิ์ <a href="http://creativecommons.org/licenses/by-nd/4.0/" target="_blank" title="Attribution-NoDerivatives 4.0 International">CC BY-ND 4.0</a></p>
					</div>
					<div class="uk-width-small-4-10">
						<ul class="footer-social-list uk-subnav">
							<li><a href="#"><i class="uk-icon-facebook-square"></i></a></li>
							<li><a href="#"><i class="uk-icon-twitter-square"></i></a></li>
							<li><a href="#"><i class="uk-icon-google-plus-square"></i></a></li>
							<li><a href="#"><i class="uk-icon-youtube-square"></i></a></li>
						</ul>
						<p class="footer-made uk-text-small">จัดทำขึ้นที่ กรุงเทพฯ</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- off-canvas -->
		<div id="mobile-navigation" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<div class="uk-panel">
					<h3 class="uk-panel-title"><i class="uk-icon-hand-o-right"></i> เมนูนำทาง</h3>
					<ul class="uk-nav uk-nav-offcanvas">
						<li><a href="#">Home</a></li>
						<li><a href="#">ข่าวไอที</a></li>
						<li><a href="#">แอพมือถือ</a></li>
						<li><a href="#">มือถือออกใหม่</a></li>
						<li><a href="#">อุปกรณ์คอมพิวเตอร์</a></li>
						<li><a href="#">notebook</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<!-- script -->
	<script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/uikit/js/uikit.min.js"></script>
	<?php wp_footer(); ?>
	<!-- livereload -->
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>