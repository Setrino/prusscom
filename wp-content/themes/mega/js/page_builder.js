(function($) {
  "use strict";

jQuery(document).ready(function(){
	var editor_object = "";
	var color_object = "";
	var fontawesome_object = "";
	
	//add seperate class
	jQuery('body').addClass('wope-pagebuilder');

	//add color picker
	jQuery('#index-page').find('.pb-color-picker').wpColorPicker();
	
	//wope fontawesome
	jQuery('.font_awesome').live("click",function(){
		
		fontawesome_object = jQuery(this);
		var field_content = jQuery(this).val();
		
		var old_class = jQuery(this).attr("#fontawesome_preview_icon i");
		jQuery('#fontawesome_preview_icon i').removeClass(old_class).addClass(field_content);
	
		jQuery('#wope_fontawesome_container').show();
		jQuery('#wope_overlay').show();
		
		//position for fontawesome
		var window_width = jQuery(window).width();
		var editor_left = (window_width-800)/2;

		if(window_width > 800){
			jQuery('#wope_fontawesome_container').css('left',editor_left+'px');
		}else{
			jQuery('#wope_fontawesome_container').css('left','0px');
			jQuery('#wope_fontawesome_container').css('width',window_width+'px')
		}
	});
	
	//select icon
	jQuery('#fontawesome_div i').live("click",function(){
		var new_class = jQuery(this).attr("class");
		jQuery('#fontawesome_preview_icon i').attr('class','').addClass(new_class);
	});
	
	//change size
	jQuery('#find_fontawesome').live("click",function(){
		var find_string = jQuery.trim(jQuery('#fontawesome_search_text').val());
		var find_string2 = 'fa '+find_string;
		var find_string3 = 'fa fa-'+find_string;
		jQuery('#fontawesome_div').find('i').each(function(){
			if(jQuery(this).hasClass(find_string)){
				jQuery('#fontawesome_preview_icon i').attr('class','').addClass(find_string);
			}
			if(jQuery(this).hasClass(find_string2)){
				jQuery('#fontawesome_preview_icon i').attr('class','').addClass(find_string);
			}
			if(jQuery(this).hasClass(find_string3)){
				jQuery('#fontawesome_preview_icon i').attr('class','').addClass(find_string);
			}
		});
	});
	
	//update
	jQuery('#update_wope_fontawesome').click(function(){
		var field_content = jQuery('#fontawesome_preview_icon i').attr("class");
		jQuery(fontawesome_object).val(field_content);
		jQuery('#wope_fontawesome_container').hide();
		jQuery('#wope_overlay').hide();
	});
	
	//close
	jQuery('#close_wope_fontawesome').click(function(){
		jQuery('#wope_fontawesome_container').hide();
		jQuery('#wope_overlay').hide();
	});
	
	//wope visual editor
	jQuery('.content_editor').live("click",function(){
		//resize editor
		jQuery('#wope_editor_tbl').css("height","300px");
		jQuery('#wope_editor_ifr').css("height","300px");
		
		
		editor_object = jQuery(this);
		var field_content = jQuery(this).val();
		if (window.tinyMCE.get('wope_editor')) {
			window.tinyMCE.get('wope_editor').setContent(field_content);
		}else{
			jQuery("textarea#wope_editor").html();
		}
		jQuery('#wope_editor_container').show();
		jQuery('#wope_overlay').show();
		
		//position for editor
		var window_width = jQuery(window).width();
		var editor_left = (window_width-800)/2;
		if(window_width > 800){
			jQuery('#wope_editor_container').css('left',editor_left+'px');
		}else{
			jQuery('#wope_editor_container').css('left','0px');
			jQuery('#wope_editor_container').css('width',window_width+'px')
		}
	});
	
	var tmce_editor = "";
	
	jQuery('#update_wope_editor').click(function(){
		//switch to visual tab to get formatted content
		tmce_editor = jQuery('#wope_editor-tmce');
		//switchEditors.switchto(tmce_editor[0]);
		tmce_editor.click();
		
		//hide the popup
		jQuery('#wope_editor_container').hide();
		jQuery('#wope_overlay').hide();
		
		//send content back to textarea
		var editor_content = tinyMCE.get('wope_editor').getContent();
		jQuery(editor_object).val(editor_content);
	});
	
	jQuery('#close_wope_editor').click(function(){
		//switch to visual tab to get formatted content
		tmce_editor = jQuery('#wope_editor-tmce');
		//switchEditors.switchto(tmce_editor[0]);
		tmce_editor.click();
		
		//hide the popup
		jQuery('#wope_editor_container').hide();
		jQuery('#wope_overlay').hide();
	});

	//page builder
	jQuery('<div id="page-builder-container" ><button class="button-primary" id="use-page-builder" >Switch to Page Builder</button> <button class="button-primary"  id="use-default-editor" >Switch to Default Editor</button></div>').insertAfter('#titlediv');
	
	if(jQuery('#current-editor').val() == '0'){ //last update is using default editor
		//buttons
		jQuery('#use-page-builder').show();
		jQuery('#use-default-editor').hide();
		//editor
		jQuery('#postdivrich').show();
		jQuery('#wope-page-builder').hide();
	}else{ 									//page builder
		jQuery('#use-page-builder').hide();
		jQuery('#use-default-editor').show();
		//editor
		jQuery('#postdivrich').hide();
		jQuery('#wope-page-builder').show();
	}
	
	jQuery('#use-page-builder').click(function(){
		//buttons
		jQuery(this).hide();
		jQuery('#use-default-editor').show();
		//editor
		jQuery('#postdivrich').hide();
		jQuery('#wope-page-builder').show();
		//hidden field
		jQuery('#current-editor').val('1');
		
		return false;
	});
	
	jQuery('#use-default-editor').click(function(){
		//buttons
		jQuery(this).hide();
		jQuery('#use-page-builder').show();
		//editor
		jQuery('#postdivrich').show();
		jQuery('#wope-page-builder').hide();
		//hidden field
		jQuery('#current-editor').val('0');
		
		return false;
	});
	
	//index section
	jQuery('.index-section-layout').live("change",function(){
		var layout = jQuery(this).val();
		if(layout != '0'){
			var html  = '';
			
			//store old widgets
			var box_container = jQuery(this).parent().parent().parent().parent().find('.index-page-box-container');
			var old_widgets = [];
			old_widgets[0] = [];
			old_widgets[1] = [];
			old_widgets[2] = [];
			old_widgets[3] = [];
			var number = 0;
			jQuery(box_container).find('.index-page-box').each(function(){
				var number_widget = 0;
				jQuery(this).find('.index-widget').each(function(){
					jQuery(this).find('textarea').each(function(){
						console.log(jQuery(this).attr('defaultValue'));
						jQuery(this).attr('defaultValue', jQuery(this).val() );
					});
					old_widgets[number][number_widget] = jQuery(this).clone();
					number_widget++;
				});
				number++;
			});
			
			//change the layout
			switch(layout){
				case '1':
					html = '<div class="index-page-box index-page-box1"><div class="index-box-column">1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '2': 
					html = '<div class="index-page-box column2_1 index-page-box1"><div class="index-box-column">2_1</div></div><div class="index-page-box column2_1 column-last index-page-box2"><div class="index-box-column">2_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '3': 
					html = '<div class="index-page-box column3_1 index-page-box1"><div class="index-box-column">3_1</div></div><div class="index-page-box column3_1 index-page-box2"><div class="index-box-column">3_1</div></div><div class="index-page-box column3_1 column-last index-page-box3"><div class="index-box-column">3_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					
					break;
				case '4': 
					html = '<div class="index-page-box column3_1 index-page-box1"><div class="index-box-column">3_1</div></div><div class="index-page-box column3_2 column-last index-page-box2"><div class="index-box-column">3_2</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '5':
					html = '<div class="index-page-box column3_2 index-page-box1"><div class="index-box-column">3_2</div></div><div class="index-page-box column3_1 column-last index-page-box2"><div class="index-box-column">3_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '6':
					html = '<div class="index-page-box column4_1 index-page-box1"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_1 index-page-box2"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_1 index-page-box3"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_1 column-last index-page-box4"><div class="index-box-column">4_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '7':
					html = '<div class="index-page-box column4_2 index-page-box1"><div class="index-box-column">4_2</div></div><div class="index-page-box column4_1 index-page-box2"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_1 column-last index-page-box3"><div class="index-box-column">4_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '8':
					html = '<div class="index-page-box column4_1 index-page-box1"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_2 index-page-box2"><div class="index-box-column">4_2</div></div><div class="index-page-box column4_1 column-last index-page-box3"><div class="index-box-column">4_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '9':
					html = '<div class="index-page-box column4_1 index-page-box1"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_1 index-page-box2"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_2 column-last index-page-box3"><div class="index-box-column">4_2</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '10':
					html = '<div class="index-page-box column4_1 index-page-box1"><div class="index-box-column">4_1</div></div><div class="index-page-box column4_3 column-last index-page-box2"><div class="index-box-column">4_3</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
				case '11':
					html = '<div class="index-page-box column4_3 index-page-box1"><div class="index-box-column">4_3</div></div><div class="index-page-box column4_1 column-last index-page-box2"><div class="index-box-column">4_1</div></div><div class="cleared"></div>';
					jQuery(box_container).html(html);
					break;
			}
			
			//restore old widgets
			switch(layout){
				case '1': /* 1/1 */
					for(var i = 0 ; i < 4 ; i++){
						if(old_widgets[i].length > 0){
							for(var j = 0 ; j < old_widgets[i].length ; j++){
								jQuery(box_container).find('.index-page-box1').append(old_widgets[i][j]);
							}
						}
					}
					break;
				case '2': /* 1/2 + 1/2 */
				case '4': /* 1/3 + 2/3 */
				case '5': /* 2/3 + 1/3 */
				case '10': /* 1/4 + 3/4 */
				case '11': /* 3/4 + 1/4 */
					for(var i = 0 ; i < 4 ; i++){
						if(old_widgets[i].length > 0){
							for(var j = 0 ; j < old_widgets[i].length ; j++){
								//store old widgets of column 1 to new column 1 , the rest store in column 2
								if(i == 0){
									jQuery(box_container).find('.index-page-box1').append(old_widgets[i][j]);
								}else{
									jQuery(box_container).find('.index-page-box2').append(old_widgets[i][j]);
								}
							}
						}
					}
					break;
				case '3': /* 1/3 + 1/3 + 1/3 */
				case '7': /* 2/4 + 1/4 + 1/4 */
				case '8': /* 1/4 + 2/4 + 1/4 */
				case '9': /* 1/4 + 1/4 + 2/4 */
					for(var i = 0 ; i < 4 ; i++){
						if(old_widgets[i].length > 0){
							for(var j = 0 ; j < old_widgets[i].length ; j++){
								//store old widgets of column 1 to new column 1 , the rest store in column 2
								if(i == 0){
									jQuery(box_container).find('.index-page-box1').append(old_widgets[i][j]);
								}else if(i == 1){
									jQuery(box_container).find('.index-page-box2').append(old_widgets[i][j]);
								}else{
									jQuery(box_container).find('.index-page-box3').append(old_widgets[i][j]);
								}
							}
						}
					}
					break;
				case '6': /* 1/4 + 1/4 + 1/4 + 1/4 */
					for(var i = 0 ; i < 4 ; i++){
						if(old_widgets[i].length > 0){
							for(var j = 0 ; j < old_widgets[i].length ; j++){
								//store old widgets of column 1 to new column 1 , the rest store in column 2
								if(i == 0){
									jQuery(box_container).find('.index-page-box1').append(old_widgets[i][j]);
								}else if(i == 1){
									jQuery(box_container).find('.index-page-box2').append(old_widgets[i][j]);
								}else if(i == 2){
									jQuery(box_container).find('.index-page-box3').append(old_widgets[i][j]);
								}else{
									jQuery(box_container).find('.index-page-box4').append(old_widgets[i][j]);
								}
							}
						}
					}
					break;
			}
			
			//remove numbered class
			jQuery(box_container).find('.index-page-box1').removeClass('index-page-box1');
			jQuery(box_container).find('.index-page-box2').removeClass('index-page-box2');
			jQuery(box_container).find('.index-page-box2').removeClass('index-page-box3');
			jQuery(box_container).find('.index-page-box2').removeClass('index-page-box4');
					
			//restore the sortable
			jQuery(box_container).find( ".index-page-box" ).sortable({
				revert: true,
				connectWith:  ".index-page-box",
				placeholder: "ui-state-highlight2",
			});
		}
	});

	jQuery('#add-new-section').click(function(){
		var new_section = jQuery('#section-box-container').find(".index-section-box" ).clone();
		jQuery('#index-page').append(new_section);

		jQuery('#index-page').find( ".index-page-box" ).sortable({
			revert: true,
			connectWith:  ".index-page-box",
			placeholder: "ui-state-highlight2",
		});

		

		jQuery(new_section).find('.pb-color-picker').wpColorPicker();
	})


	
	jQuery('#index-page').sortable({
		revert: true,
		placeholder: "ui-state-highlight"
	});
	
	jQuery( ".index-page-box" ).sortable({
		revert: true,
		connectWith:  ".index-page-box",
		placeholder: "ui-state-highlight2",
	});
		
	jQuery( "#widget-containers").find(".index-widget" ).draggable({ 
		revert: "invalid",
		connectToSortable: ".index-page-box",
		helper: "clone",
		start : function(event,ui){
			jQuery(ui.helper).addClass("ui-draggable-helper");
		},
		drag : function(event,ui){
			jQuery('.index-page-box').find('.index-widget-note').remove();
		}
	});
	
		
	jQuery('.index-section-option').live("click",function(){
		if( jQuery(this).parent().find('.section-open-status').val() == ''){
			jQuery(this).parent().find('.index-section-buttons').slideUp(300);
			jQuery(this).parent().find('.index-page-box-container').slideUp(300);
			jQuery(this).parent().find('.section-open-status').val(1);
		}else{
			jQuery(this).parent().find('.index-section-buttons').slideDown(300);
			jQuery(this).parent().find('.index-page-box-container').slideDown(300);
			jQuery(this).parent().find('.section-open-status').val(''); 
		}
	});
	
	jQuery('.index-section-widget-open').live("click",function(){
		var this_section = jQuery(this).parent();
		var widget_container = jQuery(this_section).find('.index-page-box-container');
		if( jQuery(widget_container).hasClass('widget-closed')){
			jQuery(widget_container).find('.index-widget-content').slideDown(300);
			jQuery(widget_container).removeClass('widget-closed').addClass('widget-opened');
		}else{
			jQuery(widget_container).find('.index-widget-content').slideUp(300);
			jQuery(widget_container).removeClass('widget-opened').addClass('widget-closed');
		}
	});
	
	jQuery('.index-widget-open-option').live("click",function(){
		var parent = jQuery(this).parent();
		if ( jQuery(parent).hasClass('widget-closed')){ //closed , then open it
			jQuery(parent).find('.index-widget-content').slideDown(300);
			jQuery(parent).removeClass('widget-closed').addClass('widget-opened');
		}else{
			jQuery(parent).find('.index-widget-content').slideUp(300);
			jQuery(parent).removeClass('widget-opened').addClass('widget-closed');
		}
	});
	
	jQuery('.index-section-remove').live("click",function(){
		jQuery(this).parent().remove();
	});
	
	jQuery('.index-widget-remove').live("click",function(){
		jQuery(this).parent().remove();
	});
	
	jQuery('#post').submit(function(){
		//reset data html
		jQuery('#index-hidden-data').html("");
		var total_index_section = 0; // total section 
		var total_index_box = 0; //total box of all sections
		var total_index_widget = 0; //total widget of all sections
		jQuery('#index-page').find('.index-section-box').each(function(){ //each index section
			total_index_section++;
			var current_index_box = 0;
			var current_section_field = 0;
			var section_layout = jQuery(this).find('.index-section-layout').val();
			
			jQuery(this).find('.index-page-box').each(function(){ //each index box
				current_index_box++;
				total_index_box++;
				var current_index_widget = 0;
				var column = jQuery(this).find(".index-box-column").html();
				
				jQuery(this).find('.index-widget').each(function(){ //each widget
					current_index_widget++;
					total_index_widget++; //widget ID
					var current_index_field = 0;
					var widget_type = jQuery(this).find(".index-widget-type").html();
					
					//create new array for custom field  for this widget
						var custom_field = [];
					
					jQuery(this).find('.widget-field').each(function(){
						var input_value = jQuery(this).val();
						
						//convert double quotes
						var input_value2 = input_value.replace(/"/g, "&quot;");
						
						//get field custom field
						var input_name = jQuery.trim(jQuery(this).data('name'));
						
						if(jQuery(this).data('name') != undefined){ 
							if(jQuery.inArray(input_name, custom_field) == -1){ //check if this custom field name is exist 
								custom_field.push(input_name);
								jQuery('#index-hidden-data').append('<input type="hidden" name="widget'+total_index_widget+'_field_custom[]" value="'+input_name+'" >'); 
							}
							//save custom input value
							jQuery('#index-hidden-data').append('<input type="hidden" name="widget'+total_index_widget+'_field_'+input_name+'[]" value="'+input_value2+'" >'); 
						}else{
							current_index_field++;
							//save input value with widget ID
							jQuery('#index-hidden-data').append('<input type="hidden" name="widget'+total_index_widget+'_field'+current_index_field+'" value="'+input_value2+'" >'); 
						}
					});
					
					//save widget's type
					jQuery('#index-hidden-data').append('<input type="hidden" name="widget'+total_index_widget+'" value="'+widget_type+'" >'); 
					
					//save total field of this widget
					jQuery('#index-hidden-data').append('<input type="hidden" name="widget'+total_index_widget+'_total" value="'+current_index_field+'" >'); 
				});
				
				//save box's column
				jQuery('#index-hidden-data').append('<input type="hidden" name="box'+total_index_box+'" value="'+column+'" >'); 
				
				//save total widget
				jQuery('#index-hidden-data').append('<input type="hidden" name="box'+total_index_box+'_total" value="'+current_index_widget+'" >'); 
			});
			
			//save total box
			jQuery('#index-hidden-data').append('<input type="hidden" name="section'+total_index_section+'_total" value="'+current_index_box+'" >'); 
			
			//save section layout
			jQuery('#index-hidden-data').append('<input type="hidden" name="section'+total_index_section+'_layout" value="'+section_layout+'" >');
			
			//save section fields
			jQuery(this).find('.section-field').each(function(){
				current_section_field++;
				var input_value = jQuery(this).val();
				
				//convert double quotes
				var input_value2 = input_value.replace(/"/g, "&quot;");
				
				//save input value of each section field
				jQuery('#index-hidden-data').append('<input type="hidden" name="section'+total_index_section+'_field'+current_section_field+'" value="'+input_value2+'" >'); 
			});
			
			//save total field of each section
			jQuery('#index-hidden-data').append('<input type="hidden" name="section'+total_index_section+'_field_total" value="'+current_section_field+'" >'); 
		});
		
		//save total sections
		jQuery('#index-hidden-data').append('<input type="hidden" name="total_section" value="'+total_index_section+'" >');

		//return false;
	});
	
	jQuery('#wope_editor_container').draggable();
	
	
	//hide all widget content as init
	//jQuery('.index-page-box').find('.index-widget-content').hide();

	
	jQuery('.index-widget-copy').live("click",function(){
		jQuery(this).parent().clone().insertAfter(jQuery(this).parent());
	});	
	
	jQuery('.add-more-button').live("click",function(){
		jQuery(this).parent().find('.dynamic-box:last').each(function(){
			jQuery(this).clone().insertAfter(jQuery(this));
		});
	});
	
	jQuery('.dynamic-box-remove').live("click",function(){
		jQuery(this).parent().remove();
	});
});

})(jQuery);

//fix jquery clone script
(function (original) {
  jQuery.fn.clone = function () {
    var       result = original.apply (this, arguments),
	
	//fix textarea
    my_textareas = this.find('textarea'),
    result_textareas = result.find('textarea');
    for (var i = 0, l = my_textareas.length; i < l; ++i){
		jQuery(result_textareas[i]).val(jQuery(my_textareas[i]).val());
	}
	
	//fix select
	my_select = this.find('select'),
    result_select = result.find('select');
    for (var i = 0, l = my_select.length; i < l; ++i){
		jQuery(result_select[i]).val(jQuery(my_select[i]).val());
	}
	
    return result;
  };
}) (jQuery.fn.clone);