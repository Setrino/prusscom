			<?php 
				//tag more
				$more = 0;
				
				
				//post medium thumb
				global $medium_thumb;
				$medium_thumb = 1;
				
				
			?>
			
			<div class="post-entry">
				<div <?php post_class(); ?>>
					<div class="post-entry-body">
						<?php get_template_part( 'content-media');?>
						<div class="post-entry-detail">
							<div class="post-entry-heading">
								<div class="post-entry-meta">
									<?php echo get_the_date('');?>
									| <?php the_category(' - ');?>
								</div>
								<div class="post-entry-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="section-line section-line-left">
									<span class="section-line1"></span><br><span class="section-line2"></span>
								</div>
							</div>
							<div class="post-entry-content content">
								<?php the_excerpt(  ''  ); ?>
							</div>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div>
			<!-- End Post Entry -->
			