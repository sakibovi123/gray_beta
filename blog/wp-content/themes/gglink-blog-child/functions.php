<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
//add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );





















/*************************GGLINK DEVELOPER**********************/

define("ABROAD_MENU_BASE_URL",'https://gray.ggtasker.co.uk');

/*
* Add CSS & JS File into admin panel
*
*/
add_action( 'admin_enqueue_scripts', function() {

	wp_enqueue_style( 'gray-blog-custom-backend-style', get_stylesheet_directory_uri().'/css/gray-blog-custom-backend.css' );
},100);

/*
* Add CSS & JS File into website
*
*/
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'gray-blog-custom-frontend-style', get_stylesheet_directory_uri().'/css/gray-blog-custom-front-end.css' );
	wp_enqueue_script( 'gray-blog-custom-frontend-script', get_stylesheet_directory_uri().'/js/gray-blog-custom-front-end.js');
});


/*
* Add Script admin panel footer
*
*/
add_action('admin_footer',function(){
?>
	<script>
		var stored_meta_information = '<?php echo gglink_meta_tag_information('get'); ?>';
	</script>
	<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/gglink-blog-custom-backend.js'></script>
<?php

});
/*
* Create a admin menu and page content.
* Page content is a form for input meta tag information
* Input show within website header tag.
* Example : <meta {inputed-formation}/>
* Input Field is added dynamically using javascirpt
*/

add_action( 'admin_menu',function(){
	add_menu_page("HTML Meta Input","HTML Meta Input","manage_options",'html-meta-input',function(){
		if(isset($_POST['save_meta_information'])){
			$meta_informations = stripslashes($_POST['meta_informations']);
			gglink_meta_tag_information('set',$meta_informations);
		}

		add_action('admin_notices', function(){
	         echo '<div class="notice notice-warning is-dismissible">
	             <p>This notice appears on the settings page.</p>
	         </div>';
		});
		?>
		<div class="wrap">
			<h2>Input Meta Tag Information</h2>
			<hr/>
			<form action="#" method="post" id="meta-input-form">
				<input type="hidden" name="meta_informations">
				<table class="meta-input-table">
					<tbody></tbody>
					<tfoot>
						<tr>
							<td align="center" class="button-add-meta-input">
								<p>Add New Meta</p>
							</td>
						</tr>
					</tfoot>
				</table>
				<div>
					<button name="save_meta_information">Save Information</button>
				</div>
			</form>
		</div>
		<?php
	});
});



/*
* Inputted meta tag information store.
* @Params : $type|string, $data|JSON-String
* @Return : Boolean|when stored data, Json-string|when fetch data
*
*/
function gglink_meta_tag_information($type,$data=''){
	if($type=='get'){
		return get_option("gglink_meta_tag_information");
	}elseif($type=='set'){
		return update_option("gglink_meta_tag_information",$data);
	}

}

/*
 * Change wordpress default search form
 *
*/

add_filter('get_search_form', 'gglink_search_form');
function gglink_search_form() {
	$search_for = isset($_GET['s'])?$_GET['s']:'';
	return "<form role='search' method='get' class='filter-form' id='common-search' action='".get_site_url()."'>
				<input type='text' id='s-1' name='s' aria-label='Search Blog' placeholder='Search Blog' value='$search_for'>
				<i class='fas fa-search'></i>
			</form>";
	
}


/*
* Sorting option for post grid view
* Customize wordpress core query to fetch posts
*
*/
add_action( 'pre_get_posts', function( $query ) { 
	$sort_type = isset($_GET['sort'])?$_GET['sort']:'';
	switch ($sort_type) {
	  case 'date-asc':
	    $query->set( 'orderby', 'date' );
        $query->set( 'order', 'asc' );
	    break;
	  case 'date-desc':
	    $query->set( 'orderby', 'date' );
        $query->set( 'order', 'desc' );
	    break;
	  case 'most-comment':
	    $query->set( 'orderby', 'comment_count' );
        $query->set( 'order', 'desc' );
	    break;
	  case 'least-comment':
	    $query->set( 'orderby', 'comment_count' );
        $query->set( 'order', 'asc' );
	    break;
	  default:
	    $query->set( 'orderby', 'date' );
        $query->set( 'order', 'desc' );
	}        
});


