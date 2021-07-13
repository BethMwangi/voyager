<?php

/*Template Name: Single cpt Lessons
*/

get_header();

$args = array(
    'post_type' => 'cpt_lessons',
    'orderby' => 'title',
    'order'   => 'DESC',
    'posts_per_page' => 3,
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();
    ?>
    <h2><a href="<?php
        the_permalink() ?>"><?php
            the_title(); ?></a></h2>
<?php
endwhile;
wp_reset_postdata();
get_footer();
?>


