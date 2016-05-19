<?php
// add post metabox
add_action( 'admin_init', 'wope_build_post_metabox' );
add_action( 'save_post', 'wope_post_metabox_save' );

function wope_build_post_metabox() {
    add_meta_box( 'post-media',  'Post Media' , 'wope_post_metabox', 'post', 'normal', 'high' );
}

//show metabox
function wope_post_metabox(){
	global $post;
	$post_media_type 	= get_post_meta( $post->ID, 'post_media_type', true );
    $embed_code 		= get_post_meta( $post->ID, 'embed_code', true );
	
	$image_array 		= get_post_meta( $post->ID, 'image_array', false );
	if(array_key_exists(0,$image_array)){
		$image_array 		= $image_array[0];
	}else{
		$image_array 		= '';
	}
	
	//add more upload field
	$image_array[] = '';

	if(!$post_media_type){
		$post_media_type = 'image';
	}
?>
	<div>
		<h4 class="metabox-title">Media Type in Single post</h4>
		<input type="radio" name="post_media_type" value="image" id="post_media_image" <?php checked($post_media_type,'image');?> /><label for="post_media_image">Feature Image</label>
		<input type="radio" name="post_media_type" value="youtube" id="post_media_youtube"<?php checked($post_media_type,'youtube');?> /><label for="post_media_youtube"> Youtube Video</label>
		<input type="radio" name="post_media_type" value="vimeo" id="post_media_vimeo" <?php checked($post_media_type,'vimeo');?> /><label for="post_media_vimeo"> Vimeo Video</label>
		<input type="radio" name="post_media_type" value="soundcloud" id="post_media_soundcloud" <?php checked($post_media_type,'soundcloud');?> /><label for="post_media_soundcloud"> Soundcloud</label>
		<input type="radio" name="post_media_type" value="image_slide" id="post_media_slide" <?php checked($post_media_type,'image_slide');?> /><label for="post_media_slide">Image Slide</label>
	</div>
	
	<div class="column1_2">
		<h4 class="metabox-title">Media Embed Code</h4>
		<textarea rows="7" name="embed_code" class="normal_textarea"><?php wope_var($embed_code);?></textarea>
		<div class="help">Enter Embed code if you're using Youtube , Vimeo or Soundcloud.</div>
	</div>
	<div class="column1_2 column-last">
		<h4 class="metabox-title">Image Slides / Galleries</h4>
		<div class="flexible-upload">
			<?php if(is_array($image_array) and count($image_array) > 0){?>
				<?php foreach($image_array as $each_image){?>
					<div>
						<input class="upload_field" type="text" name="image_slide[]" value="<?php wope_var($each_image);?>" />
						<input class="button upload_button" type="button" value="Upload" />
					</div>
				<?php }?>
			<?php }?>
		</div>
		<input class="button button-primary flexible-upload-button" type="button" value="Add More">
	</div>
	<div class="cleared"></div>	
<?php
}

function wope_post_metabox_save(){
	global $post;  
    if( $_POST and !empty($post)) {
		update_post_meta( $post->ID, 'post_media_type',wope_check_post('post_media_type') );
		update_post_meta( $post->ID, 'embed_code', wope_check_post('embed_code') );
		
		update_post_meta( $post->ID, 'image_slide1', wope_check_post('image_slide1') );
		update_post_meta( $post->ID, 'image_slide2', wope_check_post('image_slide2') );
		update_post_meta( $post->ID, 'image_slide3', wope_check_post('image_slide3') );
		update_post_meta( $post->ID, 'image_slide4', wope_check_post('image_slide4') );
		update_post_meta( $post->ID, 'image_slide5', wope_check_post('image_slide5') );
	}
}