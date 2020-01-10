<?php

/*
Plugin Name: Concierge
Description: A custom plugin to schedule and book appoitnments
Author: 360 Custom
Version: 1.0
 */

/* Start Adding Functions Below this Line */
add_action('init', function () {
  register_post_type('services', array(
    'labels' => array(
      'name' => __('Services'),
      'singular_name' => __('Service'),
    ),
    'supports' => array(
      'title',
      'editor',
      'author',
      'thumbnail',
      'revisions',
      'custom-fields',
    ),
    'label' => 'Services',
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'menu_position' => 5,
    'show_ui' => true,
    'show_in_admin_bar'   => true,
    'show_in_menu' => true,
    'show_in_nav_menus'   => true,
    'rewrite' => array('slug' => 'services'),
    'capability_type' => 'post'
  ));
});

/* Stop Adding Functions Below this Line */
