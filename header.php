<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="msapplication-TileColor" content="<?php // Windows LiveTile Color ?>">
		<meta name="msapplication-TileImage" content="<?php // Windows LiveTile Image ?>">

		<title><?php wp_title(''); ?></title>

		<link rel="apple-touch-icon" href="<?php //Apple Touch Icon Here ?>">
		<link rel="icon" href="<?php //Favicon Here ?>">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php //IE .ico Favicon Here ?>">
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" id="page-header">

				<div id="inner-header" class="wrap clearfix">

					<nav id="main-nav" role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div>

			</header>
