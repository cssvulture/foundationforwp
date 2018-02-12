<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="grid-container">
				<div class="grid-x grid-padding-x grid-margin-x">
					<div class="cell large-9">
						<h1>Blog</h1>
						<?php get_template_part('loop'); ?>
					</div>
					<div class="cell large-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
