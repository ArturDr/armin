<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class='container-fluid'>
		<div class='row hero-banner'>
			<div class='col-12 col-md-4'>
				<h1>LOGO</h1>
			</div>
			<div class='col-12 col-md-8'>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class='container'>
		<?php if (get_post_type() == 'realizacje') {
			$poczatek = get_field('data_poczatku');
			$koniec = get_field('data_konca');
			if (isset($poczatek)) { ?>
				<div class='row'>
					<div class='col'>
						<?php echo $poczatek; ?>
					</div>
				</div>
			<?php } ?>
			<div class='row'>
				<div class='col'>
					<?php echo $koniec; ?>
				</div>
			</div>
		<?php } ?>
		<div class='row'>
			<div class='col'>
				<?php echo get_the_content(); ?>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->