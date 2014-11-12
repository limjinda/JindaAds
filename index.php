<?php get_header(); ?>
<!-- initSliderCSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/nivo-slider.css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/light/light.css" />

<!-- main -->
<main class="main">
	<div class="hero-unit">
		<div class="uk-grid uk-grid-small">
			
			<!-- main content -->
			<div class="uk-width-medium-1-1 uk-width-large-7-10">
				<!-- sliderBlock -->
				<?php get_template_part('view','slider') ?>
				<!-- postBlock -->
				<?php get_template_part('view', 'list') ?>
				<!-- pagination -->
				<?php get_template_part('view', 'pagination') ?>
			</div>

			<!-- sidebar -->
			<div class="sidebar-block uk-width-medium-1-1 uk-width-large-3-10">
				<?php get_template_part('view', 'sidebar') ?>
			</div>

		</div>		
	</div>
</main>

<!-- initSliderJS -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.nivo.slider.pack.js"></script>
<script>
	$(window).load(function() {
		$('#feature-slider').nivoSlider({
			effect: 'fade',
			animSpeed: 300,
			pauseTime: 4000,
			slices: 2
		});
	});
</script>
<?php get_footer(); ?>