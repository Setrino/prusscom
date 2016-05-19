<?php
//PAGE BUILDER
// add page builder metabox
add_action( 'admin_init', 'wope_build_page_builder' );
add_action( 'save_post', 'wope_page_builder_save' );

function wope_build_page_builder() {
    add_meta_box( 'wope-page-builder', 'Page Builder' , 'wope_page_builder', 'page', 'normal', 'high' );
}

$wope_pb_option = '';
$wope_pb_field = '';

//show metabox
function wope_page_builder(){
	global $post;
	global $wope_pb_option;
	$wope_pb_option 	= get_post_meta($post->ID, 'page-builder', true);
	if(isset($wope_pb_option['total_section'])){
		foreach($wope_pb_option as $key => $value){
			if(is_array($wope_pb_option[$key])){
				foreach($wope_pb_option[$key] as $key2 => $value2){
					$wope_pb_option[$key][$key2] = htmlspecialchars($value2);
				}
			}else{
				$wope_pb_option[$key] = htmlspecialchars($value);
			}
		}
		
	}else{
		$wope_pb_option['total_section'] = 1;
		$wope_pb_option['section1_total'] = 1;
		$wope_pb_option['box1'] = 1;
		$wope_pb_option['box1_total'] = 0;
	}

	//check for which editor
	if(!isset($wope_pb_option['current-editor'])){
		$wope_pb_option['current-editor'] = 0; //default editor
	}
	
	//load page builder
	include(wope_lib_path.'page_builder.php');
}

function wope_page_builder_save(){
	global $post;  
    if( $_POST ) {
		if(!empty($_POST['total_section'])){
			//index options
			$total_section = trim($_POST['total_section']); //total section
			$wope_total_box = 0;
			$wope_total_widget = 0;
			
			//each section 
			for($i = 1 ; $i <= $total_section ; $i ++ ){ 
				$current_section_total = trim($_POST['section'.$i.'_total']);
				$wope_total_box+= $current_section_total;
				
				//update section layout,total box & total field in each section
				$index_option_array['section'.$i.'_total'] = $current_section_total;
				$index_option_array['section'.$i.'_layout'] = trim($_POST['section'.$i.'_layout']);
				$index_option_array['section'.$i.'_field_total'] = trim($_POST['section'.$i.'_field_total']);
				
				//each section field
				for($m = 1 ; $m <= $index_option_array['section'.$i.'_field_total'] ; $m ++ ){ 
					//update section field value
					$index_option_array['section'.$i.'_field'.$m] = trim($_POST['section'.$i.'_field'.$m]); //field value
				}
			}	
			
			// each box 
			for($j = 1 ; $j <= $wope_total_box ; $j ++ ){ 
				$current_box_total = trim($_POST['box'.$j.'_total']);
				$wope_total_widget+= $current_box_total;
				
				//update total widget in each box
				$index_option_array['box'.$j.'_total'] = $current_box_total;
				$index_option_array['box'.$j] = trim($_POST['box'.$j]); //box column
			}
			
			// each widget 
			for($k = 1 ; $k <= $wope_total_widget ; $k ++ ){ 
				$current_widget_total = trim($_POST['widget'.$k.'_total']);
				
				//update total field & widget type in each widget
				$index_option_array['widget'.$k.'_total'] = $current_widget_total;
				$index_option_array['widget'.$k] = trim($_POST['widget'.$k]); 
				
				//each widget field
				for($l = 1 ; $l <= $index_option_array['widget'.$k.'_total'] ; $l ++ ){ 
					//update widget field value in each widget
					$index_option_array['widget'.$k.'_field'.$l] = trim($_POST['widget'.$k.'_field'.$l]); //field value
				}
				
				if(!empty($_POST['widget'.$k.'_field_custom'])){
					if(is_array($_POST['widget'.$k.'_field_custom'])){
						//save all field custom name
						$index_option_array['widget'.$k.'_field_custom'] = $_POST['widget'.$k.'_field_custom']; 
						
						//get all field custom values
						foreach($_POST['widget'.$k.'_field_custom'] as $each_custom_field){
							$index_option_array['widget'.$k.'_field_'.$each_custom_field] =  $_POST['widget'.$k.'_field_'.$each_custom_field]; 
						}

					}
				}
			}
			
			//update total section and box in index page
			$index_option_array['total_section'] 	= $total_section;
			
			if(!empty($_POST['current-editor'])){
				$index_option_array['current-editor'] 	=  trim($_POST['current-editor']);
			}
			
			update_post_meta( $post->ID, 'page-builder', $index_option_array);
		}
		
	}
}