/*
* Sort options HTML form. Used for post sorting. 
* Options: Date wise ascending/descending,Comment wise ascending/descending
*
*/
function post_sort_option_form(){	
	$sort_type = isset($_GET['sort'])?$_GET['sort']:'';
	$sortingOptions = [
		"date-desc" => "Date (Descending)",
		"date-asc" => "Date (Ascending)",
		"most-comment" => "Most Comments",
		"least-comment" => "Least Comments"
	];
	$form = "";
	$form .= "<form id='blog-filter-form' class='auto_submit_form' method='get' action='#'>";
	if(isset($_GET['s'])){
		$form .= "<input type='hidden' name='s' value='$_GET[s]'/>";
	}
	$form .= "<span>Filter By </span>
				<select name='sort' id='blog-sort-by' onchange='this.form.submit()'>";

	foreach($sortingOptions as $key=>$val){
		$selected = $sort_type==$key?"selected":'';
		$form .= "<option value='$key' $selected>$val</option>";
	}
					
	$form .= '</select></form>';

	echo $form;
}


/*
* Create a short code for creating search bar
*
*/
add_shortcode('gglink_search_bar', function(){
	return  "<div class='blythe'>
		<div class='row search-filter blog mb-4'>
			<div class='col'>
			".gglink_search_form()."
			</div>
		</div>
	</div>";
});

/*
* Create a short code for show post tags
*
*/
add_shortcode('gglink_stags', function( $atts){
	$a = shortcode_atts( array(
        'show' => 10
    ), $atts );
	
	$tags = get_tags(array(
	  'hide_empty' => false,
		'number' => $a['show']
	));
	$tgs = '<ul id="tag_lists">';
	foreach ($tags as $tag) {
	  $tgs .= "<li><a href='".get_site_url()."/tag/$tag->slug'>" . $tag->name . "</a></li>";
	}
	$tgs .= '</ul>';
	return $tgs;
});


/**
 * Provide posts by creating API
 */

add_action('rest_api_init', function(){
    register_rest_route('get-posts', '/(?P<post_count>\d+)', array(
        'permission_callback' => '__return_true',
        'methods'   => 'POST',
        'callback'  => function($request) {
            $data = [];
            $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => $request['post_count'],
                    'post_status' => 'publish'
                ));
            foreach($recent_posts as $rp){
                $data[] = [
                    'id' => $rp['ID'],
                    'post_title' => $rp['post_title'],
                    'post_description' => $rp['post_content'],
                    'thumbnail_img_url' => get_the_post_thumbnail_url($rp['ID']),
                    'permalink' => get_permalink($rp['ID'])
                    
                ];
            }
            return $data;
            die;
        }
    ));
});



//Adding the Open Graph in the header Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
	
		echo '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">'. "\r\n";
		echo "\r\n";
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
		echo '<meta name="viewport" content="width=device-width,initial-scale=1" />';
		echo '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />';
		echo '<meta name="robots" content="all" />';
		echo '<meta name="robots" content="max-snippet:20, max-image-preview:large" />';
		echo '<meta name="theme-color" content="#ff914f" />';
		echo '<meta name="msapplication-navbutton-color" content="#ff914f" />';
		echo '<meta name="apple-mobile-web-app-capable" content="yes" />';
		echo '<meta name="apple-mobile-web-app-status-bar-style" content="#ff914f" />';
		echo '<meta name="robots" content="index,follow" />';
		echo '<meta name="revisit-after" content="7 days" />';
		echo '<meta name="distribution" content="web" />';
		echo '<meta name="copyright" content="GG Link" />';
		echo '<meta name="author" content="Adam Levine from GGLink" />';
		echo '<link rel="canonical" href="https://www.gray.uk/" />';
		echo '<meta name="designer" content="GG Link London Team" />';
		echo '<meta name="publisher" content="Adam Levine from GGLink" />';
        echo '<meta property="fb:app_id" content="354600712831971" />';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="'.get_site_url().'"/>';
        echo ' <meta property="og:image:width" content="1200" /> ';
        echo '<meta property="og:image:height" content="630" />';
    if(!has_post_thumbnail( $post->ID )) {
        $default_image="https://www.gray.uk/assets/images/branding/social/agency.jpg";
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
