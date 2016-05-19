					<?php
					$post;
					global $wope_medium_thumb;
					
					$wope_post_media_type 	= get_post_meta( $post->ID, 'post_media_type', true );
					$wope_embed_code 		= get_post_meta( $post->ID, 'embed_code', true );
					$wope_image_array 		= get_post_meta( $post->ID, 'image_array', false );

					if(empty($wope_post_media_type)){
						$wope_post_media_type = 'image';
					}
					
					if(empty($wope_image_array[0])){
						$wope_image_array 		= array();
					}else{
						$wope_image_array 		= $wope_image_array[0];
					}
					
					?>
					
					<?php if($wope_post_media_type == 'youtube'){?>
						<div class="post-entry-media">
							<div class="youtube-container">
								<?php wope_var($wope_embed_code);?>
							</div>
						</div>
					<?php }elseif($wope_post_media_type == 'vimeo'){?>
						<div class="post-entry-media">
							<div class="vimeo-container">
								<?php wope_var($wope_embed_code);?>
							</div>
						</div>
					<?php }elseif($wope_post_media_type == 'soundcloud'){?>
						<div class="post-entry-media">
							<?php wope_var($wope_embed_code);?>
						</div>
					<?php }elseif($wope_post_media_type == 'image_slide'){
					?>
						<?php if(is_array($wope_image_array)){?>
						<div class="post-entry-media">
							<div class="post-flexslider">
								<div class="flexslider" id="flexslider-post-<?php echo esc_attr($post->ID);?>">
									<ul class="slides">
									<?php foreach($wope_image_array as $wope_each_slide){
									?>
										<li>
											<img alt="<?php the_title();?>" src="<?php echo esc_url($wope_each_slide);?>" />
										</li>
									<?php }?>
									</ul>
								</div>
							</div>
							<script>
								jQuery(document).ready(function(){
									jQuery('#flexslider-post-<?php echo esc_js($post->ID);?>').flexslider({
										controlNav: false,            
										directionNav: true,
										animation : 'fade',
										slideshowSpeed :5000,
									});
								});
							</script>
						</div>
						<?php }?>
					<?php }else{?>
						<?php if ( has_post_thumbnail() ) {?>
							<div class="post-entry-media">
								<?php if ( $wope_medium_thumb ) { ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wope-thumb-medium');?></a>
								<?php } else { ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<?php } ?>
								
							</div>
						<?php }?>
					<?php }?>