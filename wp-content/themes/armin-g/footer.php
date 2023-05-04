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
			<div class='col-12 text-center' id='kontakt'>
				<h2>Kontakt z nami</h2>
			</div>
		</div>
		<div class='row'>
			<div class='col-md-6 col-12'>
				<?php echo do_shortcode('[contact-form-7 id="18" title="Formularz kontaktowy"]'); ?>
			</div>
			<div class="col-md-6 col-12">
			<?php $contact = new WP_Query(array(
            'page_id' => 41
        	));
        $contact->the_post(); ?>
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
				<div class='row armin-contact'>
					<div class='col text-center'>
						<h1 class='h1-contact'><?php echo $nazwaFirmy; ?></h1>
					</div>
				</div>
			<?php }
			if ($ulica != '') { ?>
				<div class='row armin-contact'>
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
				<div class='row armin-contact'>
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
				<div class='row armin-contact justify-content-center'>
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
			</div>
			<?php wp_reset_postdata(); ?>
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