<?php
/* Wope Page Builder Section field */
		if(!isset($wope_pb_option['section'.$i.'_layout']))  $wope_pb_option['section'.$i.'_layout'] 		= '1';
		if(!isset($wope_pb_option['section'.$i.'_field1']))  $wope_pb_option['section'.$i.'_field1'] 		= '0';
		if(!isset($wope_pb_option['section'.$i.'_field2']))  $wope_pb_option['section'.$i.'_field2'] 		= 'no';
		if(!isset($wope_pb_option['section'.$i.'_field3']))  $wope_pb_option['section'.$i.'_field3'] 		= 'medium';
		if(!isset($wope_pb_option['section'.$i.'_field4']))  $wope_pb_option['section'.$i.'_field4'] 		= '0';
		if(!isset($wope_pb_option['section'.$i.'_field5']))  $wope_pb_option['section'.$i.'_field5'] 		= 'white';
		if(!isset($wope_pb_option['section'.$i.'_field6']))  $wope_pb_option['section'.$i.'_field6'] 		= '#f5f5f5';
		if(!isset($wope_pb_option['section'.$i.'_field7']))  $wope_pb_option['section'.$i.'_field7'] 		= '#ffffff';
		if(!isset($wope_pb_option['section'.$i.'_field8']))  $wope_pb_option['section'.$i.'_field8'] 		= '0';
		if(!isset($wope_pb_option['section'.$i.'_field9']))  $wope_pb_option['section'.$i.'_field9'] 		= '';
		if(!isset($wope_pb_option['section'.$i.'_field10']))  $wope_pb_option['section'.$i.'_field10'] 	= '';
		if(!isset($wope_pb_option['section'.$i.'_field11']))  $wope_pb_option['section'.$i.'_field11'] 	= '0';
		if(!isset($wope_pb_option['section'.$i.'_field12']))  $wope_pb_option['section'.$i.'_field12'] 	= 'medium';
		if(!isset($wope_pb_option['section'.$i.'_field13']))  $wope_pb_option['section'.$i.'_field13'] 	= 'center';
		if(!isset($wope_pb_option['section'.$i.'_field14']))  $wope_pb_option['section'.$i.'_field14'] 	= 'black';
		if(!isset($wope_pb_option['section'.$i.'_field15']))  $wope_pb_option['section'.$i.'_field15'] 	= '';
		if(!isset($wope_pb_option['section'.$i.'_field16']))  $wope_pb_option['section'.$i.'_field16'] 	= '';
		if(!isset($wope_pb_option['section'.$i.'_field17']))  $wope_pb_option['section'.$i.'_field17'] 	= '';
		if(!isset($wope_pb_option['section'.$i.'_field18']))  $wope_pb_option['section'.$i.'_field18'] 	= '';
		
		if($wope_pb_option['section'.$i.'_field18'] == 1){ //hidden
			$section_class = "section-hidden-option";
		}else{
			$section_class = "";
		}
		
