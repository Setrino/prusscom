<?php
//setup the sidebar
add_action( 'widgets_init', 'wope_widgets_init' );
function wope_widgets_init() {
	$standard_sidebar = array(
		0 => array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'description' => 'The default sidebar for pages.',
			'pos' => 'sidebar-widget',
		),
		1 => array(
			'name' => 'Header Sidebar',
			'id' => 'header-sidebar',
			'description' => 'The sidebar for header.',
			'pos' => 'header-widget',
		),
		2 => array(
			'name' => 'Single Sidebar',
			'id' => 'single-sidebar',
			'description' => 'The sidebar for single post page.',
			'pos' => 'sidebar-widget',
		),
		3 => array(
			'name' => 'Archive Sidebar',
			'id' => 'archive-sidebar',
			'description' => 'The sidebar for archive page.',
			'pos' => 'sidebar-widget',
		),
		4 => array(
			'name' => 'Footer Sidebar 1',
			'id' => 'footer-sidebar1',
			'description' => 'The 1st sidebar in the footer.',
			'pos' => 'footer-widget',
		),
		5 => array(
			'name' => 'Footer Sidebar 2',
			'id' => 'footer-sidebar2',
			'description' => 'The 2nd sidebar in the footer.',
			'pos' => 'footer-widget',
		),
		6 => array(
			'name' => 'Footer Sidebar 3',
			'id' => 'footer-sidebar3',
			'description' => 'The 3rd sidebar in the footer.',
			'pos' => 'footer-widget',
		),
	);
	
	foreach($standard_sidebar as $each_sidebar){
		register_sidebar( array(
			'name' => $each_sidebar['name'],
			'id' => $each_sidebar['id'],
			'description'   => $each_sidebar['description'],
			'before_widget' => '<div id="%1$s" class="'.$each_sidebar['pos'].' %2$s content">',
			'after_widget' => "</div> ",
			'before_title' => '<div class="'.$each_sidebar['pos'].'-title">',
			'after_title' => '</div> ',
		) );
	}
	
	$custom_sidebar_option = get_option('wope_custom_sidebar');
	
	$unique_array = array();
	if(is_array($custom_sidebar_option)){
		foreach($custom_sidebar_option as $key=> $each_sidebar){
			register_sidebar( array(
				'name' => $each_sidebar,
				'id' => $key,
					'description'   => 'The Custom sidebar',
				'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s"><div class="sidebar-widget-content content">',
				'after_widget' => "</div></div> ",
				'before_title' => '<div class="sidebar-widget-title">',
				'after_title' => '</div> ',
			) );
		}
	}
	
}