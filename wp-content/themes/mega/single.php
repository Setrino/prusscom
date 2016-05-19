<?php
/**
 * The main template file.
 */

//load site option
$wope_sidebar_options = get_option('wope-sidebar');
$wope_post_option = get_option('wope-post');
$wope_main_option = get_option('wope-main');
$wope_header_option = get_option('wope-header');

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

//process style,class
if($header_style == 'white'){ 
	$heading_class = 'heading-gray';
}else{
	$heading_style = $header_style;
	$heading_class = 'heading-'.$heading_style;
}

$heading_align_class = 'heading-align-'.$heading_align;

get_header(); ?>
	<?php if ( have_posts() ) { 
			/* Start the Loop */
			the_post(); 
			$wope_post_media_type = get_post_meta( $post->ID, 'post_media_type', true );
			$wope_embed_code 		= get_post_meta( $post->ID, 'embed_code', true );
			if(empty($wope_post_media_type)){
				$wope_post_media_type = 'image';
			}
			
			//builde slide array
			$wope_image_array 		= get_post_meta( $post->ID, 'image_array', false );
		?>
		
					<!-- Page heading -->
					<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
						<div class="wrap">
							<div id="page-heading-left">
								<h1 id="page-title">
									<?php esc_html_e('Blog','mega');?>
								</h1>
							</div>
							<div id="breadcrumb">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a> / 
								<span><?php esc_html_e('Blog','mega');?></span> / 
								<span><?php the_title(); ?></span>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				</div><!-- End Header Content -->
			</div> <!-- end Header -->
		<div class="cleared"></div>
		
		<div id="body" class="content-page">
			<div class="wrap">
				<div class="big-column left">
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">	
						<div class="post-entry-single">
							<div class="post-entry-heading">
							<div class="post-entry-meta">
								<?php wope_var(get_the_date(''));?>
								| <?php the_category(' - ');?>
								| <?php comments_number( esc_html__('No Comment','mega') , esc_html__('1 Comment','mega'), esc_html__('% Comments','mega') ); ?>
							</div>
							<div class="post-entry-title">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="section-line section-line-left">
								<span class="section-line1"></span><br><span class="section-line2"></span>
							</div>
						</div>
							<?php get_template_part( 'content-media');?>
							<div class="post-entry-body">
								
							
								<div class="post-entry-content content">
									<?php the_content(  ''  ); ?>
									<div class="cleared"></div>
								</div>
								
								<?php if(has_tag()){?>
									<div class="post-entry-tags">
										<?php the_tags( 'Tags: ', ', ', '<br />' ); ?> 
									</div>
								<?php }?>

								<?php if($wope_post_option['post_social_share'] == '1'){?>
									<div class="post-entry-share">
										<?php esc_html_e('Share','mega');?>  :

											<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share facebook-share" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
					
											<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share twitter-share" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"></i> </a>
											
											<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=340,width=640');return false;" class="post-share google-share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i> </a>
											
											<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=640,width=750');return false;" class="post-share pinterest-share" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><i class="fa fa-pinterest"></i> </a>
											
											<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=210,width=640');return false;" class="post-share linkedin-share" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i> </a>

										
									</div>
									
								<?php } ?>

								
							</div>


						</div><!-- End Post Entry -->
							
							
							
							<?php if(trim(get_the_author_meta('description')) != ''){?>
							<div class="author-bio">
								<div class="author-bio-avatar">
									<?php wope_var(get_avatar( get_the_author_meta('email') , 100 )); ?>
								</div>
								<div class="author-bio-details">
									<div class="author-bio-title">
										ABOUT THE AUTHOR
									</div>
									<div class="author-bio-description">
										<?php the_author_meta('description'); ?>
									</div>
									<?php if(get_the_author_meta('user_url') != ''){?>
										<a target="_blank" class="author-bio-url" href="<?php the_author_meta('user_url');?>">View Website</a>
									<?php }?>
								</div>
								<div class="cleared"></div>
							</div>
							<?php }?>
							
							<?php 
							
								//get current categories
								$wope_all_category = wp_get_post_categories($post->ID);
								
								$args = array(
									'posts_per_page' 	=> 3,
									'orderby' 			=> 'rand',
									'category__in' 		=> $wope_all_category,
									'post__not_in'		=> array($post->ID)
								);
								
								// The Query
								$wope_the_query = new WP_Query( $args );
								
								// The Loop
								if ( $wope_the_query->have_posts() ) {?>
								<div class="post-relative">
									<div class="post-section-title"><?php esc_html_e('Related Posts ','mega');?></div>
									
									<?php
									$post_count = 1;
									while ( $wope_the_query->have_posts() ) : $wope_the_query->the_post();
										if($post_count == 3){
											$clear_div = '<div class="cleared"></div>';
											$column_class = 'column-last';
											$post_count = 1;
										}else{
											$clear_div = '';
											$column_class = '';
											$post_count ++;
										}
										?>
										<div class="column1_3 <?php echo esc_attr($column_class);?>">
											<div class="post-relative-entry">
												<div class="post-relative-thumb">
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wope-thumb-grid');?>
													<span class="post-relative-bg"></span>
													<h2 class="post-relative-title"><?php the_title();?></h2>
													</a>
												</div>
											</div>
										</div>
										<?php wope_var($clear_div);?>
										<?php
									endwhile;
									?>
									<div class="cleared"></div>
								</div>
								<?php
								}
								
								// Reset Post Data
								wp_reset_postdata();
							 ?>
				
						</div>
						
						<?php comments_template( '', true ); ?>
						<div class="cleared"></div>
					</div>
					<!-- End Big Column -->
					
					<div class="small-column right">
						<?php dynamic_sidebar( $wope_sidebar_options['single-sidebar'] ); ?>
					</div><!-- End Small Column -->
					<div class="cleared"></div>
				</div>
			
		</div><!-- End Body-->
	<?php } ?>	
<?php get_footer(); ?>