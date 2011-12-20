<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

		<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

		<meta name="description" content="<?php bloginfo( 'tagline' ); ?>">
		<meta name="author" content="">

		<!--  Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- BEGIN: wp_head() -->	
		<?php wp_head(); ?>
		<!-- END: wp_head() -->

		<script src="<?php bloginfo( 'template_url' ); ?>/js/libs/modernizr-2.0.6.min.js"></script>

	</head>
	<body <?php body_class(); ?>>
	
		<div id="container">
			<header id="header">
				<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				
				<?php
				$args = array(
					'container' => 'nav',
					'container_id' => 'main-nav',
					'container_class' => 'clearfix',
					'menu' => 'main_nav'
				);
				wp_nav_menu( $args );
				?>
			</header>
			
			<div id="main" class="clearfix" role="main">