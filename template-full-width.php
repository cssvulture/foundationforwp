<?php
/* Template Name: Full Width */

get_header(); ?>

	<main role="main">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template(); ?>

					</article>

					<?php endwhile; ?>

					<?php endif; ?>
	</main>

<?php get_footer(); ?>
