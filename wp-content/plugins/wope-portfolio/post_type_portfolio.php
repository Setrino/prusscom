<?php
add_action('plugins_loaded', 'wopo_load_textdomain');
function wopo_load_textdomain() {
	load_plugin_textdomain( 'wope', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
}

//custom post type
add_action( 'init', 'wopo_create_portfolio_item_type' );
function wopo_create_portfolio_item_type() {
	$portfolio_args = array(
		'labels' => array(
			'name' => 'Portfolio' ,
			'singular_name' =>  'Portfolio' ,
			'add_new' => 'Add New',
			'all_items' => 'All Portfolios',
			'add_new_item' => 'Add New Portfolio' ,
			'edit_item' => 'Edit Portfolio' ,
			'new_item' => 'New Portfolio' ,
			'view_item' =>  'View Portfolio' ,
			'search_items' => 'Search Portfolios' ,
			'not_found_in_trash' => 'No Portfolio found in Trash',
			'view_item' =>  'View Portfolio' ,
		),
		'has_archive' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-portfolio',
		'show_in_admin_bar' => true,
		'supports' => array(
				'title',
				'editor',
				'comments',
				'revisions',
				'thumbnail',
			),
	);
	
	$portfolio_options = get_option('wope-portfolio');
	//change portfolio name
	if($portfolio_options['portfolio_label'] != 'Portfolio' and trim($portfolio_options['portfolio_label']) != ''){ 
		$portfolio_args['labels']['name'] = $portfolio_options['portfolio_label'];
	}
	
	//change portfolio slug
	if($portfolio_options['portfolio_slug'] != 'portfolio' and trim($portfolio_options['portfolio_slug']) != ''){ 
		$portfolio_args['rewrite'] = array('slug' => $portfolio_options['portfolio_slug']);
	}
	
	//change portfolio archive page
	if(trim($portfolio_options['portfolio_page_url']) != ''){ 
		$portfolio_args['has_archive'] = false;
	}
	
	register_post_type( 'portfolio',$portfolio_args);
	
	 /* IMPORTIONT: Remember this line! */
    flush_rewrite_rules( false );/* Please read "Update 2" before adding this line */
}

//register taxonomy
add_action( 'init', 'wopo_create_portfolio_item_taxonomies', 0 );
function wopo_create_portfolio_item_taxonomies(){
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name' => 'Portfolio Categories',
		'singular_name' =>  'Portfolio Category',
		'search_items' =>   'Search Portfolio Categories' ,
		'popular_items' => 'Popular Portfolio Categories',
		'all_items' =>'All Portfolio Categories' ,
		'parent_item' => 'Parent Portfolio Category' ,
		'parent_item_colon' =>'Parent Portfolio Category:',
		'edit_item' => 'Edit Portfolio Category' ,
		'update_item' => 'Update Portfolio Category' ,
		'add_new_item' => 'Add New Portfolio Category',
		'new_item_name' => 'New Portfolio Category Name',
	);
  
	$portfolio_category_args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-category'  ),
	);
  
	$portfolio_options = get_option('wope-portfolio');
	//change portfolio category slug
	if(trim($portfolio_options['portfolio_category_slug']) != ''){ 
		$portfolio_category_args['rewrite'] = array( 'slug' => $portfolio_options['portfolio_category_slug'] );
	}
	
	
	
	register_taxonomy('portfolio-category','portfolio', $portfolio_category_args);
}

// add Portfolio metabox
add_action( 'admin_init', 'wopo_build_portfolio_item_metabox' );
add_action( 'save_post', 'wopo_portfolio_item_metabox_save' );

function wopo_build_portfolio_item_metabox() {
    add_meta_box( 'portfolio-data',  'Portfolio Informations' , 'wopo_portfolio_item_metabox', 'portfolio', 'normal', 'high' );
}

