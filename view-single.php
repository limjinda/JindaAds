<div class="entry-block">
	<div class="uk-grid">
		<div class="uk-width-1-1">
			
			<h3 class="entry-title"><?php the_title(); ?></h3>
			<p class="entry-meta"><i class="uk-icon-plug"></i> เขียนเมื่อ <?php the_date(); ?> <i class="uk-icon-archive"></i> ในหมวดหมู่ <?php the_category(' ') ?> <i class="uk-icon-tags"></i> <?php the_tags('คำค้น '); ?></p>

			<div class="entry-content">
				<?php the_content(); ?>
				<div class="uk-clearfix"></div>
				<?php if(function_exists('the_views')) { the_views(); } ?>
				<div class="uk-clearfix"></div>
			</div>

			<?php if( current_user_can('edit_posts') ): ?>
				<p class="entry-edit uk-text-small uk-text-right">
					<a href="<?php echo get_edit_post_link() ?>" target="_blank">แก้ไขโพสต์ <i class="uk-icon-gear"></i></a>
				</p>
			<?php endif ?>

		</div>
	</div>
</div>