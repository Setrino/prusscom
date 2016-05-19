<?php
/**
 * The template for displaying Comments.
 *
 */
?>
	
	<?php if ( post_password_required() ) { ?>
	<div id="comment-section">
		<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'mega' ); ?></p>
	</div>
	<?php } ?>
	<?php if( comments_open() ) {?>
		<?php if(wp_count_comments($post->ID)->approved > 0 ){?>
		<div id="comment-section">
			<div class="comment-number post-section-title">
				<span><?php comments_number(  esc_html__('No Comment','mega') , esc_html__('1 Comment','mega'), esc_html__('% Comments','mega') ); ?></span>
			</div>
			<div class="title-line"></div>
					
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // Are there comments to navigate through? ?>
				<div class="comment-navigation">
					<div class="comment-previous"><?php previous_comments_link( esc_html__( 'Older Comments <span class="meta-nav"> &rarr;</span>', 'mega' ) ); ?></div>
					<div class="comment-next"><?php next_comments_link( esc_html__( '<span class="meta-nav">&larr;</span> Newer Comments', 'mega' ) ); ?></div>
					<div class="cleared"></div>
				</div> <!-- .navigation -->
			<?php } // check for comment navigation ?>
			
			<div id="comment-container">
				<ul>
				<?php 
				 $args = array(
					'type=' => 'comment',
					'callback' => 'wope_comment',
					'reverse_top_level' => true,
					'reverse_children'  =>  false 
				); 
				wp_list_comments( $args ); ?> 
				</ul>		
			</div>
			<div class="cleared"></div>
			
		</div>
		<?php }?>
		
		<div id="comment-form" class="content">
			<?php wope_comment_form(); ?> 
			<div class="cleared"></div>
		</div>
			
	<?php }?>
<?php

//wope comment forum
function wope_comment_form(){
	$wope_post_option = get_option('wope-post');
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => 	'<div class="comment-form-left">
							<div class="comment-form-author">
							<input id="comment-author" name="author" type="text" placeholder="' .
							esc_html__('Your Name (*)','mega').'" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '  />' .
						'</div>',
		'email'  => 	'<div class="comment-form-email">
							<input id="comment-email" name="email" type="text" placeholder="' .
							esc_html__('Your E-Mail (*)','mega').'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />'
						.'</div>',
		'url'    => 	'<div class="comment-form-url">
							<input id="comment-url" name="url" type="text" placeholder="' .
							esc_html__('Your Webpage (*)','mega').'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" ' . $aria_req . ' />'.
						'</div><div class="cleared"></div></div>',
	);
	
	$args = array(
		'fields' => $fields,
		'title_reply' => '<span class="title_reply_label">'.esc_html__( 'Leave Your Comment' , 'mega').'</span><span class="title-line"></span>',
		'label_submit' => esc_html__( 'Submit Comment' , 'mega' ),
		'comment_field' => '<p class="comment-form-comment">
								<textarea name="comment" rows="5" placeholder="' .
							esc_html__('Your Comment (*)','mega').'"></textarea>
						</p>',
		'comment_notes_before'	=> '',	
	);
	comment_form($args);
}

//setup comment section
function wope_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div class="comment-entry" >
			<div class="comment-avatar">
				<?php wope_var(get_avatar( $comment->comment_author_email, 60 )); ?>
			</div>
			<div class="comment-info">
				<div class="comment-author">
					<?php wope_var(get_comment_author_link($GLOBALS['comment']->comment_ID)); ?>
				</div>
				<div class="comment-date">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(esc_html__('%1$s at %2$s','mega'), get_comment_date(),  get_comment_time()) ?></a> <?php edit_comment_link('(Edit)','  ','') ?>
				</div>
				<span class="comment-reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => esc_html__('Reply','mega'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</span>
				
				<div class="comment-content content">
				<?php if ($comment->comment_approved == '0'){ ?>
					<div class="comment-awaitting"> 
						<?php esc_html_e('Your comment is awaiting moderation.','mega') ?>
					</div>
				<?php } ?>
				<?php comment_text(); ?>
			</div>
			</div>
			<div class="cleared"></div>
			
			
		</div><!-- End Comment entry-->
	</li>
<?php
}

?>