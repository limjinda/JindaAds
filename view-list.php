<div class="list-view">
	<div class="uk-grid uk-grid-small" data-uk-grid-match>

		<?php $i = 0; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if ($i == 3): ?>
				<div class="uk-width-1-1 uk-hidden-small">
					<div class="rev-block rev-listview">
						<img src="http://www.placehold.it/468x60" />
					</div>
				</div>		
			<?php endif ?>
			
			<div class="list-item uk-width-small-1-2 uk-width-medium-1-1">
				<div class="uk-grid uk-grid-small">
					<div class="uk-width-medium-4-10 uk-width-large-4-10">

						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
						<?php if (has_post_thumbnail()): ?>
							<?php the_post_thumbnail('jindaCover', array('class' => 'post-image', 'alt' => get_the_title())) ?>
						<?php else: ?>
							<img src="http://www.placehold.it/768x384" class="post-image" alt="<?php the_title() ?>" />
						<?php endif ?>
						</a>

						
					</div>
					<div class="uk-width-medium-6-10 uk-width-large-6-10">
						<h3 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
						<p class="post-meta uk-text-small">เขียนเมื่อ <?php the_date(); ?> ในหมวด <?php the_category(' ') ?></p>
						<p class="post-excerpt"><?= iconv_substr(get_the_excerpt(),0,160,"UTF-8").' '; ?> <a href="#" title="อ่านต่อ">อ่านต่อ..</a> </p>
					</div>
				</div>
			</div>
			
			<?php $i = $i + 1; ?>
		<?php endwhile; else: ?>
			<!-- nothing in loop -->
		<?php endif; ?>

	</div>
</div>