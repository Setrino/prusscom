<?php
//Locazition for Translate
//Text Domain for Mega theme is mega 
load_theme_textdomain('mega', get_template_directory() . '/languages/');

//Set Content width
if ( ! isset( $content_width ) )
$content_width = 600;

//Config directory
define('wope_theme_path', get_template_directory() . '/');
define('wope_lib_path', wope_theme_path . 'lib' . '/');


//Load Lib
include(wope_lib_path.'common_functions.php');
include(wope_lib_path.'widgets.php');
include(wope_lib_path.'sidebars.php');
include(wope_lib_path.'post.php');
include(wope_lib_path.'page.php');
include(wope_lib_path.'shortcode.php');


include(wope_theme_path.'template_lib.php');

//Thumbnail Setting
add_action( 'after_setup_theme', 'wope_thumb_setup' );
function wope_thumb_setup() {
	set_post_thumbnail_size( 768, 9999); //defaul blog thumb
	add_image_size( 'wope-thumb-big', 1200, 9999 ); //fulwidth page/blog thumb
	add_image_size( 'wope-thumb-grid', 700, 550,true ); //grid blog widget
	add_image_size( 'wope-thumb-grid-portfolio', 700, 610,true ); //grid blog widget
	add_image_size( 'wope-thumb-medium', 700, 700,true ); //blog medium template & widget
	add_image_size( 'wope-thumb-small', 115, 115,true );  //blog list & sidebar widget 
	add_image_size( 'wope-thumb-masonry', 700, 9999);  //blog masonry and portfolio masonry
	
}

//Register Menus
add_action( 'init', 'wope_register_my_menus' );
function wope_register_my_menus() {
	register_nav_menus(
		array( 'main-menu' => 'Main Menu'  , 'toggle-menu' => 'Toggle Menu' )
	);
}


//Create Admin Panel Menu
add_action( 'admin_menu', 'wope_admin_menu' );
function wope_admin_menu(){
	add_theme_page( 'Mega', 'Mega' , 'manage_options', 'theme-mega', 'wope_admin_page');
}

//Load Admin Panel
function wope_admin_page(){
	get_template_part("font_list");
	include(wope_lib_path.'setting_page.php');
}

//Load Script for Front-end
add_action('wp_enqueue_scripts', 'wope_load_script_frontend');
function wope_load_script_frontend(){
	wp_register_script( 'wope-jquery-easing' , get_template_directory_uri() .'/js/jquery.easing.1.3.js' ,'',false,true );
	wp_register_script( 'wope-frontend-script' ,get_template_directory_uri() .'/js/script.js','',false,true);
	wp_register_script( 'isotope-script' ,get_template_directory_uri() .'/js/jquery.isotope.min.js','',false,true);
	wp_register_script( 'flexslider-script' ,get_template_directory_uri() .'/js/flex-slider/jquery.flexslider-min.js','',false,true );
	wp_register_script( 'magnific-popup-script' ,get_template_directory_uri() .'/js/magnific-popup/jquery.magnific-popup.js','',false,true );
	wp_register_script( 'tubular-script' ,get_template_directory_uri() .'/js/jquery.tubular.1.0.js','',false,true );
	wp_register_script( 'masonry-script' ,get_template_directory_uri() .'/js/masonry.pkgd.min.js','',false,true );
	wp_register_script( 'imagesloaded-script' ,get_template_directory_uri() .'/js/imagesloaded.pkgd.min.js','',false,true );
	
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-accordion' );
	wp_enqueue_script( 'wope-frontend-script' );
	wp_enqueue_script( 'wope-jquery-easing' );
	wp_enqueue_script( 'isotope-script' );
	wp_enqueue_script( 'flexslider-script' );
	wp_enqueue_script( 'magnific-popup-script' );
	wp_enqueue_script( 'tubular-script' );
	wp_enqueue_script( 'masonry-script' );
	wp_enqueue_script( 'imagesloaded-script' );
	
	//Load Comment Reply
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
}

