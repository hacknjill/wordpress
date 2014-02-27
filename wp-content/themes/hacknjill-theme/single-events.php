<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div id="main event">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php 
		$postid = get_the_ID();
		$custom = get_post_custom();
	?>
	
		<?php if (has_post_thumbnail($post->ID)) {
			echo "<a href='$url'>".get_the_post_thumbnail($post->ID,
			array(230,190),array('class' => "camp-logo"))."</a>";
			} else {}
		?>   
<!--- EVENT HEADER -->
<header class="eventheader">
	<div class="row">
		<h1 class="event-title"><?php echo get_the_title($ID); ?> </h1>
		<h2><?php the_field('eventdate'); ?> | <?php the_field('eventlocation'); ?></h2>
	</div>
</header>

<!-- Main Content -->
<div class="row">
 <div class="container">
 	<!--- Section 1: Basic details and quotes -->
	<div class="eventinfo">
		<div id="eventdescription">
			<?php the_field('eventdescription'); ?>
		</div>
		<div class="leftquote">
			<p><?php the_field('left_quote'); ?></p>
			<p>&mdash; <a href="<?php the_field('left_author_url'); ?>" target="_blank"><?php the_field('left_quote_author'); ?></a></p>
		</div>
		<div class="rightquote">
			<p><?php the_field('right_quote'); ?></p>
			<p>&mdash; <a href="<?php the_field('right_author_url'); ?>" target="_blank"><?php the_field('right_quote_author'); ?></a></p>
		</div>
		<div class="clear"></div>
	</div>
	<!--- Section 2: Instagram Photos -->
	<div class="photogallery">
		
	</div>
	<!--- Section 3: Recaps -->
	<div class="recaps">
		<!-- Heading--><?php if (get_field('1_recap_url')) { echo '<h2>Read the Recaps</h2>'; } ?>
		<div class="twocol"></div>
		<div class="fourcol">
			<p class="recap"><a href="<?php the_field('1_recap_url'); ?>" title="<?php the_field('1_recap_title'); ?>" target="_blank"><?php the_field('1_recap_title'); ?></a></p>
			<p class="recapauthor">&mdash; <?php the_field('1_recap_author'); ?></p>
			
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
	</div>
	
	<!-- Section 5: Overall Winners -->
	<div class="overallwinners">
		<!-- Heading--><?php if (get_field('1st_place_project_name')) { echo '<h2>Overall Winners</h2>'; } ?>
		<div class="winnerdescription">
			<!-- 1st Place -->
			<?php if (get_field('1st_place_project_name')) {
				echo '<h3>1st Place: <a href="'; 
				the_field('1st_place_project_url');
				echo '" target="_blank}">';
				the_field('1st_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('1st_place_project_team');
				echo '</p><p>';
				the_field('1st_place_project_description');
				echo '</p>'
				} else {}
			?>
		</div>
		<div class="winnerscreenshot">
			<?php if (get_field('1st_place_project_screenshot')) {
				echo '<a href="'; 
				the_field('1st_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('1st_place_project_screenshot');
				echo '" /></a>';
				} else {}
			?>
		</div>
		
		<!-- 2nd Place -->
			<?php if (get_field('2nd_place_project_name')) {
				echo '<h3>2nd Place: <a href="'; 
				the_field('2nd_place_project_url');
				echo '" target="_blank}">';
				the_field('2nd_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('2nd_place_project_team');
				echo '</p><p>';
				the_field('2nd_place_project_description');
				echo '</p>'
				} else {}
			?>
		</div>
		<div class="winnerscreenshot">
			<?php if (get_field('2nd_place_project_screenshot')) {
				echo '<a href="'; 
				the_field('2nd_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('2nd_place_project_screenshot');
				echo '" /></a>';
				} else {}
			?>
		</div>
		
		<!-- 3rd Place -->
			<?php if (get_field('3rd_place_project_name')) {
				echo '<h3>3rd Place: <a href="'; 
				the_field('3rd_place_project_url');
				echo '" target="_blank}">';
				the_field('3rd_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('3rd_place_project_team');
				echo '</p><p>';
				the_field('3rd_place_project_description');
				echo '</p>'
				} else {}
			?>
		</div>
		<div class="winnerscreenshot">
			<?php if (get_field('3rd_place_project_screenshot')) {
				echo '<a href="'; 
				the_field('3rd_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('3rd_place_project_screenshot');
				echo '" /></a>';
				} else {}
			?>
		</div>
		
		<!-- People's Choice -->
			<?php if (get_field('peoples_place_project_name')) {
				echo '<h3>People\'s Choice: <a href="'; 
				the_field('peoples_place_project_url');
				echo '" target="_blank}">';
				the_field('peoples_place_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('peoples_place_project_team');
				echo '</p><p>';
				the_field('peoples_place_project_description');
				echo '</p>'
				} else {}
			?>
		</div>
		<div class="winnerscreenshot">
			<?php if (get_field('peoples_place_project_screenshot')) {
				echo '<a href="'; 
				the_field('peoples_place_project_url');
				echo '" target="_blank}"><img src="';
				the_field('peoples_place_project_screenshot');
				echo '" /></a>';
				} else {}
			?>
		</div>	
	</div>
	
	<!-- Section 6: API Winners, no screenshots-->
	<div class="apiwinners">
		<div class="winnerdescription">
			<?php if (get_field('1_company_name')) {
				echo '<h3>'; 
				the_field('1_company_name');
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
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
				echo '<a href="';
				the_field('8_project_url');
				echo '" target="_blank">';
				the_field('8_project_name');
				echo '</a></h3><p class="projectteam">by ';
				the_field('8_project_team');
				echo '</p>';
				} else {}
			?>
		</div>
	</div>
	
	<!-- Section 7: Presentations-->
	<div class="presentations">
	<!-- Heading--><?php if (get_field('1_presentation_embed_code')) { echo '<h2>Presentations</h2>'; } ?>
		<?php the_field('1_presentation_embed_code'); ?>
		<h3 class="presentationname"><?php the_field('1_presentation_name'); ?></h3>
		
		<?php the_field('2_presentation_embed_code'); ?>
		<h3 class="presentationname"><?php the_field('2_presentation_name'); ?></h3>
		
		<?php the_field('3_presentation_embed_code'); ?>
		<h3 class="presentationname"><?php the_field('3_presentation_name'); ?></h3>
	</div>
	
	<!-- Section 8: Host-->
	<div class="eventhost">
	<!-- Heading--><?php if (get_field('hostsponsor')) { echo '<h2>Our Host</h2>'; } ?>
		<p>Thanks to our host, <?php the_field('host_name'); ?></p>
		<div class="hostlogo">
			<a href="<?php the_field('host_url'); ?>" target="_blank"><img src="<?php the_field('host_logo'); ?>" alt="<?php the_field('host_name'); ?>" /></a>
		</div>
	</div>
	
	<!-- Section 9: Sponsors-->
	<div class="sponsors">
	<!-- Heading--><?php if (get_field('hostsponsor')) { echo '<h2>Sponsors</h2>'; } ?>
		
	</div>
	
	<!-- Section 10: Judges or Speakers-->
	<div class="judges">
		<!-- Judge 1-->
		<div class="judge" id="judge1">
			<img src="<?php the_field('1_judge_photo'); ?>" />
			<h3><?php the_field('1_judge_name'); ?></h3>
			<p><?php the_field('1_judge_job'); ?></p>
			<button class="judgebutton" title="Learn More" />
		</div>
	</div>
	
	<?php endwhile; else: ?>
	<!--- If search fails, info goes here -->
	<p>Sorry, no events match your search inquiry.</p>
	<?php endif; ?>
 </div>
</div>

<?php get_footer(); ?>