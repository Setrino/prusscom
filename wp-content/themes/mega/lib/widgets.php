<?php
//video widget
class wope_videos_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'wope_videos_widget', // Base ID
			'Video Widget', // Name
			array( 'description' =>  'A Widget play Youtube,Vimeo video' ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		$video_type = $instance[ 'video_type' ];
		$embed_code = $instance[ 'embed_code' ];
		
		wope_var( $before_widget);
		if ( ! empty( $title ) )
			wope_var($before_title . $title . $after_title);
		?>
		<div class="<?php wope_var( $video_type);?>-container">
			<?php wope_var( $embed_code);?>
		</div>
		<?php
		wope_var($after_widget);
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['video_type'] 	= strip_tags( $new_instance['video_type'] );
		$instance['embed_code'] 	=  $new_instance['embed_code'] ;

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	
		//get all categories
		$categories = get_categories( );
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = 'Hot Video';
		}
		
		if ( isset( $instance[ 'video_type' ] ) ) {
			$video_type = $instance[ 'video_type' ];
		}
		else {
			$video_type = 1;
		}
		
		if ( isset( $instance[ 'embed_code' ] ) ) {
			$embed_code = $instance[ 'embed_code' ];
		}
		else {
			$embed_code =  '';
		}
		
		?>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'title' )); ?>">Title:</label> 
			<input class="widefat" id="<?php wope_var($this->get_field_id( 'title' )); ?>" name="<?php wope_var($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'video_type' )); ?>">Video Type :</label> 
			<select name="<?php wope_var($this->get_field_name( 'video_type' )); ?>">
				<option value="youtube" <?php wope_var(selected($video_type,'youtube'));?>>Youtube</option>
				<option value="vimeo" <?php wope_var(selected($video_type,'vimeo'));?>>Vimeo</option>
			</select>
			
		</p>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'embed_code' )); ?>">Embed Code :</label> <br>
			<textarea style="width:100%" rows="5" id="<?php wope_var($this->get_field_id( 'embed_code' )); ?>" name="<?php wope_var($this->get_field_name( 'embed_code' )); ?>"><?php wope_var($embed_code);?></textarea>
		</p>
		<?php 
	}

} // class wope_videos_Widget

// register wope_videos_Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "wope_videos_Widget" );' ) );

//post widget
class wope_Posts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'wope_posts_widget', // Base ID
			'Popular Posts', // Name
			array( 'description' =>  'The most Popular Posts Widget' ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		$current_category = $instance[ 'category' ];
		$post_number = $instance[ 'post_number' ];
		
		$args = array(
			'posts_per_page' => $post_number,
			'orderby' => 'comment_count'
		);
		
		if($current_category != 0 or $current_category != ''){
			$args['cat'] = $current_category;
		}
		
		// The Query
		$the_query = new WP_Query( $args );
		
		wope_var( $before_widget);
		if ( ! empty( $title ) )
			wope_var( $before_title . $title . $after_title);
		// The Loop
		while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<div class="widget-post">
				<div class="widget-post-thumb" >
					<?php  the_post_thumbnail( 'wope-thumb-small');?>
				</div>
				<div class="widget-post-title" >
					<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
				</div>
				<div class="widget-post-meta" >
					<a href="<?php the_permalink(); ?>"><?php wope_var( get_the_date('j M,Y'));?></a>
				</div>
				<div class="cleared"></div>
			</div>
			
			<?php
		endwhile;
		// Reset Post Data
		wp_reset_postdata();
		wope_var($after_widget);
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['category'] = strip_tags( $new_instance['category'] );
		$instance['post_number'] = strip_tags( $new_instance['post_number'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	
		//get all categories
		$categories = get_categories( );
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = 'Popular Posts';
		}
		
		if ( isset( $instance[ 'post_number' ] ) ) {
			$post_number = $instance[ 'post_number' ];
		}
		else {
			$post_number =  4;
		}
		
		if ( isset( $instance[ 'category' ] ) ) {
			$current_category = $instance[ 'category' ];
		}else{
			$current_category = 0;
		}
		?>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'title' )); ?>">Title:</label> 
			<input class="widefat" id="<?php wope_var($this->get_field_id( 'title' )); ?>" name="<?php wope_var($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'category' )); ?>">Category :</label> 
			
			<?php if(is_array($categories)){?>
				<select name="<?php wope_var( $this->get_field_name( 'category' )); ?>">
					<option value="0">All Categories</option>
					<?php foreach($categories as $each_category){?>
						<?php if($current_category == $each_category->term_id ){?>
							<option selected="selected" value="<?php wope_var($each_category->term_id) ;?>"><?php wope_var( $each_category->name) ;?></option>
						<?php }else{?>
							<option value="<?php wope_var($each_category->term_id) ;?>"><?php wope_var($each_category->name) ;?></option>
						<?php }?>
						
					<?php }?>
				</select>
			<?php }?>
		</p>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'post_number' )); ?>">Number of posts to show :</label> 
			<input size="3" id="<?php wope_var( $this->get_field_id( 'post_number' )); ?>" name="<?php wope_var($this->get_field_name( 'post_number' )); ?>" type="text" value="<?php echo esc_attr( $post_number ); ?>" />
		</p>
		<?php 
	}

} // class wope_Posts_Widget

