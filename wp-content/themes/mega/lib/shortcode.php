<?php
/* Button Shortcode */
function wope_button_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'highlight',
		'blank' => 1,
		'icon'	=> '',
	), $atts ) );
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="normal-button '.$color.'-button " href="'.$url.'">'.$label.'</a>';
}
add_shortcode( 'normal-button', 'wope_button_shortcode' );

function wope_button_small_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'highlight',
		'blank' => 1,
		'icon'	=> '',
	), $atts ) );
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="small-button '.$color.'-button " href="'.$url.'">'.$label.'</a>';

}
add_shortcode( 'small-button', 'wope_button_small_shortcode' );

function wope_button_large_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'highlight',
		'blank' => 1,
		'icon'	=> '',
	), $atts ) );
	
	if(trim($icon) != ''){
		$icon_html = '<i class="fa '.$icon.'"></i>';
	}else{
		$icon_html = '';
	}
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="large-button '.$color.'-button " href="'.$url.'">'.$label.'</a>';

}
add_shortcode( 'large-button', 'wope_button_large_shortcode' );

/* social shortcode */
function wope_social_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'type',
		'url' => '#',
	), $atts ) );

	return '<a target="_blank"  title="'.$type.'" class="social-icons social-'.$type.'" href="'.$url.'"><i class="fa fa-'.$type.'"></i></a>';
}
add_shortcode( 'social', 'wope_social_shortcode' );

/* divider shortcode */
function wope_divider_shortcode( $atts) {
	extract( shortcode_atts( array(
		'height' => 0,
		'style' => 'solid',
	), $atts ) );
	
	$style_class = 'divider-'.$style;
	
	if($height == 0){
		return '<div class="divider '.$style_class.'"></div>';
	}else{
		return '<div class="divider '.$style_class.'" style="height:'.$height.'px;"></div>';
	}
}
add_shortcode( 'divider', 'wope_divider_shortcode' );

/* spacing shortcode */
function wope_spacing_shortcode( $atts) {
	extract( shortcode_atts( array(
		'height' => 0
	), $atts ) );
	
	if($height == 0){
		return '<div class="space"></div>';
	}else{
		return '<div class="space" style="height:'.$height.'px;"></div>';
	}
}
add_shortcode( 'space', 'wope_spacing_shortcode' );



//dropcap shortcode
function wope_dropcap_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'style' => '1'
	), $atts ) );
	
	return '<span class="dropcap dropcap-style'.$style.'" >'.$content.'</span>';
}
add_shortcode( 'd', 'wope_dropcap_shortcode' );