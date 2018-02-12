			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-middle">
						<div class="cell large-6">
							<span class="copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
							</span>
						</div>
						<div class="cell large-6">
							<div><?php footer_nav() ?></div>
						</div>
					</div>
				</div>
			</footer>
		</div><!-- end of Main Off Canvas Wrapper -->
		<?php wp_footer(); ?>

		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
	</body>
</html>
