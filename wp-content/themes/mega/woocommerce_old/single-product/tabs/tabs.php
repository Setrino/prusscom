<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs">
		<ul class="tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<?php if($tab['callback'] != ""){ ?>
					<li class="<?php wope_var($key); ?>_tab">
						<a href="#tab-<?php wope_var($key); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
					</li>
				<?php } ?>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<?php if($tab['callback'] != ""){ ?>
				<div class="panel entry-content" id="tab-<?php wope_var($key); ?>">
					<?php echo call_user_func( $tab['callback'], $key, $tab ) ?>
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>

<?php endif; ?>
