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
	<div class='container projects-armin'>
		<div class='row armin-row'>
			<div class='col'>
				<?php echo get_the_content(); ?>
			</div>
		</div>
		<?php if (get_post_type() == 'realizacje') {
			$img1 = get_field('zdjecie_1');
			$img2 = get_field('zdjecie_2');
			$img3 = get_field('zdjecie_3');
			$img4 = get_field('zdjecie_4');
			$img5 = get_field('zdjecie_5');
			$img6 = get_field('zdjecie_6'); ?>
			<div class='row'>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img1['url']); ?>' alt='<?php echo esc_attr($img1['alt']); ?>'>
				</div>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img2['url']); ?>' alt='<?php echo esc_attr($img2['alt']); ?>'>
				</div>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img3['url']); ?>' alt='<?php echo esc_attr($img3['alt']); ?>'>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img4['url']); ?>' alt='<?php echo esc_attr($img4['alt']); ?>'>
				</div>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img5['url']); ?>' alt='<?php echo esc_attr($img5['alt']); ?>'>
				</div>
				<div class='col-md-4 col-12'>
					<img src='<?php echo esc_url($img6['url']); ?>' alt='<?php echo esc_attr($img6['alt']); ?>'>
				</div>
			</div>
	</div>
<?php	} ?>
</article><!-- #post-<?php the_ID(); ?> -->