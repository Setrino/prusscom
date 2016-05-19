<?php
	global $wope_font_list;
	$social_array = array( 'rss','behance','bitbucket','codepen','delicious', 'deviantart', 'digg', 'dribbble', 'dropbox', 'drupal', 'facebook', 'flickr', 'foursquare', 'git', 'github', 'gittip', 'google-plus', 'hacker-news', 'instagram', 'joomla', 'jsfiddle', 'linkedin', 'maxcdn', 'openid', 'pinterest', 'reddit', 'share-alt', 'soundcloud', 'spotify', 'stack-exchange', 'stack-overflow', 'stumbleupon', 'tumblr', 'twitter', 'vimeo-square', 'vine', 'vk', 'weibo', 'weixin', 'wordpress', 'xing', 'yahoo', 'youtube', );
	
	
	//load color functions
	if($_POST){
		global $wpdb;
		//Main options
		$wope_main_option_array = array(
			'logo_url' 					=> wope_check_post('logo_url'),
			'logo_retina_url' 			=> wope_check_post('logo_retina_url'),
			'logo_retina_width' 		=> wope_check_post('logo_retina_width'),
			'logo_retina_height' 		=> wope_check_post('logo_retina_height'),
			'white_logo_url' 			=> wope_check_post('white_logo_url'),
			'white_logo_retina_url' 	=> wope_check_post('white_logo_retina_url'),
			'scroll_logo_url' 			=> wope_check_post('scroll_logo_url'),
			'scroll_logo_retina_url' 	=> wope_check_post('scroll_logo_retina_url'),
			'scroll_header' 			=> wope_check_post('scroll_header'),
			'responsive' 				=> wope_check_post('responsive'),
			'site_layout' 				=> wope_check_post('site_layout'),
			'copyright' 				=> wope_check_post('copyright'),
			'custom_js' 				=> wope_check_post('custom_js'),
			'custom_js_footer' 			=> wope_check_post('custom_js_footer'),
			'custom_css' 				=> wope_check_post('custom_css'),
			'bg_type' 					=> wope_check_post('bg_type'),
			'bg_image' 					=> wope_check_post('bg_image'),
			'bg_image_pattern' 			=> wope_check_post('bg_image_pattern'),
			'bg_color' 					=> wope_check_post('bg_color'),
			'section_title_tag' 		=> wope_check_post('section_title_tag'),
			'section_subtitle_tag' 		=> wope_check_post('section_subtitle_tag'),
			'widget_title_tag' 			=> wope_check_post('widget_title_tag'),
		);
		update_option( 'wope-main', $wope_main_option_array);

		//Main options
		$wope_wpml_option_array = array(
			'wpml_selector' 			=> wope_check_post('wpml_selector'),

		);
		update_option( 'wope-wpml', $wope_wpml_option_array);
		
		//Header options
		$header_option_array = array(
			'contact_line_phone' 	 		 => wope_check_post('contact_line_phone'),
			'contact_line_email' 	 		 => wope_check_post('contact_line_email'),
			'contact_line_time' 		 	 => wope_check_post('contact_line_time'),
			'topbar' 				 		 => wope_check_post('topbar'),
			'topbar_left_search'	 		 => wope_check_post('topbar_left_search'),
			'topbar_left_social' 	 		 => wope_check_post('topbar_left_social'),
			'topbar_left_contact'	 		 => wope_check_post('topbar_left_contact'),
			'topbar_right_search' 	 		 => wope_check_post('topbar_right_search'),
			'topbar_right_social' 	 		 => wope_check_post('topbar_right_social'),
			'topbar_right_contact' 	 		 => wope_check_post('topbar_right_contact'),
			'header_style' 				 	 => wope_check_post('header_style'),
			'header_text_color' 			 => wope_check_post('header_text_color'),
			'heading_style' 				 => wope_check_post('heading_style'),
			'heading_align' 				 => wope_check_post('heading_align'),
			'header_bg_color'				 => wope_check_post('header_bg_color'),
			'header_bg_image' 				 => wope_check_post('header_bg_image'),
			'header_bg_transparent'			 => wope_check_post('header_bg_transparent'),
		);
		update_option( 'wope-header', $header_option_array);
		
		
		
		//Socials options
		$social_option_array = array();
		foreach($social_array as $each_social){
			$social_option_array[$each_social] =  wope_check_post('social-'.$each_social);
		}
		update_option( 'wope-social', $social_option_array);
		
		//post options
		$wope_post_option_array = array(
			'excerpt_length' 		=> wope_check_post('excerpt_length'),
			'excerpt_suffix' 		=> wope_check_post('excerpt_suffix'),
			'post_grid_column' 		=> wope_check_post('post_grid_column'),
			'post_grid_row' 		=> wope_check_post('post_grid_row'),
			'post_social_share' 	=> wope_check_post('post_social_share'),
		);
		update_option( 'wope-post', $wope_post_option_array);
		
		//portfolio options
		$portfolio_option_array = array(
			'portfolio_label'					=> wope_check_post('portfolio_label'),
			'portfolio_slug'					=> wope_check_post('portfolio_slug'),
			'portfolio_category_slug'			=> wope_check_post('portfolio_category_slug'),
			'portfolio_category_grid_column'	=> wope_check_post('portfolio_category_grid_column'),
			'portfolio_category_grid_row'		=> wope_check_post('portfolio_category_grid_row'),
			'portfolio_page_url'				=> wope_check_post('portfolio_page_url'),
			'portfolio_pagination_type'			=> wope_check_post('portfolio_pagination_type'),
			'portfolio_social_share' 			=> wope_check_post('portfolio_social_share'),
		);
		update_option( 'wope-portfolio', $portfolio_option_array);
		
		//sidebar options
		$sidebar_option_array = array(
			'page-sidebar' 			=> wope_check_post('page-sidebar'),
			'archive-sidebar' 		=> wope_check_post('archive-sidebar'),
			'single-sidebar' 		=> wope_check_post('single-sidebar'),
		);
		update_option( 'wope-sidebar', $sidebar_option_array);
		
		//update font set
		$font_option_array = array(
			'font_heading' => wope_check_post('font_heading'),
			'font_menu' => wope_check_post('font_menu'),
			'font_body' => wope_check_post('font_body'),
		);
		update_option( 'wope-font', $font_option_array);
		
		//update color
		$color_option_array = array(
			'highlight-color' 	=> wope_check_post('highlight-color'),
			'semi-color' 	=> wope_check_post('semi-color'),
		);
		update_option( 'wope-color', $color_option_array);
		
		$msg = "Settings saved.";
		
	}
	
	
	//get options
	$wope_main_option 		= get_option('wope-main');
	$wope_wpml_option 		= get_option('wope-wpml');
	$header_option 			= get_option('wope-header');
	$social_option 			= get_option('wope-social');
	$wope_post_option 		= get_option('wope-post');
	$portfolio_option 		= get_option('wope-portfolio');
	$wope_sidebar_option 	= get_option('wope-sidebar');
	$font_option 			= get_option('wope-font');
	$color_option = get_option('wope-color');
	
	$unique_font_option = array_unique($font_option);
	foreach($unique_font_option as $each_font){
		if($key = array_key_exists($each_font,$wope_font_list)){
			wp_register_style( 'wope-gfont-'.$each_font,'http://fonts.googleapis.com/css?family='.$wope_font_list[$each_font][1]);
			wp_enqueue_style('wope-gfont-'.$each_font);
		}
	}
	
	//get post categories
	$args = array(
		'type'		 =>'post',
		'taxonomy'   => 'category',
		'hide_empty' => '0'
	); 
	$wope_post_categories = get_categories($args); 
	
	//get portfolio categories
	$args = array(
		'type'		 =>'portfolio',
		'taxonomy'   => 'portfolio-category',
		'hide_empty' => '0'
	); 
	$wope_portfolio_taxonomies = get_categories($args); 
	
	//sidebar
	$sidebar = array(
		'page-sidebar' 		=> 'Page Sidebar',
		'archive-sidebar' 	=> 'Archive Sidebar',
		'single-sidebar' 	=> 'Single Post Sidebar',
	);
	
	function sidebar_selector($sidebar,$current,$select_name){
		?>
			<select name="<?php wope_var($select_name);?>">
		<?php
			foreach($sidebar as $key => $each_sidebar){
				if($current == $key){
		?>
					<option selected="selected" value="<?php wope_var($key);?>"><?php wope_var($each_sidebar);?></option>
		<?php	
				}else{
		?>
					<option value="<?php wope_var($key);?>"><?php wope_var($each_sidebar);?></option>
		<?php
				}
			}
		?>
			</select>
		<?php
	}

	/*  FIX BROKEN PAGE BUILDER 

	$args = array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);

	// The Query
	$the_query = new WP_Query( $args );
	$my_array = array();
	$my_id = 1;
	// The Loop
	if ( $the_query->have_posts() ) {
	
		while ( $the_query->have_posts() ) {
			$my_post = $the_query->the_post();
			
			$my_post = $the_query->post;
			$page_builder 	= get_post_meta( $my_post->ID, 'page-builder', true );
			$my_array[$my_id]['title'] = get_the_title();
			$my_array[$my_id]['data'] = serialize($page_builder);

			$my_id++;
			
		}
		
	} 

	//file_put_contents(THEME_PATH.'demo/demo_file.txt', serialize($my_array));

	/* restore pages data 
	wp_reset_postdata();
	*/

	/* script to fix import pages */
	$fix_import_page = 0;

	if (isset($_GET['task'])){
		if($_GET['task'] == 'update_import_fix'){
			$args = array(
				'post_type' => 'page',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);

			// The Query
			$the_query = new WP_Query( $args );
			$my_array = array();
			$my_id = 1;
			// The Loop
			if ( $the_query->have_posts() ) {
			
				while ( $the_query->have_posts() ) {
					$my_post = $the_query->the_post();
					
					$my_post = $the_query->post;
					$page_builder 	= get_post_meta( $my_post->ID, 'page-builder', true );
					$my_array[$my_id]['title'] = get_the_title();
					$my_array[$my_id]['data'] = serialize($page_builder);

					$my_id++;
					
				}
				
			} 

			file_put_contents(wope_theme_path.'demo/demo_file.txt', serialize($my_array));
		}

		if($_GET['task'] == 'import'){
			$current = file_get_contents(wope_theme_path.'demo/demo_file.txt');
			$my_data = unserialize($current);

			foreach($my_data as $each_data){
				$current_post = get_page_by_title( $each_data['title'], 'OBJECT', 'page' );
				update_post_meta( $current_post->ID, 'page-builder',  unserialize($each_data['data']));
				//var_dump($current_post->post_title);
			}

			$fix_import_page = 1;
		}

		if($_GET['task'] == 'remove_import'){
			update_option( 'display_import_tab', 1 );
		}

	}

	$wope_display_import_tab = get_option('display_import_tab');
