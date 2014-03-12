<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div id="main" role="main">
<div class="row">
<div class="container">
 <div class="onecol">
   <p</p>
 </div>
 <div class="tencol">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></a></h2>
    </header>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    <div class="entryfoot">
      <p>This entry was posted by <?php the_author() ?>
      on <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('l, F jS, Y') ?></time>
      at <time><?php the_time() ?></time>
      and is filed under <?php the_category(', ') ?>.

      <?php if ( comments_open() && pings_open() ) {
        // Both Comments and Pings are open ?>
        You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
      <?php } edit_post_link('Edit this entry','','.'); ?>
      </p>
    </div>

    <?php comments_template(); ?>

  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
 <div class="onecol last"></div>
</div>
</div>
<nav>
	<div class="row">
		<div class="twocol"><?php previous_post_link('&laquo; %link') ?></div>
		<div class="eightcol"></div>
		<div class="twocol last" style="text-align:right;"><?php next_post_link('%link &raquo;') ?></div>
	</div>
    </nav>
</div><!-- end of main-->

<?php get_footer(); ?>