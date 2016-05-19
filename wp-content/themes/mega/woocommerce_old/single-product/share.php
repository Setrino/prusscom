<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php //do_action( 'woocommerce_share' ); // Sharing plugins can hook into here ?>

<div class="woo-single-shares-container">
	<div>SHARE</div>
	<div class="woo-single-shares">
		<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share facebook-share" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
		
		<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share twitter-share" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"></i></a>
		
		<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=340,width=640');return false;" class="post-share google-share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
		
		<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=640,width=750');return false;" class="post-share pinterest-share" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><i class="fa fa-pinterest"></i> </a>
		
		<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=210,width=640');return false;" class="post-share linkedin-share" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
	</div>
</div>