<?php
/**
 * Plugin Name: Wope Portfolio
 * Plugin URI: http://wopethemes.com
 * Description: A Portfolio plugins used for wopethemes and any wordpress theme.
 * Version: 2.0
 * Author: Wopethemes
 * Author URI: http://wopethemes.com
 * License: GPL2
*/
require_once('post_type_portfolio.php');

require_once('common_functions.php');

//Load Script for Front-end
add_action('wp_enqueue_scripts', 'wopo_portfolio_load_script_frontend');
function wopo_portfolio_load_script_frontend(){
	if (!function_exists('wope_setup')) {
		wp_register_style('wope-portfolio-css', plugins_url('css/portfolio.css',__FILE__ ));
		wp_enqueue_style('wope-portfolio-css');
		wp_register_style('wope-color-css', plugins_url('css/color.css',__FILE__ ));
		wp_enqueue_style('wope-color-css');
	}
}

add_filter( 'template_include', 'wopo_portfolio_template_function', 1 );

function wopo_portfolio_template_function( $template_path ) {
    if ( get_post_type() == 'portfolio' ) {
        if ( is_single() ) {
            $template_path = plugin_dir_path( __FILE__ ) . '/single-portfolio.php';
		}elseif( is_tax() ){
			$template_path = plugin_dir_path( __FILE__ ) . '/taxonomy-portfolio-category.php';
        }elseif(is_archive() ){
			$template_path = plugin_dir_path( __FILE__ ) . '/archive-portfolio.php';
		}
    }
    return $template_path;
}