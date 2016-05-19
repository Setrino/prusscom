<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="woo-single-price-rating">

<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<div class="woocommerce-item-price">
	<?php echo '<ins>' . get_woocommerce_currency_symbol() . $product->price . '</ins>';
	if($product->regular_price > 0 && ($product->price != $product->regular_price)){
		echo '<del>' . get_woocommerce_currency_symbol() . $product->regular_price . '<del>';
	} ?>
	</div>  

	<meta itemprop="price" content="<?php wope_var($product->get_price()); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php wope_var($product->is_in_stock() ? 'InStock' : 'OutOfStock' ); ?>" />

</div>
