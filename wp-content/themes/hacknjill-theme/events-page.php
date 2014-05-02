<?php
/**
 * Template Name: Event Browsing Page
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div id="main" role="main">
	<div class="row">
		<div id="aligncenter">
 		<?php
   			$args = array(
        			'post_type' => 'events',
        			'nopaging' => true,
    			);
    			$the_query = new WP_Query( $args );         
   			while ( $the_query->have_posts() ) : $the_query->the_post();
   		?>
			<!--Get Events -->
			<div class="eventdetails">
				<header class="eventheader" style="background-image:url('<?php the_field('header_background_image') ?>');">
					<h1 class="event-title"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title(); ?></a></h1>
					<h2><?php the_field('eventdate'); ?> | <?php the_field('eventlocation'); ?></h2>
				</header>
				<?php the_field('eventdescription'); ?>

				<?php if (get_field('1_recap_title')) {
					echo '<p>See recaps, photos and more about <a href="';
					the_permalink($post->ID);
					echo '">';
					the_title();
					echo '</a>.</p>';
				} else {
					echo '<p>Learn more about our event, <a href="';
					the_permalink($post->ID);
					echo '">';
					the_title();
					echo '</a>.</p>';
				}
				?>
			</div>
		
			<?php endwhile; wp_reset_postdata(); ?>

			<div class="clear"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>