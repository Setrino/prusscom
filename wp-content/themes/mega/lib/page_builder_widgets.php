<?php
$default = array();
$pb_widgets = array();

$pb_widgets[] = 'content_box';
function wope_pbw_content_box($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('','');
	?>
	<div class="index-widget content-box-widget <?php wope_var($last);?>">
		<div class="index-widget-type">content-box</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Text Box</div>
		<div class="index-widget-note">text,button,list,info boxes,pricing tables...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="index-widget-option-name">Title</div>
				<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
			</div>
			<div class="index-widget-option">
				<div class="index-widget-option-name">Description</div>
				<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(2));?></textarea>
			</div>
		</div>
	</div>		
<?php 
}

$pb_widgets[] = 'subscribe';
function wope_pbw_subscribe($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('','','',0,'left');
	?>
	<div class="index-widget content-box-widget <?php wope_var($last);?>">
		<div class="index-widget-type">subscribe</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Subscribe</div>
		<div class="index-widget-note">Subscribe Form, Newsletter...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="index-widget-option-name">Title</div>
				<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
			</div>
			<div class="index-widget-option">
				<div class="index-widget-option-name">Description</div>
				<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(2));?></textarea>
			</div>
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Form Shortcode</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(3));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="box" <?php selected(wope_widget_field(4),'box');?>>Box</option>
						<option value="border-box" <?php selected(wope_widget_field(4),'border-box');?>>Border Box</option>
						<option value="no-box" <?php selected(wope_widget_field(4),'no-box');?>>No Box</option>
					</select>
				</div>
				<div class="column_left">	
					<div class="index-widget-option-name">Align</div>
					<select class="widget-field">
						<option value="left" <?php selected(wope_widget_field(5),'left');?>>Left</option>
						<option value="center" <?php selected(wope_widget_field(5),'center');?>>Center</option>
						<option value="justify" <?php selected(wope_widget_field(5),'justify');?>>Justify</option>
					</select>
				</div>
				<div class="cleared"></div>	
			</div>
		</div>
	</div>		
<?php 
}

$pb_widgets[] = 'callout';
function wope_pbw_callout($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('left','gray','','','','','','','','');
	?>
	<div class="index-widget callout-widget <?php wope_var($last);?>">
		<div class="index-widget-type">callout</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Callout</div>
		<div class="index-widget-note">Call to action,buy now...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Align</div>
					<select class="widget-field">
						<option value="left" <?php selected(wope_widget_field(1),'left');?>>Left</option>
						<option value="center" <?php selected(wope_widget_field(1),'center');?>>Center</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Background Color</div>
					<select class="widget-field">
						<option value="none" <?php selected(wope_widget_field(2),'none');?>>None</option>
						<option value="white" <?php selected(wope_widget_field(2),'white');?>>White</option>
						<option value="gray" <?php selected(wope_widget_field(2),'gray');?>>Gray</option>
						<option value="highlight" <?php selected(wope_widget_field(2),'highlight');?>>Highlight</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Content</div>
					<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(3));?></textarea>
				</div>
				<div class="column1_2 column-last">
					<div class="index-widget-option-name">Sub Content</div>
					<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(4));?></textarea>
				</div>
				<div class="cleared"></div>
			</div>

			<div class="index-widget-option">
				<div class="column1_3">
					<div class="index-widget-option-name">Button 1 Name</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(5));?>">
				</div>
				<div class="column1_3">
					<div class="index-widget-option-name">Button 1 Url</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(6));?>">
				</div>
				<div class="column1_3 column-last">
					<div class="index-widget-option-name">Button 1 Icon</div>
					<input class="widget-field font_awesome" type="text" value="<?php wope_var(wope_widget_field(7));?>">
				</div>
				<div class="cleared"></div>
			</div>

			<div class="index-widget-option">
				<div class="column1_3">
					<div class="index-widget-option-name">Button 2 Name</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(8));?>">
				</div>
				<div class="column1_3">
					<div class="index-widget-option-name">Button 2 Url</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(9));?>">
				</div>
				<div class="column1_3 column-last">
					<div class="index-widget-option-name">Button 2 Icon</div>
					<input class="widget-field font_awesome" type="text" value="<?php wope_var(wope_widget_field(10));?>">
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>		
<?php 
}


$pb_widgets[] = 'layer_slider';
function wope_pbw_layer_slider($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('');
	?>
	<div class="index-widget layer-slider-widget <?php wope_var($last);?>">
		<div class="index-widget-type">layer-slider</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Layer Slider</div>
		<div class="index-widget-note">display layer slider from plugin...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="index-widget-option-name">Layer Slider Shortcode</div>
				<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(1));?></textarea>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'portfolio';
function wope_pbw_portfolio($wope_pb_option,$wope_pb_field,$last){
	global $wope_portfolio_taxonomies;
	global $default;
	$default = array("",0,0,1,3,3,0);
	?>
	<div class="index-widget portfolio-widget <?php wope_var($last);?>">
		<div class="index-widget-type">portfolio</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Portfolio</div>
		<div class="index-widget-note">portfolio, recent work , work board...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2_1">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Taxonomy</div>
					<?php if(count($wope_portfolio_taxonomies)>0){?>
						<select class="widget-field">
							<option value="0">All</option>
						<?php foreach($wope_portfolio_taxonomies as $each_portfolio){?>
							<?php if($each_portfolio->term_id == wope_widget_field(2)){?>
								<option value="<?php wope_var($each_portfolio->term_id);?>" selected="selected"><?php wope_var($each_portfolio->name);?></option>
							<?php }else{?>
								<option value="<?php wope_var($each_portfolio->term_id);?>"><?php wope_var($each_portfolio->name);?></option>
							<?php }?>
							
						<?php }?>
						</select>
					<?php }else{?>
						<select class="widget-field">
							<option value="0">All</option>
						</select>
					<?php }?>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(3),0);?>>Grid</option>
						<option value="1" <?php selected(wope_widget_field(3),1);?>>Masonry</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(4),1);?>>Normal + Spacing</option>
						<option value="2" <?php selected(wope_widget_field(4),2);?>>Normal + No Spacing</option>
						<option value="3" <?php selected(wope_widget_field(4),3);?>>Hover + No Spacing</option>
					</select>
				</div>	
				<div class="column_left">
					<div class="index-widget-option-name">Item Per page</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(5));?>">
				</div>	
				<div class="column_left">
					<div class="index-widget-option-name">Grid/Masonry Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(6),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(6),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(6),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(6),4);?>>4</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Additions</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(7),0);?>>Nothing</option>
						<option value="1" <?php selected(wope_widget_field(7),1);?>>Filter</option>
						<option value="2" <?php selected(wope_widget_field(7),2);?>>Pagination</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'info_box';
