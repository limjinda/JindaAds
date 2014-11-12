<?php get_header() ?>
	<!-- main -->
	<main class="main">
		<div class="hero-unit">
			<div class="uk-grid uk-grid-small">
				
				<!-- main content -->
				<div class="uk-width-medium-1-1 uk-width-large-7-10">
					<?php if ( have_posts() ) : ?>
						<h3 class="list-title"><i class="uk-icon-tags"></i> คำที่ใช้ค้นหา: <?php echo get_search_query() ?></h3>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="list-item uk-width-small-1-2 uk-width-medium-1-1">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-medium-4-10 uk-width-large-4-10">

										<a href="<?php the_permalink() ?>" class="uk-thumbnail post-image" title="<?php the_title() ?>">
										<?php if (has_post_thumbnail()): ?>
											<?php the_post_thumbnail('jindaCover', array('alt' => get_the_title())) ?>
										<?php else: ?>
											<img src="http://www.placehold.it/768x384" alt="<?php the_title() ?>" />
										<?php endif ?>
										</a>
										
									</div>
									<div class="uk-width-medium-6-10 uk-width-large-6-10">
										<h3 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
										<p class="post-meta uk-text-small">เขียนเมื่อ <?php the_date(); ?> ในหมวด <?php the_category(' ') ?></p>
										<p class="post-excerpt"><?= iconv_substr(get_the_excerpt(),0,160,"UTF-8").' '; ?> <a href="<?php the_permalink() ?>" title="อ่านต่อ">อ่านต่อ..</a> </p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<!-- pagination -->
					<?php get_template_part('view', 'pagination') ?>
					<?php else: ?>
						<h3 class="list-title">
							<span class="search-query"><?php echo get_search_query() ?></span>
							<small>
								<i class="uk-icon-frown-o"></i> ไม่พบบทความใดเลย, ลองค้นหาด้วยคำอื่น		
							</small>
						</h3>
					<?php endif; ?>

				</div>				

				<!-- sidebar -->
				<div class="sidebar-block uk-width-medium-1-1 uk-width-large-3-10">
					<?php get_template_part('view', 'sidebar') ?>
				</div>

			</div>		
		</div>
	</main>
<?php get_footer() ?>