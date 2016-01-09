			<!-- footer -->
			<footer class="footer <?php if(!is_singular()) { echo "footer--main";} ?>" role="contentinfo">

				<div class="wrapper">

					<ul class="footer__content">
						<li>
							<?php dynamic_sidebar('widget-area-1'); ?>
						</li>
						<li>
							<?php dynamic_sidebar('widget-area-2'); ?>
						</li>
					</ul>

					<div class="footer__bottom">

						<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>

						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
						</p>
					</div>

				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
