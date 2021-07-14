<?php

/*Template Name: Single cpt Lessons
*/

get_header();

$args = array(
    'post_type' => 'cpt_lessons',
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'posts_per_page' => 3,
);

$loop = new WP_Query($args);
?>
<?php
if ($loop->have_posts()): ?>
    <ul>
        <?php
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <li>
                <a href="<?php
                the_permalink(); ?>"><?php
                    the_title(); ?></a>
            </li>
        <?php
        endwhile; ?>
    </ul>
<?php
endif; ?>

<?php
$second_args = array(
    'post_type' => 'cpt_lessons',
    'orderby' => 'title',
    'order' => 'DESC',
);

$second_loop = new WP_Query($second_args);
?>
<?php
if ($second_loop->have_posts()): ?>
    <ul>
        <?php
        while ($second_loop->have_posts()) : $second_loop->the_post(); ?>
            <li>
                <a href="<?php
                the_permalink(); ?>"><?php
                    the_title(); ?></a>
            </li>
        <?php
        endwhile; ?>
    </ul>
<?php
endif; ?>
<?php

wp_reset_query();
get_footer();



