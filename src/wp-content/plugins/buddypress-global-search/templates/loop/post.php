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




<li class="bboss_search_item bboss_search_item_post">

<a href="<?php echo $search_link ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'buddypress-global-search' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
      <p><?php echo make_clickable( get_the_excerpt() ); ?> </p>

</li>
