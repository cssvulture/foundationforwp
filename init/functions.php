<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(500, 500, true);
add_theme_support( 'custom-logo' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

register_nav_menus( array(
	'header_menu' => 'Header',
	'footer_menu' => 'Footer',
  'secondary_menu' => 'Secondary Menu'
) );

// The Top Menu
function header_nav() {
	 wp_nav_menu(array(
        'container' => false,
        'menu_class' => 'menu align-right',
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'header_menu',
        'depth' => 3,
        'fallback_cb'    => false
    ));
}

// The Top Menu
function footer_nav() {
	 wp_nav_menu(array(
        'container' => false,
        'menu_class' => 'menu align-right',
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'footer_menu',
        'depth' => 1,
        'fallback_cb'    => false
    ));
}

// The Top Menu
function secondary_nav() {
	 wp_nav_menu(array(
        'container' => false,
        'menu_class' => 'vertical-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'secondary_menu',
        'depth' => 3,
        'fallback_cb'    => false
    ));
}

function comment_form_class( $arg ) {
    // $arg contains all the comment form defaults
    // simply redefine one of the existing array keys to change the comment form
    // see http://codex.wordpress.org/Function_Reference/comment_form for a list
    // of array keys
    // add Foundation classes to the button class
    $arg['class_submit'] = 'button ';
    // return the modified array
    return $arg;
}
add_filter( 'comment_form_defaults', 'comment_form_class' );


function wpdocs_excerpt_more( $more ) {
	return sprintf( ' ...<br><a class="button read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( 'Read More', 'textdomain' )
	);
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



function format_comment($comment, $args, $depth) {

       $GLOBALS['comment'] = $comment; ?>

        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

            <div class="comment-intro">
                <?php if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] );
              } ?>
                <span>commented on</span>
                <a class="comment-permalink" href="<?php echo htmlspecialchars ( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
                <em>by</em>
                <?php printf(__('%s'), get_comment_author_link()) ?>
            </div>

            <?php if ($comment->comment_approved == '0') : ?>
                <em><php _e('Your comment is awaiting moderation.') ?></em><br />
            <?php endif; ?>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

<?php }

?>
