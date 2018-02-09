<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GulpTheme
 */

get_header(); ?>


			<?php
			$post = get_post(7); 
			

				get_template_part( 'template-parts/content' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open($post) || get_comments_number($post) ) :
					comments_template();
				endif;

			?>


<?php
//get_sidebar();
get_footer();
