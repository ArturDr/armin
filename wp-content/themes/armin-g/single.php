<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Armin_G
 */

get_header();
get_template_part('template-parts/hero'); ?>

<?php
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content', 'single'); ?>

	<div class='container'>
		<div class='row armin-row justify-content-between'>
			<div class='col'>	
				<?php next_post_link( '<span class="btn armin-button">%link</span>' ); ?>
			</div>
			<div class='col text-end'>
				<?php previous_post_link( '<span class="btn armin-button">%link</span>' ); ?>
			</div>
		</div>
	</div>
<?php

	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

<?php
get_footer();
