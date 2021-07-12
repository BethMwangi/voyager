<?php

get_header()
?>
    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-2 sidenav">

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'menu_class' => 'side-nav',
                    )
                );
                ?>
            </div>
            <div class="col-sm-8 text-left">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
