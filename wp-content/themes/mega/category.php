<?php
/**
 * The main template file.
 */
$wope_sidebar_options = get_option('wope-sidebar');
$wope_post_option = get_option('wope-post');
$wope_main_option = get_option('wope-main');
$wope_header_option = get_option('wope-header');

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

//process style,class
if($header_style == 'white'){ 
	$heading_class = 'heading-gray';
}else{
	$heading_style = $header_style;
	$heading_class = 'heading-'.$heading_style;
}

$heading_align_class = 'heading-align-'.$heading_align;

get_header(); ?>

				<!-- Page heading -->
				<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
					<div class="wrap">
						<div id="page-heading-left">
							<h1 id="page-title">
								<h1 id="page-title"><?php esc_html_e('Category : ','mega');?> <?php wope_var(single_cat_title( '', false )) ;?></h1>
							</h1>
						</div>
						<div id="breadcrumb">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a> / 
							<span><?php esc_html_e('Category : ','mega');?> <?php wope_var(single_cat_title( '', false )) ;?></span>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div><!-- End Header Content -->
		</div> <!-- end Header -->
	<div class="cleared"></div>
	
	<div id="body">
		<div class="wrap">
			<div class="big-column left">
				<div class="post-entry-section">
					<?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								get_template_part( 'content');
							}
						}
					?>
					
					<?php
						$wp_query;
						if($wp_query->max_num_pages > 1){
					?>
						<div class="paginate">
							<?php wope_show_paginate_links(); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- End Big Column -->
				
			<div class="small-column right">
				<?php dynamic_sidebar( $wope_sidebar_options['archive-sidebar'] ); ?>
			</div><!-- End Small Column -->
			<div class="cleared"></div>
		</div>	
	</div><!-- End Body-->
<?php get_footer(); ?>