<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
get_header(); ?>

<div id="main" class="event">
<?php if (have_posts()) : while (have_posts()) : the_post();
		
	$postid = get_the_ID();
	$custom = get_post_custom();
	$events_stored_meta = get_post_meta( $post->ID );
?>
	
<!--- EVENT HEADER -->
<header class="eventheader" style="background-image:url('<?php the_field('header_background_image') ?>');">
	<div class="row">
		<h1 class="event-title"><?php echo get_the_title(); ?></h1>
		<h2><?php the_field('eventdate'); ?> | <?php the_field('eventlocation'); ?></h2>
	</div>
</header>

<!-- Main Content -->
<div class="row">
 	<!--- Section 1: Basic details and quotes -->
	<div class="eventinfo">
		<div class="twocol"></div>
		<div id="eventdescription" class="eightcol">
			<h2>About <?php echo get_the_title(); ?></h2>
			<?php the_field('eventdescription'); ?>
			<?php if (get_field('rules')) {
				echo '<h2>The Rules</h2>';
				}else {} ?>

			<?php the_field('rules'); ?>
		</div>
		<div class="twocol last"></div>
		<div class="clear"></div>
			<?php if (get_field('left_quote')) {
				echo '<div class="onecol"></div><div class="quote fivecol">'; 
				the_field('left_quote');
				echo '</p><p class="author">&mdash; <a href="';
				the_field('left_author_url');
				echo '">';
				the_field('left_quote_author');
				echo '</a></p></div>';
				} else {}
			?>
			<?php if (get_field('right_quote')) {
				echo '<div class="quote fivecol last">'; 
				the_field('right_quote');
				echo '</p><p class="author">&mdash; <a href="';
				the_field('right_author_url');
				echo '">';
				the_field('left_quote_author');
				echo '</a></p></div><div class="onecol last"></div><div class="clear"></div>';
				} else {}
			?>
