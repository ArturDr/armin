<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

get_header();
get_template_part('template-parts/hero'); ?>

<div class='front-section-about'>
    <div class='container'>
        <div class='row'>
            <div class='col text-center'>
                <h1>O NAS</h1>
            </div>
        </div>
        <div class='row'>
            <div class='col'>
                <p><?php echo esc_html__(get_field('o_nas')); ?></p>
            </div>
        </div>
        <div class='row'>
            <div class='col text-center'>
                <a class='btn armin-button' href="<?php echo site_url('/o-nas'); ?>">Więcej</a>
            </div>
        </div>
    </div>
</div>
<div class='front-section-offer'>
    <div class='container'>
        <?php $offer = new WP_Query(array(
            'pagename' => 'oferta',
        ));
        $offer->the_post(); ?>
        <div class='row offer-row'>
            <div class='col text-center offer-back'>
                <h1 class='offer-title'><?php echo esc_html__(the_title()); ?></h1>
            </div>
        </div>
        <div class='row'>
            <?php
            for ($i = 1; $i <= 2; ++$i) {
                $usluga = [
                    'nazwa' => get_field('nazwa_uslugi_' . $i),
                    'tresc' => get_field('usluga_' . $i)
                ];
                if (isset($usluga['nazwa']) && isset($usluga['tresc'])) {
            ?>
                    <div class='col-12 col-md-6 offer-back'>
                        <h1><?php echo esc_html($usluga['nazwa']); ?></h1>
                        <p><?php echo esc_html($usluga['tresc']); ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class='row'>
            <?php
            for ($i = 3; $i <= 4; ++$i) {
                $usluga = [
                    'nazwa' => get_field('nazwa_uslugi_' . $i),
                    'tresc' => get_field('usluga_' . $i)
                ];
                if (isset($usluga['nazwa']) && isset($usluga['tresc'])) {
            ?>
                    <div class='col-12 col-md-6 offer-back'>
                        <h1><?php echo esc_html($usluga['nazwa']); ?></h1>
                        <p><?php echo esc_html($usluga['tresc']); ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class='row button-row'>
            <div class='col text-center'>
                <a class='btn armin-button' href="<?php echo the_permalink() ?>">Szczegółowa oferta</a>
            </div>
        </div>
    </div>
</div>
<?php wp_reset_postdata(); ?>
<div class='front-section-projects'>
    <div class='container'>
        <?php
        $projects = new WP_Query(array(
            'post_type' => 'realizacje',
            'post_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        )); ?>
        <div class='row'>
            <div class='col text-center'>
                <h1>Najnowsze realizacje</h1>
            </div>
        </div>
        <?php
        if ($projects->have_posts()) {
            $i = 0;
            $hmPosts = $projects->post_count;
            while ($projects->have_posts()) {
                $projects->the_post();
                $img = get_field('zdjecie_1');
                if ($hmPosts == 1) {
        ?>
                    <div class='row'>
                        <div class='col-12'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title()); ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                } elseif ($hmPosts == 2) {
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
                    if ($i == 1) {
                        ?>
                        </div>
                    <?php
                    }
                } elseif ($hmPosts == 3) {
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
                    if ($i == 1) {
                        ?>
                        </div>
                    <?php
                    }
                    if ($i == 2) {
                    ?>
                        <div class='row'>
                            <div class='col-12'>
                                <div class='img-container'>
                                    <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                    <a href='<?php the_permalink(); ?>'>
                                        <div class="img-overlay">
                                            <div class="img-text"><?php echo esc_html__(the_title()); ?></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } elseif ($hmPosts == 4) {
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
                    if ($i >= 2 && $i <= 3) {
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
                    if ($i == 3) {
                        ?>
                        </div>
                    <?php
                    }
                } elseif ($hmPosts == 5) {
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
                }
                $i++;
            }
        }
        wp_reset_postdata(); ?>

        <div class='row button-row'>
            <div class='col text-center'>
                <a class='btn armin-button' href="<?php echo get_post_type_archive_link('realizacje'); ?>">Wszystkie realizacje</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
