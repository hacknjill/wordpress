<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * Template Name: Home
 */

get_header(); ?>
<header role="banner" id="homebanner">
	<div class="row headline">
		<h1 class="mission"><?php bloginfo('description'); ?></h1>
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
			<div class="quotes" >
				<div class="onecol"></div>
				<div class="tencol">
					<h2 class="maincallout"><?php the_field('main_callout'); ?></h2>
					<h2 class="maincallout">&mdash; <?php the_field('main_callout_author'); ?></h2>
				</div>
				<div class="onecol last"></div>
				<div class="twocol"></div>
				<div class="fourcol">
					<p><?php the_field('left_callout'); ?> &mdash; <?php the_field('left_callout_author'); ?></p>
				</div>
				<div class="fourcol">
					<p><?php the_field('right_callout'); ?> &mdash; <?php the_field('right_callout_author'); ?></p>
				</div>
				<div class="twocol last"></div>
			</div>
			<div class="clear"></div>
			<div class="press">
				<h2>Our Press</h2>
				<div class="twocol"></div>
				<div class="twocol">
					<a href="<?php the_field('press_one_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_one'); ?>" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_two_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_two'); ?>" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_three_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_three'); ?>" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_four_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_four'); ?>" /></a>
				</div>
				<div class="twocol last"></div>
			</div>
		</div>
  </div>
<div class="clear"></div>
</div>

<?php get_footer(); ?>