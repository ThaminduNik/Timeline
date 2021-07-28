<?php
$search_link=get_permalink();
if (strpos($search_link,'/timeline/')!==false){
               
$item_post_id = get_the_ID();

$terms = get_the_terms($item_post_id,'wpex_category');
$parentPost= null;
if (is_array($terms) && count($terms)>0){

$ppages = get_posts(array(
'post_type' => 'wp-timeline',
'numberposts' => -1,
'meta_query'=>array(array(
'key'     => 'wpex_custom_metadata',
'value'   => 'milestone',
'compare' => '=',
)),
'tax_query' => array(
array(
'taxonomy' => 'wpex_category',
'field' => 'slug',
'terms' => $terms[0]->slug, // Where term_id of Term 1 is "1".
'include_children' => false
)
)
));
if (is_array($ppages) && count($ppages)>0){
$parentPost=$ppages[0];


    $search_link = post_permalink($parentPost->ID)."#".$item_post_id;


}
}

}

 
?>


<div class="bboss_ajax_search_item  bboss_ajax_search_item_post">
	<a href="<?php echo esc_url($search_link);?>">
		<div class="item">
			<div class="item-title"><?php the_title();?></div>
			<?php  
                $content = wp_strip_all_tags( get_the_content() );
				preg_match_all("^\[(.*?)\]^", $content, $matches, PREG_PATTERN_ORDER);  //strip all shortcodes in the ajax search content
				$content = str_replace($matches[0], '', $content);
                $trimmed_content = wp_trim_words( $content, 20, '...' ); 
            ?>
			<div class="item-desc"><?php echo $trimmed_content; ?></div>
       
		</div>
	</a>
</div>