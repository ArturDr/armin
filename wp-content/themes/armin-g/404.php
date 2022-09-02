<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Armin_G
 */

get_header();
get_template_part('template-parts/hero');
?>
<div class='container'>
	<div class='row armin-row'>
		<div class='col-12 text-center'>
			<h1>Strona której szukasz, niestety nie istnieje.</h1>
		</div>
	</div>
	<div class='row button-row'>
		<div class='col-12 text-center'>
			<a class='btn armin-button' href='<?php echo site_url('strona-glowna'); ?>'>Zapraszamy tutaj</a>
		</div>
	</div>
</div>
<?php
get_footer();