// add sub title metabox
add_action( 'admin_init', 'wope_build_page_metabox' );
add_action( 'save_post', 'wope_page_metabox_save' );

function wope_build_page_metabox() {
    add_meta_box( 'wope-page-data', 'Page Setting' , 'wope_page_metabox', 'page', 'normal', 'high' );
}

//show metabox
function wope_page_metabox(){
	global $post;

	$custom_sidebar_option = get_option('wope_custom_sidebar');

	$default_setting = array(
		'heading_setting' 				=> 1,
		'sidebar_selector' 				=> -1,
		'header_on_slider'				=> 0,
		'custom_layout' 				=> 0,
		'site_layout' 					=> 0,
		'bg_type' 						=> 0,
		'bg_image' 						=> '',
		'bg_color' 						=> '#f2f2f2',
		'topbar' 				 		=> 1,
		'header_style' 				 	=> 'white',
		'header_text_color' 			=> 'black',
		'heading_style' 				=> 'gray',
		'heading_align' 				=> 'left',
		'header_bg_color'				=> '#2e2e2e',
		'header_bg_image' 				=> '',
		'header_bg_transparent'			=> '0.5',
	);

	$page_setting = get_post_meta( $post->ID, 'page_setting', true );

	if(isset($page_setting['sidebar_selector'])){
			//do nothing
	}else{
		$page_setting = $default_setting;
	}
	
?>		
		<div class="meta-section">
			<div class="option-title">Heading Setting</div>
			<input type="checkbox" name="heading_setting" value="1" id="heading_setting" <?php checked($page_setting['heading_setting'],1);?> /><label for="heading_setting"> Display Page Title</label>
		</div>

		<div class="meta-section">
				<div class="option-title">Floating Header</div>
				<input type="checkbox" name="header_on_slider" value="1" id="header_on_slider" <?php checked($page_setting['header_on_slider'],1);?> /><label for="header_on_slider">Make header floating on the content</label>
				<div class="help">This option be useful when you wanted to display header floating on slider.</div>
			</div>
		
		<div class="meta-section">
			<div class="option-title">Sidebar Setting</div>

			<div class="column_left">
				<div>Choose Sidebar</div>
				<select name="sidebar_selector">
					<option value="-1" <?php selected($page_setting['sidebar_selector'],-1);?>>No Sidebar</option>
					<option value="0" <?php selected($page_setting['sidebar_selector'],0);?>>Default Page Sidebar</option>
					<?php foreach($custom_sidebar_option as $key=> $each_sidebar){?>
						<?php if($page_setting['sidebar_selector'] == $key){?>
							<option value="<?php wope_var($key);?>" selected="selected"><?php wope_var($each_sidebar);?></option>
						<?php }else{?>
							<option value="<?php wope_var($key);?>"><?php wope_var($each_sidebar);?></option>
						<?php }?>
					<?php }?>
				</select>
				
			</div>
			<div class="column_left">
				<div>or Create New Custom Sidebar</div>
				<input type="text" name="new_sidebar" value="">
				<div class="help"> Sidebar will create after you Publish/Update this page.</div>
			</div>
			<div class="cleared"></div>
		</div>

		<div class="meta-section-heading">
			Custom Layout
			<div class="help">This custom layout options for this page only. Other pages will use options from <strong>Appearance->Mega</strong>. </div>
		</div>

		<div class="meta-section">
			<div class="option-title">Custom Layout</div>
			<input type="checkbox" name="custom_layout" value="1" id="custom_layout" <?php checked($page_setting['custom_layout'],1);?> /><label for="custom_layout"> Use Custom layout for this page.</label>
		</div>

		
		<div class="meta-section" >
			<div class="option-title">Site Layout</div>
			<input type="radio" name="site_layout" id="site_layout_fullwidth" value="0" <?php checked($page_setting['site_layout'],0);?>><label for="site_layout_fullwidth">Full Width</label>
			<input type="radio" name="site_layout" id="site_layout_boxed" value="1" <?php checked($page_setting['site_layout'],1);?> ><label for="site_layout_boxed">Boxed</label>
		</div>

		<div class="column2">
			<div class="meta-section" >
				<div class="column2">
					<div class="option-title">Site Background Type</div>
					<select name="bg_type">
						<option value="0" <?php selected($page_setting['bg_type'],0);?>>Color</option>
						<option value="1" <?php selected($page_setting['bg_type'],1);?>>Fixed Image</option>
						<option value="2" <?php selected($page_setting['bg_type'],2);?>>Pattern Image</option>
					</select>
				</div>
				<div class="column2 column_last" >
					<div class="option-title">Site Background Color</div>
					<input name="bg_color" type="text" value="<?php wope_var($page_setting['bg_color']);?>" class="wp-color-picker" data-default-color="<?php wope_var($page_setting['bg_color']);?>" />
				</div>
				<div class="cleared"></div>
			</div>
		</div>
		<div class="column2 column_last">
			<div class="meta-section" >
				<div class="div">
					<div class="option-title">Site Background Image</div>
					<input class="upload_field" type="text" size="36" name="bg_image" value="<?php if(isset($page_setting['bg_image'])) wope_var($page_setting['bg_image']);?>" />
					<input class="upload_button button" type="button" value="Upload Image" />
					<span class="button red-button remove_image">Remove Image</span>
				</div>
				<div class="div grey-box">
					<img class="uploaded_image" src="<?php wope_var($page_setting['bg_image']);?>">
				</div>
			</div>
			
		</div>
		<div class="cleared"></div>

		<div class="meta-section">
						
			<div class="option-title">Top Bar</div>
			<input type="checkbox" name="topbar" id="topbar" value="1" <?php checked($page_setting['topbar'],1);?>><label for="topbar">Display Top Bar</label>
			
		</div>
		
		
		<div class="meta-section">
			<div class="column2">
				<div class="option-title">Header Style</div>
				<input type="radio" name="header_style" id="header_style_white" value="white" <?php checked($page_setting['header_style'],'white');?>><label for="header_style_white">White Background</label>
				<input type="radio" name="header_style"  id="header_style_transparent" value="transparent" <?php checked($page_setting['header_style'],'transparent');?>><label for="header_style_transparent">Transparent Image</label>
				
			</div>
			<div class="column2 column_last">
				<div class="option-title">Header Text Colors</div>
				<input type="radio" name="header_text_color" id="header_text_color_black" value="black" <?php checked($page_setting['header_text_color'],'black');?>><label for="header_text_color_black">Black</label>
				<input type="radio" name="header_text_color"  id="header_text_color_white" value="white" <?php checked($page_setting['header_text_color'],'white');?>><label for="header_text_color_white">White</label>
					
			</div>
			<div class="cleared"></div>
		</div>
					
		<div class="meta-section">
			<div class="column2">
				<div class="option-title">Page Heading Style</div>
				<input type="radio" name="heading_style" id="heading_style_gray" value="gray" <?php checked($page_setting['heading_style'],'gray');?>><label for="heading_style_gray">Gray Background</label>
				<input type="radio" name="heading_style"  id="heading_style_transparent" value="transparent" <?php checked($page_setting['heading_style'],'transparent');?>><label for="heading_style_transparent">Transparent Image</label>
			</div>
			<div class="column2 column_last">
				<div class="option-title">Page Heading Align</div>
				<input type="radio" name="heading_align" id="heading_align_left" value="left" <?php checked($page_setting['heading_align'],'left');?>><label for="heading_align_left">Left</label>
				<input type="radio" name="heading_align"  id="heading_align_center" value="center" <?php checked($page_setting['heading_align'],'center');?>><label for="heading_align_center">Center</label>
			</div>
			<div class="cleared"></div>
				
		</div>
		

		<div class="column2">	
			<div class="column2">
				<div class="meta-section">
					<div class="option-title">Header Background Color</div>
					<input name="header_bg_color" type="text" value="<?php wope_var($page_setting['header_bg_color']);?>" class="wp-color-picker" data-default-color="<?php wope_var($page_setting['header_bg_color']);?>" />
				</div>
			</div>
			<div class="column2 column_last">
				<div class="meta-section">	
					<div class="option-title">Header Background Transparent</div>
					<select name="header_bg_transparent">
						<option value="" 	<?php selected($page_setting['header_bg_transparent'],'');?>>None</option>
						<option value="0.1" <?php selected($page_setting['header_bg_transparent'],0.1);?>>10%</option>
						<option value="0.2" <?php selected($page_setting['header_bg_transparent'],0.2);?>>20%</option>
						<option value="0.3" <?php selected($page_setting['header_bg_transparent'],0.3);?>>30%</option>
						<option value="0.4" <?php selected($page_setting['header_bg_transparent'],0.4);?>>40%</option>
						<option value="0.5" <?php selected($page_setting['header_bg_transparent'],0.5);?>>50%</option>
						<option value="0.6" <?php selected($page_setting['header_bg_transparent'],0.6);?>>60%</option>
						<option value="0.7" <?php selected($page_setting['header_bg_transparent'],0.7);?>>70%</option>
						<option value="0.8" <?php selected($page_setting['header_bg_transparent'],0.8);?>>80%</option>
						<option value="0.9" <?php selected($page_setting['header_bg_transparent'],0.9);?>>90%</option>
					</select>
				</div>
			</div>
			<div class="cleared"></div>
		</div>
		<div class="column2 column_last">	
			<div class="meta-section">
				<div class="div">		
					<div class="option-title">Header Background Image</div>
					<input class="upload_field" type="text" size="36" name="header_bg_image" value="<?php if(isset($page_setting['header_bg_image'])) wope_var($page_setting['header_bg_image']);?>" />
					<input class="upload_button button" type="button" value="Upload Image" />
					<span class="button red-button remove_image">Remove Image</span>
				</div>
				<div class="div grey-box ">
					<img class="uploaded_image" src="<?php wope_var($page_setting['header_bg_image']);?>">
				</div>
				
			</div>
		</div>
		<div class="cleared"></div>				
			

		
<?php
}

