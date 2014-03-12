<?php
/**
 * Template Name: Event Browsing Page
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div id="main" role="main">
	<div class="row">
		<div id="container aligncenter">
 		<?php
   			$args = array(
        			'post_type' => 'events',
        			'nopaging' => true,
    			);
    			$the_query = new WP_Query( $args );         
   			 while ( $the_query->have_posts() ) : $i++;
   			 $the_query->the_post();
   		?>
			<!--Get Events -->
			<div class="eventdetails">
				<h2><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($ID); ?></a></h2>
				<?php echo "<p>";
					if (get_field('events') === 'Hackathon') {
					echo "<span class='event hackathon'>Hackathon</span>";
					} else {
						echo "<span class='event nonhack'>Event</span>";
					}
					echo "</p>";
				?>
				<p><a href="<?php echo get_permalink($post->ID); ?>">See recaps, photos and more about <?php echo get_the_title($ID); ?></a>
			</div>
		
			<?php endwhile; wp_reset_postdata(); ?>

			<div class="clear"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>