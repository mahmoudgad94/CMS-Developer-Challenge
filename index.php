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
 * @package Cms_Developer_Challenge
 */

get_header();
?>
    <?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that
					 * will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );
					if ( is_singular() == false ) : // ok get first post only for home
						break;
					endif;
				endwhile;
			else :
				// TODO:: handle not content
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
    ?>
    
<?php
get_sidebar();
get_footer();