function wope_pbw_info_box($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array("","normal","general","");
	?>
	<div class="index-widget info-box-widget <?php wope_var($last);?>">
		<div class="index-widget-type">info-box</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Infomartion Box</div>
		<div class="index-widget-note">error message, alert message, success message ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="normal" <?php selected(wope_widget_field(2),'normal');?>>Normal</option>
						<option value="color" <?php selected(wope_widget_field(2),'color');?>>Color</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="general" <?php selected(wope_widget_field(3),'general');?>>General</option>
						<option value="step" <?php selected(wope_widget_field(3),'step');?>>Step</option>
						<option value="note" <?php selected(wope_widget_field(3),'note');?>>Note</option>
						<option value="success" <?php selected(wope_widget_field(3),'success');?>>Success</option>
						<option value="alert" <?php selected(wope_widget_field(3),'alert');?>>Alert</option>
						<option value="error" <?php selected(wope_widget_field(3),'error');?>>Error</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Content</div>
					<textarea rows="4" class="widget-field content_editor"><?php wope_var(wope_widget_field(4));?></textarea>
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'pricing';
function wope_pbw_pricing($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('', 1, 4, 1);
	?>
	<div class="index-widget pricing-widget <?php wope_var($last);?>">
		<div class="index-widget-type">pricing</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Pricing</div>
		<div class="index-widget-note">Pricing, Pricing Table , Plan Price ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(2),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(2),4);?>>4</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Highlight</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(3),0);?>>None</option>
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Pricing Item</div>
				<?php 
				$pricing_table_title = wope_widget_dynamic_field('_pricing_table_title');
				if(!is_array($pricing_table_title)){
					$pricing_table_title = array('');
				}
				?>
				<?php foreach( $pricing_table_title  as $key=> $each_field_name){ ?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="column2">
								<div class="index-widget-option-name">Title</div>
								<input class="widget-field" data-name="pricing_table_title" type="text" value="<?php wope_var($each_field_name);?>">
							</div>
							<div class="column2 column-last">
								<div class="index-widget-option-name">Sub Title</div>
								<input class="widget-field" data-name="pricing_table_sub_title" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_sub_title',$key);?>">
							</div>
							<div class="cleared"></div>
							<div class="column3">
								<div class="index-widget-option-name">Unit</div>
								<input class="widget-field" data-name="pricing_table_unit" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_unit',$key);?>">
							</div>
							<div class="column3">
								<div class="index-widget-option-name">Price</div>
								<input class="widget-field" data-name="pricing_table_price" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_price',$key);?>">
							</div>
							<div class="column3 column-last">
								<div class="index-widget-option-name">Duration</div>
								<input class="widget-field" data-name="pricing_table_duration" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_duration',$key);?>">
							</div>
							<div class="cleared"></div>

							<div class="index-widget-option-name">Featured List</div>
							<textarea rows="4" class="widget-field content_editor" data-name="pricing_table_featured_list" ><?php wope_wope_widget_field_item('_pricing_table_featured_list',$key);?></textarea>
							
							<div class="column2">
								<div class="index-widget-option-name">Button Name</div>
								<input class="widget-field" data-name="pricing_table_btn_name" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_btn_name',$key);?>">
							</div>
							<div class="column2 column-last">
								<div class="index-widget-option-name">Button Url</div>
								<input class="widget-field" data-name="pricing_table_btn_url" type="text" value="<?php wope_wope_widget_field_item('_pricing_table_btn_url',$key);?>">
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				<?php }?>

				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'process';
