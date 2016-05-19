<?php
global $wope_pb_option;
global $wope_pb_field;
global $wope_post_categories;
global $wope_portfolio_taxonomies;
global $wope_revslider_array;


//get post categories
	$args = array(
		'type'		 =>'post',
		'taxonomy'   => 'category',
		'hide_empty' => '0'
	); 
	$wope_post_categories = get_categories($args); 
	
	//get project categories
	$args = array(
		'type'		 =>'portfolio',
		'taxonomy'   => 'portfolio-category',
		'hide_empty' => '0'
	); 
	$wope_portfolio_taxonomies = get_categories($args);  
	
	$wope_revslider_array = wope_mdf_get_revSlider();

	include( wope_lib_path . '/page_builder_widgets.php' );

	$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
?>
	<div id="index-hidden-data">
	</div>
	<input type="hidden" id="current-editor" name="current-editor" value="<?php wope_var($wope_pb_option['current-editor']);?>">
	<div class="admin-box-shadow">
		<div class="page-builder-section-title">
			<span>Content Sections</span>
		</div>
		<div id="index-page">
			<?php 
				$wope_total_box = 1;
				$wope_total_widget = 1;
				
				if(isset($wope_pb_option['total_section'])){
					for($i = 1 ; $i <= $wope_pb_option['total_section'] ; $i++ ){?>
						<?php include(wope_lib_path .'page_builder_section.php');?>
						
				<?php }?>
			<?php }?>
		</div>
		<span class="button" id="add-new-section">Add New Section</span>
	</div>
	
	<div id="section-box-container">
		<?php 
		if(!isset($wope_pb_option)){
			$wope_pb_option = '';
		}
		$wope_pb_option = wopepb_reset($wope_pb_option);
		$i = 1;
		$total_column = 1;
		$wope_total_widget = 1;
		$wope_total_box = 1;
		$wope_pb_option['box1'] = '1';
		include(wope_lib_path.'/page_builder_section.php');?>
	</div>
	
	<div class="admin-box-shadow">
		<div class="page-builder-section-title">
			<span>Available Widgets </span>
		</div>
		<div class="page-builder-section-help">Drag & Drop Widgets to Columns of Content Sections</div>
		<div id="widget-containers">
			
			<?php 
			$last = 'column-last';
			
			foreach($pb_widgets as $each_widget){
				$last = ($last == 'column-last') ? '' : 'column-last';
				call_user_func_array('wope_pbw_'.$each_widget,array('','',$last));
			}?>
			<div class="cleared"></div>

		</div>
		<div id="wope_editor_container"> 
			<?php wp_editor( '', 'wope_editor', $settings = array( 'textarea_rows' => 8, 'editor_class' => 'editor_class') ); ?>
			<div style="padding-top:24px;clear:both;">
				<span id="update_wope_editor" class="button">Update</span>
				<span id="close_wope_editor" class="button">Close</span>
			</div>
		</div>
			
		<div id="wope_colorpicker_container"> 
			<div id="colorpicker_div">
				<input id="wope_colorpicker_input" name="wope-colorpicker" style="width:80px"  type="text" value="000000" />
			</div>
			<div style="padding-top:24px;clear:both;">
				<span id="update_wope_color" class="button">Update</span>
				<span id="close_wope_color" class="button">Close</span>
			</div>
		</div>
		
		<div id="wope_fontawesome_container"> 
			<div id="fontawesome_preview">
				<div id="fontawesome_preview_icon">
					<i class=""></i>
				</div>
				<div id="fontawesome_search">
					<input type="text" id="fontawesome_search_text" value=""><span class="simple-button" id="find_fontawesome">Find by Class</span>
				</div>
				<div class="cleared"></div>
			</div>
			<div id="fontawesome_div">
				<?php include(wope_lib_path . '/font_awesome.php');?>
			</div>
			
			<div style="padding-top:24px;clear:both;">
				<span id="update_wope_fontawesome" class="button">Update</span>
				<span id="close_wope_fontawesome" class="button">Close</span>
			</div>
		</div>
		
		<div id="wope_overlay"></div>
	</div>
<?php
	function wopepb_reset($wope_pb_option){
		unset($wope_pb_option);
		$wope_pb_option['total_section'] = 1;
		$wope_pb_option['section1_total'] = 1;
		$wope_pb_option['column1'] = 1;
		$wope_pb_option['column1_total'] = 0;
		$wope_pb_option['box1_total'] = 0;
		$wope_pb_option['section1_layout'] = 0;
		return $wope_pb_option;
	}