<?php
/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins.com
*/

if ( ! defined('ABSPATH')) exit;  // if direct access


    //var_dump($media_source);
//include post_grid_plugin_dir.'/templates/variables.php';

		$html_media = '';
		if (!empty($parentPost)){

			$item_post_permalink = post_permalink($parentPost->ID).'#'.$item_post_id;;
	
	
		}else
		$item_post_permalink = apply_filters('post_grid_item_post_permalink', get_permalink($item_post_id));
	
		$is_image = false;
		foreach($media_source as $source_info){
		
			$media = post_grid_get_media($item_post_id, $source_info['id'], $featured_img_size, $thumb_linked,$item_post_permalink);
			
			//var_dump($media);
			
			if ( $is_image ) continue;
		
			if(!empty($source_info['checked'])){
				if(!empty($media)){
			
					$html_media = post_grid_get_media($item_post_id, $source_info['id'], $featured_img_size, $thumb_linked,$item_post_permalink);
					$is_image = true;
				}
			   else{
				   $html_media = '';
				   }
			}
		}



	$html_media = apply_filters('post_grid_filter_html_media', $html_media);
	

	
	
	?>
	
    <div class="layer-media"><?php echo $html_media; ?></div>