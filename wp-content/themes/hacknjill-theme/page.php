<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div id="main" role="main">
	<div class="row">
		<div class="onecol"></div>
		<div class="tencol">
			<header class="pageheader">
				<h1><?php the_title(); ?></h1>
			</header>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="post" id="post-<?php the_ID(); ?>">
  
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
				</article>
				<?php endwhile; endif; ?>
		</div>
		<div class="onecol last"></div>
	</div>
</div>

<?php get_footer(); ?>