<?php 
$id = get_the_ID();
$cates = get_the_category();
$post_cate = $cates[0]->cat_ID;
$related_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'cat' => $post_cate , 'post__not_in' => array($id) );
$related_posts = new WP_Query($related_args); ?>

<?php if ($related_posts->have_posts()) { ?>
	<div class="related-block">
		<div class="uk-grid">
			<div class="uk-width-1-1">
				<h4 class="related-title">เรื่องที่คุณอาจจะสนใจ</h4>
			</div>
		</div>
		<div class="uk-grid uk-grid-small related-inner" data-uk-grid-match>
			<?php while( $related_posts->have_posts()){ $related_posts->the_post(); ?>
				<div class="uk-width-small-1-3">
					<?php if (has_post_thumbnail()): ?>
						<a href="<?php the_permalink() ?>" class="uk-thumbnail" title="<?php the_title() ?>"><?php the_post_thumbnail('jindaCover', array('alt' => get_the_title())) ?></a>
					<?php else: ?>
						<a href="<?php the_permalink() ?>" class="uk-thumbnail" title="<?php the_title() ?>"><img src="http://www.placehold.it/768x384" alt="<?php the_title() ?>"></a>
					<?php endif; ?>
					<h5 class="related-post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h5>
					<p class="related-post-summary"><?= iconv_substr(get_the_excerpt(),0,100,"UTF-8").'..'; ?></p>
				</div>
			<?php } ?>
		</div>
	</div>
<?php }else{ ?>
	<!-- no related yet -->
<?php } ?>
<?php wp_reset_query(); ?>