<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Armin_G
 */

?>

<footer id="colophon" class="site-footer">
	<div class='container'>
		<div class='row'>
			<div class='col-md-6 col-12 text-center'>
				<h2>Kontakt z nami</h2>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-6 col-12'>
				<?php echo do_shortcode('[contact-form-7 id="18" title="Formularz kontaktowy"]'); ?>
			</div>
		</div>
		<div class='row'>
			<div class='col text-center'>
				<p>Created by <a href='https://robekartur.pl'>Robek Artur</a></p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>