<?php
/**
 * The main template file.
 */
$wope_sidebar_options = get_option('wope-sidebar');

get_header(); ?>
			</div><!-- End Header Content -->
		</div> <!-- end Header -->
	<div class="cleared"></div>
	<div id="body" class="content-page index-page">
		<div class="wrap">
			<div class="big-column left">
				<?php
					if ( have_posts() ) {
						$post_count = wp_count_posts();
						while ( have_posts() ) {
							the_post();
							get_template_part( 'content');
						}
					}
				?>
				
				<?php
					$wp_query;
					if($wp_query->max_num_pages > 1){
				?>
					<div class="paginate">
						<?php wope_show_paginate_links(); ?>
					</div>
				<?php } ?>
			</div>
			<!-- End Big Column -->
			
			<div class="small-column right">
				<?php dynamic_sidebar( $wope_sidebar_options['page-sidebar'] ); ?>
			</div><!-- End Small Column -->
			
			<div class="cleared"></div>			
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>