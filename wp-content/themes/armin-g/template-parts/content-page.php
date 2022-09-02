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
					<div class='row armin-row'>
						<div class='col-md-6 col-12'>
							<h1><?php echo esc_html__($nameService) ?></h1>
						</div>
						<div class='col-md-6 col-12'>
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
			if ($nazwaFirmy != '') { ?>
				<div class='row armin-row'>
					<div class='col text-center'>
						<h1 class='h1-contact'><?php echo $nazwaFirmy; ?></h1>
					</div>
				</div>
			<?php }
			if ($ulica != '') { ?>
				<div class='row armin-row'>
					<div class='col text-center'>
						<h2><?php echo $ulica; if ($numerDomu != '') { ?> <?php echo $numerDomu; if ($numerLokalu != '') {?>/<?php echo $numerLokalu; } }?></h2>
					</div>
				</div>
			<?php } ?>
			<?php
			if ($kodPocztowy != '') { ?>
				<div class='row armin-row'>
					<div class='col text-center'>
						<h2><?php echo $kodPocztowy; if ($miasto != '') { ?> <?php echo $miasto; }?></h2>
					</div>
				</div>
			<?php }

			if ($tel != '') { ?>
				<div class='row armin-row justify-content-center'>
					<div class='col-auto'>
						<a class='tel' href='tel:<?php echo $tel; ?>'><h2><?php echo $tel; ?></h2></a>
					</div>
				</div>
				<div class='row justify-content-center icons-row'>
			<?php }
			if ($email != '') { ?>
					<div class='col-auto text-center'>
						<a href='mailto:<?php echo $email; ?>'><i class="fa-solid fa-square-envelope"></i></a>
					</div>
				<?php }
			if ($facebook != '') { ?>
					<div class='col-auto text-center'>
						<a href="<?php echo $facebook; ?>"><i class="fa-brands fa-square-facebook"></i></a>
					</div>
				<?php }
			if ($instagram != '') { ?>
					<div class='col-auto text-center'>
						<a href='<?php echo $instagram; ?>'><i class="fa-brands fa-square-instagram"></i></a>
					</div>
				<?php }
			if ($youtube != '') { ?>
					<div class='col-auto text-center'>
						<a href='<?php echo $youtube; ?>'><i class="fa-brands fa-square-youtube"></i></a>
					</div>
				<?php } ?>
				</div>
			<?php else : ?>
				<div class='row'>
					<div class='col'>
						<?php echo get_the_content(); ?>
					</div>
				</div>
			<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->