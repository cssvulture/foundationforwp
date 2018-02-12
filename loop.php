<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>

		<div class="post-meta">
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<span class="author"> // Posted by <?php the_author_posts_link(); ?></span>
		</div>

		<div class="post-content">
		<?php if ( has_post_thumbnail()) :  ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('full');?>
			</a>
		<?php endif; ?>
		<?php the_excerpt(); ?>
		</div>


	</article>

<?php endwhile; ?>

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else: ?>

	<!-- article -->
	<article>
		<h2>Sorry, Nothing to display here.</h2>
	</article>
	<!-- /article -->

<?php endif; ?>
