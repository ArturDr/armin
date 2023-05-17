<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

?>

<div class='container-fluid <?php if (is_main_site()) {
                if (get_post_type() == 'realizacje' || is_post_type_archive('realizacje')) { ?>bg-project
                <?php } elseif (get_the_title() == 'O nas') { ?>bg-about-us
                <?php } elseif (get_the_title() == 'Oferta') { ?>bg-offer
                <?php } elseif (get_the_title() == 'Strona główna') { ?>bg-front-page
                <?php } elseif (is_404()) { ?>bg-404
                <?php } else { ?>bg-news
            <?php }
            } ?>'>
    <div class='row justify-content-center hero-banner-first'>
        <div class='col-md-6 col-12'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo ostat g.png" alt="" class='img-fluid'>
        </div>
    </div>
    <div class='row justify-content-center hero-banner-second'>
        <div class='col-md-6 col-12 text-center'>
            <?php if (is_main_site()) :
                if (is_singular()) : ?><h1><?php the_title(); ?></h1>
                <?php elseif (is_post_type_archive('realizacje')) : ?><h1>Realizacje</h1>
                <?php elseif (is_404()) : ?><h1>Strona nie istnieje</h1>
                <?php else : ?><h1>Aktualności</h1>
            <?php endif;
            endif; ?>
        </div>
    </div>
</div>