<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 *
 */

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Noto Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;


/* ######################################
*  ALL CUSTOM CODE ADDED BELOW THIS POINT
*/ ######################################
/* The following code snippet will use a filter that will allow you to change the script URLs before they are output to the page.  Removing these query strings will ensure that the proxy can cache these resources and therefore speeding up the loading time of your website. */
function pu_remove_script_version( $src ){
    return remove_query_arg( 'ver', $src );
}

add_filter( 'script_loader_src', 'pu_remove_script_version' );
add_filter( 'style_loader_src', 'pu_remove_script_version' );

//  Posts by Category Pagination
function wp_pagination() {
global $the_query;
$big = 12345678;
$page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages,
    'type'  => 'array',
    'prev_text' => __( '<< Previous Posts', 'textdomain' ),
    'next_text' => __( 'More Posts >>', 'textdomain' ),
) );
if( is_array($page_format) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div class="post-navi-wrap">';
	            foreach ( $page_format as $page ) {  // Prints numerical page numbers
	                    echo $page;
	            }
           echo '</div>';
}
}

// Customized text following content excerpt
function et_excerpt_more($more) {
    global $post;
    return ' ...';
}
add_filter('excerpt_more', 'et_excerpt_more');

// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
<li id="comment-<?php comment_ID() ?>" class="comments post-styles">
      <div class="user-meta-data">
		<h3><?php comment_author() ?></h3>
		<h4 class="time-stamp-comment-main"><span class="stamp-before">Published:  </span><?php comment_date('F d, Y') ?></h4>
      </div>
  	<?php if ($comment->comment_approved == '0') _e("ttttt<span class='unapproved'>Your comment is awaiting moderation.</span>n", 'your-theme') ?>
  	<p><?php comment_text() ?></p>
  	<div class="reply">
		<a class="comments-reply-link" href="#">Reply</a>
	</div>
<?php } // end custom_comments


// Limit Length of Post Excerpt
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
  return $excerpt;
}

//Generates a section in wp-admin for a "projects" ACF
add_action( 'init', 'register_cpt_projects' );
function register_cpt_projects() {
$labels = array(
'name' => _x( 'Projects', 'projects' ),
'singular_name' => _x( 'Project', 'project' ),
'add_new' => _x( 'Add New', 'project' ),
'add_new_item' => _x( 'Add New Project', 'project' ),
'edit_item' => _x( 'Edit Project', 'project' ),
'new_item' => _x( 'New Project', 'project' ),
'view_item' => _x( 'View Projects', 'projects' ),
'search_items' => _x( 'Search Projects', 'projects' ),
'not_found' => _x( 'No Project Found', 'project' ),
'not_found_in_trash' => _x( 'No Project found in Trash', 'project' ),
'parent_item_colon' => _x( 'Parent Project:', 'project' ),
'menu_name' => _x( 'Projects', 'projects' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Project.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-clipboard',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'projects', $args );
}

//Generates a section in wp-admin for a "jobs" ACF
add_action( 'init', 'register_cpt_jobs' );
function register_cpt_jobs() {
$labels = array(
'name' => _x( 'Jobs', 'jobs' ),
'singular_name' => _x( 'Jobs', 'jobs' ),
'add_new' => _x( 'Add New', 'job' ),
'add_new_item' => _x( 'Add New Job', 'job' ),
'edit_item' => _x( 'Edit job', 'job' ),
'new_item' => _x( 'New Job', 'job' ),
'view_item' => _x( 'View Jobs', 'jobs' ),
'search_items' => _x( 'Search Jobs', 'jobs' ),
'not_found' => _x( 'No jobs found', 'jobs' ),
'not_found_in_trash' => _x( 'No job found in Trash', 'job' ),
'parent_item_colon' => _x( 'Parent job:', 'job' ),
'menu_name' => _x( 'Jobs', 'jobs' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Job.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-editor-code',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'jobs', $args );
}

//Generates a section in wp-admin for a "about" ACF
add_action( 'init', 'register_cpt_about' );
function register_cpt_about() {
$labels = array(
'name' => _x( 'About', 'about' ),
'singular_name' => _x( 'About', 'about' ),
'add_new' => _x( 'Add New', 'about' ),
'add_new_item' => _x( 'Add New', 'about' ),
'edit_item' => _x( 'Edit', 'about' ),
'new_item' => _x( 'New', 'about' ),
'view_item' => _x( 'View', 'about' ),
'search_items' => _x( 'Search', 'about' ),
'not_found' => _x( 'None found', 'about' ),
'not_found_in_trash' => _x( 'None found in Trash', 'about' ),
'parent_item_colon' => _x( 'Parent:', 'about' ),
'menu_name' => _x( 'About', 'about' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for About.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-id-alt',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'about', $args );
}

//Generates a section in wp-admin for a "slogan" ACF
add_action( 'init', 'register_cpt_slogan' );
function register_cpt_slogan() {
$labels = array(
'name' => _x( 'Slogan', 'slogan' ),
'singular_name' => _x( 'Slogan', 'slogan' ),
'add_new' => _x( 'Add New', 'slogan' ),
'add_new_item' => _x( 'Add New Slogan', 'slogan' ),
'edit_item' => _x( 'Edit', 'slogan' ),
'new_item' => _x( 'New', 'slogan' ),
'view_item' => _x( 'View', 'slogan' ),
'search_items' => _x( 'Search', 'slogan' ),
'not_found' => _x( 'None found', 'slogan' ),
'not_found_in_trash' => _x( 'None found in Trash', 'slogan' ),
'parent_item_colon' => _x( 'Parent:', 'slogan' ),
'menu_name' => _x( 'Slogan', 'slogan' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Custom post type for Slogan.',
'supports' => array( 	'title',
						'editor',
						'excerpt',
						'author',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'),
'taxonomies' => array( 'category',
						'post_tag',
						'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-format-quote',
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
add_theme_support('post-thumbnails');
register_post_type( 'slogan', $args );
}

?>