function wope_pbw_process($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('', 1, 4, 1);
	?>
	<div class="index-widget process-widget <?php wope_var($last);?>">
		<div class="index-widget-type">process</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Process</div>
		<div class="index-widget-note">Process, Planning, Step ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Display</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Grid</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>Step</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>Tab</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Current Step</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(4),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(4),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(4),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(4),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Process Item</div>
				<?php 
				$feature_name = wope_widget_dynamic_field('_process_name');
				if(!is_array($feature_name)){
					$feature_name = array('');
				}
				?>
				<?php foreach( $feature_name  as $key=> $each_field_name){ ?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="process_name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Content</div>
							<textarea rows="4" class="widget-field content_editor" data-name="process_content" ><?php wope_wope_widget_field_item('_process_content',$key);?></textarea>
						</div>
					</div>
				<?php }?>

				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'progress';
function wope_pbw_progress($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('', 1, 4, 1);
	?>
	<div class="index-widget progress-widget <?php wope_var($last);?>">
		<div class="index-widget-type">progress</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Progress</div>
		<div class="index-widget-note">Progress, Pie Chart...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Process Bar</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Pie Chart</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Progress Item</div>
				<?php 
				$progress_name = wope_widget_dynamic_field('_progress_name');
				if(!is_array($progress_name)){
					$progress_name = array('');
				}
				?>
				<?php foreach( $progress_name  as $key=> $each_field_name){ ?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="progress_name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Percent (%)</div>
							<input class="widget-field" data-name="progress_value" type="text" value="<?php wope_wope_widget_field_item('_progress_value',$key);?>">
						</div>
					</div>
				<?php }?>

				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'icon_box';
function wope_pbw_icon_box($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array("",0,2,'left',0,3,'Black');
	?>
	<div class="index-widget icon-box-widget <?php wope_var($last);?>">
		<div class="index-widget-type">icon-box</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Icon Box</div>
		<div class="index-widget-note">features, benefits, points...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Direction</div>
					<select class="widget-field" >
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Horizontal</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Vertical</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Media</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>Single Icon</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>Icon Box</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>Image</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>Image Box</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Align</div>
					<select class="widget-field">
						<option value="left" <?php selected(wope_widget_field(4),'left');?>>Left</option>
						<option value="center" <?php selected(wope_widget_field(4),'center');?>>Center</option>
						<option value="right" <?php selected(wope_widget_field(4),'right');?>>Right</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Icon Inline</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(5),0);?>>No</option>
						<option value="1" <?php selected(wope_widget_field(5),1);?>>Yes</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(6),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(6),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(6),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(6),4);?>>4</option>
					</select>
				</div>

				<div class="column_left column-last">
					<div class="index-widget-option-name">Single Icon Color</div>
					<select class="widget-field">
						<option value="black" <?php selected(wope_widget_field(7),'black');?>>Black</option>
						<option value="white" <?php selected(wope_widget_field(7),'white');?>>White</option>
						<option value="gray" <?php selected(wope_widget_field(7),'gray');?>>Gray</option>
						<option value="highlight" <?php selected(wope_widget_field(7),'highlight');?>>Highlight</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Icon Item</div>
				<?php 
				$feature_name = wope_widget_dynamic_field('_feature-name');
				if(!is_array($feature_name)){
					$feature_name = array('');
				}
				?>
				<?php foreach( $feature_name  as $key=> $each_field_name){ ?>
					<div class="dynamic-box">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="column2">
								<div class="index-widget-option-name">Name</div>
								<input class="widget-field" data-name="feature-name" type="text" value="<?php wope_var($each_field_name);?>">
								<div class="index-widget-option-name">Content</div>
								<textarea class="widget-field content_editor" rows="4" data-name="feature-content" ><?php wope_wope_widget_field_item('_feature-content',$key);?></textarea>
								
							</div>
							<div class="column2 column-last">
								<div class="index-widget-option-name">Icon Fonts</div>
								<input class="widget-field font_awesome" data-name="feature-font-awesome" type="text" value="<?php wope_wope_widget_field_item('_feature-font-awesome',$key);?>">
								
								<div class="index-widget-option-name">Image</div>
								<input class="widget-field upload-input upload-input-column12" data-name="feature-image" type="text" value="<?php wope_wope_widget_field_item('_feature-image',$key);?>">
								<input class="upload_button" type="button" value="Upload" />
								
								<div class="index-widget-option-name">Hover Image</div>
								<input class="widget-field upload-input upload-input-column12" data-name="feature-image-hover" type="text" value="<?php wope_wope_widget_field_item('_feature-image-hover',$key);?>">
								<input class="upload_button" type="button" value="Upload" />
								
							</div>
							<div class="cleared"></div>
							<div class="column2">
								<div class="index-widget-option-name">Url</div>
								<input class="widget-field" data-name="feature-button-link" type="text" value="<?php wope_wope_widget_field_item('_feature-button-link',$key);?>">
							</div>
							<div class="column2 column-last">
								<div class="index-widget-option-name">Url Label</div>
								<input class="widget-field" data-name="feature-button-name" type="text" value="<?php wope_wope_widget_field_item('_feature-button-name',$key);?>">
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				<?php }?>

				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'milestones';
function wope_pbw_milestones($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array("",4);
?>
	<div class="index-widget milestones-widget <?php wope_var($last);?>">
		<div class="index-widget-type">milestones</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Milestones</div>
		<div class="index-widget-note">milestones, target, archived...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(2),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(2),4);?>>4</option>
						<option value="5" <?php selected(wope_widget_field(2),5);?>>5</option>
						<option value="6" <?php selected(wope_widget_field(2),6);?>>6</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Milestone Item</div>
				<?php 
				$milestone_name = wope_widget_dynamic_field('_milestone-name');
				if(!is_array($milestone_name)){
					$milestone_name = array('');
				}
				?>
				<?php foreach(	$milestone_name as $key=> $each_field_name){?>
				<div class="dynamic-box">
					<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
					<div class="dynamic-box-content">
						<div class="column3">
							<div class="index-widget-option-name">Name</div>
							<input type="text" class="widget-field" data-name="milestone-name" value="<?php wope_wope_widget_field_item('_milestone-name',$key);?>">
						</div>
						<div class="column3">
							<div class="index-widget-option-name">Number</div>
							<input type="text" class="widget-field" data-name="milestone-number" value="<?php wope_wope_widget_field_item('_milestone-number',$key);?>">
						</div>
						<div class="column3 column-last">
							<div class="index-widget-option-name">Icon</div>
							<input class="widget-field font_awesome" data-name="milestone-icon" type="text" value="<?php wope_wope_widget_field_item('_milestone-icon',$key);?>">
						</div>
						<div class="cleared"></div>
					</div>
				</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'icon_list';
function wope_pbw_icon_list($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array("",'normal','none','black','black');
?>
	<div class="index-widget icon-list-widget <?php wope_var($last);?>">
		<div class="index-widget-type">icon-list</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Icon list</div>
		<div class="index-widget-note">features, highlight points, promote...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column1_2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>

			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Icon Style</div>
					<select class="widget-field" >
						<option value="normal" <?php selected(wope_widget_field(2),'normal');?>>Normal</option>
						<option value="circle" <?php selected(wope_widget_field(2),'circle');?>>Circle</option>
						<option value="circle-bold" <?php selected(wope_widget_field(2),'circle-bold');?>>Circle Bold</option>
						<option value="square" <?php selected(wope_widget_field(2),'square');?>>Square</option>
						<option value="square-bold" <?php selected(wope_widget_field(2),'square-bold');?>>Square Bold</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Border</div>
					<select class="widget-field" >
						<option value="none" <?php selected(wope_widget_field(3),'none');?>>No Border</option>
						<option value="solid" <?php selected(wope_widget_field(3),'solid');?>>Solid</option>
						<option value="dotted" <?php selected(wope_widget_field(3),'dotted');?>>Dotted</option>
						<option value="dashed" <?php selected(wope_widget_field(3),'dashed');?>>Dashed</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Icon Color</div>
					<select class="widget-field" >
						<option value="black" <?php selected(wope_widget_field(4),'black');?>>Black</option>
						<option value="blue" <?php selected(wope_widget_field(4),'blue');?>>Blue</option>
						<option value="red" <?php selected(wope_widget_field(4),'red');?>>Red</option>
						<option value="yellow" <?php selected(wope_widget_field(4),'yellow');?>>Yellow</option>
						<option value="orange" <?php selected(wope_widget_field(4),'orange');?>>Orange</option>
						<option value="green" <?php selected(wope_widget_field(4),'green');?>>Green</option>
						<option value="pink" <?php selected(wope_widget_field(4),'pink');?>>Pink</option>
						<option value="aqua" <?php selected(wope_widget_field(4),'aqua');?>>Aqua</option>
						<option value="purple" <?php selected(wope_widget_field(4),'purple');?>>Purple</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Text Color</div>
					<select class="widget-field" >
						<option value="black" <?php selected(wope_widget_field(5),'black');?>>Black</option>
						<option value="blue" <?php selected(wope_widget_field(5),'blue');?>>Blue</option>
						<option value="red" <?php selected(wope_widget_field(5),'red');?>>Red</option>
						<option value="yellow" <?php selected(wope_widget_field(5),'yellow');?>>Yellow</option>
						<option value="orange" <?php selected(wope_widget_field(5),'orange');?>>Orange</option>
						<option value="green" <?php selected(wope_widget_field(5),'green');?>>Green</option>
						<option value="pink" <?php selected(wope_widget_field(5),'pink');?>>Pink</option>
						<option value="aqua" <?php selected(wope_widget_field(5),'aqua');?>>Aqua</option>
						<option value="purple" <?php selected(wope_widget_field(5),'purple');?>>Purple</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Icon Item</div>
				<?php 
				$icon_content = wope_widget_dynamic_field('_icon-content');
				if(!is_array($icon_content)){
					$icon_content = array('');
				}
				?>
				<?php foreach( $icon_content as $key=> $each_field_name){?>
					<div class="dynamic-box">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="column3">
								<div class="index-widget-option-name">Icon Fonts</div>
								<input class="widget-field font_awesome" data-name="icon-font" type="text" value="<?php wope_wope_widget_field_item('_icon-font',$key);?>">
							</div>
							<div class="column3">
								<div class="index-widget-option-name">Text</div>
								<input type="text" class="widget-field" data-name="icon-content" value="<?php wope_var($each_field_name);?>">
							</div>
							<div class="column3  column-last">
								<div class="index-widget-option-name">URL</div>
								<input type="text" class="widget-field" data-name="icon-link" value="<?php wope_wope_widget_field_item('_icon-link',$key);?>">
							</div>
							
							<div class="cleared"></div>
						</div>
					</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'logo_showcase';
function wope_pbw_logo_showcase($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',0,0,4);
?>
	<div class="index-widget logo-showcase-widget <?php wope_var($last);?>">
		<div class="index-widget-type">logo-showcase</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Logo Client</div>
		<div class="index-widget-note">client logos,parner logos...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="normal" <?php selected(wope_widget_field(2),'normal');?>>Normal</option>
						<option value="border" <?php selected(wope_widget_field(2),'border');?>>Border</option>
						<option value="table" <?php selected(wope_widget_field(2),'table');?>>Table</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
						<option value="5" <?php selected(wope_widget_field(3),5);?>>5</option>
						<option value="6" <?php selected(wope_widget_field(3),6);?>>6</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Logo Item</div>
				<?php 
				$logo_name = wope_widget_dynamic_field('_logo_client_name');
				if(!is_array($logo_name)){
					$logo_name = array('');
				}
				?>
				<?php foreach( $logo_name as $key=> $each_field_name){?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="logo_client_name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Link</div>
							<input class="widget-field" data-name="logo_client_url" type="text" value="<?php wope_wope_widget_field_item('_logo_client_url',$key);?>">
							<div class="index-widget-option-name">Image</div>
							<input class="widget-field upload-input upload-input-column12" data-name="logo_client_image" type="text" value="<?php wope_wope_widget_field_item('_logo_client_image',$key);?>">
							<input class="upload_button" type="button" value="Upload" />
						</div>
					</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'blogposts';
function wope_pbw_blogposts($wope_pb_option,$wope_pb_field,$last){
	global $wope_post_categories;
	global $default;
	$default = array('',0,2,3,2);
?>
	<div class="index-widget blogposts-widget <?php wope_var($last);?>">
		<div class="index-widget-type">blogposts</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Blog Posts</div>
		<div class="index-widget-note">post grid,post list...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Grid</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>List</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>List Center</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>List Medium</option>
						<option value="4" <?php selected(wope_widget_field(2),4);?>>Mansory</option>
					</select>
				</div>	
				<div class="column_left">
					<div class="index-widget-option-name">Categories</div>
					<?php if(count($wope_post_categories)>0){?>
						<select class="widget-field">
							<option value="0">All</option>
						<?php foreach($wope_post_categories as $each_category){?>
							<?php if($each_category->term_id == wope_widget_field(3)){?>
								<option value="<?php wope_var($each_category->term_id);?>" selected="selected"><?php wope_var( $each_category->name);?></option>
							<?php }else{?>
								<option value="<?php wope_var($each_category->term_id);?>"><?php wope_var($each_category->name);?></option>
							<?php }?>
							
						<?php }?>
						</select>
					<?php }else{?>
						<select class="widget-field">
							<option value="0">All</option>
						</select>
					<?php }?>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Rows</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(4),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(4),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(4),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(4),4);?>>4</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(5),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(5),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(5),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(5),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'blockquote';
function wope_pbw_blockquote($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('small','none','black','','30','','');
?>
	<div class="index-widget blockquote-widget <?php wope_var($last);?>">
		<div class="index-widget-type">blockquote</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Blockquote </div>
		<div class="index-widget-note">favorite quote,promote quote,inspire quote...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="small" <?php selected(wope_widget_field(1),'small');?>>Small Block</option>
						<option value="section" <?php selected(wope_widget_field(1),'section');?>>Section Block</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Background Color</div>
					<select class="widget-field">
						<option value="none" <?php selected(wope_widget_field(2),'none');?>>None</option>
						<option value="gray" <?php selected(wope_widget_field(2),'gray');?>>Gray</option>
						<option value="black" <?php selected(wope_widget_field(2),'black');?>>Black</option>
						<option value="white" <?php selected(wope_widget_field(2),'white');?>>White</option>
						<option value="highlight" <?php selected(wope_widget_field(2),'highlight');?>>Highlight</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Text Color</div>
					<select class="widget-field">
						<option value="black" <?php selected(wope_widget_field(3),'black');?>>Black</option>
						<option value="white" <?php selected(wope_widget_field(3),'white');?>>White</option>

					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Background Image</div>
					<input class="widget-field upload_field" type="text" value="<?php wope_var(wope_widget_field(4));?>"><span class="button upload_button">Upload</span>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Transparent</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(5),0);?>>0%</option>
						<option value="10" <?php selected(wope_widget_field(5),10);?>>10%</option>
						<option value="20" <?php selected(wope_widget_field(5),20);?>>20%</option>
						<option value="30" <?php selected(wope_widget_field(5),30);?>>30%</option>
						<option value="40" <?php selected(wope_widget_field(5),40);?>>40%</option>
						<option value="50" <?php selected(wope_widget_field(5),50);?>>50%</option>
						<option value="60" <?php selected(wope_widget_field(5),60);?>>60%</option>
						<option value="70" <?php selected(wope_widget_field(5),70);?>>70%</option>
						<option value="80" <?php selected(wope_widget_field(5),80);?>>80%</option>
						<option value="90" <?php selected(wope_widget_field(5),90);?>>90%</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>

			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Content</div>
					<textarea class="widget-field content_editor" rows="3" ><?php wope_var(wope_widget_field(6));?></textarea>
				</div>
				<div class="column2 column-last">
					<div class="index-widget-option-name">Author</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(7));?>">
				</div>
				<div class="cleared"></div>
			</div>

		</div>
	</div>
<?php 
}

$pb_widgets[] = 'promote_box';
function wope_pbw_promote_box($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('small','normal','black','white',70,'center','','','','','','','');
?>
	<div class="index-widget promote-box-widget <?php wope_var($last);?>">
		<div class="index-widget-type">promote-box</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Promote Box</div>
		<div class="index-widget-note">Promote Box , Promote Section ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Box Style</div>
					<select class="widget-field">
						<option value="small" <?php selected(wope_widget_field(1),'small');?>>Small Box</option>
						<option value="section" <?php selected(wope_widget_field(1),'section');?>>Section Box</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Content Style</div>
					<select class="widget-field">
						<option value="normal" <?php selected(wope_widget_field(2),'normal');?>>Normal</option>
						<option value="uppercase" <?php selected(wope_widget_field(2),'uppercase');?>>Uppercase</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Text Color</div>
					<select class="widget-field">
						<option value="black" <?php selected(wope_widget_field(3),'black');?>>Black</option>
						<option value="white" <?php selected(wope_widget_field(3),'white');?>>White</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Background Color</div>
					<select class="widget-field">
						<option value="none" <?php selected(wope_widget_field(4),'none');?>>None</option>
						<option value="gray" <?php selected(wope_widget_field(4),'gray');?>>Gray</option>
						<option value="black" <?php selected(wope_widget_field(4),'black');?>>Black</option>
						<option value="white" <?php selected(wope_widget_field(4),'white');?>>White</option>
						<option value="highlight" <?php selected(wope_widget_field(4),'highlight');?>>Highlight</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Transparent</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(5),0);?>>0%</option>
						<option value="10" <?php selected(wope_widget_field(5),10);?>>10%</option>
						<option value="20" <?php selected(wope_widget_field(5),20);?>>20%</option>
						<option value="30" <?php selected(wope_widget_field(5),30);?>>30%</option>
						<option value="40" <?php selected(wope_widget_field(5),40);?>>40%</option>
						<option value="50" <?php selected(wope_widget_field(5),50);?>>50%</option>
						<option value="60" <?php selected(wope_widget_field(5),60);?>>60%</option>
						<option value="70" <?php selected(wope_widget_field(5),70);?>>70%</option>
						<option value="80" <?php selected(wope_widget_field(5),80);?>>80%</option>
						<option value="90" <?php selected(wope_widget_field(5),90);?>>90%</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Align</div>
					<select class="widget-field">
						<option value="left" <?php selected(wope_widget_field(6),'left');?>>Left</option>
						<option value="center" <?php selected(wope_widget_field(6),'center');?>>Center</option>
						<option value="right" <?php selected(wope_widget_field(6),'right');?>>Right</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>

			<div class="column2">
				<div class="index-widget-option">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(7));?>">
				</div>
				<div class="index-widget-option">
					<div class="index-widget-option-name">Content</div>
					<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(8));?></textarea>
				</div>
				<div class="index-widget-option">
					<div class="index-widget-option-name">Background Image</div>
					<input class="widget-field upload_field" type="text" value="<?php wope_var(wope_widget_field(9));?>"><span class="button upload_button">Upload</span>
				</div>
			</div>
			<div class="column2 column-last">
				<div class="index-widget-option">
					<div class="index-widget-option-name">Button 1 Name</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(10));?>">
				</div>
				<div class="index-widget-option">
					<div class="index-widget-option-name">Button 1 Url</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(11));?>">
				</div>
				<div class="index-widget-option">
					<div class="index-widget-option-name">Button 2 Name</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(12));?>">
				</div>
				<div class="index-widget-option">
					<div class="index-widget-option-name">Button 2 Url</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(13));?>">
				</div>
			</div>
			<div class="cleared"></div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'google_map';
