		<?php 
			$wope_main_option = get_option('wope-main');
			include(get_template_directory().'/page_builder_display.php');
			global $wope_pb_option;			
			$wope_total_box = 1;
			$wope_total_widget = 1;
			$wope_total_field = 1;

			$section_title_tag = 'h1';
			$section_subtitle_tag = 'h2';
			$widget_title_tag = 'h2';
			if(isset($wope_main_option['section_title_tag'])) {
				if($wope_main_option['section_title_tag'] != null){
					$section_title_tag = $wope_main_option['section_title_tag'];
				}

				if($wope_main_option['section_subtitle_tag'] != null){
					$section_subtitle_tag = $wope_main_option['section_subtitle_tag'];
				}

				if($wope_main_option['widget_title_tag'] != null){
					$widget_title_tag = $wope_main_option['widget_title_tag'];
				}
			}
			
			
			if(!empty($wope_pb_option['total_section'])){ //if have sections
				for($i = 1 ; $i <= $wope_pb_option['total_section'] ; $i++ ){ //process each section

					$wope_section_layout 	= $wope_pb_option['section'.$i.'_field1'];
					$wope_top_spacing 		= $wope_pb_option['section'.$i.'_field2'];
					$wope_bottom_spacing 	= $wope_pb_option['section'.$i.'_field3'];
					$wope_hide_mobile		= $wope_pb_option['section'.$i.'_field4'];
					$wope_bg_type 			= $wope_pb_option['section'.$i.'_field5'];
					$wope_bg_color 			= $wope_pb_option['section'.$i.'_field6'];
					$wope_overlay_color 		= $wope_pb_option['section'.$i.'_field7'];
					$wope_overlay_transparent	= $wope_pb_option['section'.$i.'_field8'];
					$wope_video 				= $wope_pb_option['section'.$i.'_field9'];
					$wope_bg_image 			= $wope_pb_option['section'.$i.'_field10'];
					$wope_half_image 		= $wope_pb_option['section'.$i.'_field11'];
					$wope_title_spacing 		= $wope_pb_option['section'.$i.'_field12'];
					$wope_text_align 		= $wope_pb_option['section'.$i.'_field13'];
					$wope_text_color 		= $wope_pb_option['section'.$i.'_field14'];
					$wope_title				= $wope_pb_option['section'.$i.'_field15'];
					$wope_sub_title 			= $wope_pb_option['section'.$i.'_field16'];
					$wope_text 				= wope_get_html($wope_pb_option['section'.$i.'_field17']);
					
					//section layout
					$wope_section_layout_class = ($wope_section_layout == 1) ? "no-wrap" : "wrap-column";

					//top spacing
					$wope_top_spacing_class = "top-spacing-".$wope_top_spacing;

					//bottom spacing
					$wope_bottom_spacing_class = "bottom-spacing-".$wope_bottom_spacing;

					//hide on mobile
					$wope_hide_mobile_class = ($wope_hide_mobile == 1) ? "hide_on_mobile" : "";

					//background type
					$wope_bg_image_style = "";
					$wope_bg_color_style = '';
					$wope_bg_video_script = '';
					$wope_overlay_color_class = '';

					if($wope_bg_type == 'video'){ //youtube 
						$wope_bg_video_script =  "<script>jQuery( document ).ready(function(){jQuery('#content-section". $i . "').tubular({videoId:'". $wope_video."'});});</script>";
					}else if($wope_bg_type == 'image'){
						$wope_bg_image_style = "background-image: url('".$wope_bg_image."');";

						//overlay bg
						$wope_overlay_color_style = "background-color:" . $wope_overlay_color.";";
						$wope_overlay_transparent_style = "opacity:" . $wope_overlay_transparent.";";

					}else if($wope_bg_type == 'custom'){ //custom color
						$wope_bg_color_style = "background-color:".$wope_bg_color.";" ;

					}

					//background type
					$wope_bg_type_class = $wope_bg_type . "-bg";

					//text color
					$wope_text_color_class = $wope_text_color . '-text';

					//text align
					$wope_text_align_class = "align-" . $wope_text_align;

					//title spacing
					$wope_title_spacing_class = "title-spacing-".$wope_title_spacing;

					if($wope_half_image != 0){
						$wope_bg_image_style = "";
						$wope_bg_half_style = "background-image: url('".$wope_bg_image."');";
					}

					?>
						
					<div id="content-section<?php echo esc_attr($i);?>" class="content-section <?php wope_var($wope_text_color_class.' '.$wope_bg_type_class.' '.$wope_top_spacing_class.' '.$wope_bottom_spacing_class.' '.$wope_title_spacing_class.' '.$wope_text_align_class.' '.$wope_hide_mobile_class);?>" style="<?php wope_var($wope_bg_image_style.$wope_bg_color_style);?>">
						<?php if($wope_bg_type == 'image' ){ ?>
							<div class="section-bg-overlay" style="<?php wope_var($wope_overlay_transparent_style." ".$wope_overlay_color_style);?>;"></div>
						<?php } ?>

						<?php if($wope_half_image != 0){ //half column ?>
							<div class="section-half-column">
								<?php if($wope_half_image == 1){ //background column 1 ?>
									<div class="section-column-bg" style="<?php wope_var($wope_bg_half_style);?>"></div>
								<?php } ?>

								<div class="section-column-content">
									
										<?php if(trim($wope_title) != ''){?>
											<div class="column1">
												
													<div class="content-section-heading">
														<?php if(trim($wope_sub_title) != '' ){?>
															<<?php wope_var($section_subtitle_tag);?> class="content-section-subtitle">
																	<?php wope_var(trim($wope_sub_title));?>
															</<?php wope_var($section_subtitle_tag);?>>
														<?php }?>
														
														<?php if(trim($wope_title) != '' ){?>
															<<?php wope_var($section_title_tag);?>  class="content-section-title">
																<?php wope_var(trim($wope_title));?>
															</<?php wope_var($section_title_tag);?>>
														<?php }?>
														
														<?php if(trim($wope_text) != '' ){?>
															<div class="content-section-text">
																<?php wope_var(trim($wope_text));?>
															</div>
														<?php }?>
													</div>

												
											</div>
											<div class="cleared"></div>
										<?php }?>

										<?php for($k = 1; $k <= $wope_pb_option['box'.$wope_total_box.'_total'] ; $k++){ //process each widget
												include('page_builder_widgets.php');
											} 
										$wope_total_box++;	
										?>
									
								</div>

								<?php if($wope_half_image == 2){ //background column 2 ?>
									<div class="section-column-bg" style="<?php wope_var($wope_bg_half_style);?>"></div>
								<?php } ?>

							</div>
						<?php }else{ //normal style ?>

							<?php if(trim($wope_title) != '' or trim($wope_sub_title) != '' ){?>
							<div class="wrap-column">
								<div class="column1">
									<div class="wrap">
										<div class="content-section-heading">
											<?php if(trim($wope_sub_title) != '' ){?>
												<<?php wope_var($section_subtitle_tag);?> class="content-section-subtitle">
													<?php wope_var(trim($wope_sub_title));?>
												</<?php wope_var($section_subtitle_tag);?>>
											<?php }?>
											
											<?php if(trim($wope_title) != '' ){?>
												<<?php wope_var($section_title_tag);?> class="content-section-title">
													<?php wope_var(trim($wope_title));?>
												</<?php wope_var($section_title_tag);?>>
											<?php }?>
											<?php if(trim($wope_text) != '' ){?>
												<div class="content-section-text">
													<?php wope_var(trim($wope_text));?>
												</div>
											<?php }?>
										</div>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
							<?php }?>
							<div class="<?php wope_var($wope_section_layout_class);?>">
								<?php for($j = 1 ; $j <= $wope_pb_option['section'.$i.'_total'] ; $j++ ){ //process each column
									
									if($j == $wope_pb_option['section'.$i.'_total']){
										$wope_section_clear_div = '<div class="cleared"></div>';
									}else{
										$wope_section_clear_div = '';
									}
								?>
									<div class="content-column<?php echo esc_attr($wope_pb_option['box'.$wope_total_box]);?>">
										<?php for($k = 1; $k <= $wope_pb_option['box'.$wope_total_box.'_total'] ; $k++){ //process each widget
											include('page_builder_widgets.php');
										} ?>
									</div>
									
									<?php wope_var($wope_section_clear_div);?>

									<?php $wope_total_box++;

								} //end process each column
								?>
								
							</div><!-- end wrap-column no-wrap -->
						

					<?php }?>

					</div><!-- end content section -->
					<?php wope_var($wope_bg_video_script);?>

				<?php 
				} //end process each section

			} //end if have sections
		

		function wope_get_html($html_content){
			$content = html_entity_decode($html_content);
			$filter_content = apply_filters('the_content',$content);
			return wope_parse_shortcode_content($filter_content);
		}
		