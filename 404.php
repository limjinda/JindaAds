<?php get_header(); ?>

<main class="main">
	<div class="hero-unit">
		<div class="uk-grid uk-grid-small">
			
			<!-- main content -->
			<div class="uk-width-medium-1-1 uk-width-large-7-10 uk-text-center">
				<div class="not-found-group">
					<h3 class="_lead">ไม่สามารถเข้าถึงเนื้อหาได้</h3>
					<p class="_text">ขออภัย! ไม่พบหน้าที่คุณต้องการเรียกดู หรือมีการเปลี่ยนแปลงไปแล้ว โปรดคลิก <a href="<?php echo home_url() ?>">ที่นี่</a> เพื่อย้อนกลับไปหน้าแรก</p>
				</div>
			</div>

			<!-- sidebar -->
			<div class="sidebar-block uk-width-medium-1-1 uk-width-large-3-10">
				<?php get_template_part('view', 'sidebar') ?>
			</div>

		</div>		
	</div>
</main>

<?php get_footer(); ?>