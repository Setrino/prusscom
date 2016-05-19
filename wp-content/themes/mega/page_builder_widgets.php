<div class="widget-entry">
	<?php
	switch($wope_pb_option['widget'.$wope_total_widget]){
		case 'content-box':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$content 			= wope_get_html($wope_pb_option[$wope_pb_field.'2']);
			
			
	?>
			<div class="column1">
				
				<?php if(trim($title) != ''){?>
					<div class="section-widget-heading">
						<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
					</div>
				<?php }?>
				
				<div class="content content-box-content">
					<?php wope_var($content);?>
				</div>
				
			</div>
			<div class="cleared"></div>
	<?php
			break;
		case 'pricing':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$column 			= $wope_pb_option[$wope_pb_field.'2'];
			$highlight 			= $wope_pb_option[$wope_pb_field.'3'];
			?>
			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
			
				<div class="pricing-table">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_pricing_table_title']);
													
					foreach($wope_pb_option[$wope_pb_field.'_pricing_table_title'] as $key=> $each_field_title){ 
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					
					if($highlight == $element_current){
						$pricing_table_highlight = "pricing-table-highlight";
					}else{
						$pricing_table_highlight = "";
					}
					
					$end_class = wope_get_end_class($element_current,$total_element,$column);
					$element_current++;
														
					?>
						<div class="pricing-table-column<?php echo esc_attr($column);?> <?php wope_var($column_last);?>">
							<div class="pricing-table-item <?php wope_var($end_class);?> <?php wope_var($pricing_table_highlight);?>">
								<div class="pricing-table-heading">
									<div class="pricing-table-title"><?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_title'][$key]);?></div>
									<?php if($wope_pb_option[$wope_pb_field.'_pricing_table_sub_title'][$key] != ""){ ?>
										<div class="pricing-table-sub-title"><?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_sub_title'][$key]);?></div>
									<?php } ?>
								</div>
								<div class="pricing-table-pricing">
									<span class="pricing-table-unit"><?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_unit'][$key]);?></span>
									<span class="pricing-table-price"><?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_price'][$key]);?></span>
									<span class="pricing-table-duration">/ <?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_duration'][$key]);?></span>
								</div>
								<div class="pricing-table-featured-list">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_pricing_table_featured_list'][$key]));?>
								</div>
								<div class="pricing-table-button content">
									<a class="button normal-button" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_btn_url'][$key]);?>"><?php wope_var($wope_pb_option[$wope_pb_field.'_pricing_table_btn_name'][$key]);?></a>
								</div>
							</div>						
						</div>
						<?php wope_var($clear_div);?>
					<?php } ?>
					
				</div>
			</div>
			<div class="cleared"></div>
	<?php
			break;
		case 'subscribe':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$description 		= wope_get_html($wope_pb_option[$wope_pb_field.'2']);
			$shortcode 			= $wope_pb_option[$wope_pb_field.'3'];
			$style 				= $wope_pb_option[$wope_pb_field.'4'];
			$align 				= $wope_pb_option[$wope_pb_field.'5'];
			
			$style_class = "subscribe-style-".$style;

			$align_class = "subscribe-align-".$align;
	?>
			<div class="column1">
				<div class="subscribe-box <?php wope_var($style_class.' '.$align_class);?>">
					<div class="subscribe-box-inner content">
						<div class="subscribe-box-text">
							<?php if(trim($title) != ''){?>
								<<?php wope_var($widget_title_tag);?> class="subscribe-box-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
							<?php }?>
							<?php if(trim($description) != ''){?>
								<div class="subscribe-box-description "><?php wope_var($description);?></div>
							<?php }?>
						</div>
						<div class="subscribe-box-form">
							<?php if(trim($shortcode) != ''){?>
								<?php echo do_shortcode($shortcode);?>
							<?php }?>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
	<?php
			break;
		case 'callout':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			
			$align 				= $wope_pb_option[$wope_pb_field.'1'];
			$bg_type 			= $wope_pb_option[$wope_pb_field.'2'];
			$content 			= wope_get_html($wope_pb_option[$wope_pb_field.'3']);
			$sub_content 		= wope_get_html($wope_pb_option[$wope_pb_field.'4']);
			$button1_name 		= $wope_pb_option[$wope_pb_field.'5'];
			$button1_url 		= $wope_pb_option[$wope_pb_field.'6'];
			$button1_icon 		= $wope_pb_option[$wope_pb_field.'7'];
			$button2_name 		= $wope_pb_option[$wope_pb_field.'8'];
			$button2_url 		= $wope_pb_option[$wope_pb_field.'9'];
			$button2_icon 		= $wope_pb_option[$wope_pb_field.'10'];

			if(trim($content) != '' and trim($sub_content) != ''){
				$two_line_class = 'callout-2-line';
			}else{
				$two_line_class = '';
			}

			$bg_type_class = "callout-".$bg_type;

			$align_class = "callout-align-".$align;
			
	?>
			<div class="column1">
				<div class="callout <?php wope_var($align_class);?> <?php wope_var($bg_type_class);?> <?php wope_var($two_line_class);?>">
					<div class="callout-wrap ">
						<div class="callout-inside">
							<?php if(trim($sub_content) != ''){?>
								<div class="callout-content">
									<div class="callout-main-content">
										<?php wope_var($content);?>
									</div>
									<div class="callout-sub-content">
										<?php wope_var($sub_content);?>
									</div>
								</div>
							<?php }else{ ?>
								<div class="callout-content">
									<?php wope_var($content);?>
								</div>
							<?php } ?>
							<div class="callout-buttons content">
								<?php if($button1_name != ""){ ?>
									<a class="button normal-button callout-button1" href="<?php wope_var($button1_url);?>"><?php wope_var($button1_name);?>
										<?php if($button1_icon != ""){ ?> <i class="<?php wope_var($button1_icon);?>"></i> <?php } ?>
									</a>
								<?php } ?>
								<?php if($button2_name != ""){ ?>
									<a class="button normal-button callout-button2" href="<?php wope_var($button2_url);?>"><?php wope_var($button2_name);?>
										<?php if($button2_icon != ""){ ?> <i class="<?php wope_var($button2_icon);?>"></i> <?php } ?>
									</a>
								<?php } ?>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
	<?php
			break;
		case 'blockquote':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$type 			= $wope_pb_option[$wope_pb_field.'1'];
			$bg_color 		= $wope_pb_option[$wope_pb_field.'2'];
			$text_color 	= $wope_pb_option[$wope_pb_field.'3'];
			$bg_image 		= $wope_pb_option[$wope_pb_field.'4'];
			$transparent 	= $wope_pb_option[$wope_pb_field.'5'];
			$content 		= wope_get_html($wope_pb_option[$wope_pb_field.'6']);
			$author 		= $wope_pb_option[$wope_pb_field.'7'];
			
			$type_class 		 = 'blockquote-'.$type;
			$bg_color_class 	 = 'blockquote-bg-'.$bg_color;
			$text_color_class 	 = 'blockquote-text-'.$text_color;
			$bg_image_style 	 = (empty($bg_image)) ? '' : 'background-image: url('.$bg_image.');';
			$transparent_class 	 = 'transparent-'.$transparent;
			?>

			
			<div class="column1">
				<div class="blockquote-box <?php wope_var($type_class);?> <?php wope_var($text_color_class);?>">
					<div class="blockquote-image" style="<?php wope_var($bg_image_style);?>"></div>
					<div class="blockquote-bg <?php wope_var($bg_color_class." ".$transparent_class);?>"></div>
					<div class="blockquote-wrap">
						<div class="blockquote-info">
							<div class="blockquote-content"><?php wope_var($content);?></div>
							<div class="blockquote-author"><?php wope_var($author);?></div>
						</div>
						<i class="fa fa-quote-right"></i>
					</div>
				</div>
			</div>
			<div class="cleared"></div>

			<?php
			break;
		case 'promote-box':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$box_style 			= $wope_pb_option[$wope_pb_field.'1'];
			$content_style 		= $wope_pb_option[$wope_pb_field.'2'];
			$text_color 		= $wope_pb_option[$wope_pb_field.'3'];
			$bg_color 			= $wope_pb_option[$wope_pb_field.'4'];
			$transparent 		= $wope_pb_option[$wope_pb_field.'5'];
			$align 				= $wope_pb_option[$wope_pb_field.'6'];
			$title 				= $wope_pb_option[$wope_pb_field.'7'];
			$content 			= wope_get_html($wope_pb_option[$wope_pb_field.'8']);
			$bg_image 			= $wope_pb_option[$wope_pb_field.'9'];
			$button1_name 		= $wope_pb_option[$wope_pb_field.'10'];
			$button1_url 		= $wope_pb_option[$wope_pb_field.'11'];
			$button2_name 		= $wope_pb_option[$wope_pb_field.'12'];
			$button2_url 		= $wope_pb_option[$wope_pb_field.'13'];

			$box_style_class	 = 'promote-'.$box_style;
			$content_style_class = 'promote-content-'.$content_style;
			$text_color_class	 = 'promote-text-'.$text_color;
			$bg_color_class 	 = 'promote-bg-'.$bg_color;
			$transparent_class 	 = 'transparent-'.$transparent;
			$align_class 		 = 'promote-'.$align;
			$bg_image_style 	 = (empty($bg_image)) ? '' : 'background-image: url('.$bg_image.');';


			?>
			<?php if($box_style == 'small'){ //small box?>
			<div class="column1">
				<div class="promote-box <?php wope_var($align_class);?>">
					<img class="promote-image" src="<?php wope_var($bg_image);?>">
					<div class="promote-box-bg <?php wope_var($bg_color_class." ".$transparent_class);?>"></div>
					<div class="promote-info <?php wope_var($text_color_class);?>">
						<?php if(trim($title) != ''){?>
							<<?php wope_var($widget_title_tag);?> class="promote-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						<?php }?>
						<?php if(trim($content) != ''){?>
							<div class="promote-content <?php wope_var($content_style_class);?>"><?php wope_var($content);?></div>
						<?php }?>
						<?php if(trim($button1_name) != ''){?>
						<div class="promote-buttons content">
							<a class="normal normal-button" href="<?php wope_var($button1_url);?>"><?php wope_var($button1_name);?></a>
						</div>
						<?php }?>
					</div>
					
				</div>
			</div>
			<div class="cleared"></div>
			
			
			<?php }else{ //section box?>
				<div class="promote-section <?php wope_var($align_class);?>">
					<div class="promote-section-image" style="<?php wope_var($bg_image_style);?>"></div>
					<div class="promote-section-bg <?php wope_var($bg_color_class." ".$transparent_class);?>"></div>
					<div class="promote-wrap">
						<div class="promote-info <?php wope_var($text_color_class);?>">
							<<?php wope_var($widget_title_tag);?> class="promote-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
							<div class="promote-content <?php wope_var($content_style_class);?>"><?php wope_var($content);?></div>
							<div class="promote-buttons content">
								<?php if(trim($button1_name) != ''){?>
									<a class="normal normal-button promote-button1" href="<?php wope_var($button1_url);?>"><?php wope_var($button1_name);?></a>
								<?php }?>
								<?php if(trim($button2_name) != ''){?>
									<a class="normal normal-button" href="<?php wope_var($button2_url);?>"><?php wope_var($button2_name);?></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
			
			<?php
			break;
		case 'logo-showcase':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$style 				= $wope_pb_option[$wope_pb_field.'2'];
			$column 			= $wope_pb_option[$wope_pb_field.'3'];
			
			$style_class = 'logo-style-'.$style;

			if($style == 'table'){ // no spacing
				$spacing_class = 'percent_column';
			}else{
				$spacing_class = 'logo_column';
			}

			?>
			<?php if(trim($title) != ''){?>
			<div class="column1">
				<div class="wrap-no-fullwidth">
					<div class="section-widget-heading">
						<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
			<?php }?>
			
			<div class="column1">
				<div class="logo-client <?php wope_var($style_class);?>">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_logo_client_name']);
													
					foreach($wope_pb_option[$wope_pb_field.'_logo_client_name'] as $key=> $each_field_name){ 
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					
					$end_class = wope_get_end_class($element_current,$total_element,$column);
					$element_current++;							
					?>
						<div class="logo-client-column <?php wope_var($spacing_class.$column);?> <?php wope_var($column_last);?>  <?php echo esc_attr($end_class);?>">
							<div class="logo-client-item">
								<?php if($wope_pb_option[$wope_pb_field.'_logo_client_url'][$key]){ ?>
									<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_url'][$key]);?>"><img src="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_image'][$key]);?>" title="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_name'][$key]);?>" alt="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_name'][$key]);?>"></a>
								<?php }else{ ?>
									<img src="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_image'][$key]);?>" title="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_name'][$key]);?>" alt="<?php wope_var($wope_pb_option[$wope_pb_field.'_logo_client_name'][$key]);?>">
								<?php } ?>
							</div>
						</div>
						<?php wope_var($clear_div);?>
					<?php } ?>
				</div>
			</div>
			<div class="cleared"></div>
			<?php
			break;
		case 'embed-media':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 			= $wope_pb_option[$wope_pb_field.'2'];
			$embed_code 	= html_entity_decode($wope_pb_option[$wope_pb_field.'3']);
			?>
			
			<?php if(trim($title) != ''){?>
			<div class="column1">
				<div class="wrap-no-fullwidth">
					<div class="section-widget-heading">
						<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
			<?php }?>
			
			<div class="column1">	
				<?php if($type == 1){?>
					<div class="youtube-container"><?php wope_var($embed_code);?></div>
				<?php }elseif($type == 2){?>
					<div class="vimeo-container"><?php wope_var($embed_code);?></div>
				<?php }else{?>
					<?php wope_var($embed_code);?>
				<?php }?>
			</div>
			<div class="cleared"></div>
			<?php
			break;
		case 'contact-detail':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$description 		= wope_get_html($wope_pb_option[$wope_pb_field.'2']);
			$style 				= $wope_pb_option[$wope_pb_field.'3'];
			$address 			= $wope_pb_option[$wope_pb_field.'4'];
			$cellphone 			= $wope_pb_option[$wope_pb_field.'5'];
			$homephone 			= $wope_pb_option[$wope_pb_field.'6'];
			$email 				= $wope_pb_option[$wope_pb_field.'7'];
			$hours 				= $wope_pb_option[$wope_pb_field.'8'];

			?>
			<?php if(trim($title) != ''){?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				</div>
				<div class="cleared"></div>
			<?php }?>
			
			<div class="contact-detail-widget">
				<?php if($style == 1){ ?>
					<div class="column1">
						<div class="contact-detail-board">
							<?php if($address != ""){ ?>
								<div class="contact-detail-board-item">
									<i class="fa fa-map-marker"></i><?php wope_var($address);?>
								</div>
							<?php } ?>
							<?php if($cellphone != ""){ ?>
								<div class="contact-detail-board-item">
									<i class="fa fa-phone"></i><?php wope_var($cellphone);?>
								</div>
							<?php } ?>
							<?php if($email != ""){ ?>
								<div class="contact-detail-board-item">
									<i class="fa fa-envelope-o"></i><?php wope_var($email);?>
								</div>
							<?php } ?>
							<?php if($homephone != ""){ ?>
								<div class="contact-detail-board-item">
									<i class="fa fa-fax"></i><?php wope_var($homephone);?>
								</div>
							<?php } ?>
							<?php if($hours != ""){ ?>
								<div class="contact-detail-board-item">
									<i class="fa fa-clock-o"></i><?php wope_var($hours);?>
								</div>
							<?php } ?>
							<?php if($description != ""){ ?>
								<div class="contact-detail-board-description">
									<?php wope_var($description);?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="cleared"></div>
				<?php }else{
					$contact_detail = array();
					$contact_count = 1;
					if($address != ""){
						$contact_detail[$contact_count]['icon'] = "fa fa-map-marker";
						$contact_detail[$contact_count]['text'] = $address;
						$contact_count ++;
					}
					if($cellphone != ""){
						$contact_detail[$contact_count]['icon'] = "fa fa-phone";
						$contact_detail[$contact_count]['text'] = $cellphone;
						$contact_count ++;
					}
					if($email != ""){
						$contact_detail[$contact_count]['icon'] = "fa fa-envelope-o";
						$contact_detail[$contact_count]['text'] = $email;
						$contact_count ++;
					}
					if($hours != ""){
						$contact_detail[$contact_count]['icon'] = "fa fa-clock-o";
						$contact_detail[$contact_count]['text'] = $hours;
						$contact_count ++;
					}

					$total_contact = count($contact_detail);
						
					for($detail_i = 1; $detail_i <= $total_contact; $detail_i++){ ?>
						<div class="column<?php wope_var($total_contact);?>_1">
							<div class="contact-detail-box-item">
								<div class='contact-detail-box-icon'>
									<i class="<?php wope_var($contact_detail[$detail_i]['icon']); ?>"></i>
								</div>
								<div class='contact-detail-box-text'>
									<?php wope_var($contact_detail[$detail_i]['text']); ?>
								</div>
								<div class="cleared"></div>
							</div>
						</div>
					<?php } ?>
					<div class="cleared"></div>
				<?php } ?>
			</div>
			
			<?php
			break;
		case 'contact-form':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			
			$title 					= $wope_pb_option[$wope_pb_field.'1'];
			$layout 				= $wope_pb_option[$wope_pb_field.'2'];
			$label_position 		= $wope_pb_option[$wope_pb_field.'3'];
			$receive_email 			= $wope_pb_option[$wope_pb_field.'4'];
			$error_text 			= wope_get_html($wope_pb_option[$wope_pb_field.'5']);
			$succesful_text 		= wope_get_html($wope_pb_option[$wope_pb_field.'6']);
			$name_label 			= $wope_pb_option[$wope_pb_field.'7'];
			$email_label 			= $wope_pb_option[$wope_pb_field.'8'];
			$subject_label 			= $wope_pb_option[$wope_pb_field.'9'];
			$message_label 			= $wope_pb_option[$wope_pb_field.'10'];
			$button_label 			= $wope_pb_option[$wope_pb_field.'11'];
			
			$msg = '';
			$error = '';
			
			if(!empty($_POST['contact-submit'])){
			
				if(trim($_POST['contact-subject']) != ''){
					$subject = $_POST['contact-subject'];
				}else{
					$subject = "You received Email to  ".home_url('/');
				}
				
				if(trim($_POST['contact-name']) != '' and trim($_POST['contact-email']) != '' ){
					$header = "Content-type: text/html; charset=utf-8\r\nFrom: ".trim($_POST['contact-email'])."\r\nReply-to: ".trim($_POST['contact-email']);

					$content_header = "
						You received Email to  ".home_url('/').": <br>
						Name : ".trim($_POST['contact-name'])."<br>
						Email : ".trim($_POST['contact-email'])."<br>
						Content : <br>
					";

					//process textarea content
					$textarea = $_POST['contact-content'];
					$content_body = '';
				    $newarr = explode("\n",$textarea);
				    foreach($newarr as $str) {
				     	$content_body .= "<p>".$str."</p>";
				    }


					$message = $content_header.$content_body;

					mail( $receive_email, $subject,$message,$header);

					$msg  = $succesful_text;

				}else{
					$error = $error_text;
				}
			}
			?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<?php if(trim($title) != ''){?>
							
							<div class="section-widget-heading">
								<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
								
							</div>
						<?php }?>
						
						<?php if(!empty($msg)){?>
							<div class="info-box info-box-success info-box-color">
								<div class="info-box-icon"><i class="pe-7s-check"></i></div>
								<div class="info-box-content"><?php wope_var($msg);?></div>
								<div class="info-box-hide"><i class="pe-7s-close"></i></div>
								<div class="cleared"></div>
							</div>
						<?php } ?>
						
						<?php if(!empty($error)){?>
							<div class="info-box info-box-error info-box-color">
								<div class="info-box-icon"><i class="pe-7s-close-circle"></i></div>
								<div class="info-box-content"><?php wope_var($error);?></div>
								<div class="info-box-hide"><i class="pe-7s-close"></i></div>
								<div class="cleared"></div>
							</div>
						<?php } ?>
						
					</div>
				</div>
				<div class="cleared"></div>
				
				<?php if($layout == 1 ){ //full width?>
					<div class="column1">
						<div class="wrap-no-fullwidth">
							<form action="" method="post">
								<div class="contact-form">
									<div class="contact-name-field" >
										
										<input type="text" name="contact-name" value="" placeholder="<?php wope_var($name_label);?>" >
									</div>
									<div class="contact-email-field" >
										
										<input type="text" name="contact-email" value="" placeholder="<?php wope_var($email_label);?>" >
									</div>
									<div class="contact-subject-field" >
										
										<input type="text" name="contact-subject" value="" placeholder="<?php wope_var($subject_label);?>" >
									</div>
									
									<div class="contact-textarea" >
										
										<textarea rows="6" name="contact-content" placeholder="<?php wope_var($message_label);?>"  ></textarea>
									</div>
									<div class="contact-button content">
										<input type="submit" class="button normal-button" name="contact-submit" value="<?php wope_var($button_label);?>">
									</div>
								</div>
								<div class="cleared"></div>
							</form>
						</div>
					</div>
					<div class="cleared"></div>
				<?php }elseif($layout == 2){ //2 columns?>
					<div class="wrap-no-fullwidth">
					<form action="" method="post">
						<div class="contact-form">
							<div class="column2_1">
								<div class="contact-name-field" >
									
									<input type="text" name="contact-name" value="" placeholder="<?php wope_var($name_label);?>" >
								</div>
								<div class="contact-email-field" >
									
									<input type="text" name="contact-email" value="" placeholder="<?php wope_var($email_label);?>" >
								</div>
								<div class="contact-subject-field" >
									
									<input type="text" name="contact-subject" value="" placeholder="<?php wope_var($subject_label);?>" >
								</div>
							</div>
							<div class="column2_1">
								<div class="contact-textarea" >
									
									<textarea rows="5" name="contact-content" placeholder="<?php wope_var($message_label);?>" ></textarea>
								</div>
								<div class="contact-button content contact-button-full">
									<input type="submit" class="button normal-button" name="contact-submit" value="<?php wope_var($button_label);?>">
								</div>
							</div>
							<div class="cleared"></div>
						</div>
					</form>
					</div>
				<?php }else{?>
					
						
					<form action="" method="post">
						<div class="contact-form">
							<div class="column2_1">
								<div class="contact-name-field" >
									<input type="text" name="contact-name" value="" placeholder="<?php wope_var($name_label);?>" >
								</div>
							</div>
							<div class="column2_1">
								<div class="contact-email-field" >
									
									<input type="text" name="contact-email" value="" placeholder="<?php wope_var($email_label);?>" >
								</div>
							</div>
							<div class="cleared"></div>
							<div class="column1">
								<div class="contact-subject-field" >
									<input type="text" name="contact-subject" value="" placeholder="<?php wope_var($subject_label);?>" >
								</div>
								<div class="contact-textarea" >
									
									<textarea rows="4" name="contact-content" placeholder="<?php wope_var($message_label);?>" ></textarea>
								</div>
								<div class="contact-button content contact-button-full">
									<input type="submit" class="normal-button" name="contact-submit" value="<?php wope_var($button_label);?>">
								</div>
							</div>
						</div>
					</form>

					
					<div class="cleared"></div>
				<?php }?>
			<?php	
			break;
		case 'blogposts':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$style 				= $wope_pb_option[$wope_pb_field.'2'];
			$category 			= $wope_pb_option[$wope_pb_field.'3'];
			$row 				= $wope_pb_option[$wope_pb_field.'4'];
			$column 			= $wope_pb_option[$wope_pb_field.'5'];
			
			
			
			$total = $row*$column;
			$args = array(
				'posts_per_page' => $total,
				'post_type' => 'post',
			);
			
			if($category != 0){
				$args['cat'] = $category;
			}

			// The Query
			$wp_query = new WP_Query( $args );
				
			if ( $wp_query->have_posts() ) {
				$total_post = $wp_query->post_count;
				?>
				
				<?php if(trim($title) != ''){?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				</div>
				<div class="cleared"></div>
				<?php }?>

				<div class="blog">
					<?php 
					$args = array();
													
					$total = $row * $column;
					if($style == 4){
						$total = $row * 4;
					}
					
					if($category == 0){ //all categories
						// The Query
						$args = array(
							'post_type' => 'post',
							'posts_per_archive_page' => $total,
							'posts_per_page' => $total,
						);
					}else{
						$args = array(
							'post_type' => 'post',
							'posts_per_archive_page' => $total,
							'posts_per_page' => $total,
							'tax_query' => array(
								array(
									'taxonomy' 	=> 'category',
									'field'		=> 'id',
									'terms' => $category,
								)
							)
						);
					}
					
					// The Query
					$wp_query = new WP_Query( $args );
					
					$post_num = 1;
					$post_current = 1;
					$total_post = $wp_query->post_count; 

					$clear_div = '<div class="cleared"></div>';
					
					if($style == 0) { // grid 
					while ( $wp_query->have_posts() ) { $wp_query->the_post();
						if($post_num == $column){
							$column_last = 'column-last';
							$clear_div = '<div class="cleared"></div>';
							$post_num = 1;
						}else{
							$column_last = '';
							$clear_div = '';
							$post_num++;
						}
						$end_class = wope_get_end_class($post_current,$total_post,$column);
						$post_current++;				
					?>
						<div class="widget-column1-<?php echo esc_attr($column);?>">
							<div class="post-cell post-cell-grid <?php wope_var($end_class);?>">
								<div class="post-cell-thumb">
									<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('wope-thumb-grid');?></a>
								</div>
								<div class="post-cell-detail">
									<<?php wope_var($widget_title_tag);?> class="post-cell-title">
										<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
									</<?php wope_var($widget_title_tag);?>>	
									<div class="post-cell-meta">
										<span><?php wope_var(get_the_date('M j,Y'));?></span>
									</div>
									<div class="post-cell-button content">
										<a class="button small-button" href="<?php the_permalink(); ?>" ><?php esc_html_e('Read More','mega');?></a>
									</div>
								</div>
							</div>
						</div>
						<?php wope_var($clear_div);?>
					<?php } }else if($style == 1){ //list 
					while ( $wp_query->have_posts() ) { $wp_query->the_post();
						if($post_num == $column){
							$column_last = 'column-last';
							$clear_div = '<div class="cleared"></div>';
							$post_num = 1;
						}else{
							$column_last = '';
							$clear_div = '';
							$post_num++;
						}
						$end_class = wope_get_end_class($post_current,$total_post,$column);
						$post_current++;				
					?>
						<div class="widget-column1-<?php echo esc_attr($column);?>">
							<div class="post-cell <?php wope_var($end_class);?> post-cell-list">
								<div class="post-cell-thumb">
									<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('wope-thumb-small');?></a>
								</div>
								<div class="post-cell-detail">
									<<?php wope_var($widget_title_tag);?> class="post-cell-title">
										<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
									</<?php wope_var($widget_title_tag);?>>	
									<div class="post-cell-meta">
										<span><?php wope_var(get_the_date('M j,Y'));?></span>
									</div>
									<div class="post-cell-button content">
										<a class="button small-button" href="<?php the_permalink(); ?>" ><?php esc_html_e('Read More','mega');?></a>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>
						<?php wope_var($clear_div);?>
					<?php } ?>	
					<?php }else if($style == 2){ //list center 
						$count = 0;
						while ( $wp_query->have_posts() ) { $wp_query->the_post();
							$count ++;
							if($count%2){
								$position = 'left';
								$clear_div = "";
							}else{
								$position = 'right';
								$clear_div = "<div class='cleared'></div>";
							} 
							$end_class = wope_get_end_class($count,$total_post,2);
							?>
						<div class="widget-column1-2 post-list-center-<?php echo esc_attr($position);?>">
							<div class="post-cell <?php wope_var($end_class);?>">
								<div class="post-cell-thumb">
									<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('thumb-small');?></a>
								</div>
								<div class="post-cell-detail">
									<<?php wope_var($widget_title_tag);?> class="post-cell-title">
										<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
									</<?php wope_var($widget_title_tag);?>>	
									<div class="post-cell-meta">
										<span><?php wope_var(get_the_date('M j,Y'));?></span>
									</div>
									<div class="post-cell-button content">
										<a class="button small-button" href="<?php the_permalink(); ?>" ><?php esc_html_e('Read More','mega');?></a>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>	
						<?php wope_var($clear_div);?>
						<?php } ?>	
					<?php }else if($style == 3){  //list medium?>
						<?php while ( $wp_query->have_posts() ) { $wp_query->the_post();
							if($post_num == $column){
								$column_last = 'column-last';
								$clear_div = '<div class="cleared"></div>';
								$post_num = 1;
							}else{
								$column_last = '';
								$clear_div = '';
								$post_num++;
							}
							$end_class = wope_get_end_class($post_current,$total_post,$column);
							$post_current++;				
						?>
						<div class="widget-column1-<?php echo esc_attr($column);?>">
							<div class="post-cell <?php wope_var($end_class);?>  post-cell-medium">
								<div class="post-cell-thumb">
									<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('wope-thumb-medium');?></a>
								</div>
								<div class="post-cell-detail">
									<<?php wope_var($widget_title_tag);?> class="post-cell-title">
										<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
									</<?php wope_var($widget_title_tag);?>>	
									<div class="post-cell-meta">
										<span><?php wope_var(get_the_date('M j,Y'));?></span>
									</div>
									<div class="post-entry-content content">
										<?php the_excerpt(  ''  ); ?>
									</div>
									
								</div>
								<div class="cleared"></div>
							</div>
						</div>
						<?php wope_var($clear_div);?>
						<?php } ?>	
					<?php }else{ //masonry ?>
						<div class="grid">
						<?php while ( $wp_query->have_posts() ) { $wp_query->the_post();
							if($post_num == $column){
								$column_last = 'column-last';
								$clear_div = '<div class="cleared"></div>';
								$post_num = 1;
							}else{
								$column_last = '';
								$clear_div = '';
								$post_num++;
							} ?>
						<div class="widget-column1-<?php echo esc_attr($column);?> post-cell-masonry grid-item">
							<div class="post-cell">
								<div class="post-cell-thumb">
									<a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('wope-thumb-masonry');?></a>
								</div>
								<div class="post-cell-detail">
									<<?php wope_var($widget_title_tag);?> class="post-cell-title">
										<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
									</<?php wope_var($widget_title_tag);?>>	
									<div class="post-cell-meta">
										<span><?php wope_var(get_the_date('M j,Y'));?></span>
									</div>
									<div class="post-cell-button content">
										<a class="button small-button" href="<?php the_permalink(); ?>" ><?php esc_html_e('Read More','mega');?></a>
									</div>
								</div>
							</div>
						</div>
						<?php wope_var($clear_div);?>
					<?php } ?>	
					</div>
					<script>
					jQuery(document).ready(function(){
						imagesLoaded( document.querySelector('.grid'), function( instance ) {
						  jQuery('.grid').masonry({
							itemSelector : '.grid-item'
						  });
						});
					});
					</script>
					<?php } ?>						
					<?php wope_var($clear_div);?>
				</div>

			<div class="cleared"></div>
				
			<?php
			}
			
			// Reset Post Data
			wp_reset_postdata();
			break;
		case 'portfolio':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$taxonomy 			= $wope_pb_option[$wope_pb_field.'2'];
			$type 				= $wope_pb_option[$wope_pb_field.'3'];
			$style 				= $wope_pb_option[$wope_pb_field.'4'];
			$item_per_page 		= $wope_pb_option[$wope_pb_field.'5'];
			$column 			= $wope_pb_option[$wope_pb_field.'6'];
			$additions 			= $wope_pb_option[$wope_pb_field.'7'];


			$portfolio_container_style = "portfolio-container-style-$style";
	
			
			$portfolio_item_style = "portfolio-style-$style";
			
			include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			if(is_plugin_active('wope-portfolio/index.php')){
				
				$thumb_size = ($type == 1) ? 'wope-thumb-masonry' : 'wope-thumb-grid-portfolio' ;
				
				if($taxonomy == 0){ //all categories
					// The Query
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_archive_page' => $item_per_page,
						'posts_per_page' => $item_per_page,
					);
				}else{
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_archive_page' => $item_per_page,
						'posts_per_page' => $item_per_page,
						'tax_query' => array(
							array(
								'taxonomy' 	=> 'portfolio-category',
								'field'		=> 'id',
								'terms' => $taxonomy,
							)
						)
					);
				}
						
				if($additions == '2'){
					//get paginate
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args['paged'] = $paged;

				}
				
				
				$wp_query = new WP_Query( $args );
				
				if ( $wp_query->have_posts() ) { ?>
					<div class="column1">
						<?php if(trim($title) != ''){ ?>
								<div class="section-widget-heading">
									<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
								</div>
						<?php } ?>
					</div>	
					<?php if($additions == 1 && $type != 1 && $type != 2){ //filter 
						//get all current category
						while ( $wp_query->have_posts() ) { 
							$wp_query->the_post();
							$portfolio_categories = get_the_terms( get_the_ID() , 'portfolio-category' );
							if(is_array($portfolio_categories)){
								foreach($portfolio_categories as $each_category){
									$category_list[$each_category->term_id]['name'] = $each_category->name;
									$category_list[$each_category->term_id]['slug'] = $each_category->slug;
								}
							}
						}
						?>
						<div class="wrap">
							<ul class="filters">
								<li><span class="active" data-filter="*"><?php esc_html_e('View All','mega');?></span></li>
								<?php if(count($category_list) > 0){?>
									<?php foreach($category_list as $each_category){?>
										<li> <span data-filter=".<?php wope_var( $each_category['slug']);?>"><?php wope_var( $each_category['name']);?></span></li>
									<?php }?>
								<?php }?>
							</ul>
						</div>
						<div class="cleared"></div>
					<?php } ?>
					
					<div class="<?php wope_var($portfolio_container_style);?>">
						<?php if($type == 0){ //grid 
							if($additions == 1){ //filter ?>	
							<div class="portfolio-grid">
								<div class="portfolio-filter-container">		
								<?php 
								while ( $wp_query->have_posts() ) { 
									$wp_query->the_post();
									//make category string
									$categories = get_the_terms( get_the_ID(), 'portfolio-category' );
									$category_string = "";
									
									if(count($categories) > 0){
										foreach($categories as $each_category){
											$category_string .= $each_category->slug." ";
										}
									}
									
									$portfolio_cat_links = wope_get_terms_links( get_the_ID(), 'portfolio-category');
									
									?>
									<div class="portfolio_filter_item <?php wope_var($portfolio_item_style);?> <?php wope_var( $category_string);?> portfolio_filter<?php wope_var($column);?>">
										<div class="portfolio-cell">
											<div class="portfolio-cell-thumb">
												<div class="portfolio-cell-bg"></div>
												<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
												<a href="<?php the_permalink(); ?>">
													<?php if ( has_post_thumbnail() ) {?>
														<?php the_post_thumbnail( $thumb_size );?>
													<?php }?>	
												</a>
											</div>
											<div class="portfolio-cell-data">
												<div class="portfolio-cell-title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</div>
												<div class="portfolio-cell-categories"><?php wope_var(implode(' / ',$portfolio_cat_links));?></div>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
						<?php }else if($additions == 2 || $additions == 0){ // not filter , suitable for paginate
							$post_num = 1;
							$post_current = 1;
							$total_post = $wp_query->post_count;
							
							while ( $wp_query->have_posts() ) {
								$wp_query->the_post();
								if($post_num == $column){
									$column_last = 'column-last';
									$clear_div = '<div class="cleared"></div>';
									$post_num = 1;
								}else{
									$column_last = '';
									$clear_div = '';
									$post_num++;
								}
								$end_class = wope_get_end_class($post_current,$total_post,$column);
								$post_current++;
								
								$portfolio_cat_links = wope_get_terms_links(get_the_ID(), 'portfolio-category');
								if(!is_array($portfolio_cat_links)){
									$portfolio_cat_links = array();
								}
							?>
							
							<div class="<?php wope_var($portfolio_item_style);?> column<?php wope_var($column);?>_1 <?php wope_var($column_last);?>">
								<div class="portfolio-cell <?php wope_var($end_class);?>">
									<div class="portfolio-cell-thumb">
										<div class="portfolio-cell-bg"></div>
										<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {?>
												<?php the_post_thumbnail( $thumb_size );?>
											<?php }?>	
										</a>
									</div>
									<div class="portfolio-cell-data">
										<div class="portfolio-cell-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
										<div class="portfolio-cell-categories"><?php wope_var(implode(' / ',$portfolio_cat_links));?></div>
									</div>
								</div>
							</div>
							<?php wope_var($clear_div);?>
							<?php } ?>
							<div class="cleared"></div>	
						<?php } ?>
					<?php }else if($type == 1){ //masonry ?>
						<div class="portfolio-masonry">	
							<?php $post_num = 1;
							$post_current = 1;
							$total_post = $wp_query->post_count;
							
							while ( $wp_query->have_posts() ) {
								$wp_query->the_post();
								if($post_num == $column){
									$column_last = 'column-last';
									$clear_div = '<div class="cleared"></div>';
									$post_num = 1;
								}else{
									$column_last = '';
									$clear_div = '';
									$post_num++;
								}
								$end_class = wope_get_end_class($post_current,$total_post,$column);
								$post_current++;
								
								$portfolio_cat_links = wope_get_terms_links(get_the_ID(), 'portfolio-category');
								if(!is_array($portfolio_cat_links)){
									$portfolio_cat_links = array();
								}
							?>
							
							<div class="masonry-item <?php wope_var($portfolio_item_style);?> column<?php wope_var($column);?>_1 <?php wope_var($column_last);?>">
								<div class="portfolio-cell <?php wope_var($end_class);?>">
									<div class="portfolio-cell-thumb">
										<div class="portfolio-cell-bg"></div>
										<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {?>
												<?php the_post_thumbnail( $thumb_size);?>
											<?php }?>	
										</a>
									</div>
									<div class="portfolio-cell-data">
										<div class="portfolio-cell-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
										<div class="portfolio-cell-categories"><?php wope_var(implode(' / ',$portfolio_cat_links));?></div>
									</div>
								</div>
							</div>
							<?php wope_var($clear_div);?>
							<?php } ?>
						</div>	
						<div class="cleared"></div>	
						<script>
						jQuery(document).ready(function(){
							imagesLoaded( document.querySelector('.portfolio-masonry'), function( instance ) {
							  jQuery('.portfolio-masonry').masonry({
								itemSelector : '.masonry-item'
							  });
							});
						});
						</script>
					<?php } ?>
					</div>
					<div class="cleared"></div>

					<?php if($additions == 2){ //paginate ?>
						<?php if($wp_query->max_num_pages > 1){ ?>
							<div class="wrap">
								<div class="paginate paginate-portfolio">
									<?php wope_custom_paginate_links( $paged); ?>
								</div>
							</div>
						<div class="cleared"></div>
						<?php } ?>
					<?php }?>
				<?php }
				}


			break;
		case 'gallery':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 			= $wope_pb_option[$wope_pb_field.'2'];
			$click 			= $wope_pb_option[$wope_pb_field.'3'];
			$column			= $wope_pb_option[$wope_pb_field.'4'];
			$align 			= $wope_pb_option[$wope_pb_field.'5'];
			$margin 		= $wope_pb_option[$wope_pb_field.'6'];
			
			$gallery_align = "gallery-".$align;
			$gallery_margin = "";
			$gallery_container = '';
			
			if($margin != ""){
				$gallery_margin = "margin-top:" . $margin . "px";
			}
			
			if($type == 4){
				$gallery_container = "gallery-demo-container";
			}
			?>
			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
				
				<div class="gallery <?php wope_var($gallery_container);?>">
					<?php if($type == 0) { //image single?>
						<?php foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){?> 
							<?php if($click == 0){ //lightbox?>
								<div class="gallery-image-lightbox <?php wope_var($gallery_align);?> <?php echo esc_attr($end_class);?>" style="<?php wope_var($gallery_margin);?>">
									<div class="gallery-image-bg"></div>
									<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]) != ''){?>
										<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
										<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" class="gallery-image-icon" rel="magnific-popup" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]);?>"><i class="pe-7s-search"></i></a>
									<?php }else{?>
										<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
										<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" class="gallery-image-icon" rel="magnific-popup" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]);?>"><i class="pe-7s-search"></i></a>
									<?php }?>
								</div>
							<?php }else{?>
								<div class="<?php wope_var($gallery_align);?> <?php echo esc_attr($end_class);?>" style="<?php wope_var($gallery_margin);?>">
									<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]) != ''){?>
										<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>">
											<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
										</a>
									<?php }else{?>
										<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
									<?php }?>
									<div class="cleared"></div>
								</div>
							<?php }?>
						<?php }?>
					<?php }else if($type == 1) { //image grid?>
						<?php
							$element_count = 1;
							$element_current = 1;
							$total_element = count($wope_pb_option[$wope_pb_field.'_gallery_main_image']);
															
							foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){ 
							if($element_count == $column){
								$clear_div = '<div class="cleared"></div>';
								$column_last = 'column-last';
								$element_count = 1;
							}else{
								$clear_div = '';
								$column_last = '';
								$element_count ++;
							}
							
							$end_class = wope_get_end_class($element_current,$total_element,$column);
							$element_current++;
						?>
						<div class="percent_column<?php wope_var($column);?> <?php wope_var($column_last);?>">
							<div class="gallery-grid">
								<?php if($click == 0){?>
									<div class="gallery-image-lightbox">
										<div class="gallery-image-bg"></div>
										<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]) != ''){?>
											<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
											<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>" class="gallery-image-icon" rel="magnific-popup" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]);?>"><i class="pe-7s-search"></i></a>
										<?php }else{?>
											<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
											<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" class="gallery-image-icon" rel="magnific-popup" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>"><i class="pe-7s-search"></i></a>
										<?php }?>
									</div>
								<?php }else{?>
									<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]) != ''){?>
										<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>">
											<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
										</a>
									<?php }else{?>
										<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
									<?php }?>
								<?php }?>
							</div>
						</div>
						<?php wope_var($clear_div);?>
						<?php }?>
					<?php }else if($type == 2) { //image slider?>
						<div class="flexslider">
							<ul class="slides">
							<?php foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){?> 
								<li>
									<?php if($click == 0){?>

										<div class="gallery-image-lightbox">
											<div class="gallery-image-bg"></div>
											<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]) != ''){?>
												<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
												<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" class="gallery-image-icon" rel="magnific-popup[pp_gal]" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_full_image'][$key]);?>"><i class="fa fa-search"></i></a>
											<?php }else{?>
												<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
												<a title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" class="gallery-image-icon" rel="magnific-popup[pp_gal]" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>"><i class="fa fa-search"></i></a>
											<?php }?>
										</div>
									<?php }else{?>
										<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]) != ''){?>
											<a href="<?php echo esc_url($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>">
												<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
											</a>
										<?php }else{?>
											<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
										<?php }?>
									<?php }?>
								</li>
							<?php }?>
							</ul>
						</div>
					<?php }else if($type == 3) { //image thumb ?>
						<div class="gallery-thumb" data-changing="no" data-width="0">
							<div class="gallery-thumb-main">
								<?php $first_class = 'gallery-current';
								foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){ ?>
										<div class="gallery-thumb-each <?php wope_var( $first_class);?> gallery-main<?php wope_var($key);?>" data-height="0"  >
											
											<?php if($click == 0){?>
												<div class="gallery-image-lightbox">
													<div class="gallery-image-bg"></div>
													<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
													<a class="gallery-image-icon" rel="magnific-popup[pp_gal]" href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>"><i class="pe-7s-search"></i></a>
												</div>
											<?php }else{?>
												<?php if(trim($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]) != ''){?>
													<a href="<?php echo esc_url($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>">
														<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
													</a>
												<?php }else{?>
													<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
												<?php }?>
											<?php }?>
										</div>
										<?php $first_class = '';?>
									
								<?php }?>
							</div>
							<div class="gallery-thumb-bottom">
								<?php
								$element_count = 1;							
								foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){ 
								if($element_count == $column){
									$clear_div = '<div class="cleared"></div>';
									$column_last = 'column-last';
									$element_count = 1;
								}else{
									$clear_div = '';
									$column_last = '';
									$element_count ++;
								}
								?>
								<div class="gallery-thumb-column gallery_percent_column<?php wope_var($column);?> <?php wope_var($column_last);?>">
									<img  title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
									<div data-number="<?php wope_var($key);?>" class="gallery-thumb-border"></div>
								</div>
								<?php wope_var($clear_div);?>
								<?php }?>
								<div class="cleared"></div>
							</div>
						</div>
					<?php }else{ //image demo?>
					<?php
						$element_count = 1;							
						foreach($wope_pb_option[$wope_pb_field.'_gallery_main_image'] as $key=> $each_field_main_image){ 
							if($element_count == $column){
								$clear_div = '<div class="cleared"></div>';
								$column_last = 'column-last';
								$element_count = 1;
							}else{
								$clear_div = '';
								$column_last = '';
								$element_count ++;
							}
						?>
						<div class="gallery-demo-item widget-column1-<?php wope_var($column);?> <?php wope_var($column_last);?> <?php wope_var($gallery_align);?>">
							
							<?php if($wope_pb_option[$wope_pb_field.'_gallery_url'][$key] != ""){ ?>
								<div class="gallery-demo-image">
									<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>"><img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>"></a>
								</div>
								<div class="gallery-demo-name">
									<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_url'][$key]);?>"><?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?></a>
								</div>
							<?php }else{ ?>
								<div class="gallery-demo-image">
									<img title="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_main_image'][$key]);?>">
								</div>
								<div class="gallery-demo-name">
									<?php wope_var($wope_pb_option[$wope_pb_field.'_gallery_name'][$key]);?>
								</div>
							<?php }?>
							
						</div>
						<?php wope_var($clear_div);?>
						<?php }?>
						<div class="cleared"></div>
					<?php } ?>
					</div>
				</div>
				<div class="cleared"></div>
			<?php
			break;
		case 'icon-list':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$icon_style 		= $wope_pb_option[$wope_pb_field.'2'];
			$border 			= $wope_pb_option[$wope_pb_field.'3'];
			$icon_color		 	= $wope_pb_option[$wope_pb_field.'4'];
			$text_color		 	= $wope_pb_option[$wope_pb_field.'5'];
			
			$icon_style_class 	= ($icon_style != '') 		? 'icon-'.$icon_style 	: '' ; 
			$border_class 		= ($border != '') 		? 'border-'.$border 		: '' ; 
			$icon_color_class 	= ($icon_color != '') 	? 'icon-color-'.$icon_color 	: '' ; 
			$text_color_class 	= ($text_color != '') 	? 'text-color-'.$text_color 	: '' ; 
			
			?>
			
			<?php if(trim($title) != ''){?>
			<div class="column1">
				<div class="wrap-no-fullwidth">
					<div class="section-widget-heading">
						<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
			<?php }?>
			
			<div class="column1 content">
				<ul class="custom-list <?php wope_var($icon_style_class.' '.$border_class.' '.$icon_color_class.' '.$text_color_class);?>">
					<?php foreach($wope_pb_option[$wope_pb_field.'_icon-content'] as $key=> $each_field_name){ ?>
						<li>
							<?php if(trim($wope_pb_option[$wope_pb_field.'_icon-link'][$key]) != ''){?>
								<?php if(trim($wope_pb_option[$wope_pb_field.'_icon-font'][$key]) != ''){?>
									<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_icon-font'][$key]);?>"></i>
								<?php }?>
								<a href="<?php echo esc_url($wope_pb_option[$wope_pb_field.'_icon-link'][$key]);?>">		
									<?php wope_var($wope_pb_option[$wope_pb_field.'_icon-content'][$key]);?>
								</a>				
							<?php }else{?>
								<?php if(trim($wope_pb_option[$wope_pb_field.'_icon-font'][$key]) != ''){?>
									<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_icon-font'][$key]);?>"></i>
								<?php }?>
								<?php wope_var($wope_pb_option[$wope_pb_field.'_icon-content'][$key]);?>
							<?php }?>
						</li>
					<?php }?>	
				</ul>
			</div>
			
			<?php
			break;
		case 'icon-box':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$direction 			= $wope_pb_option[$wope_pb_field.'2'];
			$media		 		= $wope_pb_option[$wope_pb_field.'3'];
			$align				= $wope_pb_option[$wope_pb_field.'4'];
			$inline				= $wope_pb_option[$wope_pb_field.'5'];
			$column				= $wope_pb_option[$wope_pb_field.'6'];
			$color				= $wope_pb_option[$wope_pb_field.'7'];

			$icon_box_style = "single-icon-$color-style";
			if ($media == 2){
				$icon_box_style = "icon-box-style";
			}else if ($media == 3){
				$icon_box_style = "icon-box-image-style";
			}else if ($media == 4){
				//$icon_box_style = "";
				$icon_box_style = "icon-box-image-box-style";
			}
			
			$icon_box_align = "icon-box-".$align;
			?>
			
			
			<?php if(trim($title) != ''){?>
			<div class="column1">
				<div class="wrap-no-fullwidth">
					<div class="section-widget-heading">
						<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
			<?php }?>

			<?php if($direction == 0) { //horizontal?>
				<div class="icon-box">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_feature-name']);
					
					foreach($wope_pb_option[$wope_pb_field.'_feature-name'] as $key=> $each_field_name){
						if($element_count == $column){
							$clear_div = '<div class="cleared"></div>';
							$column_last = 'column-last';
							$element_count = 1;
						}else{
							$clear_div = '';
							$column_last = '';
							$element_count ++;
						}
						$end_class = wope_get_end_class($element_current,$total_element,$column);
						$element_current++;
						
						
						?>
						<div class="widget-column1-<?php echo esc_attr($column);?> <?php wope_var($column_last);?>  icon-box-horizontal  <?php echo esc_attr($end_class);?>">
							<div class="icon-box-item  <?php wope_var($icon_box_style);?> <?php wope_var($icon_box_align);?> <?php echo esc_attr($end_class);?>">
								<?php if($inline == 0) { ?>
									<?php if($media == 3 || $media == 4) { ?>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-image'][$key]){ ?>
											<div class="icon-box-image-container">
												<img class="icon-box-image" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php if($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]){ ?>
													<img class="icon-box-image-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php }else{ ?>
													<img class="icon-box-image-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php } ?>
											</div>
										<?php } ?>
										<div class="icon-box-title icon-box-title-image">
											<?php wope_var($each_field_name);?>
										</div>
									<?php } else { ?>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]){ ?>
											<div class="icon-box-icon">
												<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]);?>"></i>
											</div>
										<?php } ?>
										<div class="icon-box-title">
											<?php wope_var($each_field_name);?>
										</div>
									<?php } ?>
								<?php }else{ ?>
									<div class="icon-box-inline">
										<?php if($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]){ ?>
											<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]);?>"></i>
										<?php } ?>
										<?php wope_var($each_field_name);?>
									</div>
								<?php } ?>
								<div class="icon-box-content">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_feature-content'][$key]));	?>
								</div>
								<?php if($wope_pb_option[$wope_pb_field.'_feature-button-name'][$key]){ ?>
									<div class="icon-box-button">
										<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-button-link'][$key]);?>"><?php wope_var($wope_pb_option[$wope_pb_field.'_feature-button-name'][$key]);?></a>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } //end foreach ?>
				</div>	<!-- end icon box -->
			<?php }else{ //vertical ?>
				<div class="column1">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_feature-name']);
				
					foreach($wope_pb_option[$wope_pb_field.'_feature-name'] as $key=> $each_field_name){
						if($element_count == $column){
							$clear_div = '<div class="cleared"></div>';
							$column_last = 'column-last';
							$element_count = 1;
						}else{
							$clear_div = '';
							$column_last = '';
							$element_count ++;
						}
						$end_class = wope_get_end_class($element_current,$total_element,$column);
						$element_current++;
						?>
						
							
							<div class="icon-box-vertical">
								<div class="icon-box-item  <?php wope_var($icon_box_style);?> <?php wope_var($icon_box_align);?>">
									<?php if($media == 3) { ?>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-image'][$key]){ ?>
											<div class="icon-box-image-container">
												<img class="icon-box-image" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php if($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]){ ?>
													<img class="icon-box-image-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php }else{ ?>
													<img class="icon-box-image-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php } ?>
											</div>
										<?php } ?>
									<?php } else if($media == 4) { ?>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-image'][$key]){ ?>
											<div class="icon-box-image-box-container">
												<img class="icon-box-image-box" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php if($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]){ ?>
													<img class="icon-box-image-box-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image-hover'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php }else{ ?>
													<img class="icon-box-image-box-hover" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-image'][$key]);?>" alt="<?php wope_var($each_field_name);?>"/>
												<?php } ?>
											</div>
										<?php } ?>	
									<?php } else { ?>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]){ ?>
											<div class="icon-box-icon">
												<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-font-awesome'][$key]);?>"></i>
											</div>
										<?php } ?>
									<?php } ?>
									<div class="icon-box-detail icon-box-image-detail">
										<div class="icon-box-title">
											<?php wope_var($each_field_name);?>
										</div>
										<div class="icon-box-content">
											<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_feature-content'][$key]));	?>
										</div>
										<?php if($wope_pb_option[$wope_pb_field.'_feature-button-name'][$key]){ ?>
											<div class="icon-box-button">
												<a href="<?php wope_var($wope_pb_option[$wope_pb_field.'_feature-button-link'][$key]);?>"><?php wope_var($wope_pb_option[$wope_pb_field.'_feature-button-name'][$key]);?></a>
											</div>
										<?php } ?>
									</div>
									<div class="cleared"></div>
								</div>
							</div>
							
						<?php }//end foreach ?>

					</div>	<!-- end icon box -->
					<div class="cleared"></div>	
				<?php }?>
			<?php
			break;
		case 'progress':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title			= $wope_pb_option[$wope_pb_field.'1'];
			$type			= $wope_pb_option[$wope_pb_field.'2'];
			$column			= $wope_pb_option[$wope_pb_field.'3'];
			
			$color_options 		= get_option('wope-color');
			$highlight_color 	= $color_options['highlight-color'];
			?>
			
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
				
				<div class="progress">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_progress_name']);
													
					foreach($wope_pb_option[$wope_pb_field.'_progress_name'] as $key=> $each_field_name){ 
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					
					$end_class = wope_get_end_class($element_current,$total_element,$column);
					$element_current++;
														
					?>
						<div class="widget-column1-<?php echo esc_attr($column);?> <?php wope_var($column_last);?>">
							<?php if($type == 0){ ?>
							<div class="progress-item <?php echo esc_attr($end_class);?>">
								<div class="progress-top">
									<div class="progress-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_progress_name'][$key]);?>
									</div>
									<div class="progress-value">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_progress_value'][$key]);?>%
									</div>
									<div class="cleared">
									</div>
								</div>
								<div class="progress-bottom">
									<div class="progress-background">
										<div class="progress-current" style="width: <?php wope_var($wope_pb_option[$wope_pb_field.'_progress_value'][$key]);?>%">
										</div>
									</div>
								</div>
							</div>
							<?php }else{ ?>
							<div class="progress-pie-chart-item <?php echo esc_attr($end_class);?>">
								<div class="progress-pie-chart">
									<span class="progress-value"><?php wope_var($wope_pb_option[$wope_pb_field.'_progress_value'][$key]);?>%</span>
									<canvas class="progress-canvas" width="200" height="200" data-percent="<?php wope_var($wope_pb_option[$wope_pb_field.'_progress_value'][$key]);?>" data-color="<?php wope_var($highlight_color); ?>"></canvas>
								</div>
								<div class="progress-name">
									<?php wope_var($wope_pb_option[$wope_pb_field.'_progress_name'][$key]);?>
								</div>
							</div>
							<?php } ?>	
						</div>
						<?php wope_var($clear_div);?>
					<?php } ?>
				</div>
			<div class="cleared"></div>
			<?php
			break;
		case 'process':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title			= $wope_pb_option[$wope_pb_field.'1'];
			$style			= $wope_pb_option[$wope_pb_field.'2'];
			$column			= $wope_pb_option[$wope_pb_field.'3'];
			$current		= $wope_pb_option[$wope_pb_field.'4'];
			
			$process_container = 'process_container_' . $style;
			$process_style = 'process_style_' . $style;
			if(trim($title) != ''){?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				</div>
				<div class="cleared"></div>
			<?php }?>
				
				<div class="process <?php wope_var($process_container); ?>">
				<div class="process_row">
					<?php 
					$element_count = 1;
					$element_current = 1;
					$total_element = count($wope_pb_option[$wope_pb_field.'_process_name']);
													
					foreach($wope_pb_option[$wope_pb_field.'_process_name'] as $key=> $each_field_name){ 
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						if($style == 3){
							$clear_div = '<div class="cleared"></div></div>';
						}
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					
					$end_class = wope_get_end_class($element_current,$total_element,$column);
														
					?>
						<?php if($style == 1){ ?>
						<div class="widget-column1-<?php echo esc_attr($column);?> <?php wope_var($column_last);?>">
							<div class="process-item <?php echo esc_attr($end_class);?> <?php echo esc_attr($process_style);?>">
								<div class="process-left">
									<div class="process-number">
										<?php wope_var($element_current);?>
									</div>
								</div>
								<div class="process-right">
									<div class="process-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_process_name'][$key]);?>
									</div>
									<div class="process-content content">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_process_content'][$key]));?>
									</div>
									<div class="cleared"></div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>	
						<?php }else if($style == 2){ 
							if($element_current%2){
								$process_step = "process_odd";
							}else{
								$process_step = "process_even";
							}
							
							$process_last = "";
							if($element_current == $total_element){
								$process_last = "process_last";
							}
						?>
						<div class="process_cell percent_column<?php echo esc_attr($column);?> <?php wope_var($column_last);?> <?php echo esc_attr($process_step);?>">
							<div class="process-item <?php echo esc_attr($end_class);?> <?php echo esc_attr($process_style);?> <?php echo esc_attr($process_step);?> <?php echo esc_attr($process_last);?>">
								<div class="process-arrow"></div>
								<div class="process-top">
									<div class="process-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_process_name'][$key]);?>
									</div>
								</div>
								<div class="process-bottom">
									<div class="process-number">
										<?php wope_var($element_current);?>
									</div>
									<div class="process-content content">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_process_content'][$key]));?>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>	
						<?php }else{ 
							if($element_current <= $current){
								$process_active = "process_active";
							}else{
								$process_active = "";
							}
							
							$process_last = "";
							if($element_current == $total_element){
								$process_last = "process_last";
							}
						?>
						<div class="process_cell percent_column<?php echo esc_attr($column);?> <?php wope_var($column_last);?> <?php echo esc_attr($process_active);?>">
							<div class="process-item <?php echo esc_attr($end_class);?> <?php echo esc_attr($process_style);?> <?php echo esc_attr($process_active);?> <?php echo esc_attr($process_last);?> process-tab-<?php wope_var($element_current);?>">
								<div class="process-arrow"></div>
								<div class="process-top">
									<div class="process-number">
										<?php wope_var($element_current);?>
									</div>
								</div>
								<div class="process-bottom">
									<div class="process-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_process_name'][$key]);?>
									</div>
								</div>
								<span class="process-tab-id"><?php wope_var($element_current);?></span>
								<div class="cleared"></div>
							</div>
						</div>	
						<?php } ?>
						<?php 
							wope_var($clear_div);
							$element_current++;
						?>
					<?php } ?>
					
					<?php if($style == 3){
						
						$element_current = 1;
						foreach($wope_pb_option[$wope_pb_field.'_process_name'] as $key=> $each_field_name){ 
						if($element_current == $current){
							$process_active = "process_content_active";
						}else{
							$process_active = "";
						}
						
						?>
							<div class="process-content content process-content-<?php wope_var($element_current);?> <?php wope_var($process_active);?>">
								<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_process_content'][$key]));?>
							</div>	
						<?php $element_current++; } ?>	
					<?php }?>
					<div class="cleared"></div>
				
					</div></div>
				
				<div class="cleared"></div>
			<?php
			break;
		case 'info-box':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$style 				= $wope_pb_option[$wope_pb_field.'2'];
			$type 				= $wope_pb_option[$wope_pb_field.'3'];
			$content 			= wope_get_html($wope_pb_option[$wope_pb_field.'4']);

			if($type == 'general'){
				$info_box_icon = 'pe-7s-info';
			}else if($type == 'step'){
				$info_box_icon = 'pe-7s-right-arrow';
			}else if($type == 'note'){
				$info_box_icon = 'pe-7s-plus';
			}else if($type == 'success'){
				$info_box_icon = 'pe-7s-check';
			}else if($type == 'alert'){
				$info_box_icon = 'pe-7s-less';			
			}else{
				$info_box_icon = 'pe-7s-close-circle';
			}
			?>
				<div class="column1">
					<div class="info-box info-box-<?php wope_var($style);?> info-box-<?php wope_var($type);?>">
						<div class="info-box-icon"><i class="<?php wope_var($info_box_icon);?>"></i></div>
						<div class="info-box-content"><?php wope_var($content);?></div>
						<div class="info-box-hide"><i class="pe-7s-close"></i></div>
						<div class="cleared"></div>
					</div>
				</div>
				<div class="cleared"></div>
			<?php
			break;
		case 'milestones':
			$wope_pb_field 			= 'widget'.$wope_total_widget.'_field';
			$title 				= $wope_pb_option[$wope_pb_field.'1'];
			$column 			= $wope_pb_option[$wope_pb_field.'2'];
			

			?>
			
			
			<?php if(trim($title) != ''){?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				</div>
				<div class="cleared"></div>
			<?php }?>
				
			<div class="milestones-box">
				
				<?php
				$element_count = 1;
				$element_current = 1;
				$total_element = count($wope_pb_option[$wope_pb_field.'_milestone-name']);
					
				foreach($wope_pb_option[$wope_pb_field.'_milestone-name'] as $key=> $each_field_name){
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					
					$end_class = wope_get_end_class($element_current,$total_element,$column,'minestone-row-bottom');
					$element_current++;
				?>
					<div class="widget-column1-<?php wope_var($column);?> <?php wope_var($column_last);?> <?php wope_var($end_class);?>">	
						<div class="milestone-item">
								<div class="milestone-number">
									<?php if($wope_pb_option[$wope_pb_field.'_milestone-icon'][$key]){ ?>
										<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_milestone-icon'][$key]);?>"></i>
									<?php } ?>
									<?php wope_var($wope_pb_option[$wope_pb_field.'_milestone-number'][$key]);?>
								</div>
								<div class="milestone-name">
									<?php wope_var($wope_pb_option[$wope_pb_field.'_milestone-name'][$key]);?>
								</div>
								
							</div>
					</div>
					<?php wope_var($clear_div);?>
				<?php }?>
				<div class="cleared"></div>
				
			</div>
		
		<?php
			break;
		case 'team':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$style 			= $wope_pb_option[$wope_pb_field.'2'];
			$column 		= $wope_pb_option[$wope_pb_field.'3'];
			
			?>
			
			<?php if(trim($title) != ''){?>
				<div class="column1">
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>	
				</div>
				<div class="cleared"></div>
			<?php }?>
			
			<?php
			
			$element_count = 1;
			$element_in_row = 1;
			$total_element = count($wope_pb_option[$wope_pb_field.'_team-name']);
			
			foreach($wope_pb_option[$wope_pb_field.'_team-name'] as $key=> $each_field_name){
				if($element_in_row == $column){
					$clear_div = '<div class="cleared"></div>';
					$column_last = 'column-last';
					$element_in_row = 1;
				}else{
					$clear_div = '';
					$column_last = '';
					$element_in_row ++;
				}


				$end_class = wope_get_end_class($element_count,$total_element,$column);
				$element_count++;
				?>
				<div class="widget-column1-<?php wope_var($column);?> <?php wope_var($column_last);?>">	
					<div class="team-item <?php wope_var($end_class);?> team-style-<?php wope_var($style);?>">
						<?php if($style == 1){ ?>
							<div class="team-thumb">
								<img alt="<?php wope_var($wope_pb_option[$wope_pb_field.'_team-name'][$key]);?>" src="<?php wope_var($wope_pb_option[$wope_pb_field.'_team-image'][$key]);?>">
							</div>
							<div class="team-detail">
								<div class="team-heading">
									<?php if(trim($wope_pb_option[$wope_pb_field.'_team-image'][$key]) != ''){?>
										<div class="team-sub-name">
											<?php wope_var($wope_pb_option[$wope_pb_field.'_team-sub-name'][$key]);?>
										</div>
									<?php }?>
									<div class="team-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_team-name'][$key]);?>
									</div>
									
								</div>
								<div class="team-content">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_team-content'][$key]));	?>
								</div>
								<?php if($wope_pb_option[$wope_pb_field.'_team-social'][$key]) { ?>
									<div class="team-socials">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_team-social'][$key]));	?>
									</div>
								<?php } ?>
							</div>
						<?php }else{ ?>
							<div class="team-thumb image-circle" style="background-image: url(<?php wope_var($wope_pb_option[$wope_pb_field.'_team-image'][$key]);?>)">
							</div>
							<div class="team-detail">
								<div class="team-heading">
									<div class="team-name">
										<?php wope_var($wope_pb_option[$wope_pb_field.'_team-name'][$key]);?>
									</div>
									<?php if(trim($wope_pb_option[$wope_pb_field.'_team-image'][$key]) != ''){?>
										<div class="team-sub-name">
											<?php wope_var($wope_pb_option[$wope_pb_field.'_team-sub-name'][$key]);?>
										</div>
									<?php }?>
								</div>
							</div>
						<?php } ?>
					</div>		
				</div>	
				<?php wope_var($clear_div);?>
			<?php }
			break;
		case 'google-map':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$embed_code 		= html_entity_decode($wope_pb_option[$wope_pb_field.'1']);
			$map_height 		= $wope_pb_option[$wope_pb_field.'2'];
			?>
				<div class="fullable-column">
					<div class="google-map-container" style="height:<?php wope_var( $map_height);?>px"><?php wope_var($embed_code);?></div>
				</div>
			<?php
			break;
		case 'woocommerce':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 			= $wope_pb_option[$wope_pb_field.'2'];
			$category		= $wope_pb_option[$wope_pb_field.'3'];
			$column 		= $wope_pb_option[$wope_pb_field.'4'];
			$row 			= $wope_pb_option[$wope_pb_field.'5'];
			$orderby 		= $wope_pb_option[$wope_pb_field.'6'];
			$order 			= $wope_pb_option[$wope_pb_field.'7'];
			$per_page		= $row * $column;
			
			$shortcode = '[recent_products per_page="6" columns="3"]';

			switch($type){
				case 'recent_products':
					$shortcode = '[recent_products per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
					break;
				case 'featured_products':
					$shortcode = '[featured_products per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
					break;
				case 'product_category':
					$shortcode = '[product_category category="'.$category.'" per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
					break;
				case 'sale_products':
					$shortcode = '[sale_products per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
					break;
				case 'best_selling_products':
					$shortcode = '[best_selling_products per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
				case 'top_rated_products':
					$shortcode = '[top_rated_products per_page="'.$per_page.'" columns="'.$column.'" orderby="'.$orderby.'" order="'.$order.'" ]';
					break;
			}

			
			?>

			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
			</div>

			<div class="column1">
				<?php echo do_shortcode( $shortcode);?>
			</div>

			<?php
			break;
		case 'layer-slider':
			$wope_pb_field 	= 'widget'.$wope_total_widget.'_field';
			$content 	= wope_get_html($wope_pb_option[$wope_pb_field.'1']);
			
			?>
				<div class="column1">
					
					<div class="content content-box-content">
						<?php wope_var($content);?>
					</div>
					
				</div>
				<div class="cleared"></div>
			<?php
			break;
		case 'timeline':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			
			?>
			
			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
				
				<div class="timeline-container">
					<?php foreach($wope_pb_option[$wope_pb_field.'_timeline-title'] as $key=> $each_field_name){ ?>
						<div class="timeline-item">
							<?php if($wope_pb_option[$wope_pb_field.'_timeline-image'][$key] != ""){ ?>
								<div class="timeline-image">
									<img src="<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-image'][$key]);?>" title="<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-title'][$key]);?>" alt="<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-title'][$key]);?>" />
								</div>
								<div class="timeline-detail">
									<div class="timeline-title">
										<div class="timeline-year">
											<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-time'][$key]);?>
										</div>
										<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-title'][$key]);?>
									</div>
									<div class="timeline-content">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_timeline-content'][$key]));?>
									</div>
								</div>
								<div class="cleared"></div>
							<?php }else{ ?>
								<div class="timeline-detail timeline-detail-full">
									<div class="timeline-title">
										<div class="timeline-year">
											<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-time'][$key]);?>
										</div>
										<?php wope_var($wope_pb_option[$wope_pb_field.'_timeline-title'][$key]);?>
									</div>
									<div class="timeline-content">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_timeline-content'][$key]));?>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
				
			</div>
			<div class="cleared"></div>
			<?php
			break;
		case 'testimonial':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 			= $wope_pb_option[$wope_pb_field.'2'];
			$column 		= $wope_pb_option[$wope_pb_field.'3'];
			
			?>
			
			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
			</div>
			<div class="cleared"></div>

			<?php if($type == 'grid'){ //grid 
				$element_count = 1;
				$element_current = 1;
				$total_element = count($wope_pb_option[$wope_pb_field.'_testimonial_name']);
												
				foreach($wope_pb_option[$wope_pb_field.'_testimonial_name'] as $key=> $each_field_name){ 
					if($element_count == $column){
						$clear_div = '<div class="cleared"></div>';
						$column_last = 'column-last';
						$element_count = 1;
					}else{
						$clear_div = '';
						$column_last = '';
						$element_count ++;
					}
					if(trim($wope_pb_option[$wope_pb_field.'_testimonial_image'][$key])){
						$testimonial_img = '<div class="testimonials-image-box"><img alt="'.$each_field_name.'" src="' .$wope_pb_option[$wope_pb_field.'_testimonial_image'][$key]. '"></div>';
					}else{
						$testimonial_img = '<i class="pe-7s-users"></i>';
					}
				
				$end_class = wope_get_end_class($element_current,$total_element,$column);
				$element_current++;	?>
					<div class="widget-column1-<?php echo esc_attr($column);?> <?php echo esc_attr($column_last);?> <?php echo esc_attr($end_class);?>">	
						<div class="testimonials">
							<div class="testimonials-content">
								<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_content'][$key]));	?>
							</div>
							<div class="testimonials-author">
								<div class="testimonials-image"><?php wope_var($testimonial_img);?></div>
								<div class="testimonials-author-detail">
									<div class="testimonials-author-name"><?php wope_var($each_field_name);?></div>
									<div class="testimonials-author-info content"><?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_info'][$key]));?></div>
									
									<div class="cleared"></div>
								</div>
							</div>
						</div>
					</div>
					<?php wope_var($clear_div);?>							
				<?php } ?>
				<?php wope_var($clear_div); ?>
			<?php }elseif($type == 'box-slider'){ 
				$current_button_item = 'active';
			?>
				<div class="column1">
					<div class="testimonials-slider testimonials-slider-box">
						<div class="testimonials-container">
							<?php
							$total_element = 1;
							$current_featured = 'testimonials-current';
							foreach($wope_pb_option[$wope_pb_field.'_testimonial_name'] as $key=> $each_field_name){ 
								if(trim($wope_pb_option[$wope_pb_field.'_testimonial_image'][$key])){
									$testimonial_img = '<div class="testimonials-image-box"><img alt="'.$each_field_name.'" src="' .$wope_pb_option[$wope_pb_field.'_testimonial_image'][$key]. '"></div>';
								}else{
									$testimonial_img = '<i class="pe-7s-users"></i>';
								}
							?>
								<div class="testimonials-each <?php echo esc_attr($current_featured);?>">
									<div class="testimonials-content">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_content'][$key]));	?>
									</div>
									<div class="testimonials-author">
										<div class="testimonials-image"><?php wope_var($testimonial_img);?></div>
										<div class="testimonials-author-detail">
											<div class="testimonials-author-name"><?php wope_var($each_field_name);?></div>
											<div class="testimonials-author-info content"><?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_info'][$key]));?></div>

											<div class="cleared"></div>
										</div>	
									</div>
									<div class="testimonials-id"><?php wope_var( $total_element);?></div>
								</div>
							<?php
								$current_featured = '';
								$total_element++;
							} ?>
						</div>
						<div class="testimonials-buttons">
						<?php foreach($wope_pb_option[$wope_pb_field.'_testimonial_name'] as $key=> $each_field_name){ ?>
							<div class="testimonials-button-item <?php echo esc_attr($current_button_item);?>" data-id="<?php wope_var($key+1);?>">
							</div>
						<?php 
							$current_button_item = '';
						} ?>
						</div>
					</div>
				</div>
			<?php }elseif($type == 'section-slider'){ 
				$current_button_item = 'active';
			?>
				<div class="column1">
					<div class="testimonials-slider testimonials-slider-section">
						<div class="testimonials-container">
							<?php
							$total_element = 1;
							$current_featured = 'testimonials-current';
							foreach($wope_pb_option[$wope_pb_field.'_testimonial_name'] as $key=> $each_field_name){ 
								if(trim($wope_pb_option[$wope_pb_field.'_testimonial_image'][$key])){
									$testimonial_img = '<div class="testimonials-image-box"><img alt="'.$each_field_name.'" src="' .$wope_pb_option[$wope_pb_field.'_testimonial_image'][$key]. '"></div>';
								}else{
									$testimonial_img = '<i class="pe-7s-users"></i>';
								}
							?>
								<div class="testimonials-each <?php echo esc_attr($current_featured);?>">
									
									<div class="testimonials-content">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_content'][$key]));	?>
									</div>

									<div class="testimonials-author">
										<div class="testimonials-image"><?php wope_var($testimonial_img);?></div>
										<div class="testimonials-author-detail">
											<div class="testimonials-author-name"><?php wope_var($each_field_name);?></div>
											<div class="testimonials-author-info content"><?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_testimonial_info'][$key]));?></div>
											<div class="cleared"></div>
										</div>
									</div>
									<div class="testimonials-id"><?php wope_var( $total_element);?></div>
								</div>
							<?php
								$current_featured = '';
								$total_element++;
							} ?>
						</div>
						<div class="testimonials-buttons">
						<?php foreach($wope_pb_option[$wope_pb_field.'_testimonial_name'] as $key=> $each_field_name){ ?>
							<div class="testimonials-button-item <?php echo esc_attr($current_button_item);?>" data-id="<?php wope_var($key+1);?>">
							</div>
						<?php 
							$current_button_item = ''; 
						} ?>
						</div>
					</div>	
				</div>	
			<?php }?>
				
			<?php
			break;
		case 'accordion':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 			= $wope_pb_option[$wope_pb_field.'2'];
			$style 			= $wope_pb_option[$wope_pb_field.'3'];
			$active 		= $wope_pb_option[$wope_pb_field.'4'];
			$collapsible 	= $wope_pb_option[$wope_pb_field.'5'];
			
			$style_class = 'accordion-style-'.$style;
			
			if($active != 0){
				$accordion_data = 'data-active="'.$active.'"';
			}else{
				$accordion_data = 'data-active="0"';
			}
			$collapsible_data = 'data-collapsible="'.$collapsible.'"';
			
			?>
			
			<div class="column1">
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
				
				<?php if($type == 0){?>
					<div class="accordion accordion-type-stack <?php wope_var($style_class);?>" <?php wope_var( $accordion_data);?> <?php wope_var($collapsible_data);?>>
						<?php 
						foreach($wope_pb_option[$wope_pb_field.'_accordion-name'] as $key=> $each_field_name){ 
						?>
							<div class="accor-title">
								<span class="accor-title-icon"><i class="fa fa-angle-down"></i></span>
								<?php wope_var($each_field_name);?>
							</div>
							<div class="accor-content">
								<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_accordion-content'][$key]));	?>
							</div>
						<?php }?>
					</div>
				<?php }else{ ?>
					<div class="accordion accordion-type-group <?php wope_var($style_class);?>" <?php wope_var( $accordion_data);?> <?php wope_var($collapsible_data);?>>
						<?php 
						foreach($wope_pb_option[$wope_pb_field.'_accordion-name'] as $key=> $each_field_name){ 
						?>
							<div class="accor-title">
								<span class="accor-title-icon"><i class="fa fa-angle-down"></i></span>
								<?php wope_var($each_field_name);?>
							</div>
							<div class="accor-content">
								<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_accordion-content'][$key]));	?>
							</div>
						<?php }?>
					</div>
				<?php }?>
				
			</div>
			<div class="cleared"></div>
			<?php
			break;
		case 'tab':
			$wope_pb_field 		= 'widget'.$wope_total_widget.'_field';
			$title 			= $wope_pb_option[$wope_pb_field.'1'];
			$type 		= $wope_pb_option[$wope_pb_field.'2'];
			$tab_left 		= $wope_pb_option[$wope_pb_field.'3'];
			$active 		= $wope_pb_option[$wope_pb_field.'4'];
			
			$tab_right 		= 100 - $tab_left;
			$active = $active != "" ? $active : 1;
			?>
			
			<div class="column1">
			
				<?php if(trim($title) != ''){?>
					<div class="wrap-no-fullwidth">
						<div class="section-widget-heading">
							<<?php wope_var($widget_title_tag);?> class="section-widget-title"><?php wope_var($title);?></<?php wope_var($widget_title_tag);?>>
						</div>
					</div>
				<?php }?>
				
				
				<?php if($type == 0){?>
					<div class="tab">
						<div class="tab-top">
							<?php
							$tab_id = 1;
							foreach($wope_pb_option[$wope_pb_field.'_tab_name'] as $key=> $each_field_name){
								if($active == $tab_id){
									$current = 'tab-current';
								}else{
									$current = "";
								}
							?>
								<div class="tab-title <?php wope_var($current);?>">
									<?php if(trim($wope_pb_option[$wope_pb_field.'_tab_icon'][$key]) != ''){?>
										<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_tab_icon'][$key]);?>"></i>
									<?php }?>
									
									<?php wope_var($each_field_name);?>
									<span class="tab-id"><?php wope_var($tab_id);?></span>
								</div>
							<?php 
								$tab_id ++;
							}
							?>
						</div>
						<div class="tab-bottom">
							<?php
							$tab_id = 1;
							foreach($wope_pb_option[$wope_pb_field.'_tab_name'] as $key=> $each_field_name){
								if($active == $tab_id){
									$current = 'tab-content-current';
								}else{
									$current = "";
								}
							?>
								<div class="content tab-content tab-content<?php wope_var($tab_id);?> <?php wope_var($current);?>">
									<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_tab_content'][$key]));	?>
								</div>
							<?php 
								$tab_id ++;
							}
							?>
						</div>
					</div>
				<?php }else{?>
					<div class="tab-vertical">
						<div class="tab-vertical-top" style="width:<?php wope_var($tab_left);?>%;">
							<?php
								$tab_id = 1;
								foreach($wope_pb_option[$wope_pb_field.'_tab_name'] as $key=> $each_field_name){
									if($active == $tab_id){
										$current = 'tab-vertical-current';
									}else{
										$current = "";
									}
									
							?>
									<div class="tab-vertical-title <?php wope_var($current);?>">
										<i class="<?php wope_var($wope_pb_option[$wope_pb_field.'_tab_icon'][$key]);?>"></i>
										<?php wope_var($each_field_name);?>
										<span class="tab-vertical-id"><?php wope_var($tab_id);?></span>
									</div>
							<?php 
									$tab_id ++;
									
								}
							?>
						</div>
						<div class="tab-vertical-bottom" style="width:<?php wope_var( $tab_right);?>%;">
							<?php
								$tab_id = 1;
								foreach($wope_pb_option[$wope_pb_field.'_tab_name'] as $key=> $each_field_name){
									if($active == $tab_id){
										$current = 'tab-vertical-content-current';
									}else{
										$current = "";
									}
							?>
									<div class="content tab-vertical-content tab-vertical-content<?php wope_var( $tab_id);?> <?php wope_var($current);?>">
										<?php wope_var(wope_get_html($wope_pb_option[$wope_pb_field.'_tab_content'][$key]));	?>
									</div>
							<?php 
									$tab_id ++;
								}
							?>
						</div>
						<div class="cleared"></div>
					</div>
				<?php }?>
				
			</div>	
			<div class="cleared"></div>
			<?php
			break;
	}
	$wope_total_widget++;
	?>
	<div class="cleared"></div>
</div> <!-- end widget entry -->