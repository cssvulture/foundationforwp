<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell large-9">

						<?php if (have_posts()): the_post(); ?>

							<h1><?php echo get_the_author(); ?></h1>

							<?php if ( get_the_author_meta('description')) : ?>

								<?php echo get_avatar(get_the_author_meta('user_email')); ?>

								<h2><?php echo get_the_author() ; ?></h2>

								<?php echo wpautop( get_the_author_meta('description') ); ?>

							<?php endif; ?>

							<?php rewind_posts(); while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
										</a>
									<?php endif; ?>

									<h2>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h2>

									<span class="date"><?php the_time('F j, Y'); ?></span>
									<span class="author"> | Author:  <?php the_author_posts_link(); ?></span>

									<?php edit_post_link(); ?>

								</article>

							<?php endwhile; ?>

						<?php else: ?>

							<article>

								<h2>Sorry, nothing to display here.</h2>

							</article>

						<?php endif; ?>

						<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
						<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
					</div>
					<div class="cell large-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
