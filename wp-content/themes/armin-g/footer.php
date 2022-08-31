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
	</div>
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'armin-g')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'armin-g'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'armin-g'), 'armin-g', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>