<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class='container'>
		<?php if (get_the_title() == "Oferta") : ?>
			<?php
			$i = 1;
			while (get_field('nazwa_uslugi_' . $i) && get_field('usluga_' . $i)) {
				$nameService = esc_html(get_field('nazwa_uslugi_' . $i));
				$service = esc_html(get_field('usluga_' . $i));
			?>
				<div class='row armin-row'>
					<div class='col-md-6 col-12'>
						<h1><?php echo $nameService ?></h1>
					</div>
					<div class='col-md-6 col-12'>
						<p><?php echo $service ?></p>
					</div>
				</div>
			<?php
				$i++;
			}
		else : ?>
			<div class='row armin-row'>
				<div class='col'>
					<?php echo get_the_content(); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->