<?php

/**
 * @file template.php
 */


 /**
  * 
  *Adds jquery fancybox http://megadrupal.com/blog/creating-an-image-gallery-in-drupal-7
  */
 function bootstrap_process_page(&$variables)  {
     drupal_add_js(drupal_get_path('theme', 'bootstrap_subtheme') . '/js/jquery.mousewheel-3.0.6.pack');
     drupal_add_js(drupal_get_path('theme', 'bootstrap_subtheme') . '/js/fancybox/jquery.fancybox.pack.js');
     drupal_add_css(drupal_get_path('theme', 'bootstrap_subtheme') . '/js/fancybox/jquery.fancybox.css');
     $fancybox = "jQuery(document).ready(function()  {
         jQuery('.fancybox' ).fancybox() ; 
         });";
     drupal_add_js($fancybox, 'inline');
 }
 
 /**
  * Ads preprocess function to show content fields from the node-14 
  */
 function bootstrap_preprocess_node(&$vars, $hook)  {
     $node = $vars['node'];
     
     //field_type
     $field_type = field_get_items('node', $node, 'field_type');
     $vars['type'] = $field_type[0]['value'];
     //field_district
     $field_district = field_get_items('node', $node, 'field_district' );
     $vars['district'] = $field_district[0]['value'];
     //field_location
     $field_location = field_get_items('node', $node, 'field_location');
     $vars['location'] = $field_location[0]['value'];
     //field_state
     $field_state = field_get_items('node', $node, 'field_state');
     $vars['state'] = $field_state[0]['value'];
     //field_bedrooms
     $field_bedrooms = field_get_items('node', $node, 'field_bedrooms');
     $vars['bedrooms'] = $field_bedrooms[0]['value'];
     //field_parking_spots
     $field_parking_spots = field_get_items('node', $node, 'field_parking_spots');
     $vars['parking'] = $field_parking_spots[0]['value'];
     //field_baths
     $field_baths = field_get_items('node', $node, 'field_baths');
     $vars['baths'] = $field_baths[0]['value'];
     //field_living_area
     $field_living_area = field_get_items('node', $node, 'field_living_area');
     $vars['living_area'] = $field_living_area[0]['value'];
     //field_land_area
     $field_land_area = field_get_items('node', $node, 'field_land_area');
     $vars['land_area'] = $field_land_area[0]['value'];
     //field_from_shore
     $field_from_shore = field_get_items('node', $node, 'field_from_shore');
     $vars['from_shore'] = $field_from_shore[0]['value'];
     //field_description
     $field_description = field_get_items('node', $node, 'field_description');
     $vars['description'] = $field_description[0]['value'];

 }