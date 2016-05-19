<?php
//setup the theme
add_action( 'after_setup_theme', 'wope_setup' );
function wope_setup() {
	// add feature images
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	if ( is_user_logged_in() ) {
		$wope_current_user = wp_get_current_user();
		$wope_show_bar = get_user_meta($wope_current_user->data->ID, 'show_admin_bar_front');
		if($wope_show_bar[0] == 'false'){
			show_admin_bar( false);
		}else{
			show_admin_bar( true );
		}		
	}
}


//remove wordpress escape
function wope_remove_wp_magic_quotes(){
	$_GET    = stripslashes_deep($_GET);
	$_POST   = stripslashes_deep($_POST);
	$_COOKIE = stripslashes_deep($_COOKIE);
	$_REQUEST = stripslashes_deep($_REQUEST);
}
wope_remove_wp_magic_quotes();


function wope_show_paginate_links(){
	global $wp_query;		
	global $wp_rewrite;		
	if( $wp_rewrite->using_permalinks() ){
	
		$wp_query->query_vars['paged'] > 1 ? $wope_current = $wp_query->query_vars['paged'] : $wope_current = 1;

		$pagination = array(
			'base' => @add_query_arg('page','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $wope_current,
			'show_all' => false,
			'type' => 'plain',
			'prev_text' => esc_html__('&#8592;','mega'),
        	'next_text' => esc_html__('&#8594;','mega'),
		);

		
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array('s'=>get_query_var('s'));

		wope_var(paginate_links($pagination)) ; 
	}else{
		wope_var(paginate_links()) ; 	
	}
}

function wope_custom_paginate_links($paged){
		global $wp_query;		
		global $wp_rewrite;	
		if( $wp_rewrite->using_permalinks() ){
			$pagination = array(
				'base' => @add_query_arg('page','%#%'),
				'format' => '',
				'show_all' => false,
				'type' => 'plain',
				'prev_text' => esc_html__('&#8592;','mega'),
        		'next_text' => esc_html__('&#8594;','mega'),
				'current' => $paged,
				'total' => $wp_query->max_num_pages
			);	
			
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

			if( !empty($wp_query->query_vars['s']) )
				$pagination['add_args'] = array('s'=>get_query_var('s'));
				
			wope_var(paginate_links($pagination)) ; 	
		}else{
			wope_var(paginate_links()) ; 	
		}
		
	}



//filter to remove width,height of images.
add_filter( 'post_thumbnail_html', 'wope_remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'wope_remove_width_attribute', 10 );

function wope_remove_width_attribute( $wope_html ) {
   $wope_html = preg_replace( '/(width|height)="\d*"\s/', "", $wope_html );
   return $wope_html;
}


function wope_check_post($wope_key){
	global $POST;
	if(array_key_exists($wope_key,$_POST)){
		return $_POST[$wope_key];
	}
}


function wope_widget_field($wope_number){
	global $wope_pb_option;
	global $wope_pb_field;
	global $default;
	
	$wope_number_default = $wope_number - 1;

	$wope_field_key = $wope_pb_field.$wope_number;

	if(is_array($wope_pb_option)){ //if array exist
		if(array_key_exists($wope_field_key,$wope_pb_option)){
			return $wope_pb_option[$wope_field_key];
		}else{
			return $default[$wope_number_default];
		}
	}else{
		return $default[$wope_number_default];
	}
}

function wope_widget_dynamic_field($wope_name){
	global $wope_pb_option;
	global $wope_pb_field;
	$wope_field_key = $wope_pb_field.$wope_name;
	
	if(is_array($wope_pb_option)){ //if array exist
		if(array_key_exists($wope_field_key,$wope_pb_option)){
			return $wope_pb_option[$wope_field_key];
		}else{
			return '';
		}
		return '';
	}
}

function wope_wope_widget_field_item($wope_name,$wope_key2){
	global $wope_pb_option;
	global $wope_pb_field;
	$wope_key1 = $wope_pb_field.$wope_name;
	if(is_array($wope_pb_option)){
		if(array_key_exists($wope_key1,$wope_pb_option)){
			if(is_array($wope_pb_option[$wope_key1])){
				if(array_key_exists($wope_key2,$wope_pb_option[$wope_key1])){
					wope_var($wope_pb_option[$wope_key1][$wope_key2]);
				}
			}
		}
	}
}

function wope_array($wope_array,$wope_key,$wope_default = ''){
	if(is_array($wope_array)){
		if(array_key_exists($wope_key,$wope_array)){
			return $wope_array[$wope_key];
		}else{
			return $wope_default;
		}
	}else{
		return $wope_default;
	}
}

function wope_array2($wope_array,$wope_key1,$wope_key2){
	if(is_array($wope_array)){
		if(array_key_exists($wope_key1,$wope_array)){
			if(is_array($wope_array[$wope_key1])){
				if(array_key_exists($wope_key2,$wope_array[$wope_key1])){
					return $wope_array[$wope_key1][$wope_key2];
				}
			}
		}
	}
}

function wope_pb_convert($wope_string){
	return str_replace("-", "_", $wope_string);
}


function wope_convert_slug($wope_string){
    $wope_string = strtolower($wope_string);
    $wope_string = html_entity_decode($wope_string);
    $wope_string = str_replace(array('ä','ü','ö','ß'),array('ae','ue','oe','ss'),$wope_string);
    $wope_string = preg_replace('#[^\w\säüöß]#',null,$wope_string);
    $wope_string = preg_replace('#[\s]{2,}#',' ',$wope_string);
    $wope_string = str_replace(array(' '),array('-'),$wope_string);
    return $wope_string;
}

function wope_page_breadcrumb($wope_post_parent){
	$wope_parent_array = array();
	_wope_page_breadcrumb($wope_post_parent,$wope_parent_array);
	return $wope_parent_array;
}

function _wope_page_breadcrumb($wope_post_parent,&$wope_array){
	if($wope_post_parent != 0){
		$wope_parent_page = get_post($wope_post_parent);	
		
		//add new parent to array
		$wope_new_array['id'] = $wope_parent_page->ID;
		$wope_new_array['post_title'] = $wope_parent_page->post_title;
		array_unshift($wope_array,$wope_new_array);
		
		//search for next parent
		$wope_new_post_parent = $wope_parent_page->wope_post_parent;
		_wope_page_breadcrumb($wope_new_post_parent,$wope_array);
	}
}

function wope_parse_shortcode_content( $wope_content ) {

   /* Parse nested shortcodes and add formatting. */
    $wope_content = trim( do_shortcode( shortcode_unautop( $wope_content ) ) );

    /* Remove '' from the start of the string. */
    if ( substr( $wope_content, 0, 4 ) == '' )
        $wope_content = substr( $wope_content, 4 );

    /* Remove '' from the end of the string. */
    if ( substr( $wope_content, -3, 3 ) == '' )
        $wope_content = substr( $wope_content, 0, -3 );

    /* Remove any instances of ''. */
    $wope_content = str_replace( array( '<p></p>' ), '', $wope_content );
    $wope_content = str_replace( array( '<p>  </p>' ), '', $wope_content );
	

    return $wope_content;
}


//get revolution slider list
if( class_exists( 'RevSlider' ) ) {
	function wope_mdf_get_revSlider(){
		if(class_exists('RevSlider')){
			$wope_returnSlider = array();
			$wope_slider = new RevSlider();
			$wope_arrSliders = $wope_slider->getArrSliders();
			
			foreach($wope_arrSliders as $wope_slider) { 
				$wope_returnSlider[$wope_slider->getAlias()] = $wope_slider->getTitle();
			}
			return $wope_returnSlider;
		}else{
			$wope_returnSlider = array();
			return $wope_returnSlider;
		}
	}	
}else{
	function wope_mdf_get_revSlider(){
		return array();
	}
}


// set cpt post per page 
function wope_set_cpt($query){
	//fix paginate for archive & taxonomy page of custom post type	
	if(isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'portfolio' && isset($query->query_vars['posts_per_archive_page'])){
		$portfolio_options = get_option('wope-portfolio');
		if($query->query_vars['posts_per_archive_page'] == 0){
			$query->query_vars['posts_per_page'] = $portfolio_options['portfolio_category_grid_column']*$portfolio_options['portfolio_category_grid_row'];
			$query->query_vars['posts_per_archive_page'] = $portfolio_options['portfolio_category_grid_column']*$portfolio_options['portfolio_category_grid_row'];
		}
	}

}
add_action( 'pre_get_posts', 'wope_set_cpt' );


function wope_get_end_class($wope_current,$wope_total,$wope_each,$wope_return_class = 'widget-element-bottom'){
	$wope_end_level = floor($wope_total/$wope_each); // 11/3 = 3
	
	if($wope_end_level * $wope_each == $wope_total){ // 3x4 = 12 
		$wope_end_begin = $wope_total - $wope_each + 1; // end = 12 - 3 = 9 + 1 = 10 ( end is 10 11 12 )
	}else{ 								// 3x3 = 9 < 11
		$wope_end_begin = $wope_end_level * $wope_each + 1;  // 3x3 + 1 = 10 ( end is 10 11 )
	}
	
	if($wope_current >= $wope_end_begin){ // if current is 10 11
		return $wope_return_class;
	}else{
		return "";
	}
}

//get custom taxanomy terms link array
function wope_get_terms_links($wope_post_id,$wope_taxonomy_name){
	$wope_terms = get_the_terms( $wope_post_id, $wope_taxonomy_name );		
	$wope_term_links = array();				
	if ( $wope_terms && ! is_wp_error( $wope_terms ) ) {
		$portfolio_categories = array();
		foreach ( $wope_terms as $wope_term ) {
			$wope_term_links[] = '<a href="'.get_term_link($wope_term->term_id,'portfolio-category').'">'.$wope_term->name.'</a>';
		}						
	}
	return $wope_term_links;
	
}

function wope_var($wope_var){
	echo wope_filter($wope_var);
}

function wope_filter($wope_var){
	return $wope_var;
}


/* fix broken page builder after import */

$fixed_page_builder = get_option( 'fixed_page_builder' );

if($fixed_page_builder == false){ // if it did not fix page builder

	$page1 = get_page_by_title( 'About Agency', 'OBJECT', 'page' );
	$page2 = get_page_by_title( 'About Classic', 'OBJECT', 'page' );

	if($page1 != null and $page2 != null ){ // if the page exist
		$page1_bp = get_post_meta ( $page1->ID , 'page-builder' );
		$page2_bp = get_post_meta ( $page2->ID , 'page-builder' );

		if($page1_bp[0] == '' and $page2_bp[0] == ''){

			$current = file_get_contents(wope_theme_path.'demo/demo_file.txt');
			$my_data = unserialize($current);

			foreach($my_data as $each_data){
				$current_post = get_page_by_title( $each_data['title'], 'OBJECT', 'page' );
				update_post_meta( $current_post->ID, 'page-builder',  unserialize($each_data['data']));
			}

			update_option( 'fixed_page_builder', 1 );
		}

	}
}