//Load Style for Front-end
add_action('wp_enqueue_scripts', 'wope_load_style_frontend');
function wope_load_style_frontend(){
	
	
	//Get Options
	$wope_main_option = get_option('wope-main');
	$font_options = get_option('wope-font');
	
	//Register css
	wp_register_style( 'wope-default-style', get_template_directory_uri() . '/style.css'  );
	wp_register_style( 'wope-responsive', get_template_directory_uri() .'/responsive.css' );
	wp_register_style( 'flexslider-style', get_template_directory_uri() .'/js/flex-slider/flexslider.css' );
	wp_register_style( 'magnific-popup-style', get_template_directory_uri() .'/js/magnific-popup/magnific-popup.css' );
	wp_register_style( 'wope-font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.min.css' , __FILE__ );
	wp_register_style( 'wope-font-pe-icon-7-stroke', get_template_directory_uri() .'/pe-icon-7-stroke/css/pe-icon-7-stroke.css' , __FILE__ );
	
	
	
	//Load fonts
	global $wope_font_list;
	global $wope_live_font;
	get_template_part('font_list');
	
	$wope_unique_font_option = array_unique($font_options);
	
	
	foreach($wope_unique_font_option as $wope_each_font){
		if($key = array_key_exists($wope_each_font,$wope_font_list)){
			wp_register_style( 'wope-gfont-'. str_replace(' ','-',$wope_each_font),'http://fonts.googleapis.com/css?family='.$wope_font_list[$wope_each_font][1]);
			wp_enqueue_style('wope-gfont-'.str_replace(' ','-',$wope_each_font));
		}
	}
	
	//load styel.css
	wp_enqueue_style('wope-default-style');
	
	//load responsive.css 
	if($wope_main_option['responsive'] == 1){
		wp_enqueue_style('wope-responsive');
	}
	
	//load all other css
	
	wp_enqueue_style('flexslider-style');	
	wp_enqueue_style('magnific-popup-style');	
	wp_enqueue_style('wope-font-awesome');
	wp_enqueue_style('wope-font-pe-icon-7-stroke');
}

//Add New Color Picker
add_action( 'admin_enqueue_scripts', 'wope_enqueue_color_picker' );
function wope_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wope-wp-color-picker', get_template_directory_uri() . '/js/wp-color-picker.js' , array( 'wp-color-picker' ), false, true );
}

//Load Style for Back-end
add_action('admin_enqueue_scripts', 'wope_admin_enqueue_style');
function wope_admin_enqueue_style() {
	wp_register_style( 'wope-admin-style', get_template_directory_uri() .'/admin.css' , __FILE__ );
	
	wp_register_style( 'wope-admin-font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.min.css' , __FILE__ );
	wp_register_style( 'wope-admin-font-pe-icon-7-stroke', get_template_directory_uri() .'/pe-icon-7-stroke/css/pe-icon-7-stroke.css' , __FILE__ );

	wp_enqueue_style( 'wope-admin-style' );

	wp_enqueue_style('wope-admin-font-awesome');
	wp_enqueue_style('wope-admin-font-pe-icon-7-stroke');
	wp_enqueue_style('thickbox');
}

//Load Script for Back-end
add_action('admin_enqueue_scripts', 'wope_enqueue_page_builder_script');

function wope_enqueue_page_builder_script() {
	wp_register_script( 'wope-jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.js' );
	wp_register_script( 'wope-admin-script',get_template_directory_uri() .'/js/admin_script.js', __FILE__ );
	wp_register_script( 'wope-admin-page-builder',get_template_directory_uri() .'/js/page_builder.js', __FILE__ );
	
	/* wope page builder js*/
	
	
	//Load for Admin Panel
	if(!empty($_GET['page'])){
		if($_GET['page'] == 'theme-mega' ){
			wp_enqueue_script( 'jquery-ui-core' );
			wp_enqueue_script( 'jquery-ui-sortable' );
			wp_enqueue_script( 'jquery-ui-draggable' );
			wp_enqueue_script( 'jquery-ui-droppable' );
			wp_enqueue_script( 'wope-admin-script' );
			wp_enqueue_script( 'wope-jquery-easing' );

			//wp uploader
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
	
	if(get_post_type() == 'page'){ //Load for Edit Page
		
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'jquery-ui-droppable' );
		wp_enqueue_script( 'wope-admin-script' );
		wp_enqueue_script( 'wope-jquery-easing' );
		
		
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		
		//page builder
		wp_enqueue_script( 'wope-admin-page-builder' );
	
	}elseif(get_post_type() == 'portfolio'){ //Load for Edit Portfolio
		
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'jquery-ui-droppable' );
		wp_enqueue_script( 'wope-admin-script' );
		wp_enqueue_script( 'wope-jquery-easing' );
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		
	
	}elseif(get_post_type() == 'post'){ //Load for Edit Post
		//admin scripts
		
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'jquery-ui-droppable' );
		wp_enqueue_script( 'wope-admin-script' );
		wp_enqueue_script( 'wope-jquery-easing' );
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
}

