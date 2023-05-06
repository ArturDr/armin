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
get_template_part('template-parts/hero');
$offerImage = get_field('oferta_zdjecie');
$aboutUsImage = get_field('o_nas_zdjecie'); ?>

<div class='front-section-about'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-md-6'>
                <img class='img-fluid' src="<?php echo esc_url($aboutUsImage['url']); ?>" alt="<?php echo esc_attr(($aboutUsImage['alt'] != '') ? esc_attr($aboutUsImage['alt']) : ' '); ?>">
            </div>
            <div class='col-12 col-md-6 align-self-center text-center'>
                <h1>O NAS</h1>
                <p><?php echo esc_html__(get_field('o_nas')); ?></p>
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
            <div class='col-12 col-md-6 align-self-center'>
                <h1 class='offer-title text-center'><?php echo esc_html__(the_title()); ?></h1>
                <?php
                for ($i = 1; $i <= 6; ++$i) {
                    $usluga = [
                        'nazwa' => get_field('nazwa_uslugi_' . $i),
                    ];
                    if (isset($usluga['nazwa'])) {
                ?>
                        <h2 class='text-center'><?php echo esc_html($usluga['nazwa']); ?></h2>
                <?php
                    }
                }
                ?>
                <div class='row button-row'>
                    <div class='col text-center'>
                        <a class='btn armin-button' href="<?php echo the_permalink() ?>">Szczegółowa oferta</a>
                    </div>
                </div>
            </div>
            <div class='col-12 col-md-6'>
                <img src="<?php echo esc_url($offerImage['url']); ?>" alt="<?php echo esc_attr(($offerImage['alt'] != '') ? esc_attr($offerImage['alt']) : ' '); ?>">
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
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC'
        )); ?>
        <div class='row'>
            <div class='col text-center'>
                <h1>Najnowsze realizacje</h1>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($projects->have_posts()) {
                    $projects->the_post();
                    $img = get_field('zdjecie_1');
                    if ($i == 0) { ?>
                        <div class="carousel-item active" data-bs-interval="10000">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img['url']) ?> " class="d-block w-100" alt=""></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php echo esc_html__(the_title()); ?></h2>
                            </div>
                        </div>
                    <?php }
                    if ($i == 1) { ?>
                        <div class="carousel-item" data-bs-interval="10000">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img['url']) ?> " class="d-block w-100" alt=""></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php echo esc_html__(the_title()); ?></h2>
                            </div>
                        </div>
                    <?php }
                    if ($i == 2) { ?>
                        <div class="carousel-item" data-bs-interval="10000">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img['url']) ?> " class="d-block w-100" alt=""></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php echo esc_html__(the_title()); ?></h2>
                            </div>
                        </div>
                    <?php }
                    if ($i == 3) { ?>
                        <div class="carousel-item" data-bs-interval="10000">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img['url']) ?> " class="d-block w-100" alt=""></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php echo esc_html__(the_title()); ?></h2>
                            </div>
                        </div>
                    <?php }
                    if ($i == 4) { ?>
                        <div class="carousel-item" data-bs-interval="10000">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img['url']) ?> " class="d-block w-100" alt=""></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php echo esc_html__(the_title()); ?></h2>
                            </div>
                        </div>
                <?php }
                    ++$i;
                }
                wp_reset_postdata(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class='row button-row'>
            <div class='col text-center'>
                <a class='btn armin-button' href="<?php echo get_post_type_archive_link('realizacje'); ?>">Wszystkie realizacje</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
