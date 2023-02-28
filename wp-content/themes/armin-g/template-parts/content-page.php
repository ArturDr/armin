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
			} ?>
		<?php elseif (get_the_title() == "Kontakt") : ?>
			<?php
			$nazwaFirmy = get_field('nazwa_firmy');
			$ulica = get_field('ulica');
			$numerDomu = get_field('numer_domu');
			$numerLokalu = get_field('numer_lokalu');
			$kodPocztowy = get_field('kod_pocztowy');
			$miasto = get_field('miasto');
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
						<h2><?php echo $ulica;
							if ($numerDomu != '') { ?> <?php echo $numerDomu;
																			if ($numerLokalu != '') { ?>/<?php echo $numerLokalu;
																															}
																														} ?></h2>
					</div>
				</div>
			<?php } ?>
			<?php
			if ($kodPocztowy != '') { ?>
				<div class='row armin-row'>
					<div class='col text-center'>
						<h2><?php echo $kodPocztowy;
							if ($miasto != '') { ?> <?php echo $miasto;
																			} ?></h2>
					</div>
				</div>
			<?php }
			$i = 1;
			while (get_field('numer_telefonu_' . $i)) {
				$tel = esc_html(get_field('numer_telefonu_' . $i));
			?>
				<div class='row armin-row justify-content-center'>
					<div class='col-auto'>
						<a class='tel' href='tel:<?php echo $tel; ?>'>
							<h2>tel. <?php echo substr($tel, 0, 3) . ' ' . substr($tel, 3, 3) . ' ' . substr($tel, 6, 3); ?></h2>
						</a>
					</div>
				</div> <?php
						$i++;
					} ?>
			<div class='row justify-content-center icons-row'>
				<?php
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
			<div class='row armin-row'>
				<div class='col'>
					<?php echo get_the_content(); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->