function wope_pbw_google_map($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',300);
?>
	<div class="index-widget google-map-widget <?php wope_var($last);?>">
		<div class="index-widget-type">google-map</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Google Map</div>
		<div class="index-widget-note">google map,contact map,location</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Embed Code</div>
					<textarea class="widget-field" rows="4" ><?php wope_var(wope_widget_field(1));?></textarea>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Map Height</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(2));?>">
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>	
<?php 
}

$pb_widgets[] = 'accordion';
function wope_pbw_accordion($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',0,'normal',0,0);
?>
	<div class="index-widget accordion-widget <?php wope_var($last);?>">
		<div class="index-widget-type">accordion</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Accordion</div>
		<div class="index-widget-note">FAQ, introducing features...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Stack</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Group</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="normal" <?php selected(wope_widget_field(3),'normal');?>>Normal</option>
						<option value="highlight" <?php selected(wope_widget_field(3),'highlight');?>>Highlight</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Active</div>
					<input class="widget-field input-text-number" type="text" value="<?php wope_var(wope_widget_field(4));?>">
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Collapsible</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(5),0);?>>False</option>
						<option value="1" <?php selected(wope_widget_field(5),1);?>>True</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Elements</div>
				<?php 
				$accordion_name = wope_widget_dynamic_field('_accordion-name');
				if(!is_array($accordion_name)){
					$accordion_name = array('');
				}
				?>
				<?php foreach($accordion_name as $key=> $each_field_name){?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="accordion-name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Content</div>
							<textarea rows="4" class="widget-field content_editor" data-name="accordion-content" ><?php wope_wope_widget_field_item('_accordion-content',$key);?></textarea>
						</div>
					</div>
				<?php }?>
			</div>
			<div class="cleared"></div>
			<span class="add-more-button">Add more</span>
		</div>
	</div>
