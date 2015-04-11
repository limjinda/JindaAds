		<!-- footer -->
		<footer class="footer">
			<div class="hero-unit">
				<div class="uk-grid">
					<div class="uk-width-small-6-10">
						<h1 class="footer-site-name"><?php bloginfo('name') ?></h1>						
						<p class="footer-copyright"><?php echo ot_get_option('footer_copyright') ?></p>
					</div>
					<div class="uk-width-small-4-10">
						<ul class="footer-social-list uk-subnav">
							<li><a href="<?php echo ot_get_option('facebook_link') ?>" target="_blank"><i class="uk-icon-facebook-square"></i></a></li>
							<li><a href="<?php echo ot_get_option('twitter_link') ?>"  target="_blank"><i class="uk-icon-twitter-square"></i></a></li>
							<li><a href="<?php echo ot_get_option('google_plus_link') ?>" rel="publisher"  target="_blank"><i class="uk-icon-google-plus-square"></i></a></li>
							<li><a href="<?php echo ot_get_option('youtube_link') ?>"  target="_blank"><i class="uk-icon-youtube-square"></i></a></li>
						</ul>
						<?php echo ot_get_option('footer_credit') ?>
					</div>
				</div>
			</div>
		</footer>

		<!-- off-canvas -->
		<div id="mobile-navigation" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<div class="uk-panel">
					<h3 class="uk-panel-title"><i class="uk-icon-hand-o-right"></i> เมนูนำทาง</h3>
					<?php wp_nav_menu( array('theme_location' => 'secondary', 'container' => false, 'menu_class' => 'uk-nav uk-nav-offcanvas') ); ?>
				</div>
			</div>
		</div>

	</div>

	<!-- script -->
	<?php wp_footer(); ?>
</body>
</html>