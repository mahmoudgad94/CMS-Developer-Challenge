<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cms_Developer_Challenge
 */

 /* TODO:: Implement dynamic footer  */
?>
	<footer>
			<a href="http://validator.w3.org/check/referer" title="<?php echo esc_url( __( 'Check the validity of this site&#8217;s HTML', 'cms-developer-challenge' ) ); ?>" class="zen-validate-html"><?php echo esc_url( __( 'HTML', 'cms-developer-challenge' ) ); ?></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="<?php echo esc_url( __( 'Check the validity of this site&#8217;s CSS', 'cms-developer-challenge' ) ); ?>" class="zen-validate-css"><?php echo esc_url( __( 'CSS', 'cms-developer-challenge' ) ); ?></a>
			<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="<?php echo esc_url( __( 'View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike.', 'cms-developer-challenge' ) ); ?>" class="zen-license"><?php echo esc_url( __( 'CC', 'cms-developer-challenge' ) ); ?></a>
			<a href="http://mezzoblue.com/zengarden/faq/#aaa" title="<?php echo esc_url( __( 'Read about the accessibility of this site', 'cms-developer-challenge' ) ); ?>" class="zen-accessibility"><?php echo esc_url( __( 'A11Y', 'cms-developer-challenge' ) ); ?></a>
			<a href="https://github.com/mezzoblue/csszengarden.com" title="<?php echo esc_url( __( 'Fork this site on Github', 'cms-developer-challenge' ) ); ?>" class="zen-github"><?php echo esc_url( __( 'GH', 'cms-developer-challenge' ) ); ?></a>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>


<!--

	These superfluous divs/spans were originally provided as catch-alls to add extra imagery.
	These days we have full ::before and ::after support, favour using those instead.
	These only remain for historical design compatibility. They might go away one day.
		
-->
<div class="extra1" role="presentation"></div><div class="extra2" role="presentation"></div><div class="extra3" role="presentation"></div>
<div class="extra4" role="presentation"></div><div class="extra5" role="presentation"></div><div class="extra6" role="presentation"></div>

</body>
</html>
