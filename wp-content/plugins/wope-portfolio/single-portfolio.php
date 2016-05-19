<?php
/**
 * The main template file.
 */
//load site option
$portfolio_options = get_option('wope-portfolio');
$main_option = get_option('wope-main');
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


//load portfolio option
$portfolio_extra_content 	= get_post_meta( $post->ID, 'portfolio_extra_content', true );
$portfolio_media_type 		= get_post_meta( $post->ID, 'portfolio_media_type', true );
$portfolio_media_position 	= get_post_meta( $post->ID, 'portfolio_media_position', true );
$embed_code 				= get_post_meta( $post->ID, 'embed_code', true );
$portfolio_like_number 		= get_post_meta( $post->ID, 'portfolio_like_number', true );
$image_array 				= get_post_meta( $post->ID, 'image_array', false );
$image_array = $image_array[0];


//get main portfolio page url
if( trim($portfolio_options['portfolio_page_url']) != ''){
	$portfolio_url = trim($portfolio_options['portfolio_page_url']);
}else{
	$portfolio_url = home_url()."/".trim($portfolio_options['portfolio_slug']);
}



	
get_header(); 
?>
	<?php if ( have_posts() ) { while (have_posts()) {  the_post(); ?>
					<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
						<div class="wrap">
							<div id="page-heading-left">
								<h1 id="page-title">
									<h1 id="page-title"><?php the_title();?></h1>
								</h1>
							</div>
							<div id="breadcrumb">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a>
								/ <a href="<?php echo get_post_type_archive_link('portfolio');?>"><?php echo esc_html($portfolio_options['portfolio_label']);?></a> / <span><?php the_title(); ?></span>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				</div><!-- End Header Content -->
			</div> <!-- end Header -->
		<div class="cleared"></div>

		
		
		<div id="body" class="content-page">
			<div class="wrap">
				<div class="full-column">
					<?php if($portfolio_media_position == 1){ //media right?>
						<div class="portfolio-single-container portfolio-single-right">
							<div class="portfolio-big-column portfolio-content right">	
								<div class="portfolio-single-media"><?php show_portfolio_part('media');?></div>
							</div>
							<div class="portfolio-small-column left">
								<div class="portfolio-single-data">
									<div class="portfolio-single-content content">
										<?php show_portfolio_part('content'); ?>
									</div>
									<div class="portfolio-single-meta">
										<?php show_portfolio_part('detail'); ?>
										<?php show_portfolio_part('share'); ?>
									</div>
								</div>
							</div>
							<div class="cleared"></div>
						</div>
					<?php }elseif($portfolio_media_position == 2){ //media center?>
						<div class="portfolio-single-container portfolio-single-center">
							<div class="portfolio-big-column top">	
								<div class="portfolio-single-media"><?php show_portfolio_part('media');?></div>
							</div>
							<div class="portfolio-small-column bottom">
								<div class="portfolio-single-data">
									<div class="portfolio-single-content content">
										<?php if(trim($portfolio_extra_content) != ''){
											show_portfolio_part('content');
										}?>
									</div>
									<div class="portfolio-single-meta">
										<?php show_portfolio_part('detail'); ?>
										<?php show_portfolio_part('share'); ?>
									</div>
									<div class="cleared"></div>
								</div>
							</div>
							<div class="cleared"></div>
						</div>
					<?php }else{//media left?>
						<div class="portfolio-single-container portfolio-single-left">
							<div class="portfolio-big-column portfolio-content left">	
								<div class="portfolio-single-media"><?php show_portfolio_part('media');?></div>
							</div>
							<div class="portfolio-small-column right">
								<div class="portfolio-single-data">
									<div class="portfolio-single-content content">
										<?php show_portfolio_part('content'); ?>
									</div>
									<div class="portfolio-single-meta">
										<?php show_portfolio_part('detail'); ?>
										<?php show_portfolio_part('share'); ?>
									</div>
								</div>
							</div>
							<div class="cleared"></div>
						</div>
					<?php }?>
				</div>		
			</div>
				
			
			<?php 
			$tax_query['relation'] = 'OR';
			$categories = get_the_terms( $post->ID , 'portfolio-category' );
			if(is_array($categories)){
				foreach ( $categories as $each_category ) {
					$tax_query[] = array(
						'taxonomy' => 'portfolio-category',
						'field' => 'slug',
						'terms' => $each_category->slug,
					);
				}
			}
			$args = array(
				'tax_query' => $tax_query,
				'post_type' => 'portfolio',
				'posts_per_archive_page' => 3,
				'post__not_in' => array($post->ID),
				'orderby' => 'rand',
			);
			
			// The Query
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {

			?>
			<div class="portfolio-relatives <?php if($portfolio_media_position == 2){ echo "portfolio-relatives-center"; }; ?> ">
				<div class="wrap-column">
					<div class="wrap">
						<div class="post-section-title">
							<span><?php _e('Related Portfolio','wope');?></span>
						</div>
					</div>
						
					<?php 
					$post_num = 1;
					$post_current = 1;
					$post_last = 1;
					$total_post = $the_query->post_count;
					
					$thumb_size = 'wope-thumb-grid-portfolio' ;
					
					while ( $the_query->have_posts() ) : $the_query->the_post();
						if($post_last < 3){
							$column_last = '';
							$post_last ++;
							$clear_div = '';
						}else{
							$column_last = 'column-last';
							$post_last = 1;
							$clear_div = '<div class="cleared"></div>';
						}
						$end_class = wopo_get_end_class($post_current,$total_post,3);
						$post_current++;	
						
						$portfolio_cat_links = wopo_get_terms_links($post->ID, 'portfolio-category');
						
					?>
					<div class="column3_1 <?php echo esc_attr($column_last);?>">
						<div class="portfolio-cell">
							<div class="portfolio-cell-thumb">
								<div class="portfolio-cell-bg"></div>
								<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
								<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) {?>
										<?php the_post_thumbnail( $thumb_size );?>
									<?php }?>	
								</a>
							</div>
							<div class="portfolio-cell-data">
								<div class="portfolio-cell-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="portfolio-cell-categories"><?php wopo_var(implode(' / ',$portfolio_cat_links));?></div>
							</div>
						</div>
					</div>
					<?php wopo_var($clear_div);?>
					<?php
					endwhile;
					?>
					<div class="cleared"></div>
				</div>
				<?php
					wp_reset_postdata();
				
				}?>
			</div>	
		</div>
	<?php } }?>	
