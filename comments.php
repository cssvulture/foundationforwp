<div class="comments">
	<?php if (post_password_required()) : ?>
	<p>This is a password protected area.</p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=format_comment'); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p>Comments are closed.</p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
