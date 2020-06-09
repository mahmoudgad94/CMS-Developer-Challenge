<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cms_Developer_Challenge
 */
$data=cms_gets_block_template( parse_blocks( get_the_content( ) ) );

?>

<!--  TODO:: implement dynamic  -->
<!-- summary -->
<div class="summary" id="zen-summary" role="article" <?php post_class(); ?>  >
	<?php echo $data["title"][0]; ?>
</div>

<!-- preamble -->
<div class="preamble" id="zen-preamble" role="article">
	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
		echo $data["paragraph"][0];
	?>

</div><!-- #post-<?php the_ID(); ?> -->
<main id="primary" class="site-main">
	
<div class="main supporting" id="zen-supporting" role="main">
	<div class="explanation" id="zen-explanation" role="article">
		<?php echo $data["title"][1]; ?>
		<?php echo $data["paragraph"][1]; ?>
	</div>

	<div class="participation" id="zen-participation" role="article">
		<?php echo $data["title"][2]; ?>
		<?php echo $data["paragraph"][2]; ?>
	</div>

	<div class="benefits" id="zen-benefits" role="article">
		<?php echo $data["title"][3]; ?>
		<?php echo $data["paragraph"][3]; ?>
	</div>

	<div class="requirements" id="zen-requirements" role="article">
		<?php echo $data["title"][4]; ?>
		<?php echo $data["paragraph"][4]; ?>
		<p role="contentinfo">By <a href="http://www.mezzoblue.com/">Dave Shea</a>. Bandwidth graciously donated by <a href="http://www.mediatemple.net/">mediatemple</a>. Now available: <a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">Zen Garden, the book</a>.</p>
	</div>

</div>

</main><!-- #main -->
