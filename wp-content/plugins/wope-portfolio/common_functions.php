<?php
	function wopo_get_end_class($current,$total,$each,$return_class = 'widget-element-bottom'){
		$end_level = floor($total/$each);
		
		if($end_level * $each == $total){
			$end_begin = $total - $each + 1;
		}else{
			$end_begin = $end_level * $each + 1;
		}
		
		if($current >= $end_begin){
			return $return_class;
		}else{
			return "";
		}
	}
	
	//get custom taxanomy terms link array
	function wopo_get_terms_links($post_id,$taxonomy_name){
		$terms = get_the_terms( $post_id, $taxonomy_name );	
		$term_links = array();		
		if ( $terms && ! is_wp_error( $terms ) ) {
			$portfolio_categories = array();
			foreach ( $terms as $term ) {
				$term_links[] = '<a href="'.get_term_link($term->term_id,'portfolio-category').'">'.$term->name.'</a>';
			}						
		}
		return $term_links;
		
	}
	
	function wopo_var($var){
		echo wopo_filter($var);
	}

	function wopo_filter($var){
		return $var;
	}
	
	function wopo_custom_paginate_links($paged){
		global $wp_query;		
		global $wp_rewrite;	
		if( $wp_rewrite->using_permalinks() ){
			$pagination = array(
				'base' => @add_query_arg('page','%#%'),
				'format' => '',
				'show_all' => false,
				'type' => 'plain',
				'prev_text' => esc_html__('&#8592;','mega'),
        		'next_text' => esc_html__('&#8594;','mega'),
				'current' => $paged,
				'total' => $wp_query->max_num_pages
			);	
			
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

			if( !empty($wp_query->query_vars['s']) )
				$pagination['add_args'] = array('s'=>get_query_var('s'));
				
			wopo_var(paginate_links($pagination)) ; 	
		}else{
			wopo_var(paginate_links()) ; 	
		}
		
	}
	
	//portfolio shortcode
	function wopo_portfolio_detail_shortcode( $atts , $content = null ) {
		extract( shortcode_atts( array(
			'name' => ''
		), $atts ) );
		
		if($name != ''){
			return '<div class="portfolio-single-detail-entry">
						<span class="portfolio-single-detail-name">'.$name.' : </span>
						<span class="portfolio-single-detail-content">' . $content . '</span>
					</div>';
		}else{
			return '<div class="portfolio-single-detail-entry">
						<span class="portfolio-single-detail-content">' . $content . '</span>
					</div>';
		}
	}
	add_shortcode( 'portfolio-detail', 'wopo_portfolio_detail_shortcode' );

	function wopo_check_post($key){
		global $POST;
		if(array_key_exists($key,$_POST)){
			return $_POST[$key];
		}
	}

	add_action( 'pre_get_posts', 'wopo_pre_get_post' );
	function wopo_pre_get_post( $query ) {
	    if( is_post_type_archive( 'portfolio' ) && !is_admin() && $query->is_main_query() ) {
	    	$portfolio_options = get_option('wope-portfolio');
	    	$total_portfolio = $portfolio_options['portfolio_category_grid_column'] * $portfolio_options['portfolio_category_grid_row'];

	        $query->set( 'posts_per_page', $total_portfolio );
	       
	    }

	}