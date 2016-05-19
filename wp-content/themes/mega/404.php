<?php
/**
 * The main template file.
 */
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
								<?php esc_html_e('Page Not Found','mega');?>
							</h1>
						</div>
						<div id="breadcrumb">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a><span> / <span><?php esc_html_e('Page Not Found','mega');?></span>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div><!-- End Header Content -->
		</div> <!-- end Header -->
	<div class="cleared"></div>
	
	<div id="body" class="content-page">
		<div class="wrap">

			<div class="full-column content">
				<div class="text-404"><?php esc_html_e('404','mega');?></div>
				<p class="center">
					<?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.<br> Please try another search ... ','mega');?>
				</p>
				<div class="center">
					<?php get_search_form(); ?>
				</div>
			</div>
		
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>