<?php
/**
 * Single Product title
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="woo-single-title-categories">
<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
<?php $wope_woo_brand = get_post_meta( $product->id, 'wope_woo_brand', true ); ?>
<?php if($wope_woo_brand != "") { ?>
	<div class="woocommerce-item-categories"><?php wope_var($wope_woo_brand); ?></div>  
<?php } ?>
</div>