//Load custom JS & CSS
add_action('wp_head', 'wope_load_custom_js_css');
function wope_load_custom_js_css(){
	$wope_main_option = get_option('wope-main');
	if(!empty($wope_main_option['custom_js'])){
		if(trim($wope_main_option['custom_js']) != ''){?>
			<script type='text/javascript'>
				<?php wope_var($wope_main_option['custom_js']);?>
			</script>
		<?php }
	}
	
	if(!empty($wope_main_option['custom_css'])){
		if(trim($wope_main_option['custom_css']) != ''){?>
			<style type="text/css">
				<?php wope_var($wope_main_option['custom_css']);?>
			</style>
		<?php }
	}
}

//Load custom js footer
add_action('wp_footer', 'wope_load_custom_js_footer');
function wope_load_custom_js_footer(){
	$wope_main_option = get_option('wope-main');
	if(!empty($wope_main_option['custom_js_footer'])){
		if(trim($wope_main_option['custom_js_footer']) != ''){?>
			<script type='text/javascript'>
				<?php wope_var($wope_main_option['custom_js_footer']);?>
			</script>
		<?php }
	}

}

//load custom color & typography in header
add_action('wp_head', 'wope_load_color_typography');
function wope_load_color_typography(){
	include(wope_lib_path.'color_pattern.php');
	include(wope_lib_path.'font_pattern.php');
	
	//remove line break
	$wope_color_text 	= trim(preg_replace('/\s+/', ' ', $wope_color_text));
	$wope_font_text 	= trim(preg_replace('/\s+/', ' ', $wope_font_text));
	?>
	<style type="text/css" media="screen">
		<?php wope_var($wope_color_text);?>
		<?php wope_var($wope_font_text);?>
	</style>

	<?php 
	
};

//Filder for wp uploader
add_filter('get_media_item_args', 'wope_get_media_item_args');
function wope_get_media_item_args($args) {    
	$args['send'] = true;
	return $args;
}
 
//Config excerpt 
function wope_excerpt_length( $length ) {
	$wope_post_option = get_option('wope-post');
	return $wope_post_option['excerpt_length'];
}
add_filter( 'excerpt_length', 'wope_excerpt_length', 999 );

//Config Excerpt More Suffix
function wope_excerpt_more( $excerpt ) {
	$wope_post_option = get_option('wope-post');
	str_replace('</p>','</p></div>',$excerpt);
	return '';	
	
}
add_filter( 'excerpt_more', 'wope_excerpt_more' );

//Function to show post nave links
function wope_post_nav_link(){
	global $wp_query;  
	if ( $wp_query->max_num_pages > 1 ){
	?>
		<div class="posts-navigation"><p><?php posts_nav_link(); ?></p></div>
	<?php
	}
}


