<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    wp_head();
    ?>
</head>
<body>
<?php body_class(); ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggle-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'secondary',
                'container' => 'div',
                'container_class'  => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav mr-auto',
                'theme_location' => 'secondary'
            )
        );
        ?>

    </div>
</nav>