// register wope_Posts_Widget widget
add_action( 'widgets_init', create_function( '', 'register_widget( "wope_Posts_Widget" );' ) );

//multi line menu widget
class wope_multi_line_menu_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'wope_multi_line_menu_Widget', // Base ID
			'Multi Line Menu Widget', // Name
			array( 'description' =>  'A Widget show menu with multi line' ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		$col_number = 0;
		// Get menu
		$menu1_selected = ! empty( $instance['menu1_selected'] ) ? wp_get_nav_menu_object( $instance['menu1_selected'] ) : false;
		$menu2_selected = ! empty( $instance['menu2_selected'] ) ? wp_get_nav_menu_object( $instance['menu2_selected'] ) : false;
		$menu3_selected = ! empty( $instance['menu3_selected'] ) ? wp_get_nav_menu_object( $instance['menu3_selected'] ) : false;
		
		if( $menu1_selected )
			$col_number++;
		if( $menu2_selected )
			$col_number++;
		if( $menu3_selected )
			$col_number++;
		
		wope_var( $before_widget);
		if ( ! empty( $title ) )
		wope_var($before_title . $title . $after_title); ?>
		<div class='multi_line_menu_container_<?php echo  $col_number; ?>'>
		<?php	
			if($menu1_selected)
				wp_nav_menu( array('menu' => $menu1_selected->term_id) );
			if($menu2_selected)
				wp_nav_menu( array('menu' => $menu2_selected->term_id) );
			if($menu3_selected)
				wp_nav_menu( array('menu' => $menu3_selected->term_id) );
		?>
		<div class="cleared"></div></div>
		<?php wope_var($after_widget);
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['menu1_selected'] 	=  $new_instance['menu1_selected'];
		$instance['menu2_selected'] 	=  $new_instance['menu2_selected'] ;
		$instance['menu3_selected'] 	=  $new_instance['menu3_selected'] ;
		
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	
		//get all categories
		$categories = get_categories( );
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = 'Quick Links';
		}
		
		if ( isset( $instance[ 'menu1_selected' ] ) ) {
			$menu1_selected = $instance[ 'menu1_selected' ];
		}
		else {
			$menu1_selected =  '';
		}
		
		if ( isset( $instance[ 'menu2_selected' ] ) ) {
			$menu2_selected = $instance[ 'menu2_selected' ];
		}
		else {
			$menu2_selected =  '';
		}
		
		if ( isset( $instance[ 'menu3_selected' ] ) ) {
			$menu3_selected = $instance[ 'menu3_selected' ];
		}
		else {
			$menu3_selected =  '';
		}
		// Get menus
		$menus = wp_get_nav_menus();

		// If no menus exists, direct the user to go and create some.
		if ( !$menus ) {
			echo '<p>'. sprintf( esc_html__('No menus have been created yet. <a href="%s">Create some</a>.' , 'mega'), admin_url('nav-menus.php') ) .'</p>';
			return;
		}
		
		?>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'title' )); ?>">Title:</label> 
			<input class="widefat" id="<?php wope_var($this->get_field_id( 'title' )); ?>" name="<?php wope_var($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php wope_var($this->get_field_id( 'menu1_selected' )); ?>">Select Menu 1 :</label> 
			<select name="<?php wope_var($this->get_field_name( 'menu1_selected' )); ?>">
			<option value="0"><?php esc_html_e( '&mdash; Select &mdash;','mega' ) ?></option>
			<?php
				foreach ( $menus as $menu ) {
					echo '<option value="' . $menu->term_id . '"'
						. selected( $menu1_selected, $menu->term_id, false )
						. '>'. esc_html( $menu->name ) . '</option>';
				}
			?>
			</select>
		</p>
	
		<p>
			<label for="<?php wope_var($this->get_field_id( 'menu2_selected' )); ?>">Select Menu 2 :</label> 
			<select name="<?php wope_var($this->get_field_name( 'menu2_selected' )); ?>">
			<option value="0"><?php esc_html_e( '&mdash; Select &mdash;' ,'mega' ) ?></option>
			<?php
				foreach ( $menus as $menu ) {
					echo '<option value="' . $menu->term_id . '"'
						. selected( $menu2_selected, $menu->term_id, false )
						. '>'. esc_html( $menu->name ) . '</option>';
				}
			?>
			</select>
		</p>
		
		<p>
			<label for="<?php wope_var($this->get_field_id( 'menu3_selected' )); ?>">Select Menu 3 :</label> 
			<select name="<?php wope_var($this->get_field_name( 'menu3_selected' )); ?>">
			<option value="0"><?php esc_html_e( '&mdash; Select &mdash;' ,'mega' ) ?></option>
			<?php
				foreach ( $menus as $menu ) {
					echo '<option value="' . $menu->term_id . '"'
						. selected( $menu3_selected, $menu->term_id, false )
						. '>'. esc_html( $menu->name ) . '</option>';
				}
			?>
			</select>
		</p>
		<?php 
	}

} // class wope_multi_line_menu_Widget

// register wope_multi_line_menu_Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "wope_multi_line_menu_Widget" );' ) );
