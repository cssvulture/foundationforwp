<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-x">
				<div class="cell large-9">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					 <h1><?php the_title(); ?></h1>
					 <div class="post-meta">
					 	<span class="date"><?php the_time('F j, Y'); ?></span>
					 	<span class="author"> // Posted by <?php the_author_posts_link(); ?></span>
						<span class="categories"> // <?php the_category(', ');  ?> <?php the_tags(); ?></span>
					 </div>

					 <?php if ( has_post_thumbnail()) :  ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('full');?>
							</a>
						<?php endif; ?>


					 <?php the_content();  ?>
					 <?php comments_template(); ?>

				 </article>

			 	<?php endwhile; ?>

		 		<?php endif; ?>
	 			</div>
	 			<div class="cell large-3 ">
		 			<?php get_sidebar() ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>
