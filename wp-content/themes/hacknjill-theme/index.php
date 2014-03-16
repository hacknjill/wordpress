<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div class="row">
	<header class="pageheader">
		<h1>Blog</h1>
	</header>
	<div class="eightcol">
		<?php query_posts($query_string); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
        		<h2><a href="<?php the_permalink() ?>" rel="bookmark" class="blog-title" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        	</header>
        	<div class="blog-image">
			<?php if ( has_post_thumbnail()) : ?>
		  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
		</div>

        	<?php the_content('Read the rest of this entry &raquo;'); ?>

        	<div class="blogcomments">
          		<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        	</div>
      		</article>

   		<?php endwhile; ?>

    		<nav>
      			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
      			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    		</nav>

  		<?php else : ?>

    		<h2>Not Found</h2>
    		<p>Sorry, but you are looking for something that isn't here.</p>
    		<?php get_search_form(); ?>

  		<?php endif; ?>
 	</div>
 	<div class="fourcol last"><?php get_sidebar(); ?></div>
</div>

<?php get_footer(); ?>