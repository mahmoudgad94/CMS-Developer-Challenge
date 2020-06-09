<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmsdeveloperchallenge
 */
$cms_developer_challenge_description = get_bloginfo( 'description', 'display' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'title' ); ?></title>

	<link rel="stylesheet" media="screen" href="style.css?v=8may2013">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TODO::: implement dynamic author if found -->
	<meta name="author" content="Dave Shea">
	<?php if ( $cms_developer_challenge_description || is_customize_preview() ) :  ?>
		<meta name="description" content="<?php echo $cms_developer_challenge_description; ?>">
	<?php endif; ?>
	<meta name="robots" content="all">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="script/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="css-zen-garden">
<?php wp_body_open(); ?>
<div class="page-wrapper">
	<section class="intro" id="zen-intro">
		<header role="banner">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<!--  TODO:: implement links to navbar ?  -->
			<?php	
				// print description
				if ( $cms_developer_challenge_description || is_customize_preview() ) : 
					echo "<h2>$cms_developer_challenge_description</h2>";
				endif;
			?>
		</header>
	</section>