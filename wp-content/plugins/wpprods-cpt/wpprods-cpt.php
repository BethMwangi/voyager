<?php
/*

Plugin Name: WPProds CPT

Description: Plugin to create a custom meta field for woo product

Author: BethMwangi

Author URI: https://automattic.com/wordpress-plugins/

License: GPLv2 or later

Text Domain: akismet

*/

add_action('woocommerce_product_options_general_product_data', 'product_add_custom_meta_field');

/**
 * Product custom meta field
 *
 */
function product_add_custom_meta_field()
{
    $args = array(
        'id' => 'product_custom_meta_field',
        'label' => __('Subtitle', 'woocommerce'),
        'desc_tip' => true,
        'description' => __('Enter the title of your custom text field.', 'woocommerce'),
    );
    woocommerce_wp_text_input($args);
}

add_action('woocommerce_process_product_meta', 'save_product_add_custom_meta_field');

/**
 * Product save custom meta field
 *
 */
function save_product_add_custom_meta_field($post_id)
{
    $product = wc_get_product($post_id);
    $custom_fields_woocommerce_title = $_POST['product_custom_meta_field'] ?? '';
    $product->update_meta_data('product_custom_meta_field', sanitize_text_field($custom_fields_woocommerce_title));
    $product->save();
}

/**
 * Display custom meta field on product
 *
 */
function product_woocommerce_custom_meta_fields_display()
{
    global $post;
    $product = wc_get_product($post->ID);
    $custom_fields_woocommerce_title = $product->get_meta('product_custom_meta_field');
    if ($custom_fields_woocommerce_title) {
        echo esc_html($custom_fields_woocommerce_title);
    }
}

add_action('woocommerce_single_product_summary', 'product_woocommerce_custom_meta_fields_display', 6);


function lesson_register_post_type()
{
    $labels = array(
        'name' => __('Lessons', 'cpt'),
        'singular_name' => __('Lesson', 'cpt'),
        'menu_name' => _x('Lessons', 'admin menu'),
        'add_new' => __('New Lesson', 'cpt'),
        'add_new_item' => __('Add New Lesson', 'cpt'),
        'edit_item' => __('Edit Lesson', 'cpt'),
        'new_item' => __('New Lesson', 'cpt'),
        'view_item' => __('View Lessons', 'cpt'),
        'search_items' => __('Search Lessons', 'cpt'),
        'not_found' => __('No Lessons Found', 'cpt'),
        'not_found_in_trash' => __('No Lessons found in Trash', 'cpt'),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'author',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'post-formats',
            'page-attributes'
        ),
        'taxonomies' => 'category',
        'rewrite' => array('slug' => 'lesson'),
        'show_in_rest' => true
    );

    register_post_type('cpt_lessons', $args);
}

add_action('init', 'lesson_register_post_type');


add_filter( 'template_include', 'lesson_template_function', 1 );

function lesson_template_function( $template_path )
{
    if (get_post_type() == 'cpt_lessons') {
        if (is_single()) {
            if ($theme_file = locate_template(array('single-lessons.php'))) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path(__FILE__) . '/single-lessons.php';
            }
        }
    }
    return $template_path;
}




