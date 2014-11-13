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
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<!-- GA -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-56681706-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body <?php body_class() ?>>
<!-- EX.SCRIPT -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=745618748820464&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /EX.SCRIPT -->
	
	<div id="wrapper">
		
		<header class="header" id="header">
			<div class="hero-unit">
				<div class="uk-grid">
					<!-- logo -->
					<div class="uk-width-medium-3-10 uk-width-large-4-10">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name')?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/site-logo.png" class="site-logo" alt="theTechr.com" /></a>
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