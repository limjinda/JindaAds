<?php get_header() ?>
	<!-- main -->
	<main class="main">
		<div class="hero-unit">
			<div class="uk-grid uk-grid-small">
				
				<!-- main content -->
				<div class="uk-width-medium-1-1 uk-width-large-7-10">
					<!-- postBlock -->
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'view', 'single' ); ?>
						<!-- post pagination -->
						<?php get_template_part('view', 'post-pagination') ?>
						<!-- comment -->
						<?php if ( comments_open() || get_comments_number() ) {
								comments_template();
						}?>

					<? endwhile; ?>
				</div>				

				<!-- sidebar -->
				<div class="sidebar-block uk-width-medium-1-1 uk-width-large-3-10">
					<?php get_template_part('view', 'sidebar') ?>
				</div>

			</div>		
		</div>
	</main>
<?php get_footer() ?>