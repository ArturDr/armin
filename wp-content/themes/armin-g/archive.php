<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armin_G
 */

get_header();
?>

<div class='container'>

		<?php if ( have_posts() ) : ?>

			<div class='row hero-banner'>
				<div class='col-12 col-md-4'>
					LOGO
				</div>
				<div class='col-12 col-md-8'>
				<?php
				the_archive_title( '<h1>', '</h1>' );
				?>
				</div>
			</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>

<?php
get_footer();
