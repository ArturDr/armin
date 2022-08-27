<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

?>

<div class='container-fluid'>
    <div class='row hero-banner'>
        <div class='col-12 col-md-4'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo 6 text g.png" alt="">
        </div>
        <div class='col-12 col-md-8'>
            <?php if (is_main_site()) :
                if (is_singular()) : ?><h1><?php the_title(); ?></h1>
                <?php elseif (get_the_title() == 'Strona Główna') : ?><h1>Strona główna</h1>
                <?php elseif (is_post_type_archive('realizacje')) : ?><h1>Realizacje</h1>
                <?php else : ?><h1>Aktualności</h1>
            <?php endif;
            endif; ?>
        </div>
    </div>
</div>