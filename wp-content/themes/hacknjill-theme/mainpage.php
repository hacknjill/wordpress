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
		<div class="signupform">
			<?php the_field('signup_form'); ?>
		</div>
	</div>
</header>
<div id="main" role="main">
		<div class="row">
			<?php
			//WordPress loop for custom post type
 			$my_query = new WP_Query('post_type=events&posts_per_page=1');

			$ids = array();
			while ($my_query->have_posts()) : $my_query->the_post();
			$ids[] = get_the_ID(); ?>

			<div class="twocol"></div>
			<div class="latesthacks eightcol">
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field('eventdate'); ?> | <?php the_field('eventlocation'); ?></h3>
				<p class="eventdescription"><?php the_field('eventdescription'); ?></p>
				
				<!-- Sign up and Learn More buttons -->
				<?php if (get_field('event_signup_url')) {
					echo '<a target="_blank" href="'; 
					the_field('event_signup_url');
					echo '" class="button">Signup</a>';
					} else {
					echo '<span class="inactivebutton">Sign Up Coming Soon</span>';
					}
				?>
				<?php if (get_field('eventdescription')) {
					echo '<a target="_blank" href="'; 
					the_permalink();
					echo '" class="button">Learn More</a>';
					} else { }
				?>
			</div>
			<div class="twocol last"></div>
			<div class="clear"></div>
			<?php endwhile;  wp_reset_query(); ?>
			
			<div class="pasthacks">
			<?php
			//WordPress loop for custom post type
 			$my_query = new WP_Query('post_type=events&posts_per_page=3&offset=1');
      			while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="thirds">
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('eventdate'); ?> | <?php the_field('eventlocation'); ?></p>
				<p><a href="<?php the_permalink(); ?>">Learn More</a></p>
			</div>
			<?php endwhile;  wp_reset_query(); ?>
			</div><!-- end pasthacks -->
			<div class="clear"></div>
			
			<div class="twitter">
				<!-- Twitter feed -->
				<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/twitterFetcher_v10_min.js"></script>
				<h2>Latest Tweets</h2>
				<h3>Straight from <a href="http://www.twitter.com/hacknjill" target="_blank">Hack'n Jill</a></h3>
				<div id="twitter1"></div>
			</div>
			<div class="quotes" >
				<div class="onecol"></div>
				<div class="tencol">
					<h2 class="maincallout"><?php the_field('main_callout'); ?></h2>
					<h2 class="maincallout mainauthor">&mdash; <?php the_field('main_callout_author'); ?></h2>
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
					<a href="<?php the_field('press_one_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_one'); ?>" class="aligncenter" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_two_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_two'); ?>" class="aligncenter" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_three_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_three'); ?>" class="aligncenter" /></a>
				</div>
				<div class="twocol">
					<a href="<?php the_field('press_four_url'); ?>" target="_blank"><img src="<?php the_field('press_logo_four'); ?>" class="aligncenter" /></a>
				</div>
				<div class="twocol last"></div>
			</div>
		</div>
<div class="clear"></div>
</div>

<?php get_footer(); ?>