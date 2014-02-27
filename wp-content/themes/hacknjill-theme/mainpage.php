<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * Template Name: Home
 */

get_header(); ?>
<header role="banner" id="homebanner">
	<div class="row headline">
		<h1 class="header"><?php bloginfo('title'); ?></h1>
		<p class="header"><?php bloginfo('description'); ?></h1>
	</div>
</header>
<div id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="latesthacks">
			
			</div>
			<div class="twitter">
				 <?php
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('twitter-feed') ) :
				  endif; ?>
			</div>
			<div class="quotes">
			
			</div>
			<div class="press">
				<h2>Our Press</h2>
				<div class="threecol">
					<img src="<?php the_field('press_logo_one'); ?>" />
				</div>
				<div class="threecol">
					<img src="<?php the_field('press_logo_two'); ?>" />
				</div>
				<div class="threecol">
					<img src="<?php the_field('press_logo_three'); ?>" />
				</div>
				<div class="threecol last">
					<img src="<?php the_field('press_logo_four'); ?>" />
				</div>
			</div>
		</div>
  </div>
<div class="clear-all"></div>
</div>

<?php get_footer(); ?>