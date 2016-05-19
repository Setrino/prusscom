<?php
/**
 * The Header for our theme.
 */

//load lib
include_once(get_template_directory().'/header_lib.php');

//get options
$wope_main_option 	= get_option('wope-main');
$wope_header_option  = get_option('wope-header');

//init style,class

$header_custom_style = '';
$header_bg_style = '';
$header_text_color_class = '';
$header_on_slider = 0;
$header_on_slider_class = '';
$scroll_header = 0;
$topbar = 0;

$header_style  			= 'white';
$header_text_color  	= 'black';
$header_bg_color  		= '';
$header_bg_image  		= '';
$header_bg_transparent  = '';

//get data from main options
$site_layout 	= $wope_main_option['site_layout'];
$bg_type 		= $wope_main_option['bg_type'];
$bg_color 		= $wope_main_option['bg_color'];
$bg_image 		= $wope_main_option['bg_image'];


if( isset($wope_header_option['header_style']) ){
	$topbar 				= $wope_header_option['topbar'];
	$header_style  			= $wope_header_option['header_style'];
	$header_text_color  	= $wope_header_option['header_text_color'];
	$header_bg_color  		= $wope_header_option['header_bg_color'];
	$header_bg_image  		= $wope_header_option['header_bg_image'];
	$header_bg_transparent  = $wope_header_option['header_bg_transparent'];
}

//check if page have override options
if(get_post_type() == 'page'){
	$page_setting = get_post_meta( $post->ID, 'page_setting', true );
	
	//if the page was save
	if(isset($page_setting['sidebar_selector'] )){

		//if use custom layout for this page only
		if($page_setting['custom_layout'] == 1){
			$site_layout 	= $page_setting['site_layout'];
			$bg_type 		= $page_setting['bg_type'];
			$bg_color 		= $page_setting['bg_color'];
			$bg_image 		= $page_setting['bg_image'];

			$topbar  				= $page_setting['topbar'];
			$header_style  			= $page_setting['header_style'];
			$header_text_color  	= $page_setting['header_text_color'];
			$header_bg_color  		= $page_setting['header_bg_color'];
			$header_bg_image  		= $page_setting['header_bg_image'];
			$header_bg_transparent  = $page_setting['header_bg_transparent'];
			$header_on_slider		= $page_setting['header_on_slider'];
		}
	}

}

//process site setting
if($site_layout == 1){ //boxed
	$page_class = 'class="layout-boxed"';
	if($bg_type == 0){//color
		$bg_style ="background-color:".$bg_color;
	}else if($bg_type == 1){//Fixed Image
		$bg_style ="background-size: cover;background-image:url('".$bg_image."');background-attachment:fixed";
	}else{ //pattern image
		$bg_style ="background-repeat:repeat;background-image:url('".$bg_image."')" ;
	}
}else{ //fullwdith
	$page_class = '';
	$bg_style= '';
}

//process header
$header_class = 'header-'.$header_style;
if($header_style == 'transparent'){
	$header_custom_style = "background-image:url('".$header_bg_image."');";
	$header_bg_style = "opacity:".$header_bg_transparent.";background-color:".$header_bg_color.";";
}
$header_text_color_class = 'header-text-'.$header_text_color;


//process header floating on slider
if($header_on_slider == 1){
	$header_on_slider_class = 'header-on-slider';
	$header_custom_style = '';
	$header_bg_style = '';
}

if(isset($wope_main_option['scroll_header'])){
	$scroll_header = $wope_main_option['scroll_header'];
}

?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php if($wope_main_option['responsive'] == 1){?>
		<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php }?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head();?>
</head>
<body <?php body_class(  ); ?>>
	<div id="background" style="<?php echo esc_attr($bg_style);?>">
		
		<?php if($scroll_header == 1){?>
			<div id="scroll-header" >
				<div id="scroll-header-content">
					<div class="wrap" >
						<div class="left-header">
							<div class="site-logo">
								<?php wope_display_logo('scroll',$header_text_color);?>
							</div>
						</div>
						<div class="right-header">

							<div class="main-menu">
								<?php 
								if ( has_nav_menu('main-menu')){
									wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
								}else{
								?>
									<ul>
										<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a></li>
									</ul>
								<?php } ?> 
							</div><!-- End Main Menu -->
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div>
		<?php }?>

		<div id="page" <?php wope_var($page_class);?>>
			
			
			<div id="header" class="<?php wope_var($header_class);?> <?php wope_var($header_text_color_class);?> <?php wope_var($header_on_slider_class);?>" style="<?php wope_var($header_custom_style);?>">
				<div class='header_bg' style="<?php wope_var($header_bg_style);?>"></div>
				<div class="header_content">

					<?php if($topbar == 1){ ?>

						<div id="top-bar">
							<div class="wrap">
								<div class="left-top-bar">
									
									<?php 
										if($wope_header_option['topbar_left_search']){
											get_search_form();
										}
										if($wope_header_option['topbar_left_social']){
											get_social_icons('header');
										}
										if($wope_header_option['topbar_left_contact']){
											get_contact_detail();
										}
									?>	
									<?php wope_wpml_topbar_left();?>
								</div>
								<div class="right-top-bar">
									<?php wope_wpml_topbar_right();?>
									<?php 
										if($wope_header_option['topbar_right_social']){
											get_social_icons('header');
										}
										if($wope_header_option['topbar_right_contact']){
											get_contact_detail();
										}
										if($wope_header_option['topbar_right_search']){
											get_search_form();
										}
									?>
									
								</div>
								<div class="cleared"></div>
							</div>
						</div>
						<div id="top-bar-open">
							<div class="wrap">
								<div id="topbar-open"><i class="fa fa-angle-down"></i></div>
							</div>
						</div>
					<?php } ?>
			
					<div class="wrap">
						
						<div class="left-header">
							<div class="site-logo">
								<?php wope_display_logo('main',$header_text_color);?>
							</div>
						</div>
						<div class="right-header">

							<div class="main-menu">
								<?php 
								if ( has_nav_menu('main-menu')){
									wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
								}else{
								?>
									<ul>
										<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a></li>
									</ul>
								<?php } ?> 
							</div><!-- End Main Menu -->
						</div>
						<div class="cleared"></div>
							
						<div id="toggle-menu-button"><i class="fa fa-align-justify"></i></div>
						
						<div class="toggle-menu">
							<?php 
							if ( has_nav_menu('toggle-menu')){
								wp_nav_menu( array( 'theme_location' => 'toggle-menu' ) );
							}else{
							?>
								<ul>
									<li class="current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a></li>
								</ul>
							<?php } ?> 
						</div>
					</div><!-- End Header Wrap -->
					
			<?php if($scroll_header == 1){?>
				<script type='text/javascript'>
					jQuery(window).scroll(function() {
						if(jQuery(document).width() > 760 ){
							var main_menu_top = jQuery('#header').find('.main-menu').offset().top + 100;
							if(jQuery(this).scrollTop() > main_menu_top) {
								jQuery('#scroll-header').slideDown(100);
							} else {
								jQuery('#scroll-header').slideUp(100);
							}
						}
					});
					
					jQuery(window).resize(function() { //restore scroll header
						if(jQuery(document).width() > 760){
							
							
							var main_menu_top = jQuery('#header').find('.main-menu').offset().top + 100;
							if(jQuery(this).scrollTop() > main_menu_top) {
								jQuery('#scroll-header').slideDown(100);
							} else {
								jQuery('#scroll-header').slideUp(100);
							}
						}else{
							
							jQuery('#scroll-header').slideUp(100);
						}
					});

				</script>
			<?php }?>
			<!-- End Header -->