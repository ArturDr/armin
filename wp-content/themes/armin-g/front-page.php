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

get_header(); ?>

<div class='container-fluid'>
    <div class='row hero-banner'>
        <div class='col-12 col-md-4'>
            <h1>LOGO</h1>
        </div>
        <div class='col-12 col-md-8'>
            <h1>Strona główna</h1>
        </div>
    </div>
</div>
<div class='container'>
    <div class='row'>
        <div class='col'>
            <h1>O NAS</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <p><?php echo esc_html__(get_field('o_nas')); ?></p>
        </div>
    </div>
    <?php $offer = new WP_Query(array(
        'pagename' => 'oferta',
    ));
    $offer->the_post(); ?>
    <div class='row'>
        <?php
        for ($i = 1; $i <= 2; ++$i) {
            $usluga = [
                'nazwa' => get_field('nazwa_uslugi_' . $i),
                'tresc' => get_field('usluga_' . $i)
            ];
            if (isset($usluga['nazwa']) && isset($usluga['tresc'])) {
        ?>
                <div class='col-12 col-md-6'>
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
                <div class='col-12 col-md-6'>
                    <h1><?php echo esc_html($usluga['nazwa']); ?></h1>
                    <p><?php echo esc_html($usluga['tresc']); ?></p>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <div class='row'>
        <div class='col'>
            <a href="<?php echo the_permalink() ?>">Szczegółowa oferta</a>
        </div>
    </div>
    <?php wp_reset_postdata();
    $projects = new WP_Query(array(
        'post_type' => 'realizacje',
        'post_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC'
    ));

    if ($projects->have_posts()) {
        $i = 0;
        $hmPosts = $projects->post_count;
        while ($projects->have_posts()) {
            $projects->the_post();
            $img = get_field('zdjecie_1');
            if ($hmPosts == 1) {
    ?>
                <div class='row'>
                    <div class='col'>
                        <div class='img-container'>
                            <img src="<?php echo esc_url($img['url']) ?> " alt="">
                            <a href='<?php the_permalink(); ?>'>
                                <div class="img-overlay">
                                    <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-6'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-6'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-6'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-6'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-6'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
                        <div class='col-4'>
                            <div class='img-container'>
                                <img src="<?php echo esc_url($img['url']) ?> " alt="">
                                <a href='<?php the_permalink(); ?>'>
                                    <div class="img-overlay">
                                        <div class="img-text"><?php echo esc_html__(the_title());?></div>
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
    wp_reset_postdata();?>


</div>
<?php
get_footer();
