<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
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
										<?php the_title(); ?>
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
				<div class="page-entry woocommerce-single-product">
					
					
					
					<div class="page-entry-body">
						<div class="page-entry-content content">

							<?php
								/**
								 * woocommerce_before_main_content hook.
								 *
								 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
								 * @hooked woocommerce_breadcrumb - 20
								 */
								do_action( 'woocommerce_before_main_content' );
							?>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php wc_get_template_part( 'content', 'single-product' ); ?>

							<?php endwhile; // end of the loop. ?>

							<?php
								/**
								 * woocommerce_after_main_content hook.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 */
								do_action( 'woocommerce_after_main_content' );
							?>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
				<?php //comments_template( '', true ); ?>
			</div>
			
		</div>	
<?php get_footer( 'shop' ); ?>