<?php 
}


$pb_widgets[] = 'timeline';
function wope_pbw_timeline($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('');
?>
	<div class="index-widget timeline-widget <?php wope_var($last);?>">
		<div class="index-widget-type">timeline</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Timeline</div>
		<div class="index-widget-note">History, Work history, Timeline...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>

			<div class="index-widget-option">
				<div class="dynamic-box-title">Elements</div>
				<?php 
				$timeline_title = wope_widget_dynamic_field('_timeline-title');
				if(!is_array($timeline_title)){
					$timeline_title = array('');
				}
				?>
				<?php foreach($timeline_title as $key=> $each_field_name){?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Title</div>
							<input class="widget-field" data-name="timeline-title" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Content</div>
							<textarea rows="4" class="widget-field content_editor" data-name="timeline-content" ><?php wope_wope_widget_field_item('_timeline-content',$key);?></textarea>
							<div class="index-widget-option-name">Image</div>
							<input class="widget-field upload_field" data-name="timeline-image" type="text" value="<?php wope_wope_widget_field_item('_timeline-image',$key);?>"><span class="button  upload_button">Upload</span>
							<div class="index-widget-option-name">Time</div>
							<input class="widget-field" data-name="timeline-time" type="text" value="<?php wope_wope_widget_field_item('_timeline-time',$key);?>">
						</div>
					</div>
				<?php }?>
			</div>
			<div class="cleared"></div>
			<span class="add-more-button">Add more</span>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'tab';
function wope_pbw_tab($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('', 0, 30 ,1);
?>
	<div class="index-widget tab-widget <?php wope_var($last);?>">
		<div class="index-widget-type">tab</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Tab</div>
		<div class="index-widget-note">process, content parts ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column_left">
					<div class="index-widget-option-name">Direction</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Top</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Left</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Tab Left Size</div>
					<select class="widget-field">
						<option value="10" <?php selected(wope_widget_field(3),10);?>>10%</option>
						<option value="15" <?php selected(wope_widget_field(3),15);?>>15%</option>
						<option value="20" <?php selected(wope_widget_field(3),20);?>>20%</option>
						<option value="25" <?php selected(wope_widget_field(3),25);?>>25%</option>
						<option value="30" <?php selected(wope_widget_field(3),30);?>>30%</option>
						<option value="35" <?php selected(wope_widget_field(3),35);?>>35%</option>
						<option value="40" <?php selected(wope_widget_field(3),40);?>>40%</option>
						<option value="45" <?php selected(wope_widget_field(3),45);?>>45%</option>
						<option value="50" <?php selected(wope_widget_field(3),50);?>>50%</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Active</div>
					<input class="widget-field nput-text-number" type="text" value="<?php wope_var(wope_widget_field(4));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Elements</div>
				<?php 
				$tab_name = wope_widget_dynamic_field('_tab_name');
				if(!is_array($tab_name)){
					$tab_name = array('');
				}
				$dynamic_number = 1;
				foreach( $tab_name as $key=> $each_field_name){?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Icon</div>
							<input class="widget-field font_awesome" data-name="tab_icon" type="text" value="<?php wope_wope_widget_field_item('_tab_icon',$key);?>">
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="tab_name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Content</div>
							<textarea class="widget-field content_editor" rows="4" data-name="tab_content"><?php wope_wope_widget_field_item('_tab_content',$key);?></textarea>
						</div>
					</div>
				<?php }?>
			</div>
			<div class="cleared"></div>
			<span class="add-more-button">Add more</span>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'team';
function wope_pbw_team($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',1,3);
?>
	<div class="index-widget team-widget <?php wope_var($last);?>">
		<div class="index-widget-type">team</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Team</div>
		<div class="index-widget-note">team, profile, crew...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Style</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Box</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>Curver</option>
					</select>
				</div>		
				<div class="column_left column-last">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Team Element</div>
				<?php 
				$team_name = wope_widget_dynamic_field('_team-name');
				if(!is_array($team_name)){
					$team_name = array('');
				}
				?>
				<?php foreach( $team_name as $key=> $each_field_name){?>
					<div class="dynamic-box dynamic-box2">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="index-widget-option-name">Image</div>
							<input class="widget-field upload-input" data-name="team-image" type="text" value="<?php wope_wope_widget_field_item('_team-image',$key);?>">
							<input class="upload_button" type="button" value="Upload" />
							
							<div class="index-widget-option-name">Name</div>
							<input class="widget-field" data-name="team-name" type="text" value="<?php wope_var($each_field_name);?>">
							<div class="index-widget-option-name">Sub Name</div>
							<input class="widget-field" data-name="team-sub-name" type="text" value="<?php wope_wope_widget_field_item('_team-sub-name',$key);?>">
							<div class="index-widget-option-name">Description</div>
							<textarea rows="4" class="widget-field content_editor" data-name="team-content" ><?php wope_wope_widget_field_item('_team-content',$key);?></textarea>
							<div class="index-widget-option-name">Social&amp;Button</div>
							<textarea class="widget-field content_editor" rows="4" data-name="team-social" ><?php wope_wope_widget_field_item('_team-social',$key);?></textarea>
						</div>	
					</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'testimonial';
function wope_pbw_testimonial($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('','grid',2);
?>
	<div class="index-widget testimonial-widget <?php wope_var($last);?>">
		<div class="index-widget-type">testimonial</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Testimonial</div>
		<div class="index-widget-note">client testimonials, partner testimonials...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">

				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="grid" <?php selected(wope_widget_field(2),'grid');?>>Grid</option>
						<option value="box-slider" <?php selected(wope_widget_field(2),'box-slider');?>>Small Slider</option>
						<option value="section-slider" <?php selected(wope_widget_field(2),'section-slider');?>>Section Slider</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Grid Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(3),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(3),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(3),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(3),4);?>>4</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Testimonial Item</div>
				<?php 
				$testimonial_name = wope_widget_dynamic_field('_testimonial_name');
				if(!is_array($testimonial_name)){
					$testimonial_name = array('');
				}
				?>
				<?php foreach( $testimonial_name as $key=> $each_field_name){?>
					<div class="dynamic-box">
						<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
						<div class="dynamic-box-content">
							<div class="column2">
								<div class="index-widget-option-name">Author</div>
								<input class="widget-field" data-name="testimonial_name" type="text" value="<?php wope_var($each_field_name);?>">
								<div class="index-widget-option-name">Info</div>
								<textarea rows="3" class="widget-field content_editor" data-name="testimonial_info" ><?php wope_wope_widget_field_item('_testimonial_info',$key);?></textarea>
							</div>
							<div class="column2 column-last">
								<div class="index-widget-option-name">Image</div>
								<input class="widget-field upload-input upload-input-column12" data-name="testimonial_image" type="text" value="<?php wope_wope_widget_field_item('_testimonial_image',$key);?>">
								<input class="upload_button" type="button" value="Upload" />
								
								<div class="index-widget-option-name">Content</div>
								<textarea rows="3" class="widget-field content_editor" data-name="testimonial_content" ><?php wope_wope_widget_field_item('_testimonial_content',$key);?></textarea>
								
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'contact_form';
function wope_pbw_contact_form($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',1,'top','sample@site.com','<p>The Name and Email are required!</p>','<p>Thanks for contact us , we will reply you asap!</p>','Your Name','Your Email','Your Subject','Your Message','Send');
?>
	<div class="index-widget contact-form-widget <?php wope_var($last);?>">
		<div class="index-widget-type">contact-form</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Contact Form</div>
		<div class="index-widget-note">contact us, support ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Layout</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(2),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>3</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Label Position</div>
					<select class="widget-field">
						<option value="top" <?php selected(wope_widget_field(3),'top');?>>Top Input</option>
						<option value="inside" <?php selected(wope_widget_field(3),'inside');?>>Inside Input</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Received Email</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(4));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Error Message</div>
					<textarea class="widget-field content_editor" rows="3" ><?php wope_var(wope_widget_field(5));?></textarea>
				</div>
				<div class="column2 column-last">
					<div class="index-widget-option-name">Succesful Message</div>
					<textarea class="widget-field content_editor" rows="3" ><?php wope_var(wope_widget_field(6));?></textarea>
				</div>
				<div class="cleared"></div>
				
			</div>
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Name Label</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(7));?>">
				</div>
				<div class="column2 column-last">
					<div class="index-widget-option-name">Email Label</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(8));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Subject Label</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(9));?>">
				</div>
				<div class="column2 column-last">
					<div class="index-widget-option-name">Website Label</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(10));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Button Label</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(11));?>">
					
				</div>
				<div class="cleared"></div>
			</div>
			
			
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'contact_detail';
function wope_pbw_contact_detail($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('','',1,'12345 Little Lonsdale St, Melbourne','(123) 123-456','(123) 123-456','info@site.com','Mon - Sat 10AM - 6PM');
?>
	<div class="index-widget contact-detail-widget <?php wope_var($last);?>">
		<div class="index-widget-type">contact-detail</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Contact Detail</div>
		<div class="index-widget-note">Contact Information, Contact Boxes ...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">

					<div class="index-widget-option-name">Description</div>
					<textarea class="widget-field content_editor" rows="4" ><?php wope_var(wope_widget_field(2));?></textarea>
				</div>
				<div class="column2 column-last">
					<div class="column_left">
						<div class="index-widget-option-name">Style</div>
						<select class="widget-field">
							<option value="1" <?php selected(wope_widget_field(3),1);?>>Boxes</option>
							<option value="2" <?php selected(wope_widget_field(3),2);?>>Board</option>
						</select>
					</div>
					<div class="cleared"></div>

					<div class="column_left">
						<div class="index-widget-option-name">Address</div>
						<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(4));?>">
					</div>
					
					<div class="column_left">
						<div class="index-widget-option-name">Phone</div>
						<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(5));?>">
					</div>
					<div class="column_left">
						<div class="index-widget-option-name">Fax</div>
						<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(6));?>">
					</div>
					<div class="cleared"></div>

					<div class="column_left">
						<div class="index-widget-option-name">Email</div>
						<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(7));?>">
					</div>
					
					<div class="column_left">
						<div class="index-widget-option-name">Work Hours</div>
						<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(8));?>">
					</div>
					<div class="cleared"></div>
				</div>
				<div class="cleared"></div>
			</div>
			
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'embed_media';
function wope_pbw_embed_media($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',1,'');
?>
	<div class="index-widget embed-media-widget <?php wope_var($last);?>">
		<div class="index-widget-type">embed-media</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Embed Media</div>
		<div class="index-widget-note">youtube,vimeo,soundcloud</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column3">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
			
				<div class="column_left column-last">
					<div class="index-widget-option-name">Media Type</div>
					<select class="widget-field">
						<option value="1"  <?php selected(wope_widget_field(2),1);?>>Youtube</option>
						<option value="2"  <?php selected(wope_widget_field(2),2);?>>Vimeo</option>
						<option value="3"  <?php selected(wope_widget_field(2),3);?>>Soundcloud</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="index-widget-option-name">Embed Code</div>
				<textarea class="widget-field" rows="5" ><?php wope_var(wope_widget_field(3));?></textarea>

			</div>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'woocommerce';
function wope_pbw_woocommerce($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',0,0,3,2,'date','desc');

	//get project categories
	$args = array(
		'type'		 =>'product',
		'taxonomy'   => 'product_cat',
		'hide_empty' => '0'
	); 
	$product_taxonomies = get_categories($args); 
?>
	<div class="index-widget woocommerce-widget <?php wope_var($last);?>">
		<div class="index-widget-type">woocommerce</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Woocommerce</div>
		<div class="index-widget-note">Sale off, Best Seller</div>
		<div class="index-widget-content">
			<?php if ( class_exists( 'WooCommerce' ) ) {?>
			<div class="index-widget-option">
				<div class="column3">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="recent_products" <?php selected(wope_widget_field(2),'recent_products');?> >Recent Products</option>
						<option value="product_category" <?php selected(wope_widget_field(2),'product_category');?> >Products in A Category</option>
						<option value="featured_products" <?php selected(wope_widget_field(2),'featured_products');?> >Featured Products</option>
						<option value="sale_products" <?php selected(wope_widget_field(2),'sale_products');?> >Sale Products</option>
						<option value="best_selling_products" <?php selected(wope_widget_field(2),'best_selling_products');?> >Best-Selling Products</option>
						<option value="top_rated_products" <?php selected(wope_widget_field(2),'top_rated_products');?> >Top Rated Products</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Product Category</div>
					<?php if(count($product_taxonomies)>0){?>
						<select class="widget-field">
						<?php foreach($product_taxonomies as $each_product){?>
							<?php if($each_product->term_id == wope_widget_field(3)){?>
								<option value="<?php wope_var($each_product->slug);?>" selected="selected"><?php wope_var($each_product->name);?></option>
							<?php }else{?>
								<option value="<?php wope_var($each_product->slug);?>"><?php wope_var($each_product->name);?></option>
							<?php }?>
							
						<?php }?>
						</select>
					<?php }else{?>
						<select class="widget-field">
							<option value="0">All</option>
						</select>
					<?php }?>
				</div>	
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(4),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(4),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(4),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(4),4);?>>4</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Rows</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(5),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(5),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(5),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(5),4);?>>4</option>
						<option value="5" <?php selected(wope_widget_field(5),5);?>>5</option>
						<option value="6" <?php selected(wope_widget_field(5),6);?>>6</option>
						<option value="7" <?php selected(wope_widget_field(5),7);?>>7</option>
						<option value="8" <?php selected(wope_widget_field(5),8);?>>8</option>
					</select>
				</div>	
				<div class="column_left">
					<div class="index-widget-option-name">Order By</div>
					<select class="widget-field">
						<option value="date" <?php selected(wope_widget_field(6),'date');?>>Date</option>
						<option value="title" <?php selected(wope_widget_field(6),'title');?>>Title</option>
						<option value="rand" <?php selected(wope_widget_field(6),'rand');?>>Random</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="index-widget-option-name">Order</div>
					<select class="widget-field">
						<option value="desc" <?php selected(wope_widget_field(7),'desc');?>>desc</option>
						<option value="asc" <?php selected(wope_widget_field(7),'asc');?>>asc</option>
					</select>
				</div>
				<div class="cleared"></div>
			</div>
			<?php }else{?>
				<div class="index-widget-option">
					You must install Woocommerce Plugin first.
				</div>
			<?php }?>
		</div>
	</div>
