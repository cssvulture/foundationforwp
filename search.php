<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell large-12">

						<h1>Searching for <?php echo get_search_query(); ?></h1>

						<?php get_template_part('loop'); ?>

						<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
						<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