//Init data for theme
if( !get_option( 'mega-setup-init') ){

	$theme_url = get_template_directory_uri();
	update_option( 'mega-setup-init', 1);
	
	//Main options
	$wope_main_option_array = array(
		'logo_url' 					=> '',
		'logo_retina_url' 			=> '',
		'logo_retina_width' 		=> '',
		'logo_retina_height' 		=> '',
		'white_logo_url' 			=> '',
		'white_logo_retina_url' 	=> '',
		'scroll_logo_url' 			=> '',
		'scroll_logo_retina_url' 	=> '',
		'scroll_header' 			=> 1,
		'responsive'				=> 1,
		'site_layout'  				=> 0,
		'copyright' 				=> 'Copyright 2016 Mega - Designed by  <a title="Premium Wordpress Theme" href="http://wopethemes.com/" >Wopethemes</a>',
		'tracking_code' 			=> '',
		'custom_js' 				=> '',
		'custom_css' 				=> '',
		'bg_type' 					=> 0,
		'bg_image' 					=> '',
		'bg_image_pattern' 			=> '',
		'bg_color' 					=> '#F9BF3B',
		'section_title_tag' 		=> 'h1',
		'section_subtitle_tag' 		=> 'h2',
		'widget_title_tag' 			=> 'h2',
	);
	update_option( 'wope-main', $wope_main_option_array);
	
	//Header options
	$header_option_array = array(
		'contact_line_phone' 	 		 => '(134) 4567890 ',
		'contact_line_email' 	 		 => 'INFO@SITE.COM',
		'contact_line_time' 		 	 => 'MON - SAT 10AM - 6PM',
		'topbar' 				 		 => 1,
		'topbar_left_search'	 		 => 0,
		'topbar_left_social' 	 		 => 0,
		'topbar_left_contact'	 		 => 1,
		'topbar_right_search' 	 		 => 0,
		'topbar_right_social' 	 		 => 1,
		'topbar_right_contact' 	 		 => 0,
		'header_style' 				 	 => 'white',
		'header_text_color' 			 => 'black',
		'heading_style' 				 => 'gray',
		'heading_align' 				 => 'left',
		'header_bg_color'				 => '',
		'header_bg_image' 				 => '',
		'header_bg_transparent'			 => '',
	);
	update_option( 'wope-header', $header_option_array);
	
	$social_array = array(
		'rss',
		'behance',
		'bitbucket',
		'codepen',
		'delicious',
		'deviantart',
		'digg',
		'dribbble',
		'dropbox',
		'drupal',
		'facebook',
		'flickr',
		'foursquare',
		'git',
		'github',
		'gittip',
		'google-plus',
		'hacker-news',
		'instagram',
		'joomla',
		'jsfiddle',
		'linkedin',
		'maxcdn',
		'openid',
		'pinterest',
		'reddit',
		'share-alt',
		'soundcloud',
		'spotify',
		'stack-exchange',
		'stack-overflow',
		'stumbleupon',
		'tumblr',
		'twitter',
		'vimeo-square',
		'vine',
		'vk',
		'weibo',
		'weixin',
		'wordpress',
		'xing',
		'yahoo',
		'youtube',
	);
	
	//Socials options
	$social_option_array = array();
	foreach($social_array as $each_social){
		$social_option_array[$each_social] =  '';
	}
	update_option( 'wope-social', $social_option_array);
	
	//post options
	$wope_post_option_array = array(
		'excerpt_length' 		=> 20,
		'excerpt_suffix' 		=> '...',
		'post_grid_column' 		=> 3,
		'post_grid_row' 		=> 2,
		'post_social_share' 	=> 0,
	);
	update_option( 'wope-post', $wope_post_option_array);
	
	//portfolio options
	$portfolio_option_array = array(
		'portfolio_label'					=> 'Portfolio',
		'portfolio_slug'					=> 'portfolio',
		'portfolio_category_slug'			=> 'portfolio-type',
		'portfolio_category_grid_column'	=> 3,
		'portfolio_category_grid_row'		=> 2,
		'portfolio_page_url'				=> '',
		'portfolio_pagination_type'			=> 0,
		'portfolio_social_share' 				=> 0,
	);
	update_option( 'wope-portfolio', $portfolio_option_array);
	
	//sidebar options
	$sidebar_option_array = array(
		'page-sidebar' 			=> 'page-sidebar',
		'archive-sidebar' 		=> 'archive-sidebar',
		'single-sidebar' 		=> 'single-sidebar',
	);
	update_option( 'wope-sidebar', $sidebar_option_array);
	
	$font_option_array = array(
		'font_heading' => 'Montserrat',
		'font_menu' => 'Montserrat',
		'font_body' => 'Raleway',
	);
	update_option( 'wope-font', $font_option_array);
	
	$color_option_array = array(
		'highlight-color' 	=> '#f9bf3b',
		'semi-color' 	=> '#facf6e',
	);
	update_option( 'wope-color', $color_option_array);
	
}




/* WOOCOMMERCE INTERGATE */



add_action( 'after_setup_theme', 'wope_woocommerce_support' );
function wope_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//woo brand meta box
add_action( 'woocommerce_product_options_pricing', 'wope_woo_brand_field' );
function wope_woo_brand_field() {
    woocommerce_wp_text_input( array( 'id' => 'wope_woo_brand', 'label' => esc_html__( 'Brand', 'mega' ) ) );
}

add_action( 'save_post', 'wope_woo_brand_save_product' );
function wope_woo_brand_save_product( $product_id ) {
    // If this is a auto save do nothing, we only save when update button is clicked
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	if ( isset( $_POST['wope_woo_brand'] ) ) {
		update_post_meta( $product_id, 'wope_woo_brand', $_POST['wope_woo_brand'] );
	} else delete_post_meta( $product_id, 'wope_woo_brand' );
}






// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// change pagination arrros
add_filter( 'woocommerce_pagination_args' , 'custom_override_pagination_args' );
function custom_override_pagination_args( $args ) {
	$args['prev_text'] = esc_html__('&#8592;','mega');
	$args['next_text'] = esc_html__('&#8594;','mega');
	return $args;
}

// Display 6 products per page.
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 6;' ), 20 );


/* Define image sizes*/
add_action( 'init', 'wope_woocommerce_image_dimensions', 1 );
function wope_woocommerce_image_dimensions() {
  	$catalog = array(
		'width' 	=> '720',	// px
		'height'	=> '9999',	// px
		'crop'		=> 0 		// true
	);

	$single = array(
		'width' 	=> '720',	// px
		'height'	=> '9999',	// px
		'crop'		=> 0 		// true
	);

	$thumbnail = array(
		'width' 	=> '720',	// px
		'height'	=> '9999',	// px
		'crop'		=> 0 		// false
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}


//add percent to sale flash
add_filter( 'woocommerce_sale_flash', 'wc_custom_replace_sale_text' );
function wc_custom_replace_sale_text( $html ) {
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    global $post, $product;
    if ( ! $product->is_in_stock() ) return;
    $sale_price = get_post_meta( $product->id, '_price', true);
    $regular_price = get_post_meta( $product->id, '_regular_price', true);
    if (empty($regular_price)){ //then this is a variable product
        $available_variations = $product->get_available_variations();
        $variation_id=$available_variations[0]['variation_id'];
        $variation= new WC_Product_Variation( $variation_id );
        $regular_price = $variation ->regular_price;
        $sale_price = $variation ->sale_price;
    }
    $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);

    return str_replace( __( 'Sale!', 'woocommerce' ), '-'. $sale . '%' , $html );
}





// add woo brand to shop page
add_action( 'woocommerce_shop_loop_item_title' , 'wope_shop_add_brand' , 20);
function wope_shop_add_brand( $html ) {
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    global $post, $product;
    $product_brand = get_post_meta( $product->id, 'wope_woo_brand' );

	$html = '<div class="product-brand">'. $product_brand[0].'</div>';
	echo $html;
}

// add woo brand to single product
add_action( 'woocommerce_single_product_summary' , 'wope_single_product_add_brand' , 5);
function wope_single_product_add_brand( $html ) {
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    global $post, $product;
    $product_brand = get_post_meta( $product->id, 'wope_woo_brand' );
	$html = '<div class="product-brand">'. $product_brand[0].'</div>';
	echo $html;
}




//add link to title shop page

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'wope_woo_title_link', 10 );
function wope_woo_title_link() {
	global $post, $product;
	$url = get_permalink( $product->id );
	echo '<h3><a href="'.$url.'">' . get_the_title() . '</a></h3>';

}


//remove single breadcrumbs

add_action( 'init', 'wope_remove_wc_breadcrumbs' );
function wope_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


/* wpml */


function wope_wpml_footer(){
	if ( function_exists('icl_object_id') ) {
		$wope_wpml_option = get_option('wope-wpml');
		if($wope_wpml_option['wpml_selector'] == 3){
    		languages_list_footer();
    	}
	}
}

function wope_wpml_topbar_left(){
	if ( function_exists('icl_object_id') ) {
		$wope_wpml_option = get_option('wope-wpml');
		if($wope_wpml_option['wpml_selector'] == 1){?>
			<span id="flags_language_selector"><?php language_selector_flags(); ?></span >
	    	<?php
    	}	
	}
}

function wope_wpml_topbar_right(){
	if ( function_exists('icl_object_id') ) {
		$wope_wpml_option = get_option('wope-wpml');
		if($wope_wpml_option['wpml_selector'] == 2){?>
			<span id="flags_language_selector"><?php language_selector_flags(); ?></span >
	    	<?php
    	}	
	}
}

function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
        }
    }
}

function languages_list_footer(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div id="footer_language_list"><ul>';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                if(!$l['active']) echo '<a href="'.$l['url'].'">';
                echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                if(!$l['active']) echo '</a>';
            }
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
        echo '</ul></div>';
    }
}