?>
	<div class="index-section-box <?php wope_var($section_class);?>">
		<div class="index-section-remove"><i class="fa fa-times-circle"></i></div>
		<div class="index-section-option"><i class="fa fa-cog"></i> Options</div>
		<div class="index-section-widget-open"><i class="fa fa-file"></i> Widgets</div>
		<div class="index-section-header">
			<div class="index-section-heading">Section</div>
			<div class="index-section-buttons">
				<div class="column_left">
					<div class="index-section-title">Layout</div>
					<select class="index-section-layout" name="layout">
						<option value="1" <?php selected($wope_pb_option['section'.$i.'_layout'],1);?>> 1/1 </option>
						<option value="2" <?php selected($wope_pb_option['section'.$i.'_layout'],2);?>> 1/2 + 1/2 </option>
						<option value="3" <?php selected($wope_pb_option['section'.$i.'_layout'],3);?>> 1/3 + 1/3 + 1/3 </option>
						<option value="4" <?php selected($wope_pb_option['section'.$i.'_layout'],4);?>> 1/3 + 2/3 </option>
						<option value="5" <?php selected($wope_pb_option['section'.$i.'_layout'],5);?>> 2/3 + 1/3 </option>
						<option value="6" <?php selected($wope_pb_option['section'.$i.'_layout'],6);?>> 1/4 + 1/4 + 1/4 + 1/4 </option>
						<option value="7" <?php selected($wope_pb_option['section'.$i.'_layout'],7);?>> 2/4 + 1/4 + 1/4</option>
						<option value="8" <?php selected($wope_pb_option['section'.$i.'_layout'],8);?>> 1/4 + 2/4 + 1/4</option>
						<option value="9" <?php selected($wope_pb_option['section'.$i.'_layout'],9);?>> 1/4 + 1/4 + 2/4</option>
						<option value="10" <?php selected($wope_pb_option['section'.$i.'_layout'],10);?>> 1/4 + 3/4</option>
						<option value="11" <?php selected($wope_pb_option['section'.$i.'_layout'],11);?>> 3/4 + 1/4</option>
					</select>
				</div>

				<div class="column_left">
					<div class="index-section-title">Width</div>
					<select class="section-field">
						<option value="0"  <?php selected($wope_pb_option['section'.$i.'_field1'],0);?>>Boxed</option>
						<option value="1" <?php selected($wope_pb_option['section'.$i.'_field1'],1);?>>Full Width</option>
					</select>
				</div>

				<div class="column_left">
					<div class="index-section-title">Top Spacing</div>
					<select class="section-field">
						<option value="big"  <?php selected($wope_pb_option['section'.$i.'_field2'],'big');?>>Big</option>
						<option value="medium" <?php selected($wope_pb_option['section'.$i.'_field2'],'medium');?>>Medium</option>
						<option value="small" <?php selected($wope_pb_option['section'.$i.'_field2'],'small');?>>Small</option>
						<option value="no" <?php selected($wope_pb_option['section'.$i.'_field2'],'no');?>>No Spacing</option>
					</select>
				</div>
				<div class="column_left">
					<div class="index-section-title">Bottom Spacing</div>
					<select class="section-field">
						<option value="big"  <?php selected($wope_pb_option['section'.$i.'_field3'],'big');?>>Big</option>
						<option value="medium" <?php selected($wope_pb_option['section'.$i.'_field3'],'medium');?>>Medium</option>
						<option value="small" <?php selected($wope_pb_option['section'.$i.'_field3'],'small');?>>Small</option>
						<option value="no" <?php selected($wope_pb_option['section'.$i.'_field3'],'no');?>>No Spacing</option>
					</select>
				</div>

				<div class="column_left">
					<div class="index-section-title">Hide On Mobile</div>
					<select class="section-field">
						<option value="1"  <?php selected($wope_pb_option['section'.$i.'_field4'],1);?>>Yes</option>
						<option value="0" <?php selected($wope_pb_option['section'.$i.'_field4'],0);?>>No</option>
					</select>
				</div>

				<div class="cleared"></div>

				<div class="column_left">
					<div class="index-section-title">Background</div>
					<select class="section-field">
						<option value="white"  <?php selected($wope_pb_option['section'.$i.'_field5'],'white');?>>White</option>
						<option value="gray" <?php selected($wope_pb_option['section'.$i.'_field5'],'gray');?>>Gray</option>
						<option value="custom" <?php selected($wope_pb_option['section'.$i.'_field5'],'custom');?>>Custom Color</option>
						<option value="image" <?php selected($wope_pb_option['section'.$i.'_field5'],'image');?>>Image</option>
						<option value="video" <?php selected($wope_pb_option['section'.$i.'_field5'],'video');?>>Video</option>
					</select>
				</div>
				
				<div class="column_left">
					<div class="index-section-title">BG Color</div>
					<input data-default-color="<?php wope_var($wope_pb_option['section'.$i.'_field6']); ?>" class="pb-color-picker section-field" type="text" value="<?php wope_var($wope_pb_option['section'.$i.'_field6']); ?>" />
				</div>
				
				<div class="column_left">
					<div class="index-section-title">Overlay Color</div>
					<input data-default-color="<?php wope_var($wope_pb_option['section'.$i.'_field7']); ?>" class="pb-color-picker section-field" type="text" value="<?php wope_var($wope_pb_option['section'.$i.'_field7']); ?>" />
				</div>
				<div class="column_left">
					<div class="index-section-title">Overlay Transparent</div>
					<select class="section-field">
						<option value="0"  	<?php selected($wope_pb_option['section'.$i.'_field8'],0);?>>0%</option>
						<option value="0.1" <?php selected($wope_pb_option['section'.$i.'_field8'],0.1);?>>10%</option>
						<option value="0.2" <?php selected($wope_pb_option['section'.$i.'_field8'],0.2);?>>20%</option>
						<option value="0.3" <?php selected($wope_pb_option['section'.$i.'_field8'],0.3);?>>30%</option>
						<option value="0.4" <?php selected($wope_pb_option['section'.$i.'_field8'],0.4);?>>40%</option>
						<option value="0.5" <?php selected($wope_pb_option['section'.$i.'_field8'],0.5);?>>50%</option>
						<option value="0.6" <?php selected($wope_pb_option['section'.$i.'_field8'],0.6);?>>60%</option>
						<option value="0.7" <?php selected($wope_pb_option['section'.$i.'_field8'],0.7);?>>70%</option>
						<option value="0.8" <?php selected($wope_pb_option['section'.$i.'_field8'],0.8);?>>80%</option>
						<option value="0.9" <?php selected($wope_pb_option['section'.$i.'_field8'],0.9);?>>90%</option>
					</select>
				</div>

				<div class="cleared"></div>

				<div class="column_left">
					<div class="index-section-title">Youtube Id</div>
					<input class="section-field" type="text" value="<?php wope_var($wope_pb_option['section'.$i.'_field9']);?>">
				</div>
				
				<div class="column_left">
					<div class="index-section-title">BG Image</div>
					<input class="section-field upload_field" type="text" value="<?php wope_var($wope_pb_option['section'.$i.'_field10']);?>"><span class="button add-more-button upload_button">Upload</span>
				</div>

				<div class="column_left">
					<div class="index-section-title">Half Image Background</div>
					<select class="section-field">
						<option value="0" <?php selected($wope_pb_option['section'.$i.'_field11'],0);?>>None</option>
						<option value="1" <?php selected($wope_pb_option['section'.$i.'_field11'],1);?>>Image on Left</option>
						<option value="2"  <?php selected($wope_pb_option['section'.$i.'_field11'],2);?>>Image on Right</option>
					</select>
				</div>

				<div class="cleared"></div>

				<div class="column_left">
					<div class="index-section-title">Title Spacing</div>
					<select class="section-field">
						<option value="big" <?php selected($wope_pb_option['section'.$i.'_field12'],'big');?>>Big</option>
						<option value="medium" <?php selected($wope_pb_option['section'.$i.'_field12'],'medium');?>>Medium</option>
						<option value="small" <?php selected($wope_pb_option['section'.$i.'_field12'],'small');?>>Small</option>
						<option value="no" <?php selected($wope_pb_option['section'.$i.'_field12'],'no');?>>No Spacing</option>
					</select>
				</div>

				<div class="column_left">
					<div class="index-section-title">Title Align</div>
					<select class="section-field">
						<option value="left" <?php selected($wope_pb_option['section'.$i.'_field13'],'left');?>>Left</option>
						<option value="center" <?php selected($wope_pb_option['section'.$i.'_field13'],'center');?>>Center</option>
						<option value="right" <?php selected($wope_pb_option['section'.$i.'_field13'],'right');?>>Right</option>
					</select>
				</div>

				<div class="column_left">
					<div class="index-section-title">Text Color</div>
					<select class="section-field">
						<option value="black"  <?php selected($wope_pb_option['section'.$i.'_field14'],'black');?>>Black</option>
						<option value="white" <?php selected($wope_pb_option['section'.$i.'_field14'],'white');?>>White</option>
					</select>
				</div>

				
				<div class="cleared"></div>

				<div class="column2 ">
					<div class="index-section-title">Title</div>
					<input class="section-field text-input" type="text" value="<?php wope_var($wope_pb_option['section'.$i.'_field15']);?>">
					<div class="index-section-title">Sub Title</div>
					<input class="section-field text-input" type="text" value="<?php wope_var( $wope_pb_option['section'.$i.'_field16']);?>">
					
				</div>

				<div class="column2 column-last">
					<div class="index-section-title">Section Description</div>
					<textarea rows="4" class="section-field text-input content_editor"><?php wope_var( $wope_pb_option['section'.$i.'_field17']);?></textarea>
				</div>
				
				<div class="cleared"></div>
				
				<input class="section-field section-open-status" type="hidden" value="<?php wope_var( $wope_pb_option['section'.$i.'_field18']);?>">
			</div>
		</div>
		<div class="index-page-box-container">
			<?php 
			
			for($j = 1 ; $j <= $wope_pb_option['section'.$i.'_total'] ; $j++ ){
				if($j == $wope_pb_option['section'.$i.'_total']){
					$last_class = " column-last";
					$clear_div = '<div class="cleared"></div>';
				}else{
					$last_class = "";
					$clear_div = '';
				}


			?>
				<div class="index-page-box column<?php wope_var($wope_pb_option['box'.$wope_total_box]);?> <?php wope_var($last_class);?>">
					<div class="index-box-column"><?php wope_var($wope_pb_option['box'.$wope_total_box]);?></div>
						<?php 
						for($k = 1; $k <= $wope_pb_option['box'.$wope_total_box.'_total'] ; $k++){	
							$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
							call_user_func_array('wope_pbw_'.wope_pb_convert($wope_pb_option['widget'.$wope_total_widget]),array($wope_pb_option,$wope_pb_field,''));
							$wope_total_widget++;	
						}?>
				</div>	
			<?php 
				wope_var( $clear_div);
				$wope_total_box++;
			}?>
		</div>
	</div>