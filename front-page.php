<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mota
 */

get_header();
?>

	<main id="primary" class="primary">
        <!-- Informations sur Sébastien AVIT -->
        <?php get_template_part( 'template-parts/content', 'info');?>


        <!-- Contenu principal du portefolio -->
        <?php get_template_part( 'template-parts/content', 'main');?>


        <!-- Navigations entre les différentes informations -->
        <?php get_template_part( 'template-parts/content', 'nav');?>

	</main><!-- #main -->


<?php
get_footer();
