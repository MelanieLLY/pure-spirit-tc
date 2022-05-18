<?php
/**
 * The theme header
 * 
 * @package pure-spirit
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik&display=swap">

		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
		<![endif]-->
			<div id="masthead" class="row main-navigation">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header site-branding">
							<a href="/" alt="Locale Solutions"><img src="/wp-content/uploads/2019/07/logoA7h.gif" alt="Locale Solutions" /></a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" id="navbar-primary-toggle" data-target=".navbar-primary-collapse" onClick="fnToggle()">
								<span class="sr-only"><?php _e('Toggle navigation', 'pure-spirit'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="pull-right collapse navbar-collapse navbar-primary-collapse">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
						</div><!--.navbar-collapse-->
					</nav>
				</div>
			</div><!--.main-navigation-->
		</header>