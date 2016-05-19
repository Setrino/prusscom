<?php
/**
 * Template Name: Blog Medium
 */
//load site option 
$wope_main_option = get_option('wope-main');
$wope_post_option = get_option('wope-post');
$wope_sidebar_options = get_option('wope-sidebar');
$wope_header_option = get_option('wope-header');

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';
$sidebar_selector		= '';
$heading_setting 		= 1;

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

//get new page setting from verison 2.0
$page_setting = get_post_meta( $post->ID, 'page_setting', true );

//check for version 2.0
if(isset($page_setting['sidebar_selector'] )){
	$sidebar_selector		= $page_setting['sidebar_selector'];
	$heading_setting 		= $page_setting['heading_setting'];

	//if use custom layout for this page only
	if($page_setting['custom_layout'] == 1){
		$header_style  			= $page_setting['header_style'];
		$heading_align  		= $page_setting['heading_align'];
	}
}

//process style,class
if($header_style == 'white'){ 
	$heading_class = 'heading-gray';
}else{
	$heading_style = $header_style;
	$heading_class = 'heading-'.$heading_style;
}

$heading_align_class = 'heading-align-'.$heading_align;

get_header(); 

	?>
	<?php if ( have_posts() ) { ?>
		<?php /* Start the Loop */ ?>
		<?php the_post(); ?>
		
					<?php if($heading_setting == 1){ //display page title?>
						<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
							<div class="wrap">
								<div id="page-heading-left">
									<h1 id="page-title">
										<?php the_title(); ?>
									</h1>
								</div>
								<div id="breadcrumb">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a>
									<?php 
										$wope_post_parent = $post->post_parent;
										$wope_parent_array = wope_page_breadcrumb($wope_post_parent);
										if(count($wope_parent_array) > 0 ){
											foreach($wope_parent_array as $wope_each_array){
												?>
												/ <a href="<?php echo esc_url(get_permalink($each_array['id']));?>"><?php echo esc_html($wope_each_array['post_title']); ?></a>
												<?php
											}
										}
									?>
									/ <span><?php the_title(); ?></span>
								</div>
								<div class="cleared"></div>
							</div>
						</div>
					<?php }?>
				</div><!-- End Header Content -->
			</div> <!-- end Header -->
		<div class="cleared"></div>
		
		<div id="body" class="content-page blog-medium">
			<div class="wrap">
				<div class="big-column left">
					<?php
						if( $wp_rewrite->using_permalinks() ){
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						}else{
							$paged = empty($_GET['page']) ? 1 : $_GET['page'];
						}
							
						// The Query
						$args = array(
							'post_type' => 'post',
							'paged' => $paged,
						);
						$wp_query = new WP_Query( $args );
							
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								get_template_part( 'content-medium');
							}
						}
					?>
					
					<?php
						if($wp_query->max_num_pages > 1){
					?>
						<div class="paginate">
							<?php wope_show_paginate_links(); ?>
						</div>
					<?php } ?>
				</div>
				<!-- End Big Column -->
				
				<div class="small-column right">
					<?php dynamic_sidebar( $wope_sidebar_options['archive-sidebar'] ); ?>
				</div><!-- End Small Column -->
				
				<div class="cleared"></div>		
			</div>
		</div><!-- End Body-->
	<?php } ?>	
<?php get_footer(); ?>