//show metabox
function wopo_portfolio_item_metabox(){
	global $post;
	$portfolio_extra_content 	= get_post_meta( $post->ID, 'portfolio_extra_content', true );
	$portfolio_media_type 		= get_post_meta( $post->ID, 'portfolio_media_type', true );
	$portfolio_media_position 	= get_post_meta( $post->ID, 'portfolio_media_position', true );
    $embed_code 				= get_post_meta( $post->ID, 'embed_code', true );
	$image_array 				= get_post_meta( $post->ID, 'image_array', false );
	if(array_key_exists(0,$image_array) != ''){
		$image_array = $image_array[0];
	}else{
		$image_array = '';
	}
	
	if(!$portfolio_media_type){
		$portfolio_media_type = 'image';
	}
	
	if(!$portfolio_media_position){
		$portfolio_media_position = 0;
	}
	
	//add more upload field
	$image_array[] = '';
	
	//get default media position
	//if(!$portfolio_media_position and $portfolio_media_position != 0){
	//	$portfolio_media_position = 2;
	//}
?>
	<div>
		<h4 class="metabox-title">Portfolio Details </h4>
		<div class="help">Use shortcode : [portfolio-detail name="something"]detail[portfolio-detail]</div>
		<?php wp_editor( $portfolio_extra_content, 'portfolio_extra_content_editor', $settings = array( 'textarea_rows' => 8, 'textarea_name' => 'portfolio_extra_content' , 'teeny' => true , 'quicktags' => false) ); ?>
	</div>

	<div>
		<h4 class="metabox-title">Media Type</h4>
		<input type="radio" name="portfolio_media_type" value="image" id="portfolio_media_image" <?php checked($portfolio_media_type,'image');?> /><label for="portfolio_media_image">Feature Image</label>
		<input type="radio" name="portfolio_media_type" value="image_slide" id="portfolio_media_slide" <?php checked($portfolio_media_type,'image_slide');?> /><label for="portfolio_media_slide">Image Slide</label>
		<input type="radio" name="portfolio_media_type" value="image_list" id="portfolio_media_list" <?php checked($portfolio_media_type,'image_list');?> /><label for="portfolio_media_list">Image List</label>
		<input type="radio" name="portfolio_media_type" value="youtube" id="portfolio_media_youtube"<?php checked($portfolio_media_type,'youtube');?> /><label for="portfolio_media_youtube"> Youtube Video</label>
		<input type="radio" name="portfolio_media_type" value="vimeo" id="portfolio_media_vimeo" <?php checked($portfolio_media_type,'vimeo');?> /><label for="portfolio_media_vimeo"> Vimeo Video</label>
		
	</div>
	<div>
		<h4 class="metabox-title">Portfolio Media Position</h4>
		<input type="radio" name="portfolio_media_position" value="0" id="media_left" <?php checked($portfolio_media_position,0);?>><label for="media_left">Left</label>
		<input type="radio" name="portfolio_media_position" value="1" id="media_right" <?php checked($portfolio_media_position,1);?>><label for="media_right">Right</label>
		<input type="radio" name="portfolio_media_position" value="2" id="media_center" <?php checked($portfolio_media_position,2);?>><label for="media_center">Center</label>
		
	</div>
	
	<div class="column1_2">
		<h4 class="metabox-title">Media Embed Code</h4>
		<textarea rows="5" name="embed_code" class="normal_textarea"><?php wope_var($embed_code);?></textarea>
	</div>
	<div class="column1_2 column-last">
		<h4 class="metabox-title">Image Slides or Image List</h4>
		<div class="flexible-upload">
			<?php if(is_array($image_array) and count($image_array) > 0){?>
				<?php foreach($image_array as $each_image){?>
					<div>
						<input class="upload_field" type="text" name="image_slide[]" value="<?php wope_var($each_image);?>" />
						<input class="button upload_button" type="button" value="Upload Image" />
					</div>
				<?php }?>
			<?php }?>
		</div>
		<input class="button button-primary flexible-upload-button" type="button" value="Add More">
		
	</div>
	<div class="cleared"></div>	
<?php
}

function wopo_portfolio_item_metabox_save(){
	global $post;  
    if( $_POST and !empty($post)) {
		update_post_meta( $post->ID, 'portfolio_extra_content',	wopo_check_post('portfolio_extra_content') );
		update_post_meta( $post->ID, 'portfolio_media_type',	wopo_check_post('portfolio_media_type') );
		update_post_meta( $post->ID, 'portfolio_media_position', wopo_check_post('portfolio_media_position') );
		update_post_meta( $post->ID, 'embed_code',	wopo_check_post('embed_code') );
		
		$image_array = array();
		$image_array_post = wopo_check_post('image_slide') ;
		if(count($image_array_post)>0){
			foreach($image_array_post as $each_image){
				if(trim($each_image) != ''){
					$image_array[] = $each_image;
					
				}
			}
		}
		update_post_meta( $post->ID, 'image_array', $image_array );
	}
}
