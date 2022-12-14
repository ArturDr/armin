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
	<div class='row armin-row'>
		<div class='col'>
			<h1><a href='<?php echo the_permalink() ?>'><?php the_title() ?></a></h1>
		</div>
	</div>
	<div class='row armin-row'>
		<?php the_excerpt(); ?>
	</div>
	<div class='row button-row'>
		<div class='col'>
			<a class='btn armin-button' href='<?php echo the_permalink() ?>'>Więcej</a>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->