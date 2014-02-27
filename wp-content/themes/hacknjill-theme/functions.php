<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

//Widgetized Home
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Twitter Feed',
		'id' => 'twitter-feed',
		'description' => 'Appears as the twitter feed on the custom homepage',
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}

// Portfolio CCT
//THESE ARE FUNCTIONS TO PRODUCE THE "PIECE" CONTENT TYPE FOR THE portfolio MANAGER
add_action('init', 'portfolio_register');
function portfolio_register() {
 	//CREATE AN ARRAY OF TERMS THAT WILL CONTROL THE LANGUAGE ON THE ADMIN INTERFACE IN OUR NEW CCT
	$labels = array(
		'name' => _x('Pieces', 'post type general name'),
		'singular_name' => _x('Piece', 'post type singular name'),
		'add_new' => _x('Add New Piece', 'portfolio item'),
		'add_new_item' => __('Add New Piece'),
		'edit_item' => __('Edit Piece'),
		'new_item' => __('New Piece'),
		'view_item' => __('View Piece'),
		'search_items' => __('Search Piece'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
 	//CREATE AN ARRAY OF ARGUMENTS THAT WILL CUSTOMIZE OUR NEW CCT
	//"entry" signifies what will go in the url
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'with_front' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'taxonomies' => array('post_tag'),
		'supports' => array('title', 'thumbnail', 'editor')
	  ); 
 
 	//REGISTER THE POST TYPE WITH WORDPRESS
	register_post_type('portfolio',$args);

	//REGISTER THE TAXONOMY WE WISH TO USE
	//skills is the name of the taxonomy
	register_taxonomy('skills','portfolio',array(
		'hierarchical' => true,
		'label' => 'Skills',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'skill' ),
	));

}
add_action("admin_init", "admin_init");

function admin_init(){
	add_meta_box("portfolioentry_meta", "Portfolio Details", "portfolio_meta", "portfolio", "normal", "low");
}

function portfolio_meta() {
  global $post;
  $custom = get_post_custom($post->ID);
  $url = $custom["portfolio_url"][0];
  $projectdate = $custom["portfolio_date"][0];
  $client = $custom["portfolio_client"][0];
  $skillsused = $custom["portfolio_skillsused"][0];
  $clientpage = $custom["portfolio_clientpage"][0];
  $importance = $custom["portfolio_importance"][0];
  ?>
	<style type='text/css'>
		#portfolio_form_container {overflow: auto;}
		#shortanswers {width:50%;float: left;}
		#longanswers {width:49%;margin-left: 50%;}
		#portfolio_form_container input, textarea {
			border-width:1px;border-style:solid;-moz-border-radius:4px;-khtml-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;
			border-color: #e5e5e5;}
	</style>  
	<div id='portfolio_form_container'>
	
		<div id='shortanswers'>
			<p><label>Project URL</label><br />
			<input name="portfolio_url" value="<?php echo $url; ?>"></p>
			<p><label>Date Created</label><br />
			<input name="portfolio_date" value="<?php echo $projectdate; ?>"></p>
			<p><label>Client or Class</label><br />
			<input name="portfolio_client" value="<?php echo $client; ?>"></p>
			<p><label>Client/Class Website</label><br />
			<input name="portfolio_clientpage" value="<?php echo $clientpage; ?>"></p>
			<p><label>Importance</label><br />
			<input name="portfolio_importance" value="<?php echo $importance; ?>"></p>
			<p><label>Skills I Used</label></p><br />
			<textarea cols="80" rows="2" name="portfolio_skillsused"><?php echo $skillsused; ?></textarea>
		</div>
	</div>
  
  <?php
}

add_action('save_post', 'save_details');

function save_details(){
  global $post;
 
  update_post_meta($post->ID, "portfolio_url", $_POST["portfolio_url"]);
  update_post_meta($post->ID, "portfolio_date", $_POST["portfolio_date"]);
  update_post_meta($post->ID, "portfolio_client", $_POST["portfolio_client"]);
  update_post_meta($post->ID, "portfolio_skillsused", $_POST["portfolio_skillsused"]);
  update_post_meta($post->ID, "portfolio_clientpage", $_POST["portfolio_clientpage"]);
  update_post_meta($post->ID, "portfolio_importance", $_POST["portfolio_importance"]);

}

//THIS BLOCK REGISTERS THE COLUMNS YOU WANT TO USE IN ADMIN WINDOW FOR THE CONTENT TYPE
add_filter('manage_edit-portfolio_columns', 'add_portfolio_columns');

function add_portfolio_columns($gallery_columns) {
	$new_columns['cb'] = '<input type="checkbox" />';
	$new_columns['title'] = _x('Project Title', 'column name');
	$new_columns['client'] = __('Client Name');
	$new_columns['date'] = __('Date');
	$new_columns['skills'] = __('Skills');
	$new_columns['importance'] = __('Importance ');
	return $new_columns;
}

//THIS BLOCK SORTS THROUGH THE CUSTOM COLUMNS YOU INDICATED AND DOES SPECIAL THINGS ACCORDINGLY

add_action('manage_portfolio_posts_custom_column', 'manage_portfolio_columns', 10, 2);

function manage_portfolio_columns($column_name, $id) {
	global $post;
	switch ($column_name) {
		case 'client':
			echo get_post_meta( $post->ID , 'portfolio_client' , true ); 
			break;
		case 'date':
			echo get_post_meta( $post->ID , 'portfolio_date' , true ); 
			break;
		case 'skills':
			echo get_the_term_list($post->ID, 'skills', '', ', ','');
			break;
		case 'importance':
			echo get_post_meta($post->ID, 'portfolio_importance', true);
			break;
		default: break;
	} 
}