<?php
	function show_portfolio_part($part){
		global $portfolio_extra_content;
		global $portfolio_media_type;
		global $portfolio_media_position;
		global $embed_code;
		global $portfolio_like_number;
		global $image_array;
		global $post;
		global $_COOKIE;
		
		if($part == 'media'){ ?>
			<?php if($portfolio_media_type == 'youtube'){ //youtube?>
				<div class="youtube-container"> <?php wope_var($embed_code);?> </div>
			<?php }elseif($portfolio_media_type == 'vimeo' ){ //vimeo?>
				<div class="vimeo-container"> <?php wope_var($embed_code);?> </div>
			<?php }elseif($portfolio_media_type == 'image_slide'){ //image slider?>
				<?php if(is_array($image_array)){?>
					<div class="portfolio-flexslider">
						<div class="flexslider">
							<ul class="slides">
							<?php foreach($image_array as $each_slide){
							?>
							  <li>
									<img alt="<?php echo esc_attr($post->post_title);?>" src="<?php echo esc_url($each_slide);?>" />
							  </li>
							<?php }?>
							</ul>
						</div>
					</div>
					<script>
						jQuery(document).ready(function(){
							jQuery('.flexslider').flexslider({
								controlNav: false,                    
								directionNav: true,
								animation : 'fade',
								slideshowSpeed :5000 ,	
							});
						});
					</script>
				<?php }?>
			<?php }elseif($portfolio_media_type == 'image_list'){ //image list
				if(is_array($image_array)){?>
					<?php foreach($image_array as $each_slide){?>
					  <div class="image-list-each">
							<img alt="<?php echo esc_attr($post->post_title);?>" src="<?php echo esc_url($each_slide);?>" />
					  </div>
					<?php }?>
				<?php }?>		
			<?php }else{?>
				<?php if ( has_post_thumbnail() ) {?>
					<?php the_post_thumbnail();?>
				<?php }?>	
			<?php }?>	
		<?php }elseif($part == 'content'){?>
			<?php the_content();?>
		<?php }elseif($part == 'detail'){
			wopo_var(apply_filters('the_content',trim($portfolio_extra_content)));
		?>
		<?php }elseif($part == 'category'){?>
			<div class="portfolio-single-category">
				<div class="portfolio-single-meta-name"><?php _e('category :','wope');?></div>
				<div class="portfolio-single-meta-content"><?php
					$terms = get_the_terms( $post->ID, 'portfolio-category' );		
					
					if ( $terms && ! is_wp_error( $terms ) ) {
						$portfolio_categories = array();
						foreach ( $terms as $term ) {
							$portfolio_categories[] = '<a href="'.get_term_link($term->term_id,'portfolio-category').'">'.ucwords(strtolower($term->name)).'</a>';
						}

						wopo_var(implode(', ',$portfolio_categories));
					}
					?>
				</div>
			</div>
			
			
		<?php }elseif($part == 'navigation'){
			$next_link =  get_adjacent_post_link( '%link' , '<i class="fa fa-angle-left"></i>'.' Prev Project', false, '',false, 'portfolio-category' ); 
			$prev_link =  get_adjacent_post_link( '%link' , 'Next Project '.'<i class="fa fa-angle-right"></i>', false, '',true, 'portfolio-category' );
			
			if(trim($portfolio_extra_content) == ''){
				$detail_bottom_class = 'empty-portfolio-detail';
			}else{
				$detail_bottom_class = '';
			}
	
			
			$post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			
			
		?>
			<div class="portfolio-single-navigation">
				<?php if($next_link != ''){?>
					<div class="portfolio-single-navigation-left">
						<?php wopo_var($next_link);?>
					</div>
				<?php }?>
				<?php if($prev_link != ''){?>
					<div class="portfolio-single-navigation-right">
						<?php wopo_var($prev_link);?>
					</div>
				<?php }?>
				<div class="cleared"></div>
			</div>
			
		<?php 
			}elseif($part == 'share'){
			$portfolio_options = get_option('wope-portfolio');
			if($portfolio_options['portfolio_social_share']){
		?>	
			<div class="portfolio-single-share">
				<span class="portfolio-single-detail-name"><?php _e('share :','wope');?></span>
				<span class="portfolio-single-detail-content">
					
					<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share facebook-share" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
					
					<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=640');return false;" class="post-share twitter-share" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"></i> </a>
					
					<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=340,width=640');return false;" class="post-share google-share" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i> </a>
					
					<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=640,width=750');return false;" class="post-share pinterest-share" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>"><i class="fa fa-pinterest"></i> </a>
					
					<a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=210,width=640');return false;" class="post-share linkedin-share" href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i> </a>
					
				</span>
			</div>
			<?php }	?>

		<?php }
	}
?>
<?php get_footer(); ?>