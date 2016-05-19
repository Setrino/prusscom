<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wope_header_option = get_option('wope-header');

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';
$sidebar_selector		= -1;
$heading_setting 		= 1;

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

global $post;
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

get_header( 'shop' ); ?>
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<!-- Page heading -->
						<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
							<div class="wrap">
								<div id="page-heading-left">
									<h1 id="page-title">
										<?php woocommerce_page_title(); ?>
									</h1>
								</div>
								<div id="breadcrumb">
									<?php woocommerce_breadcrumb();?>
								</div>
								<div class="cleared"></div>
							</div>
						</div>	
					<?php endif; ?>	
				</div><!-- End Header Content -->
			</div> <!-- end Header -->
		<div class="cleared"></div>
	
		<div id="body" >
			<div class="wrap-column">
				<div class="page-entry">
					
					<?php do_action( 'woocommerce_archive_description' );?>
					
					<div class="page-entry-body">
						<div class="page-entry-content content">
							<div class="column1">
								<?php if ( have_posts() ) : ?>
									<?php do_action( 'woocommerce_before_shop_loop' );?>

									<?php woocommerce_product_loop_start(); ?>

										<?php woocommerce_product_subcategories(); ?>

										<?php while ( have_posts() ) : the_post(); ?>

											<?php wc_get_template_part( 'content', 'product' ); ?>

										<?php endwhile; // end of the loop. ?>

									<?php woocommerce_product_loop_end(); ?>

									<?php do_action( 'woocommerce_after_shop_loop' );?>

								<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

									<?php wc_get_template( 'loop/no-products-found.php' ); ?>

								<?php endif; ?>
							</div>
							<div class="cleared"></div>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
				<?php //comments_template( '', true ); ?>
			</div>
			
		</div>	
<?php get_footer( 'shop' ); ?>
