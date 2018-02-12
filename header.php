<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fontawesome-all.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
	</head>
	<body <?php body_class(); ?>>
		<div class="off-canvas-wrapper">

			<header class="header " role="banner">
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-middle">
						<div class="cell small-9 large-3">
							<span class="logo">
								<?php
								  if ( has_custom_logo() != false ) {
										   echo the_custom_logo();
									}
									else {
										echo '<a href="/"><img style="padding:10px 0px;" src="https://placehold.it/220x50?text=Logo+Placeholder" /></a>';
									}
								?>
							</span>
						</div>
						<div class="cell small-3 large-9">
							<nav class="show-for-large"><?php header_nav(); ?></nav>
							<a href="#" class="hide-for-large fa fa-bars float-right" data-toggle="offCanvas"></a>
						</div>
					</div>
				</div>
			</header>

			<div class="off-canvas-wrapper">
		    <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
		      <span class="fa fa-times" aria-label="close menu"  data-close></span>
           <?php secondary_nav(); ?>
		    </div>
		  </div>
