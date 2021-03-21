<?php
function zoo_post_types(){
 register_post_type('event',array(
 'capability_type' => 'event',
 'map_meta_cap'=> true,
 'public' => true,
 'labels' => array(
 'name' => "Event"
 ),
 'menu_icon' => 'dashicons-calendar'
 ));

register_post_type('zoo-images',array(
 'capability_type' => 'zoo-images',
 'map_meta_cap'=> true,
 'public' => true,
 'labels' => array(
 'name' => "Zoo Images",
 ),
 'menu_icon' => 'dashicons-format-gallery'
 ));

register_post_type('information',array(
 'capability_type' => 'information',
 'map_meta_cap'=> true,
 'public' => true,
 'labels' => array(
 'name' => "Information",
 ),
 'menu_icon' => 'dashicons-analytics'
 ));

register_post_type('animal',array(
 'capability_type' => 'animal',
 'map_meta_cap'=> true,
 'public' => true,
 'labels' => array(
 'name' => "Animal"
 ),
 'menu_icon' => 'dashicons-pets'
 ));

 }
 add_action('init', 'zoo_post_types');
?>