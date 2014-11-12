<?php get_header() ?>
	<!-- main -->
	<main class="main">
		<div class="hero-unit">
			<div class="uk-grid uk-grid-small">
				
				<!-- main content -->
				<div class="uk-width-medium-1-1 uk-width-large-7-10">
				<h3 class="list-title"><i class="uk-icon-tags"></i> หาตามคำค้น: <?php single_tag_title(''); ?></h3>
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
<?php get_footer() ?>