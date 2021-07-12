<?php
/*Template Name: Lessons
*/

get_header(); ?>
<div id="primary">
    <div id="content" role="main">
        <?php
        $mypost = array( 'post_type' => 'cpt_lessons', );
        $loop = new WP_Query( $mypost );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">

                    <strong>Title: </strong><?php the_title(); ?><br />

                </header>

                <div class="entry-content"><?php the_content(); ?></div>
            </article>

        <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