?>
<form action="" id="wope_option_form" method="post">
	<div class="wrap">
		
		<div id="option-area">
			<div id="option-left-column">
				<div class="admin-logo">
					<img src="<?php wope_var(get_template_directory_uri());?>/admin-logo.png">
				</div>
				<div id="option-tab-buttons">
					<ul>
						<li><a class="tab-current option-tab-menu" id="option-tab-main" href="#main">Main</a> </li>
						<li><a id="option-tab-header" href="#header">Header</a>  </li>

						</li>
						<li><a id="option-tab-sidebar" href="#sidebar">Sidebar </a> </li>			
						<li><a id="option-tab-color" href="#color">Color Scheme</a> </li>
						<li>
							<div class="menu-multi">
								<i class="fa fa-angle-down"></i>
								<span >Typography</span> 
								<ul class="option-tab-submenu" >
									<li ><a id="option-tab-font" href="#font">Typography</a> </li>
									<li style="display:none"><a id="option-tab-font-size" href="#font-size">Font Size</a> </li>
									<li style="display:none"><a id="option-tab-line-height" href="#line-height">Line Height</a> </li>
									<li style="display:none"><a id="option-tab-letter-spacing" href="#letter-spacing">Letter Spacing</a>  </li>
									<li style="display:none"><a id="option-tab-text-transform" href="#text-transform">Text Transform</a> </li>
									<li style="display:none"><a id="option-tab-font-weight" href="#font-weight">Font Weight</a>  </li>
									<li style="display:none"><a id="option-tab-font-style" href="#font-style">Font Style</a> </li>
								</ul>
							</div>
						</li>
						<li><a id="option-tab-blog" href="#blog">Blog </a> </li>
						<li><a id="option-tab-portfolio" href="#portfolio">Portfolio </a> </li>
						<li><a id="option-tab-social" href="#social">Social </a> </li>
						<li><a style="display:" id="option-tab-wpml" href="#wpml">WPML Multilingual</a> </li>
						<?php if($wope_display_import_tab != 1){?>
							<li><a id="option-tab-import" href="#import">Import Demo</a> </li>
						<?php }?>
				</div>
			</div>

			<div id="option-tab-container">
				<div class="option-section">
					<?php if(isset($msg)){?>
						<div class="input-section">
							<div class="msg">
								<?php wope_var($msg);?>
							</div>
						</div>
					<?php }?>
					<button class="form-submit-button button button-primary button-large" > Save Changes </button>
				</div>
					
				<div class="option-tab tab-current" id="option-tab-main-content">
					
					<div class="section-title">General Options</div>
					
					

					
					<div class="option-section">
						<div class="column3">
							<div class="option-title">Responsive</div>
							<input type="checkbox" name="responsive" id="responsive" value="1" <?php wope_var(checked($wope_main_option['responsive'],1));?>><label for="responsive">Turn on Responsive</label>
						</div>							
						<div class="column3">
							<div class="option-title">Site Layout</div>
							<input type="radio" name="site_layout" id="site_layout_fullwidth" value="0" <?php wope_var(checked($wope_main_option['site_layout'],0));?>><label for="site_layout_fullwidth">Full Width</label>
							<input type="radio" name="site_layout" id="site_layout_boxed" value="1" <?php wope_var(checked($wope_main_option['site_layout'],1));?>><label for="site_layout_boxed">Boxed</label>
						</div>
						<div class="column3 column_last">
							<div class="option-title">Sticky Menu</div>
							<input type="checkbox" name="scroll_header" id="scroll_header" value="1" <?php wope_var(checked($wope_main_option['scroll_header'],1));?>><label for="scroll_header">Enable</label>
						</div>	
						<div class="cleared"></div>
					</div>

					<div class="option-section">
						<div class="column2">
							<div class="option-title">Copyright Info</div>
							<div class="help">The Copyright text to display in the Footer.</div>
							<?php wp_editor( $wope_main_option['copyright'], 'copyright_editor', $settings = array( 'textarea_rows' => 4, 'textarea_name' => 'copyright') ); ?>
						</div>			
						<div class="column2 column_last">
							<div class="option-title">Custom Style</div>
							<div class="help">The Custom CSS to include before &lt;/HEAD&gt; </div>						
							<textarea rows="10" name="custom_css" class="normal_textarea"><?php wope_var($wope_main_option['custom_css']);?></textarea>
						</div>	
						<div class="cleared"></div>	
					</div>	

					<div class="option-section">
						<div class="column2">
							
							<div class="option-title">Custom Javascript Header</div>
							<div class="help">The Custom Javascript to include before &lt;/HEAD&gt; </div>
							<textarea rows="5" name="custom_js" class="normal_textarea"><?php wope_var($wope_main_option['custom_js']);?></textarea>
						
						</div>			
						<div class="column2 column_last">
							
							<div class="option-title">Custom Javascript Footer</div>
							<div class="help">The Custom Javascript to include before &lt;/BODY&gt; </div>
							<textarea rows="5" name="custom_js_footer" class="normal_textarea"><?php wope_var($wope_main_option['custom_js_footer']);?></textarea>
						
						</div>	
						<div class="cleared"></div>	
					</div>	
						
						

					<div class="option-group-title">Logo Options</div>

					<div class="column2">

						<div class="option-section">
							<div class="option-title">Site Logo</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="logo_url" value="<?php if(isset($wope_main_option['logo_url'])) wope_var($wope_main_option['logo_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Main site logo in Normal Header. Height of Logo should be 125px.</div>
							</div>
							<div class="div grey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['logo_url']);?>">
							</div>
							
						</div>

					</div>
					<div class="column2 column-last">

						<div class="option-section">
							<div class="option-title">Site Retina Logo</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="logo_retina_url" value="<?php if(isset($wope_main_option['logo_retina_url'])) wope_var($wope_main_option['logo_retina_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Main site logo in Normal Header.Height of Logo should be 250px.</div>
							</div>
							<div class="div grey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['logo_retina_url']);?>">
							</div>
							
						</div>
					</div>
					<div class="cleared"></div>

					<div class="column2">

						<div class="option-section">
							<div class="option-title">Site Logo White Version</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="white_logo_url" value="<?php if(isset($wope_main_option['white_logo_url'])) wope_var($wope_main_option['white_logo_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Used for Transparent Header. Height of Logo should be 125px.</div>
							</div>
							<div class="div darkgrey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['white_logo_url']);?>">
							</div>
							
						</div>

					</div>
					<div class="column2 column-last">

						<div class="option-section">
							<div class="option-title">Site Retina Logo  White Version</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="white_logo_retina_url" value="<?php if(isset($wope_main_option['white_logo_retina_url'])) wope_var($wope_main_option['white_logo_retina_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Used for Transparent Header. Height of Logo should be 250px.</div>
							</div>
							<div class="div darkgrey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['white_logo_retina_url']);?>">
							</div>
							
						</div>
					</div>
					<div class="cleared"></div>

					<div class="column2">

						<div class="option-section">
							<div class="option-title">Site Logo for Sticky Menu</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="scroll_logo_url" value="<?php if(isset($wope_main_option['scroll_logo_url'])) wope_var($wope_main_option['scroll_logo_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Use for Sticky Menu. Height of Logo should be 60px.</div>
							</div>
							<div class="div grey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['scroll_logo_url']);?>">
							</div>
							<div class="cleared"></div>
						</div>

					</div>
					<div class="column2 column-last">
						<div class="option-section">
							<div class="option-title">Site Retina Logo for Sticky Menu</div>
							<div class="div">
								<input class="upload_field" type="text" size="36" name="scroll_logo_retina_url" value="<?php if(isset($wope_main_option['scroll_logo_retina_url'])) wope_var($wope_main_option['scroll_logo_retina_url']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
								<div class="help">Use for Sticky Menu. Height of Logo should be 120px.</div>
							</div>
							<div class="div grey-box">
								<img class="uploaded_image" src="<?php wope_var($wope_main_option['scroll_logo_retina_url']);?>">
							</div>
							<div class="cleared"></div>
						</div>
						
					</div>
					<div class="cleared"></div>

	
					
					<div class="option-group-title">Background Options
						<div class="help">Background options only for site layout : boxed</div>
					</div>
					
					<div class="option-section" >

						<div class="column2">
							<div class="option-title">Background Type</div>
							<select name="bg_type">
								<option value="0" <?php selected($wope_main_option['bg_type'],0);?>>Color</option>
								<option value="1" <?php selected($wope_main_option['bg_type'],1);?>>Fixed Image</option>
								<option value="2" <?php selected($wope_main_option['bg_type'],2);?>>Pattern Image</option>
							</select>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Background Color</div>
							<input name="bg_color" type="text" value="<?php wope_var($wope_main_option['bg_color']);?>" class="wp-color-picker" data-default-color="<?php wope_var($wope_main_option['bg_color']);?>" />
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section" >
						<div class="column2">
							<div class="option-title">Background Image</div>
							<input class="upload_field" type="text" size="36" name="bg_image" value="<?php if(isset($wope_main_option['bg_image'])) wope_var($wope_main_option['bg_image']);?>" />
							<input class="upload_button button" type="button" value="Upload Image" />
							<span class="button red-button remove_image">Remove Image</span>
						</div>
						<div class="column2 grey-box column_last">
							<img class="uploaded_image" src="<?php wope_var($wope_main_option['bg_image']);?>">
						</div>
						<div class="cleared"></div>
					</div>

					<div class="option-group-title">Page Builder Options</div>

					<div class="option-section" >
						<div class="column_left">
							<div class="option-title">Section Title Tag</div>
							<select name="section_title_tag">
								<option value="h1" <?php selected($wope_main_option['section_title_tag'],'h1');?>>h1</option>
								<option value="h2" <?php selected($wope_main_option['section_title_tag'],'h2');?>>h2</option>
								<option value="h3" <?php selected($wope_main_option['section_title_tag'],'h3');?>>h3</option>
								<option value="h4" <?php selected($wope_main_option['section_title_tag'],'h4');?>>h4</option>
								<option value="h5" <?php selected($wope_main_option['section_title_tag'],'h5');?>>h5</option>
								<option value="h6" <?php selected($wope_main_option['section_title_tag'],'h6');?>>h6</option>
							</select>
						</div>
						<div class="column_left">
							<div class="option-title">Section Subtitle Tag</div>
							<select name="section_subtitle_tag">
								<option value="h1" <?php selected($wope_main_option['section_subtitle_tag'],'h1');?>>h1</option>
								<option value="h2" <?php selected($wope_main_option['section_subtitle_tag'],'h2');?>>h2</option>
								<option value="h3" <?php selected($wope_main_option['section_subtitle_tag'],'h3');?>>h3</option>
								<option value="h4" <?php selected($wope_main_option['section_subtitle_tag'],'h4');?>>h4</option>
								<option value="h5" <?php selected($wope_main_option['section_subtitle_tag'],'h5');?>>h5</option>
								<option value="h6" <?php selected($wope_main_option['section_subtitle_tag'],'h6');?>>h6</option>
							</select>
						</div>
						<div class="column_left column_last">
							<div class="option-title">Widget Title Tag</div>
							<select name="widget_title_tag">
								<option value="h1" <?php selected($wope_main_option['widget_title_tag'],'h1');?>>h1</option>
								<option value="h2" <?php selected($wope_main_option['widget_title_tag'],'h2');?>>h2</option>
								<option value="h3" <?php selected($wope_main_option['widget_title_tag'],'h3');?>>h3</option>
								<option value="h4" <?php selected($wope_main_option['widget_title_tag'],'h4');?>>h4</option>
								<option value="h5" <?php selected($wope_main_option['widget_title_tag'],'h5');?>>h5</option>
								<option value="h6" <?php selected($wope_main_option['widget_title_tag'],'h6');?>>h6</option>
							</select>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
				
				<div class="option-tab" id="option-tab-header-content">
					<div class="section-title">Topbar Options</div>
					
					<div class="option-section">
						
						<div class="option-title">Top Bar</div>
						<input type="checkbox" name="topbar" id="topbar" value="1" <?php checked($header_option['topbar'],1);?>><label for="topbar">Turn on</label>
						
					</div>
					<div class="option-section">
						<div class="column2">
							<div class="option-title">Left Top Bar Options</div>
							<input type="checkbox" name="topbar_left_search" id="topbar_left_search" value="1" <?php checked($header_option['topbar_left_search'],1);?>><label for="topbar_left_search">Search</label>
							<input type="checkbox" name="topbar_left_social"  id="topbar_left_social" value="1" <?php checked($header_option['topbar_left_social'],1);?>><label for="topbar_left_social">Social</label>
							<input type="checkbox" name="topbar_left_contact" id="topbar_left_contact" value="1" <?php checked($header_option['topbar_left_contact'],1);?>><label for="topbar_left_contact">Contact Detail Line </label>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Right Top Bar Options</div>
							<input type="checkbox" name="topbar_right_search" id="topbar_right_search"  value="1" <?php checked($header_option['topbar_right_search'],1);?>><label for="topbar_right_search">Search</label>
							<input type="checkbox" name="topbar_right_social" id="topbar_right_social" value="1" <?php checked($header_option['topbar_right_social'],1);?>><label for="topbar_right_social">Social</label>
							<input type="checkbox" name="topbar_right_contact" id="topbar_right_contact" value="1" <?php checked($header_option['topbar_right_contact'],1);?>><label for="topbar_right_contact">Contact Detail Line </label>
						</div>
						<div class="cleared"></div>
					</div>

					<div class="option-section">
						<div class="column_left">
							<div class="option-title">Phone</div>
							<input type="text" name="contact_line_phone" value="<?php wope_var($header_option['contact_line_phone']);?>"  placeholder="Phone" />
						</div>
						<div class="column_left">
							<div class="option-title">Email</div>
							<input type="text" name="contact_line_email" value="<?php wope_var($header_option['contact_line_email']);?>"  placeholder="Email " />
						</div>
						<div class="column_left column_last">
							<div class="option-title">Time</div>
							<input type="text" name="contact_line_time" value="<?php wope_var($header_option['contact_line_time']);?>"  placeholder="Working time" />
						</div>
						<div class="cleared"></div>
					</div>

					<div class="section-title">Header Options</div>

					<div class="option-section">
						<div class="column2">
							<div class="option-title">Header Style</div>
							<input type="radio" name="header_style" id="header_style_white" value="white" <?php checked($header_option['header_style'],'white');?>><label for="header_style_white">White Background</label>
							<input type="radio" name="header_style"  id="header_style_transparent" value="transparent" <?php checked($header_option['header_style'],'transparent');?>><label for="header_style_transparent">Transparent Image</label>
							
						</div>
						<div class="column2 column_last">
							<div class="option-title">Header Text Colors</div>
							<input type="radio" name="header_text_color" id="header_text_color_black" value="black" <?php checked($header_option['header_text_color'],'black');?>><label for="header_text_color_black">Black</label>
							<input type="radio" name="header_text_color"  id="header_text_color_white" value="white" <?php checked($header_option['header_text_color'],'white');?>><label for="header_text_color_white">White</label>
								
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="column2">
							<div class="option-title">Page Heading Style</div>
							<input type="radio" name="heading_style" id="heading_style_gray" value="gray" <?php checked($header_option['heading_style'],'gray');?>><label for="heading_style_gray">Gray Background</label>
							<input type="radio" name="heading_style"  id="heading_style_transparent" value="transparent" <?php checked($header_option['heading_style'],'transparent');?>><label for="heading_style_transparent">Transparent Image</label>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Page Heading Align</div>
							<input type="radio" name="heading_align" id="heading_align_left" value="left" <?php checked($header_option['heading_align'],'left');?>><label for="heading_align_left">Left</label>
							<input type="radio" name="heading_align"  id="heading_align_center" value="center" <?php checked($header_option['heading_align'],'center');?>><label for="heading_align_center">Center</label>
						</div>
						<div class="cleared"></div>
							
					</div>
					

					<div class="option-section-title">Header Background Options</div>

					<div class="column2">	
						<div class="column_left">
							<div class="option-section">
								<div class="option-title">Background Color</div>
								<input name="header_bg_color" type="text" value="<?php wope_var($header_option['header_bg_color']);?>" class="wp-color-picker" data-default-color="<?php wope_var($header_option['header_bg_color']);?>" />
							</div>
						</div>
						<div class="column_left">
							<div class="option-section">	
								<div class="option-title">Background Color Transparent</div>
								<select name="header_bg_transparent">
									<option value="" 	<?php selected($header_option['header_bg_transparent'],'');?>>None</option>
									<option value="0.1" <?php selected($header_option['header_bg_transparent'],0.1);?>>10%</option>
									<option value="0.2" <?php selected($header_option['header_bg_transparent'],0.2);?>>20%</option>
									<option value="0.3" <?php selected($header_option['header_bg_transparent'],0.3);?>>30%</option>
									<option value="0.4" <?php selected($header_option['header_bg_transparent'],0.4);?>>40%</option>
									<option value="0.5" <?php selected($header_option['header_bg_transparent'],0.5);?>>50%</option>
									<option value="0.6" <?php selected($header_option['header_bg_transparent'],0.6);?>>60%</option>
									<option value="0.7" <?php selected($header_option['header_bg_transparent'],0.7);?>>70%</option>
									<option value="0.8" <?php selected($header_option['header_bg_transparent'],0.8);?>>80%</option>
									<option value="0.9" <?php selected($header_option['header_bg_transparent'],0.9);?>>90%</option>
								</select>
							</div>
						</div>
						<div class="cleared"></div>
					</div>
					<div class="column2 column_last">	
						<div class="option-section">
							<div class="div">		
								<div class="option-title">Background Image</div>
								<input class="upload_field" type="text" size="36" name="header_bg_image" value="<?php if(isset($header_option['header_bg_image'])) wope_var($header_option['header_bg_image']);?>" />
								<input class="upload_button button" type="button" value="Upload Image" />
								<span class="button red-button remove_image">Remove Image</span>
							</div>
							<div class="div grey-box ">
								<img class="uploaded_image" src="<?php wope_var($header_option['header_bg_image']);?>">
							</div>
							
						</div>
					</div>
					<div class="cleared"></div>				
				</div>
				
				
				<div class="option-tab" id="option-tab-sidebar-content">
					<div class="section-title">Sidebar Options</div>
					
					<div class="option-section">
						<div class="option-title">Page Sidebar</div>
						<div class="upload_wp">
							<div class="column2">
								<?php sidebar_selector($sidebar,$wope_sidebar_option['page-sidebar'],'page-sidebar');?>
							</div>
							<div class="column2 column_last">
								<div class="help">Choose sidebar for Pages.</div>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
					<div class="option-section">
						<div class="option-title">Archive Sidebar</div>
						<div class="upload_wp">
							<div class="column2">
								<?php sidebar_selector($sidebar,$wope_sidebar_option['archive-sidebar'],'archive-sidebar');?>
							</div>
							<div class="column2 column_last">
								<div class="help">Choose sidebar for Category,Archive,Tag,Author Page.</div>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
					<div class="option-section">
						<div class="option-title">Single Blog Sidebar</div>
						<div class="upload_wp">
							<div class="column2">
								<?php sidebar_selector($sidebar,$wope_sidebar_option['single-sidebar'],'single-sidebar');?>
							</div>
							<div class="column2 column_last">
								<div class="help">Choose sidebar for Single Blog Page.</div>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
				</div>
				
				<div class="option-tab" id="option-tab-color-content">
					<div class="section-title">Color Scheme Options</div>
					
					<div class="option-section">
						<div class="column3">
							<div class="option-title">Highlight Color</div>
							<input id="highlight-color" data-default-color="<?php wope_var($color_option['highlight-color']);?>" class="wp-color-picker" name="highlight-color" type="text" value="<?php wope_var( $color_option['highlight-color']);?>" />
						</div>
						<div class="column3 column_last">
							<div class="option-title">Semi-Highlight Color</div>
							<input id="semi-color" data-default-color="<?php wope_var($color_option['semi-color']);?>" class="wp-color-picker" name="semi-color"  type="text" value="<?php wope_var($color_option['semi-color']);?>" />
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-title">Predefined Color Schemes</div>
						
						
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#bb9e5d;">bb9e5d</span>
							<span class="semi-code" style="background-color:#beab7f;">beab7f</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#F9BF3B;">F9BF3B</span>
							<span class="semi-code" style="background-color:#facf6e;">facf6e</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#F89406;">F89406</span>
							<span class="semi-code" style="background-color:#f8aa3c;">f8aa3c</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#F64747;">F64747</span>
							<span class="semi-code" style="background-color:#f67777;">f67777</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#f14c96;">f14c96</span>
							<span class="semi-code" style="background-color:#f388b8;">f388b8</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#9B59B6;">9B59B6</span>
							<span class="semi-code" style="background-color:#b183c4;">b183c4</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#4a68a9;">4a68a9</span>
							<span class="semi-code" style="background-color:#6a82b3;">6a82b3</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#3498DB;">3498DB</span>
							<span class="semi-code" style="background-color:#64aedf;">64aedf</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#31c6e1;">31c6e1</span>
							<span class="semi-code" style="background-color:#76d7e9;">76d7e9</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#4ecdc4;">4ecdc4</span>
							<span class="semi-code" style="background-color:#7bdfd8;">7bdfd8</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#2ECC71;">2ECC71</span>
							<span class="semi-code" style="background-color:#65dd98;">65dd98</span>
						</div>
						
						<div class="color-scheme">
							<span class="highlight-code" style="background-color:#7fdb72;">7fdb72</span>
							<span class="semi-code" style="background-color:#a2e399;">a2e399</span>
						</div>
		
						<div class="cleared"></div>
					</div>
				</div>
				<div class="option-tab" id="option-tab-font-content">
					
					<div class="section-title">Typography Options</div>
					
					<div class="option-section">
					
						<div class="column2">
							<div class="option-title">Heading Font</div>
							<select class="font_selector" name="font_heading">
								<?php foreach($wope_font_list as $each_font){?>
									<?php if($each_font[0] == $font_option['font_heading']){?>
										<option value="<?php wope_var($each_font[0]);?>" selected="selected"><?php wope_var($each_font[0]);?></option>
									<?php }else{?>
										<option value="<?php wope_var($each_font[0]);?>" ><?php wope_var($each_font[0]);?></option>
									<?php }?>
								<?php }?>
							</select>
							<textarea class="normal_textarea font_textarea menu_font_textarea" style="font-family:<?php wope_var( $font_option['font_heading']);?>;" rows="3" id="font_body_text">HOME ABOUT  PORTFOLIO BLOG CONTACT</textarea>
						</div>
						
						<div class="column2 column_last">
							<div class="option-title">Menu Font</div>
							<select id="font_body" class="font_selector" name="font_menu">
								<?php foreach($wope_font_list as $each_font){?>
									<?php if($each_font[0] == $font_option['font_menu']){?>
										<option value="<?php wope_var($each_font[0]);?>" selected="selected"><?php wope_var( $each_font[0]);?></option>
									<?php }else{?>
										<option value="<?php wope_var($each_font[0]);?>" ><?php wope_var($each_font[0]);?></option>
									<?php }?>
								<?php }?>
							</select>
							<textarea class="normal_textarea font_textarea heading_font_textarea" style="font-family:<?php wope_var($font_option['font_menu']);?>;" rows="3" id="font_body_text">RECENT WORKS RECENT POSTS GALLERY LIGHTBOX MEET THE TEAM TESTIMONIAL GRID TYPOGRAPHY</textarea>
						</div>
						<div class="cleared"></div>
					</div>
					<div class="option-section">
						<div class="option-title">Body Font</div>
						<select class="font_selector" name="font_body">
							<?php foreach($wope_font_list as $each_font){?>
								<?php if($each_font[0] == $font_option['font_body']){?>
									<option value="<?php wope_var($each_font[0]);?>" selected="selected"><?php wope_var( $each_font[0]);?></option>
								<?php }else{?>
									<option value="<?php wope_var($each_font[0]);?>" ><?php wope_var($each_font[0]);?></option>
								<?php }?>
							<?php }?>
						</select>
						<textarea class="normal_textarea font_textarea body_font_textarea" style="font-family:<?php wope_var( $font_option['font_body']);?>;" rows="3" id="font_body_text">Eu duo alia commune, partem molestiae at duo, id stet facilisi has.Ex veri nonumy vix, volumus ancillae similique ea quo. Eruditi luptatum mea ne, habeo dolorum vituperatoribus ex mea.Probo dolores lobortis an duo. Usu quod gubergren ullamcorper ad.Timeam detracto ad sit, ornatus indoctum usu at.</textarea>
					</div>

				</div>
				
				<div class="option-tab" id="option-tab-blog-content">
					
					<div class="section-title">Blog Options</div>
					
					
					<div class="option-section">
						
						<div class="column2">
							<div class="option-title">Blog Section Excerpt Length</div>
							<input type="text" name="excerpt_length" class="normal_input" value="<?php wope_var($wope_post_option['excerpt_length']);?>">
							<div class="help">The maximum number of Character in Excerpt of Posts in the Blog Section Widget in Page Builder</div>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Blog Section Excerpt Suffix</div>
							<input type="text" name="excerpt_suffix" class="normal_input" value="<?php wope_var($wope_post_option['excerpt_suffix']);?>">
							<div class="help">The text,string,dot...ect in the end of Excerpt of Posts in the Blog Section Widget in Page Builders</div>
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="column2">
							<div class="option-title">Post Grid Column</div>
							<select name="post_grid_column">
								<option value="4" <?php selected($wope_post_option['post_grid_column'],4);?>>4</option>
								<option value="3" <?php selected($wope_post_option['post_grid_column'],3);?>>3</option>
								<option value="2" <?php selected($wope_post_option['post_grid_column'],2);?>>2</option>
							</select>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Post Grid Row</div>
							<select name="post_grid_row">
								<option value="4" <?php selected($wope_post_option['post_grid_row'],4);?>>4</option>
								<option value="3" <?php selected($wope_post_option['post_grid_row'],3);?>>3</option>
								<option value="2" <?php selected($wope_post_option['post_grid_row'],2);?>>2</option>
								<option value="1" <?php selected($wope_post_option['post_grid_row'],1);?>>1</option>
							</select>
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="column2">
							<div class="option-title">Social Share</div>
							<select name="post_social_share">
								<option value="0" <?php selected($wope_post_option['post_social_share'],0);?>>No</option>
								<option value="1" <?php selected($wope_post_option['post_social_share'],1);?>>Yes</option>
							</select>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
				<div class="option-tab" id="option-tab-portfolio-content">
					
					<div class="section-title">Portfolio Options</div>
					
					
					<div class="option-section">
						<div class="input-section">
							<div class="column2">
								<div class="option-title">Portfolio Label</div>
								<input type="text" name="portfolio_label" class="normal_input" value="<?php wope_var($portfolio_option['portfolio_label']);?>" >
								<div class="help">Default is Portfolio, you can change anything you want.Example Work,Job,Design...ect</div>
							</div>
							<div class="column2 column-last">
								<div class="option-title">Portfolio Slug</div>
								<input type="text" name="portfolio_slug" class="normal_input" value="<?php wope_var($portfolio_option['portfolio_slug']);?>" >
								<div class="help">The portfolio slug use in your url. example http://yoursite.com/portfolio/new-design. You can change it to work,job,design... ect</div>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
					
					<div class="option-section">
						<div class="input-section">
							<div class="column2">
								<div class="option-title">Category Slug</div>
								<input type="text" name="portfolio_category_slug" class="normal_input" value="<?php wope_var( $portfolio_option['portfolio_category_slug']);?>" >
								<div class="help">The category slug use in your portfolio category url. example http://yoursite.com/portfolio-cat/design. You can change it to design-type,work-cat... ect</div>
							</div>
							<div class="column2 column-last">
								<div class="option-title">Main Portfolio Page URL</div>
								<input type="text" name="portfolio_page_url" class="normal_input" value="<?php wope_var( $portfolio_option['portfolio_page_url']);?>" >
								<div class="help">By default, your main portfolio page url will be http://yoursite.com/portfolio . However you can create a new page,use portfolio widget and set a new main portfolio page. All portfolio single page will link to this main page.</div>
							</div>
							<div class="cleared"></div>
						</div>
					</div>
					
					
					
					<div class="option-section">
						<div class="column2">
							<div class="option-title">Portfolio Category Grid Column</div>
							<select name="portfolio_category_grid_column">
								<option value="4" <?php selected($portfolio_option['portfolio_category_grid_column'],4);?>>4</option>
								<option value="3" <?php selected($portfolio_option['portfolio_category_grid_column'],3);?>>3</option>
								<option value="2" <?php selected($portfolio_option['portfolio_category_grid_column'],2);?>>2</option>
							</select>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Portfolio Category Grid Row</div>
							<select name="portfolio_category_grid_row">
								<option value="4" <?php selected($portfolio_option['portfolio_category_grid_row'],4);?>>4</option>
								<option value="3" <?php selected($portfolio_option['portfolio_category_grid_row'],3);?>>3</option>
								<option value="2" <?php selected($portfolio_option['portfolio_category_grid_row'],2);?>>2</option>
								<option value="1" <?php selected($portfolio_option['portfolio_category_grid_row'],1);?>>1</option>
							</select>
						</div>
						<div class="cleared"></div>
					</div>

					<div class="option-section">
						<div class="column2">
							<div class="option-title">Pagination Type</div>
							<select name="portfolio_pagination_type">
								<option value="0" <?php selected($portfolio_option['portfolio_pagination_type'],0);?>>Pagination</option>
								<option value="1" <?php selected($portfolio_option['portfolio_pagination_type'],1);?>>Filter</option>
							</select>
						</div>
						<div class="column2 column_last">
							<div class="option-title">Social Share</div>
							<select name="portfolio_social_share">
								<option value="0" <?php selected($portfolio_option['portfolio_social_share'],0);?>>No</option>
								<option value="1" <?php selected($portfolio_option['portfolio_social_share'],1);?>>Yes</option>
							</select>
						</div>
						<div class="cleared"></div>
					</div>
					
				</div>
				<div class="option-tab" id="option-tab-social-content">
					
					<div class="section-title">Socials Options</div>
					
					<?php if(count($social_array) >0){
						$social_column1 = true;
					?>
						<?php foreach($social_array as $each_social){
							if($social_column1 == true){
								$column_last = '';
								
								$social_column1 = false;
							}else{
								$column_last = 'column_last';
								
								$social_column1 = true;
							}
						?>
							<div class="option-section">
							
							<?php if($each_social == 'rss'){?>
								<div class="column2 <?php wope_var($column_last);?>">
									<div class="option-title"><i class="fa fa-rss"></i> RSS </div>
									<input type="checkbox" name="social-rss" id="check_rss" value="1" <?php checked($social_option['rss'],1);?>><label for="check_rss">Show rss link in social bar</label>	
								</div>
							<?php }else{?>
								<div class="column2 <?php wope_var($column_last);?>">
									<div class="option-title"><i class="fa fa-<?php wope_var($each_social);?>"></i> <?php wope_var($each_social);?> </div>
									<input type="text" name="social-<?php wope_var($each_social);?>" class="normal_input" value="<?php wope_var($social_option[$each_social]);?>">
								</div>
							<?php }?>
							
							</div>
						<?php }?>
						<div class="cleared"></div>

					<?php }?>


				</div>

				<div class="option-tab" id="option-tab-wpml-content">
					
					<div class="section-title">WPML Multilingual</div>
					<div class="option-section">
						<?php if ( function_exists('icl_object_id') ) {?>
							<p>You need to install WPML Multilingual plugins before you can start.</p>
						<?php }?>
					</div>
					<div class="option-section">
						<div class="option-title">Language Switcher</div>
						<select name="wpml_selector">
							<option value="0" <?php selected($wope_wpml_option['wpml_selector'],0);?>>Hidden</option>
							<option value="1" <?php selected($wope_wpml_option['wpml_selector'],1);?>>Display in Topbar Left</option>
							<option value="2" <?php selected($wope_wpml_option['wpml_selector'],2);?>>Display in Topbar Right</option>
							<option value="3" <?php selected($wope_wpml_option['wpml_selector'],3);?>>Display in Footer</option>
						</select>
					</div>
					<div class="option-section">
						<p>You can also display Language Switcher in other position. Please go to <strong>WPML->Languages->Language switcher options</strong></p>
					</div>
				</div>

				<div class="option-tab" id="option-tab-import-content">
					
					<div class="section-title">Import Demo</div>

					<?php if($fix_import_page == 1){?>
						<div class="option-section">
							<div class="input-section">
								<div class="msg">
									<p>All page contents was reset as default.</p>
								</div>
							</div>
						</div>
					<?php } ?>
					
					<div class="option-section">
						<p>To setup your theme like demo after install, please follow the steps:</p>
						
						<div class="content-section" id="install_plugins">
							<h3 >1. Install necessary plugins</h3>
							<p>
								To install plugins, please go to <strong>Plugins -> Add New</strong> :
								<ol>
									<li>plugins/wope-portfolio v1.3.zip (Included in Full Theme download)</li>
									<li>plugins/revslider 5.0.9.zip (Included in Full Theme download)</li>
									<li>plugins/wordpress-importer_myversion.zip (Included in Full Theme download) . Please don't update this plugin because newest version is bugs. </li>
									<li><a href="https://wordpress.org/plugins/mailchimp-for-wp/">MailChimp for WordPress</a></li>
									<li><a href="https://wordpress.org/plugins/megamenu/">Max Mega Menu</a></li>
								</ol>

								If you want to install shop content, please install WooCommerce and related plugins.
								<ol>
									<li><a href="https://wordpress.org/plugins/woocommerce/">WooCommerce</a></li>
									<li><a href="https://wordpress.org/plugins/yith-woocommerce-quick-view/">YITH WooCommerce Quick View</a></li>
									<li><a href="https://wordpress.org/plugins/yith-woocommerce-wishlist/">YITH WooCommerce Wishlist</a></li>
								</ol>
							</p>
						
						</div>

						<div class="content-section" id="import_content">
							<h3 >2. Import Posts, Pages, Products, Portfolios ...</h3>
							<p>
								To Import contents, please go to <strong>Tools->Import->Wordpress</strong> : 
							</p>
							<p>
								<ol>
									<li>Import demo_files/contents/posts.xml</li>
									<li>Import demo_files/contents/pages.xml</li>
									<li>Import demo_files/contents/portfolios.xml</li>
									<li>Import demo_files/contents/products.xml</li>
								</ol>
							</p>
						</div>
						
						<div class="content-section" id="import_slider">
							<h3 >3. Import Slider</h3>
							<p>
								To import slider, please go to <strong>Revolution Slider->Import Slider</strong> :
							</p>
							<p>Import slider from folder /demo_files/sliders/</p>
							
							
						</div>

						<div class="content-section" id="import_widget">
							<h3 >4. Import Widgets</h3>
							<p>
								To import widgets, you need to use plugin : <a href="https://wordpress.org/plugins/widget-importer-exporter/">Widget Importer &amp; Exporter</a> . 
							</p>
							<p>Then go to <strong>Tools->Widget Importer&amp;Exporter</strong> then import file demo_files/widgets/widgets.wie.</p>
							
						</div>
						
						<div class="content-section" id="set_home">
							<h3 >5. Set Home Page.</h3>
							<p>
								After installing theme, you will only have the home page with posts layout same as normal theme. You need to create a new home page.
							</p>
							<p>
								Navigate to <strong>Settings > Reading</strong> and configure the “Front Page Displays” setting. Select "Home Standard" or other page to set it as home page.
							</p>
							
							
						</div>
						
						<div class="content-section" id="set_menu">
							<h3 >6. Set Menu location</h3>
							<p>
								After import contents, the menu was imported however you need to go to <strong>Appearance > Menus</strong> , then select "Mega Main Menu" in Select box and set theme location Main Menu. You also need to set toggle menu as you want.
							</p>
							
							
						</div>

						<div class="content-section" id="set_menu">
							<h3 >7. Click Fix Import button</h3>
							<p>
								If your page contents does not appear, like Home Standard or About Us ... pages. Just click this button below and it will update all page contents.
							</p>
							
							<a target="_blank" href="themes.php?page=theme-mega&task=import#import" class="button button-large" > Fix Import Pages </a>

							<p>After clicked this buttons, all your pages will restore contents as default like demo. So if you added your contents, please don't click this buttons. Also this buttons will not remove or edit your old pages before you import contents.</p>
						</div>

						<div class="content-section" id="remove_tab">
							<h3 >8. Remove this Import Demo tab</h3>
							<p>
								In case you don't want this tab appear in your admin for some reasons. Just click this link and it will remove this tab. <a href="themes.php?page=theme-mega&task=remove_import">Remove this Tab</a>
							</p>
						</div>
					</div>

				</div>

			<div class="option-section bottom-button">
				<button class="form-submit-button button button-primary button-large" > Save Changes </button>
			</div>
			<div class="cleared"></div>
		</div>
		<div class="cleared"></div>

	</div>
	</form>