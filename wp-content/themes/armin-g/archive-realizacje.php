<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

get_header(); ?>



<?php if (have_posts()) :
    get_template_part('template-parts/hero'); ?>

    <div class='container'>

    <?php
    /* Start the Loop */
    $i = 0;
            while (have_posts()) {
                the_post();
                $img = get_field('zdjecie_1');
                    if ($i == 0) {
                    ?>
                        <div class='row'>
                        <?php
                    }
                    if ($i <= 1) {
                        ?>
                            <div class='col-md-6 col-12'>
                                <div class='img-container'>
                                    <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                    <a href='<?php the_permalink(); ?>'>
                                        <div class="img-overlay">
                                            <div class="img-text"><?php echo esc_html__(the_title()); ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                    if ($i == 2) {
                        ?>
                        </div>
                        <div class='row'>
                        <?php
                    }
                    if ($i >= 2 && $i <= 4) {
                        ?>
                            <div class='col-md-4 col-12'>
                                <div class='img-container'>
                                    <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                    <a href='<?php the_permalink(); ?>'>
                                        <div class="img-overlay">
                                            <div class="img-text"><?php echo esc_html__(the_title()); ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                    if ($i == 4) {
                        ?>
                        </div>
        <?php
                    }
                $i++;
            }

    if (get_previous_posts_link() || get_next_posts_link()) : ?>
        <div class="row page-link-row justify-content-between">
            <div class="col-md-3 col-5">
                <?php if (get_previous_posts_link()) :
                    if (get_post_type() == 'realizacje') : ?>
                        <a class="btn armin-button" href="<?php echo get_previous_posts_page_link(); ?>">Nowsze realizacje</a>
                    <?php else : ?>
                        <a class="btn armin-button" href="<?php echo get_previous_posts_page_link(); ?>">Nowsze wpisy</a>
                <?php endif;
                endif; ?>
            </div>
            <div class="col-md-3 col-5">
                <?php if (get_next_posts_link()) :
                    if (get_post_type() == 'realizacje') : ?>
                        <a class="btn armin-button" href="<?php echo get_next_posts_page_link(); ?>">Starsze realizacje</a>
                    <?php else : ?>
                        <a class="btn armin-button" href="<?php echo get_next_posts_page_link(); ?>">Starsze wpisy</a>
                <?php endif;
                endif; ?>
            </div>
        </div>
<?php
    endif;

else :

    get_template_part('template-parts/content', 'none');

endif;
    ?>
    </div>

    <?php
    get_footer();
