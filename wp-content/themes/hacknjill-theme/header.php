<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="Hack'n Jill: Engineering a 50-50 reality.">
    <meta name="author" content="Hack'n Jill">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/css/main.css">


	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/1140css/ie.css"><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/1140css/1140.css">
    
    <!-- Wordpress Templates require a style.css in theme root directory -->
	<?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
	
	<!-- Fonts Montserrat -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/html5-boilerplate/js/vendor/modernizr-2.6.1.min.js"></script>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

<div id="navigation">
	<div  class="row" >
		<div class="logo twocol">
			<a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/hacknjill-logo.png" title="Hack'n Jill" alt="Hack'n Jill" /></a>
		</div>
		<div class="main-nav tencol last">
			<nav class="menu-main-navigation-container">
			 <?php wp_nav_menu( $args ); ?>
			 </nav>
		</div>
	</div>
</div>
