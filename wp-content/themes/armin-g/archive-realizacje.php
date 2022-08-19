<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

get_header(); ?>

<div class='container-fluid'>

    <?php if (have_posts()) : ?>

        <div class='row hero-banner'>
            <div class='col-12 col-md-4'>
                <h1>LOGO</h1>
            </div>
            <div class='col-12 col-md-8'>
                <h1>Realizacje</h1>
            </div>
        </div>
</div>
<div class='container'>

    <?php
        /* Start the Loop */
        while (have_posts()) :
            the_post();

            /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
            get_template_part('template-parts/content', get_post_type());

        endwhile;

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>
</div>

<?php
get_footer();
