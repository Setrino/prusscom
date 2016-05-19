<?php
/**
 * The template for displaying product content within loops.
 *
 *
 * @author  WopeTheme
 * @package Mega/Woocommerce
 * @version 1.0.0
 */
							$column = 3;
							$element_count = 1;
							$element_current = 1;
							$total_element = $wp_query->post_count;

							
							?>
							<div class="wrap">
								<?php do_action( 'woocommerce_before_shop_loop' );?>
								<div class="cleared"></div>
							</div>
							<?php 	while ( $wp_query->have_posts() ) { $wp_query->the_post();
							if($element_count == $column){
								$clear_div = '<div class="cleared"></div>';
								$column_last = 'column-last';
								$element_count = 1;
							}else{
								$clear_div = '';
								$column_last = '';
								$element_count ++;
							}
							
							$end_class = wope_get_end_class($element_current,$total_element,$column);
							$element_current++;
							
							global $product;	
							$discount = 0;
							$percentage = 0;
							if($product->regular_price > 0)
							$percentage = round((( ( $product->regular_price - $product->price ) / $product->regular_price ) * 100),0) ;
							if ($percentage > $discount) {
								$discount = $percentage;
							}
							
							$wope_woo_brand = get_post_meta( $product->id, 'wope_woo_brand', true ); 
							?>
							<div class="woocommerce-item widget-column1-<?php wope_var($column); ?> <?php wope_var($column_last); ?> <?php wope_var($end_class); ?>"> 
								<div class="woocommerce-item-thumb">	
									<a href="<?php echo get_permalink( $wp_query->post->ID ) ?>" title="<?php echo esc_attr($wp_query->post->post_title); ?>">
										<?php if (has_post_thumbnail( $wp_query->post->ID )) echo get_the_post_thumbnail($wp_query->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="<?php $wp_query->post->post_title ?>" />'; ?>
									</a>
									<?php if($discount > 0)
										echo "<div class='woocommerce-item-sale'>-" . $discount . '%</div>'; 
									?>
									<div class="woocommerce-item-buttons">	
										<div class="yith-wcqv-quick-view-button">
											<?php echo '<a href="#" class="button yith-wcqv-button" data-product_id="' . $product->id . '"></a>';?>
										</div>
										<?php woocommerce_template_loop_add_to_cart( $wp_query->post, $product ); ?>
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
									</div>
								</div>  
								<div class="woocommerce-item-price">
									<?php echo '<ins>' . get_woocommerce_currency_symbol() . $product->price . '</ins>';
									if($product->regular_price > 0 && ($product->price != $product->regular_price)){
										echo '<del>' . get_woocommerce_currency_symbol() . $product->regular_price . '<del>';
									} ?>
								</div>  
								<div class="woocommerce-item-title">
									<a href="<?php echo get_permalink( $wp_query->post->ID ) ?>" title="<?php echo esc_attr($wp_query->post->post_title); ?>"><h3><?php the_title(); ?></h3></a>
								</div>  
								
								<?php if($wope_woo_brand != "") { ?>
								<div class="woocommerce-item-categories"><?php wope_var($wope_woo_brand); ?></div>  
								<?php } ?>

							</div>
							<?php wope_var($clear_div); ?>
						<?php } ?>
						<div class="cleared"></div>