<?php 
}

$pb_widgets[] = 'gallery';
function wope_pbw_gallery($wope_pb_option,$wope_pb_field,$last){
	global $default;
	$default = array('',0,0,4,'center','');
?>
	<div class="index-widget image gallery-widget <?php wope_var($last);?>">
		<div class="index-widget-type">gallery</div>
		<div class="index-widget-open-option" title="Show/Hide"><i class="fa fa-cog"></i></div>
		<div class="index-widget-copy" title="Copy"><i class="fa fa-copy"></i></div>
		<div class="index-widget-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-widget-title">Gallery</div>
		<div class="index-widget-note">image gallery, thumb gallery,gallery slider...</div>
		<div class="index-widget-content">
			<div class="index-widget-option">
				<div class="column2">
					<div class="index-widget-option-name">Title</div>
					<input class="widget-field" type="text" value="<?php wope_var(wope_widget_field(1));?>">
				</div>
				<div class="cleared"></div>
				<div class="column_left">
					<div class="index-widget-option-name">Type</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(2),0);?>>Single Image</option>
						<option value="1" <?php selected(wope_widget_field(2),1);?>>Image Grid</option>
						<option value="2" <?php selected(wope_widget_field(2),2);?>>Image Slider</option>
						<option value="3" <?php selected(wope_widget_field(2),3);?>>Gallery with Thumb</option>
						<option value="4" <?php selected(wope_widget_field(2),4);?>>Gallery with Title</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Click</div>
					<select class="widget-field">
						<option value="0" <?php selected(wope_widget_field(3),0);?>>LightBox</option>
						<option value="1" <?php selected(wope_widget_field(3),1);?>>Link</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Columns</div>
					<select class="widget-field">
						<option value="1" <?php selected(wope_widget_field(4),1);?>>1</option>
						<option value="2" <?php selected(wope_widget_field(4),2);?>>2</option>
						<option value="3" <?php selected(wope_widget_field(4),3);?>>3</option>
						<option value="4" <?php selected(wope_widget_field(4),4);?>>4</option>
						<option value="5" <?php selected(wope_widget_field(4),5);?>>5</option>
						<option value="6" <?php selected(wope_widget_field(4),6);?>>6</option>
						<option value="7" <?php selected(wope_widget_field(4),7);?>>7</option>
						<option value="8" <?php selected(wope_widget_field(4),8);?>>8</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-widget-option-name">Align</div>
					<select class="widget-field">
						<option value="left" <?php selected(wope_widget_field(5),'left');?>>Left</option>
						<option value="center" <?php selected(wope_widget_field(5),'center');?>>Center</option>
						<option value="right" <?php selected(wope_widget_field(5),'right');?>>Right</option>
					</select>
				</div>
				<div class="column_left column-last">
					<div class="wopepb-widget-option-name">Margin top (px)</div>
					<input class="widget-field overview-field" type="text" value="<?php wope_var(wope_widget_field(6));?>">
				</div>
				<div class="cleared"></div>
			</div>
			<div class="index-widget-option">
				<div class="dynamic-box-title">Gallery Item</div>
				<?php 
				$gallery_main_image = wope_widget_dynamic_field('_gallery_main_image');
				if(!is_array($gallery_main_image)){
					$gallery_main_image = array('');
				}
				?>
				<?php foreach( $gallery_main_image as $key=> $each_field_main_image){ ?>
				<div class="dynamic-box dynamic-box2">
					<div class="dynamic-box-remove" title="Remove"><i class="fa fa-times-circle"></i></div>
					<div class="dynamic-box-content">
						<div class="index-widget-option-name">Main Image</div>
						<input class="widget-field upload_field" data-name="gallery_main_image" type="text" value="<?php wope_var($each_field_main_image);?>"><span class="button add-more-button upload_button">Upload</span>
						<div class="index-widget-option-name">Full Image</div>
						<input class="widget-field upload_field" data-name="gallery_full_image" type="text" value="<?php wope_wope_widget_field_item('_gallery_full_image',$key);?>"><span class="button add-more-button upload_button">Upload</span>
						<div class="index-widget-option-name">Name</div>
						<input class="widget-field" data-name="gallery_name" type="text" value="<?php wope_wope_widget_field_item('_gallery_name',$key);?>">
						<div class="index-widget-option-name">Url</div>
						<input class="widget-field" data-name="gallery_url" type="text" value="<?php wope_wope_widget_field_item('_gallery_url',$key);?>">
					</div>
				</div>
				<?php }?>
				<div class="cleared"></div>
				<span class="add-more-button">Add more</span>
			</div>
		</div>
	</div>
<?php 
}

//sort the array
asort($pb_widgets);