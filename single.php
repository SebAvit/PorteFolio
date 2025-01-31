<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portefolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="single">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );



			endwhile; // End of the loop.
			?>
			<button class="button">Accéder au site</button>
			<button class="button">Accéder au Git</button>
		</div>
	</main><!-- #main -->

<?php
get_footer();
