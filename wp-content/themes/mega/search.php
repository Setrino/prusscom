<?php
/**
 * The main template file.
 */
//load site option
$wope_sidebar_options = get_option('wope-sidebar');
$wope_main_option = get_option('wope-main');

$wope_default_posts_per_page = get_option( 'posts_per_page' );
$wope_search_results = $wp_query->found_posts; 

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

get_header(); 
?>
	<?php if ( is_search() ) { ?>
		<?php if ( have_posts() ) { ?>
			
						<!-- Page heading -->
						<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
							<div class="wrap">
								<div id="page-heading-left">
									<h1 id="page-title">
										<?php esc_html_e('Page Not Found','mega');?>
									</h1>
								</div>
								<div id="breadcrumb">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a> / 
									<span><?php printf( esc_html__( 'Search Results for: %s', 'mega' ), get_search_query() ); ?></span>
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

						<div class="top-search-form have-search-result content">
							<div class="search-form-title">Try New Search</div>
							<div class="search-form-subtitle">If you don’t find what you want please do another search</div>
							<?php get_search_form(); ?>
						</div>
						<div class="post-entry-section">
						<h3 class="search-form-results"><?php wope_var($wope_search_results) . " "; ?> <?php  printf( esc_html__( 'Search Results for: %s', 'mega' ), get_search_query() ); ?></h3>
							<?php
								if ( have_posts() ) {
									while ( have_posts() ) {
										the_post();
										get_template_part( 'content-search');
									}
								}
							?>
						</div>
						<?php  if($wope_search_results > $wope_default_posts_per_page) { ?>
						<div class="paginate">
							<?php wope_show_paginate_links();?>
						</div>
						<?php  } ?>
					</div>
					<!-- End Big Column -->
					
					<div class="small-column right">
							<?php dynamic_sidebar( $wope_sidebar_options['page-sidebar'] ); ?>
					</div><!-- End Small Column -->
					
					<div class="cleared"></div>
				</div>
				
			</div><!-- End Body-->
		<?php }else{?>
			
						<!-- Page heading -->
						<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
							<div class="wrap">
								<div id="page-heading-left">
									<h1 id="page-title">
										<?php esc_html_e('Page Not Found','mega');?>
									</h1>
								</div>
								<div id="breadcrumb">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a> / 
									<span><?php printf( esc_html__( 'Search Results for: %s', 'mega' ), get_search_query() ); ?></span>
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
						<div class="top-search-form content">
							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mega' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>
					<!-- End Big Column -->
					
					<div class="small-column right">
						<?php dynamic_sidebar( $wope_sidebar_options['page-sidebar'] ); ?>

					</div><!-- End Small Column -->
					
					<div class="cleared"></div>
					</div>
				</div>
			</div><!-- End Body-->
		<?php }?>
	<?php }else{?>
					<!-- Page heading -->
					<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
						<div class="wrap">
							<div id="page-heading-left">
								<h1 id="page-title">
									<?php esc_html_e('Page Not Found','mega');?>
								</h1>
							</div>
							<div id="breadcrumb">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a>/ 
								<span><?php printf( esc_html__( 'Search Results for: %s', 'mega' ), get_search_query() ); ?></span>
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
					<div class="top-search-form content">
						<?php get_search_form(); ?>
					</div>
				</div>
				<!-- End Big Column -->
				
				<div class="small-column right">
					<?php dynamic_sidebar( $wope_sidebar_options['page-sidebar'] ); ?>
				</div><!-- End Small Column -->
				
				<div class="cleared"></div>

			</div>
		</div><!-- End Body-->
	<?php }?>
<?php get_footer(); ?>