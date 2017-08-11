<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage gicasartes
 * @since Gicas Artes 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div style="float:left">
<?php
wp_nav_menu()
?>
</div>

<div class="facebook">
    <a href="http://facebook.com/gicasartes" border="0" target="_blank">
	<img src="/wp-content/themes/gicasartes/images/facebook_transparent.png" width="37" height="37" />
    </a>
</div>

<br style="clear:both" />

<script type="text/javascript">
function drawCircles() {
    for (var i = jQuery(window).height(); i >= 17; i -= 17) {
	for (var j = jQuery(window).width(); j >= 17; j -= 17) {
     	    jQuery("#content").append('<img class="backgroundCircle"/>');
  	}
    }
}

jQuery(document).ready(function() {
   drawCircles()
});

jQuery(window).resize(function() { 
alert(jQuery(window).width());
    jQuery(".backgroundCircle").remove();
    drawCircles();
});
</script>

<?php 
# var_dump($defaults);die;
?>

<div id="page" class="hfeed site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>-->

	<?php /*
	<!--
	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div>--><!-- .sidebar --> */ ?>
	
	<div id="content" class="site-content">
