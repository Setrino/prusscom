			<?php 
				
				//tag more
				$more = 0;

			?>
			
			<div class="post-search-entry content">
				<div class="post-search-entry-icon">
					<i class="fa fa-arrow-circle-right"></i>
				</div>
				<div class="post-search-entry-container">
					<div class="post-search-entry-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="post-entry-meta">
						<?php the_date('F j, Y');?>
					</div>
					<div class="post-search-entry-content">
						<?php 
						global $post;
						if (!get_the_excerpt()) {
							echo "<p>This result have no content to display.</p>";
						}else{
							the_excerpt(  ''  ); 
						}						
						?>
					</div>
				</div>
				<div class="cleared"></div>
			</div>
			<!-- End Post Entry -->
			