(function($) {
  "use strict";

jQuery(document).ready(function(){
	// Uploading files
	var file_frame;
	var uploaded_input;
	var uploaded_image;
	var attachment;
	jQuery('.upload_button').live('click', function( event ){
		uploaded_input = jQuery(this).prev('input'); 
		uploaded_image = jQuery(this).parent().parent().find('.uploaded_image');
		
		event.preventDefault();
		// If the media frame already exists, reopen it.
		if ( file_frame ) {
			file_frame.open();
			return;
		}
 
		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Upload Image',
			button: {
				text: 'Select',
			},
			multiple: false  // Set to true to allow multiple files to be selected
		});
 
		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {

			// We set multiple to false so only get one image from the uploader
			attachment = file_frame.state().get('selection').first().toJSON();
	 
			// Do something with attachment.id and/or attachment.url here
			jQuery(uploaded_input).val(attachment.url);

			jQuery(uploaded_image).attr('src',attachment.url);
		});
 
		// Finally, open the modal
		file_frame.open();
	});
	
	jQuery('.remove_image').click(function(){
		jQuery(this).parent().find('input[type=text]').val('');
		jQuery(this).parent().parent().find('img').attr('src','');
	});
	
	
	//option tabs
	jQuery('#option-tab-buttons a').click(function(){
		var button_id = jQuery(this).attr('id');
		if(jQuery(this).hasClass('tab-current')	){
		}else{
			jQuery('#option-tab-buttons').find('a').removeClass('tab-current');
			jQuery(this).addClass('tab-current');
		}
		jQuery('.option-tab').hide();
		jQuery('#'+button_id+'-content').show();
	});

	//option tabs
	jQuery('#option-tab-buttons .menu-multi span').click(function(){
		var menu_multi = jQuery(this).parent();
		jQuery(menu_multi).find('.option-tab-submenu').each(function(){
			var parent = jQuery(this).parent();
			if(jQuery(parent).hasClass('submenu-active')){
				jQuery(parent).removeClass('submenu-active');
				jQuery(this).slideUp(400);
			}else{
				jQuery(parent).addClass('submenu-active');
				jQuery(this).slideDown(400);
			}
		});
	});
	
	//get #tab from url
	var query = location.href.split('#');
	
	
	if(query[1] != undefined){
		var current_menu = jQuery('#option-tab-buttons').find('#option-tab-'+query[1]);
		var current_menu_root = jQuery(current_menu).parent().parent().parent();

		if(jQuery(current_menu_root).hasClass('menu-multi')){
			jQuery(current_menu_root).addClass('submenu-active');
			jQuery(current_menu_root).find('.option-tab-submenu').slideDown(400);
		}

		//active current tab buttons
		jQuery('#option-tab-buttons').find('a').removeClass('tab-current');
		jQuery(current_menu).addClass('tab-current');
		
		//show the current tab content
		jQuery('.option-tab').hide();
		jQuery('#option-tab-'+query[1]+'-content').show();
	};
	
	jQuery('.color-scheme').click(function(){
		var highlight_color 	= jQuery(this).find('.highlight-code').html();
		var semi_color 			= jQuery(this).find('.semi-code').html();
		jQuery('#highlight-color').iris('color', '#'+highlight_color); 
		jQuery('#semi-color').iris('color','#'+semi_color);
	});
	
	//font change
	jQuery(".font_selector").change(function() {
		var font_name = jQuery(this).find('option:selected').text();
		jQuery('<link/>', {
			href: 'http://fonts.googleapis.com/css?family=' + encodeURI(font_name),
			rel: 'stylesheet',
			type: 'text/css'
		}).appendTo('head');
		
		jQuery(this).parent().find('.font_textarea').css('font-family', font_name);    

	});
	
	jQuery('.flexible-upload-button').click(function(){
		var copied_upload = jQuery(this).parent().find('.flexible-upload').find('div').last().clone();
		jQuery(this).parent().find('.flexible-upload').append(copied_upload);
	});

});

}) (jQuery.fn.clone);
