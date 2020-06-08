<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cms_Developer_Challenge
 */

?>

<!--  TODO:: implement dynamic  -->

<div class="summary" id="zen-summary" role="article" <?php post_class(); ?>  >
	
</div>

<div class="preamble" id="zen-preamble" role="article">
	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
	?>
	<?php
		the_content(
			sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cms-developer-challenge' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cms-developer-challenge' ),
				'after'  => '</div>',
			)
		);
	?>
</div><!-- #post-<?php the_ID(); ?> -->