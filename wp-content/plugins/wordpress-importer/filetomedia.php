<?php

class DOM extends DOMDocument {
    public function saveHTML(){
        return preg_replace("/(<\/?html>¦<!DOCTYPE.+¦<\/?body>)/", '', parent::saveHTML());
    }
}

class filetomedia {

	var $imageName;

	function imagetomedia(){$this->__construct();}
		
	function __construct(){
	}

    public function change_fileurl_inmeta($post = array(),$author=""){
        if ( isset( $post['postmeta'] ) ) {
            $i=0;
            foreach( $post['postmeta'] as $key => $meta ) {
                if (filter_var($meta['value'], FILTER_VALIDATE_URL)) {
                    $i++;
                    if (($timestamp = strtotime($post['post_date'])) !== false){
                        $time = date("Y/m", $timestamp);
                    }else{
                        $time = 'yyyy/mm';
                    }
                    $post['postmeta'][$key]['value'] = $this->media_process($meta['value'],$post['post_id'],$post['post_name'].$i,$time,$author,$post['post_date']);
                }
    		}
        }
        return $post['postmeta'];
    }
    	
    public function change_imageurl_incontent($post = array(),$author=""){
        
        $post_id = $post['post_id'];
        $post_name = $post['post_name'];
        $post_content = $post['post_content'];
        if(isset($post_content)==true && trim($post_content)!=''){
            $dom = new domDocument;
            $dom->loadHTML($post_content);
            $dom->preserveWhiteSpace = false;
            $images = $dom->getElementsByTagName('img');
            $i=0;
            $image_url = array();
            if (($timestamp = strtotime($post['post_date'])) !== false){
                $time = date("Y/m", $timestamp);
            }else{
                $time = 'yyyy/mm';
            }
            foreach ($images as $image) {
              $image->setAttribute( 'src' , $this->media_process($image->getAttribute('src'),$post_id,$post_name.$i,$time,$author,$post['post_date']));
              $i++;
            }
            return preg_replace('~<(?:!DOCTYPE|/?(?:html|body))[^>]*>\s*~i', '', $dom->saveHTML());            
        }else{
            return $post_content;
        }
    }
    
    function the_slug($post_id) {
        $post_data = get_post($post_id, ARRAY_A);
        $slug = $post_data['post_name'];
        return $slug;
    }

	function fetch_image($url) {
		if ( function_exists("curl_init") ) {
			return $this->curl_fetch_image($url);
		} elseif ( ini_get("allow_url_fopen") ) {
			return $this->fopen_fetch_image($url);
		}
	}
	function curl_fetch_image($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$image = curl_exec($ch);
		curl_close($ch);
		return $image;
	}
	function fopen_fetch_image($url) {
		$image = file_get_contents($url, false, $context);
		return $image;
	}
	
	public function media_process($url_image,$post_id = 0,$new_filename = "",$time = "yyyy/mm",$post_author = "",$post_date) {
        /*$urlarr = explode('/',$url_image);
        foreach($urlarr as $key => $value){
            if($value!='/' && $value!='http:'){
                $urlarr[$key] = urlencode($value);   
            }
        }
        $url_image = implode('/',$urlarr);*/
        if (filter_var($url_image, FILTER_VALIDATE_URL)) {
			$imageurl = $url_image;
			$imageurl = stripslashes($imageurl);
            if($time=="yyyy/mm") $uploads = wp_upload_dir(); else $uploads = wp_upload_dir($time);
			$ext = pathinfo( basename($imageurl) , PATHINFO_EXTENSION);
            if (!in_array(strtolower($ext),array('png','jpg','gif','mp3','mp4','mpeg','pdf','doc','docx','xls','xlsx'))){
                $ext="png";
            }
            $newfilename = $new_filename . ".". $ext;
			
			$filename = wp_unique_filename( $uploads['path'], $newfilename, $unique_filename_callback = null );
			$wp_filetype = wp_check_filetype($filename, null );
			$fullpathfilename = $uploads['path'] . "/" . $filename;

			try {
				/*if ( !substr_count($wp_filetype['type'], "image") ) {
					throw new Exception( basename($imageurl) . ' is not a valid image. ' . $wp_filetype['type']  . '' );
				}*/
				$image_string = $this->fetch_image($imageurl);
				$fileSaved = file_put_contents($uploads['path'] . "/" . $filename, $image_string);
				if ( !$fileSaved ) {
					throw new Exception("The file cannot be saved.");
				}
				              
				$attachment = array(
					 'post_mime_type' => $wp_filetype['type'],
					 'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
					 'post_content' => '',
					 'post_status' => 'inherit',
                     'post_author' => $post_author,
                     'post_date' => $post_date,
					 'guid' => $uploads['url'] . "/" . $filename
				);
				$attach_id = wp_insert_attachment( $attachment, $fullpathfilename, $post_id );
				if ( !$attach_id ) {
					throw new Exception("Failed to save record into database.");
				}
				require_once(ABSPATH . "wp-admin" . '/includes/image.php');
				$attach_data = wp_generate_attachment_metadata( $attach_id, $fullpathfilename );
				wp_update_attachment_metadata( $attach_id,  $attach_data );
			
			} catch (Exception $e) {
				$error = '<div id="message" class="error"><p>' . $e->getMessage() . '</p></div>';
			}

		}
		media_upload_header();
		
		return wp_get_attachment_url($attach_id);
	}
	
}

?>