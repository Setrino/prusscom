			<?php 
				//tag more
				$more = 0;
			?>
			
			<div class="post-entry">
				<div <?php post_class(); ?>>
					<div class="post-entry-body">
						<div class="post-entry-heading">
							<div class="post-entry-meta">
								<?php echo get_the_date('');?>
								| <?php the_category(' - ');?>
								| <?php comments_number( esc_html__('No Comment','mega') , esc_html__('1 Comment','mega'), esc_html__('% Comments','mega') ); ?>
							</div>
							<div class="post-entry-title">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="section-line">
								<span class="section-line1"></span><br><span class="section-line2"></span>
							</div>
						</div>
						<?php get_template_part( 'content-media');?>
						<div class="post-entry-content content">
							<?php the_content(  ''  ); ?>
						</div>
						<div class="cleared"></div>
						
						<div class="post-entry-more-shares">
							<?php if(strstr($post->post_content,'<!--more-->')) { ?>
							<div class="post-entry-button content">
								<a class="button normal-button" href="<?php the_permalink(); ?>" ><?php esc_html_e('continue reading','mega');?></a>
							</div>
							<?php } ?>
							
							<div class="cleared"></div>
						</div>
					</div>
					
				</div>

				
			</div>
			<!-- End Post Entry -->
			