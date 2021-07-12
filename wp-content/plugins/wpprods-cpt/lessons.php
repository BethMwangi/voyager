<?php

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