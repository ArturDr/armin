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
            <h1>Tutaj zrobimy zajawkę o nas.</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <h1>Tutaj zrobimy zajawkę oferty</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <h1>Tutaj zrobimy zajawkę realizacji.</h1>
        </div>
    </div>
</div>
<?php
get_footer();
