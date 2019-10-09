<?php
/*
Plugin Name: ==PRODUCT==
Plugin URI: https://nepbean.slack.com/messages
Description: Declares a plugin that will create a custom post type displaying product.
Version: 3.1.8
Author: Onlyfirst
Author URI: https://nepbean.slack.com/messages
License: GPLv1

link: https://code.tutsplus.com/tutorials/a-guide-to-wordpress-custom-post-types-creation-display-and-meta-boxes--wp-27645
*/

add_action('init', 'pshop01_create_post_type_product');

function pshop01_create_post_type_product() {
    $infoLabelName = __('Time line');
    register_post_type('timeline', [
        'labels'        => [
            'name'          => $infoLabelName,
            'singular_name' => $infoLabelName
        ],
        'public'        => true,
        'menu_position' => 6,
        'has_archive'   => true,
        'taxonomies'    => ['post_tag'],
        'supports'      => ['title', 'editor', 'excerpt', 'thumbnail', 'author'],
        // 'rewrite' => array('slug' => 'product/%category-product%')
    ]);

    // Add product category
    register_taxonomy('category_product', 'product', [
        'hierarchical'          => true,
        'update_count_callback' => '_update_post_term_count',
        'label'                 => 'Category product',
        'singular_label'        => $infoLabelName . 'áds',
        'query_var'             => true,
        'public'                => true,
        'show_ui'               => true,
        // 'rewrite' => array( 'slug' => 'product', 'with_front' => true ),
    ]);
}

add_filter('template_include', 'include_template_product', 1);
function include_template_product($template_path) {
    if (get_post_type() == 'product') {
        if (is_single()) {

            if ($theme_file = locate_template(['single-product.php'])) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path(__FILE__) . 'single-product.php';
            }
        }
        if (is_archive()) {
            if ($theme_file = locate_template(['archive-product.php'])) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path(__FILE__) . 'archive-product.php';
            }
        }

    }

    return $template_path;
}

include_once('product-get-custom-field.php');
include_once('product-get-sub-product.php');
include_once('product-get-product-type.php');