function wope_page_metabox_save(){
	global $post;  
    if( $post) {
		$page_setting['sidebar_selector'] 				= wope_check_post('sidebar_selector');
		
		$new_sidebar = trim(wope_check_post('new_sidebar'));
		if($new_sidebar != ''){
			$new_sidebar_slug = wope_convert_slug($new_sidebar);
			$custom_sidebar_option = get_option('wope_custom_sidebar');
			$custom_sidebar_option[$new_sidebar_slug] = $new_sidebar;
			update_option( 'wope_custom_sidebar', $custom_sidebar_option);

			$page_setting['sidebar_selector'] 				= $new_sidebar_slug;
		}

		$page_setting['heading_setting'] 				= wope_check_post('heading_setting');
		$page_setting['header_on_slider'] 				= wope_check_post('header_on_slider');
		$page_setting['custom_layout'] 					= wope_check_post('custom_layout');
		$page_setting['site_layout'] 					= wope_check_post('site_layout');
		$page_setting['bg_type'] 						= wope_check_post('bg_type');
		$page_setting['bg_image'] 						= wope_check_post('bg_image');
		$page_setting['bg_color'] 						= wope_check_post('bg_color');
		$page_setting['topbar'] 						= wope_check_post('topbar');
		$page_setting['header_style'] 					= wope_check_post('header_style');
		$page_setting['header_text_color'] 				= wope_check_post('header_text_color');
		$page_setting['heading_style'] 					= wope_check_post('heading_style');
		$page_setting['heading_align'] 					= wope_check_post('heading_align');
		$page_setting['header_bg_color'] 				= wope_check_post('header_bg_color');
		$page_setting['header_bg_image'] 				= wope_check_post('header_bg_image');
		$page_setting['header_bg_transparent'] 			= wope_check_post('header_bg_transparent');

		update_post_meta( $post->ID, 'page_setting',	$page_setting );
		
	}
}
