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
			<?php for ($i = 1; $i <= 20; ++$i) {
				$nameService = get_field('nazwa_uslugi_' . $i);
				$service = get_field('usluga_' . $i);
				if (isset($nameService)) { ?>
					<div class='row'>
						<div class='col-6'>
							<h1><?php echo esc_html__($nameService) ?></h1>
						</div>
						<div class='col-6'>
							<p><?php echo esc_html__($service) ?></p>
						</div>
					</div>
			<?php } else {
					break;
				}
			} ?>
		<?php elseif (get_the_title() == "Kontakt") : ?>
			<?php
			$nazwaFirmy = get_field('nazwa_firmy');
			$ulica = get_field('ulica');
			$numerDomu = get_field('numer_domu');
			$numerLokalu = get_field('numer_lokalu');
			$kodPocztowy = get_field('kod_pocztowy');
			$miasto = get_field('miasto');
			$tel = get_field('numer_telefonu');
			$email = get_field('email');
			$facebook = get_field('facebook');
			$instagram = get_field('instagram');
			$youtube = get_field('youtube');
			if (isset($nazwaFirmy)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $nazwaFirmy; ?>
					</div>
				</div>
			<?php }
			if (isset($ulica)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $ulica; ?>
					</div>
				</div>
			<?php }
			if (isset($numerDomu)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $numerDomu; ?>
					</div>
				</div>
			<?php }
			if (isset($numerLokalu)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $numerLokalu; ?>
					</div>
				</div>
			<?php }
			if (isset($kodPocztowy)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $kodPocztowy; ?>
					</div>
				</div>
			<?php }
			if (isset($miasto)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $miasto; ?>
					</div>
				</div>
			<?php }
			if (isset($tel)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $tel; ?>
					</div>
				</div>
			<?php }
			if (isset($email)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $email; ?>
					</div>
				</div>
			<?php }
			if (isset($facebook)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $facebook; ?>
					</div>
				</div>
			<?php }
			if (isset($instagram)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $instagram; ?>
					</div>
				</div>
			<?php }
			if (isset($youtube)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $youtube; ?>
					</div>
				</div>
			<?php } ?>
		<?php else : ?>
			<div class='row'>
				<div class='col'>
					<?php echo get_the_content(); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->