</div>
	<!--- Section 2: Instagram Photos -->
	<!-- instagram div --><?php if (get_field('photo_1')) { echo '<div class="photogallery">'; } else {} ?>
		<?php if (get_field('photo_1')) { echo '<img src="'; the_field('photo_1'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
		<?php if (get_field('photo_2')) { echo '<img src="'; the_field('photo_2'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
		<?php if (get_field('photo_3')) { echo '<img src="'; the_field('photo_3'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
		<?php if (get_field('photo_4')) { echo '<img src="'; the_field('photo_4'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
		<?php if (get_field('photo_5')) { echo '<img src="'; the_field('photo_5'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
		<?php if (get_field('photo_6')) { echo '<img src="'; the_field('photo_1'); echo '" title="'; get_the_title(); echo ' on Instagram" />'; } else {} ?>
	<?php if (get_field('photo_1')) { echo '</div>'; } else {} ?><!-- end instagram div -->
	<div class="clear"></div>

<div class="row">
	<!--- Section 3: Recaps -->
		<!-- Heading--><?php if (get_field('1_recap_url')) { echo '<div class="recaps"><h2>Read the Recaps</h2>'; } ?>
		<div class="twocol"></div>
		<div class="fourcol">
			<?php if (get_field('1_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('1_recap_url');
				echo '" target="_blank}">';
				the_field('1_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('1_recap_author');
				echo '</p>';
				} else {}
			?>

			<?php if (get_field('3_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('3_recap_url');
				echo '" target="_blank}">';
				the_field('3_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('3_recap_author');
				echo '</p>';
				} else {}
			?>
			
			<?php if (get_field('5_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('5_recap_url');
				echo '" target="_blank}">';
				the_field('5_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('5_recap_author');
				echo '</p>';
				} else {}
			?>
			
			<?php if (get_field('7_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('7_recap_url');
				echo '" target="_blank}">';
				the_field('7_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('7_recap_author');
				echo '</p>';
				} else {}
			?>

		</div>
		<div class="fourcol">
			<?php if (get_field('2_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('2_recap_url');
				echo '" target="_blank}">';
				the_field('2_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('2_recap_author');
				echo '</p>';
				} else {}
			?>
			
			<?php if (get_field('4_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('4_recap_url');
				echo '" target="_blank}">';
				the_field('4_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('4_recap_author');
				echo '</p>';
				} else {}
			?>
			
			<?php if (get_field('6_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('6_recap_url');
				echo '" target="_blank}">';
				the_field('6_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('6_recap_author');
				echo '</p>';
				} else {}
			?>
			
			<?php if (get_field('8_recap_url')) {
				echo '<p class="recap"><a href="'; 
				the_field('8_recap_url');
				echo '" target="_blank}">';
				the_field('8_recap_title');
				echo '</a><p class="recapauthor">&mdash; ';
				the_field('8_recap_author');
				echo '</p>';
				} else {}
			?>
		</div>
		<div class="twocol last"></div>
	<!-- Heading--><?php if (get_field('1_recap_url')) { echo '</div><div class="clear"></div>'; } ?>
	
	<!-- Section 5: Overall Winners -->
		<!-- Heading--><?php if (get_field('1st_place_project_name')) { echo '<div class="overallwinners section"><h2>Overall Winners</h2>'; } ?>
		<!-- 1st Place -->
			<?php if (get_field('1st_place_project_name')) {
				echo '<div class="twocol"></div><div class="winnerdescription fourcol"><h3>1st Place: <a href="'; 
				the_field('1st_place_project_url');
				echo '" target="_blank}">';
				the_field('1st_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('1st_place_project_team');
				echo '</p><p>';
				the_field('1st_place_project_description');
				echo '</p></div>';
				} else {
					echo '';
				}
			?>
		<!-- 1st Place screenshot -->
			<?php if (get_field('1st_place_project_screenshot')) {
				echo '<div class="winnerscreenshot fourcol"><a href="'; 
				the_field('1st_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('1st_place_project_screenshot');
				echo '" /></a></div><div class="twocol last"></div><div class="clear inbetween"></div>';
				} else if (get_field('1st_place_project_name')) {
					echo '<div class="sixcol last"></div>';
				} else {}
			?>
			<?php if (get_field('1st_place_project_name')) {
				echo '<div class="clear inbetween"></div>';
				} else{ }
			?>
		
		<!-- 2nd Place -->
			<?php if (get_field('2nd_place_project_name')) {
				echo '<div class="twocol"></div><div class="winnerdescription fourcol"><h3>2nd Place: <a href="'; 
				the_field('2nd_place_project_url');
				echo '" target="_blank}">';
				the_field('2nd_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('2nd_place_project_team');
				echo '</p><p>';
				the_field('2nd_place_project_description');
				echo '</p></div>';
				} else { }
			?>
		<!-- 2nd Place Screenshot -->
			<?php if (get_field('2nd_place_project_screenshot')) {
				echo '<div class="winnerscreenshot fourcol"><a href="'; 
				the_field('2nd_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('2nd_place_project_screenshot');
				echo '" /></a></div>';
				} else if (get_field('2nd_place_project_name')) {
					echo '<div class="sixcol last"></div>';
				} else {}
			?>
			<?php if (get_field('2nd_place_project_name')) {
				echo '<div class="clear inbetween"></div>';
				} else{ }
			?>
		
		<!-- 3rd Place -->
			<?php if (get_field('3rd_place_project_name')) {
				echo '<div class="twocol"></div><div class="winnerdescription fourcol"><h3>3rd Place: <a href="'; 
				the_field('3rd_place_project_url');
				echo '" target="_blank}">';
				the_field('3rd_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('3rd_place_project_team');
				echo '</p><p>';
				the_field('3rd_place_project_description');
				echo '</p></div>';
				} else { }
			?>
			<?php if (get_field('3rd_place_project_screenshot')) {
				echo '<div class="winnerscreenshot fourcol"><a href="'; 
				the_field('3rd_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('3rd_place_project_screenshot');
				echo '" /></a></div><div class="twocol last"></div>';
				} else if (get_field('3rd_place_project_name')) {
					echo '<div class="sixcol last"></div>';
				} else {}
			?>
		
		<?php if (get_field('3rd_place_project_name')) {
				echo '<div class="clear inbetween"></div>';
				} else{ }
			?>
		
		<!-- People's Choice -->
			<?php if (get_field('peoples_place_project_name')) {
				echo '<div class="twocol"></div><div class="winnerdescription fourcol"><h3>People\'s Choice: <a href="'; 
				the_field('peoples_place_project_url');
				echo '" target="_blank}">';
				the_field('peoples_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('peoples_place_project_team');
				echo '</p><p>';
				the_field('peoples_place_project_description');
				echo '</p></div>';
				} else { }
			?>
		
			<?php if (get_field('peoples_place_project_screenshot')) {
				echo '<div class="winnerscreenshot fourcol"><a href="'; 
				the_field('peoples_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('peoples_place_project_screenshot');
				echo '" /></a></div><div class="twocol last"></div>';
				} else if (get_field('peoples_place_project_name')) {
					echo '<div class="sixcol last"></div>';
				} else {}
			?>
			<?php if (get_field('peoples_place_project_name')) {
				echo '<div class="clear inbetween"></div>';
				} else{ }
			?>
	
	<?php if (get_field('1st_place_project_name')) {echo '</div>';} ?><!-- end winners -->
	
	<!-- Section 6: API Winners, no screenshots-->
	<!-- Heading--><?php if (get_field('1_company_name')) { echo '<div class="apiwinners section"><h2>API Winners</h2>'; } ?>
			<?php if (get_field('1_company_name')) {
				echo '<h3>'; 
				the_field('1_company_name');
				echo ': <a href="';
				the_field('1_project_url');
				echo '" target="_blank">';
				the_field('1_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('1_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('2_company_name')) {
				echo '<h3>'; 
				the_field('2_company_name');
				echo ': <a href="';
				the_field('2_project_url');
				echo '" target="_blank">';
				the_field('2_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('2_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('3_company_name')) {
				echo '<h3>'; 
				the_field('3_company_name');
				echo ': <a href="';
				the_field('3_project_url');
				echo '" target="_blank">';
				the_field('3_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('3_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('4_company_name')) {
				echo '<h3>'; 
				the_field('4_company_name');
				echo ': <a href="';
				the_field('4_project_url');
				echo '" target="_blank">';
				the_field('4_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('4_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('5_company_name')) {
				echo '<h3>'; 
				the_field('5_company_name');
				echo ': <a href="';
				the_field('5_project_url');
				echo '" target="_blank">';
				the_field('5_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('5_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('6_company_name')) {
				echo '<h3>'; 
				the_field('6_company_name');
				echo ': <a href="';
				the_field('6_project_url');
				echo '" target="_blank">';
				the_field('6_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('6_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('7_company_name')) {
				echo '<h3>'; 
				the_field('7_company_name');
				echo ': <a href="';
				the_field('7_project_url');
				echo '" target="_blank">';
				the_field('7_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('7_project_team');
				echo '</p>';
				} else {}
			?>
			<?php if (get_field('8_company_name')) {
				echo '<h3>'; 
				the_field('8_company_name');
				echo ': <a href="';
				the_field('8_project_url');
				echo '" target="_blank">';
				the_field('8_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('8_project_team');
				echo '</p>';
				} else {}
			?>
	<?php if (get_field('1_company_name')) { echo '</div><div class="clear"></div>'; } ?>
	
	<!-- Section 7: Presentations-->
	<div class="presentations section">
	<!-- Heading--><?php if (get_field('1_presentation_embed_code')) { echo '<h2>Presentations</h2>'; } ?>

		<?php if (get_field('1_presentation_name')) {
			echo '<div class="presentation"><h3 class="presentationname">'; 
			the_field('1_presentation_name');
			echo '</h3>';
			the_field('1_presentation_embed_code');
			echo '</p></div>';
			} else {}
		?>
		<?php if (get_field('2_presentation_name')) {
			echo '<div class="presentation"><h3 class="presentationname">'; 
			the_field('2_presentation_name');
			echo '</h3>';
			the_field('2_presentation_embed_code');
			echo '</p></div>';
			} else {}
		?>
		<?php if (get_field('3_presentation_name')) {
			echo '<div class="presentation"><h3 class="presentationname">'; 
			the_field('3_presentation_name');
			echo '</h3>';
			the_field('3_presentation_embed_code');
			echo '</p></div>';
			} else {}
		?>

	</div>
	<div class="clear"></div>
	
	<!-- Section 8: Host-->
	<div class="eventhost section">
	<!-- Heading--><?php if (get_field('host_name')) {echo '<h2>Our Host</h2>'; } ?>
		<?php if (get_field('host_name')) {
			echo '<p>Thank you to our host, ';
			the_field('host_name');
			echo '.</p>';
		} ?>
		<div class="hostlogo">
			<a href="<?php the_field('host_url'); ?>" target="_blank"><img src="<?php the_field('host_logo'); ?>" alt="<?php the_field('host_name'); ?>" /></a>
		</div>
	</div>
	
	<!-- Section 9: Sponsors-->
	<div class="sponsors section">
	<!-- Heading--><?php if (get_field('sponsors_block')) { echo '<h2>Sponsors</h2>'; } ?>
		<?php the_field('sponsors_block'); ?>
	</div>
	
	<!-- Section 10: Judges or Speakers-->
	<div class="judges section">
		<!-- Judge 1-->
		<div class="judge threecol">
			<div class="judgeimage"><img src="<?php echo the_field('1_judge_image'); ?>" /></div>
			<h3><?php the_field('1_judge_name'); ?></h3>
			<p><?php the_field('1_judge_job'); ?></p>
			<button id="my-button" class="judgebutton">Learn More</button>
			<div id="element_to_pop_up">
				<a class="b-close">x</a>
				<div class="judgeimage"><img src="<?php echo the_field('1_judge_image'); ?>" /></div>
				<h2><?php the_field('1_judge_name'); ?> | <?php the_field('1_judge_job'); ?></h2>
				<p><?php the_field('1_judge_bio'); ?></p>
				<?php if (get_field('1_judge_twitter')) {
				echo '<p>Tweet ';
				the_field('1_judge_name');
				echo ' at <a href="http://www.twitter.com/';
				the_field('1_judge_twitter');
				echo '" target="_blank">&#64;';
				the_field('1_judge_twitter');
				echo '</a></p>';
				} else {} ?>
			</div><!-- end popover -->
		</div>
		
		<div class="judge threecol">
			<div class="judgeimage"><img src="<?php echo the_field('2_judge_image'); ?>" /></div>
			<h3><?php the_field('2_judge_name'); ?></h3>
			<p><?php the_field('2_judge_job'); ?></p>
			<button id="my-button2" class="judgebutton">Learn More</button>

			<div id="element_to_pop_up2">
				<a class="b-close">x</a>
				<div class="judgeimage"><img src="<?php echo the_field('2_judge_image'); ?>" /></div>
				<h2><?php the_field('2_judge_name'); ?> | <?php the_field('2_judge_job'); ?></h2>
				<p><?php the_field('2_judge_bio'); ?></p>
				<?php if (get_field('2_judge_twitter')) {
				echo '<p>Tweet ';
				the_field('2_judge_name');
				echo ' at <a href="http://www.twitter.com/';
				the_field('2_judge_twitter');
				echo '" target="_blank">&#64;';
				the_field('2_judge_twitter');
				echo '</a></p>';
				} else {} ?>
			</div><!-- end popover -->
		</div>
		
		<div class="judge threecol">
			<div class="judgeimage"><img src="<?php echo the_field('3_judge_image'); ?>" /></div>
			<h3><?php the_field('3_judge_name'); ?></h3>
			<p><?php the_field('3_judge_job'); ?></p>
			<button id="my-button3" class="judgebutton">Learn More</button>

			<div id="element_to_pop_up3">
				<a class="b-close">x</a>
				<div class="judgeimage"><img src="<?php echo the_field('3_judge_image'); ?>" /></div>
				<h2><?php the_field('3_judge_name'); ?> | <?php the_field('3_judge_job'); ?></h2>
				<p><?php the_field('3_judge_bio'); ?></p>
				<?php if (get_field('3_judge_twitter')) {
				echo '<p>Tweet ';
				the_field('3_judge_name');
				echo ' at <a href="http://www.twitter.com/';
				the_field('3_judge_twitter');
				echo '" target="_blank">&#64;';
				the_field('3_judge_twitter');
				echo '</a></p>';
				} else {} ?>
			</div><!-- end popover -->
		</div>
		
		<div class="judge threecol last">
			<div class="judgeimage"><img src="<?php echo the_field('4_judge_image'); ?>" /></div>
			<h3><?php the_field('4_judge_name'); ?></h3>
			<p><?php the_field('4_judge_job'); ?></p>
			<button id="judge-button4" class="judgebutton">Learn More</button><!-- Button that triggers the popup -->

			<div id="judge_to_pop_up4">
			<a class="b-close">x</a>
			<div class="judgeimage"><img src="<?php echo the_field('4_judge_image'); ?>" /></div>
				<h2><?php the_field('4_judge_name'); ?> | <?php the_field('4_judge_job'); ?></h2>
				<p><?php the_field('4_judge_bio'); ?></p>
				<?php if (get_field('4_judge_twitter')) {
				echo '<p>Tweet ';
				the_field('4_judge_name');
				echo ' at <4 href="http://www.twitter.com/';
				the_field('4_judge_twitter');
				echo '" target="_blank">&#64;';
				the_field('4_judge_twitter');
				echo '</a></p>';
				} else {} ?>
			</div><!-- end popover -->
		</div>
		<div class="clear"></div>
		
	
	<?php endwhile; else: ?>
	<!--- If search fails, info goes here -->
	<p>Sorry, no events match your search inquiry.</p>
	<?php endif; ?>
</div><!-- end row-->
</div><!-- end main -->
<?php get_footer(); ?>