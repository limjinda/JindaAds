		<!-- footer -->
		<footer class="footer">
			<div class="hero-unit">
				<div class="uk-grid">
					<div class="uk-width-small-6-10">
						<h1 class="footer-site-name"><?php bloginfo('name') ?></h1>
						<p class="footer-copyright">บทความในเว็บไซต์มีลิขสิทธิ์ <a href="http://creativecommons.org/licenses/by-nd/4.0/" target="_blank" title="Attribution-NoDerivatives 4.0 International">CC BY-ND 4.0</a></p>
					</div>
					<div class="uk-width-small-4-10">
						<ul class="footer-social-list uk-subnav">
							<li><a href="https://www.facebook.com/pages/Techr" target="_blank"><i class="uk-icon-facebook-square"></i></a></li>
							<li><a href="https://twitter.com/TechrThailand"  target="_blank"><i class="uk-icon-twitter-square"></i></a></li>
							<li><a href="https://plus.google.com/105874781308314969682" rel="publisher"  target="_blank"><i class="uk-icon-google-plus-square"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCijPSEL2EQa-KZBOtSwE0MQ"  target="_blank"><i class="uk-icon-youtube-square"></i></a></li>
						</ul>
						<p class="footer-made uk-text-small">จัดทำขึ้นที่ กรุงเทพฯ</p>
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