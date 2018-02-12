<?php
/* Template Name: Default w/ Sidebar */

get_header(); ?>

	<main role="main">
		<section>
			<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell large-9">
					<h1><?php the_title(); ?></h1>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template(); ?>

					</article>

					<?php endwhile; ?>

					<?php endif; ?>
					</div>
					<div class="cell large-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
