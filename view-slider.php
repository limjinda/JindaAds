<?php 
	$slider_posts = array('post_type' => 'post', 'tag' => 'feature', 'posts_per_page' => 3, 'ignore_sticky_posts' => true);
	$slider = new WP_Query( $slider_posts );	
?>

	<div class="slider-view theme-light">
		<div class="uk-grid">
			<div class="uk-width-1-1">
				<div id="feature-slider" class="nivoSlider">

					<?php while ($slider->have_posts()) { $slider->the_post(); ?>
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail('jindaCover', array('class' => 'home-post-image', 'alt' => get_the_title(), 'title' => get_the_title() )) ?>
							<?php else: ?>
								<img src="http://www.placehold.it/768x384/FF0000/FFF" alt="<?php the_title() ?>" title="<?php the_title() ?>" />
							<?php endif ?>
						</a>
					<?php } wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>