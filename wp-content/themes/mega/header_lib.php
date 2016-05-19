<?php	
	function wope_check_social($array){
		$have_social = false;
		foreach($array as $each){
			if(trim($each) != ''){
				$have_social = true;
				break;
			}
			
		}
		return $have_social;
	}
	
	//show social
	function get_social_icons($position){
		$social_option  = get_option('wope-social');
		$total_social = wope_check_social($social_option);
		if($total_social){?>
			<div class="<?php wope_var($position);?>-social">
				<?php foreach($social_option as $key => $each_social){?>
					<?php if($key == 'rss'){?>
						<?php if($each_social == 1){?>
							<a target="_blank" href=" <?php bloginfo( 'rss2_url' ); ?> "><i class="fa fa-rss"></i></a>
						<?php }?>
					<?php }else if(trim($each_social) != ''){?>
						<a target="_blank"  href="<?php echo esc_url($each_social);?>"><i class="fa fa-<?php echo esc_attr($key);?>"></i></a>
					<?php }?>
				<?php }?>
				<div class="cleared"></div>
			</div>
		<?php }
	}	
	
	//show contact detail line
	function get_contact_detail(){ 
		$header_option = get_option('wope-header');

		?>
		<div class="contact-detail-line">
			<ul>
				<?php if(trim($header_option['contact_line_phone']) != ''){ ?>
					<li><i class="fa fa-phone"></i><?php wope_var($header_option['contact_line_phone']);?></li>
				<?php }	?>
				<?php if(trim($header_option['contact_line_email']) != ''){ ?>
					<li><i class="fa fa-envelope-o"></i><?php wope_var($header_option['contact_line_email']);?></li>
				<?php }	?>
				<?php if(trim($header_option['contact_line_time']) != ''){ ?>
					<li><i class="fa fa-clock-o"></i><?php wope_var($header_option['contact_line_time']);?></li>
				<?php }	?>
			</ul>
		</div>
	<?php }	

	//show logo
	function wope_display_logo($position,$header_text_color){
		$before_logo 	= '';
		$after_logo 	= '';
		$logo_image 	= false;
		$logo_image_code = '';

		$wope_main_option = get_option('wope-main');
		$wope_header_option = get_option('wope-header');

		if($position == 'main'){ //main header

			$logo_url = $wope_main_option['logo_url'];
			$logo_retina_url = $wope_main_option['logo_retina_url'];

			
			if($header_text_color == 'white'){
				$logo_url = $wope_main_option['white_logo_url'];
				$logo_retina_url = $wope_main_option['white_logo_retina_url'];
			}


			//check if front page
			if(is_front_page()){
				$before_logo 	= '<h1>';
				$after_logo 	= '</h1>';
			}

			if(trim($logo_url) != ''){
				$logo_image 	= true;

				if( trim($logo_retina_url) != ''){
					$logo_image_code = '<img class="logo-normal" alt="'.get_bloginfo('name').'" src="'.esc_url($logo_url).'" />
					<img class="logo-retina"   alt="'.get_bloginfo('name').'" src="'.esc_url($logo_retina_url).'" />';
				}else{
					$logo_image_code = '<img alt="'.get_bloginfo('name').'" src="'.esc_url($logo_url).'" />';
				}
			}

		}else{ //scroll header
			
			if(trim($wope_main_option['scroll_logo_url']) != ''){

				$logo_image 	= true;

				if( trim($wope_main_option['scroll_logo_retina_url']) != ''){
					$logo_image_code = '<img class="logo-normal" alt="'.get_bloginfo('name').'" src="'.esc_url($wope_main_option['scroll_logo_url']).'" />
					<img class="logo-retina"   alt="'.get_bloginfo('name').'" src="'.esc_url($wope_main_option['scroll_logo_retina_url']).'" />';
				}else{
					$logo_image_code = '<img alt="'.get_bloginfo('name').'" src="'.esc_url($wope_main_option['scroll_logo_url']).'" />';
				}
			}
		} ?>

		<?php wope_var($before_logo);?>
			<?php if($logo_image == true){?>
				<a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php wope_var($logo_image_code);?>
				</a>
			<?php }else{?>
				<a class="logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo('name');?>
				</a>
			<?php }?>
			
		<?php wope_var($after_logo);?>

	<?php 

	} //end wope display logo function
