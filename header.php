<?php
/**
 * Header Template Part
 * 
 * Template part file that contains the HTML document head and 
 * opening HTML body elements, as well as the site header
 *
 * @package 	Tiga
 * @author		Satrya
 * @license		license.txt
 * @since 		0.0.1
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	
	<?php tiga_before(); ?>

	<header id="masthead" class="site-header" role="banner">

		<div id="main-header" class="clearfix">
		
			<div class="site-branding">
				<?php tiga_site_title(); ?>				
				<?php echo '<div class="site-description">' . get_bloginfo( 'description' ) . '</div>' ?>
		

			</div><!-- end .site-branding -->
<div class="site-branding-right">
<span class="widget-title">Siguenos en:</span>
<ul class="social-buttons clearfix" id="iconlisthead">
				<li id="mailicon"><a href="mailto:<?php echo antispambot( 'cocinero@hornodeluna.es' ); ?>" target="_blank"></a></li>
				<li id="twittericon"><a href="http://twitter.com/<?php echo esc_attr( 'hornodeluna' ); ?>" target="_blank"></a></li>
				<li id="facebookicon"><a href="http://www.facebook.com/<?php echo esc_attr( 'pages/hornodeluna/222246914484151' ); ?>" target="_blank"></a></li>
				<li id="googleplusicon"><a href="https://plus.google.com/<?php echo esc_attr( '114643435557877624476' ); ?>" target="_blank"></a></li>
				<li id="youtubeicon"><a href="http://www.youtube.com/user/<?php echo esc_attr( 'sergioshernand' ); ?>" target="_blank"></a></li>
				<li id="rssicon"><a href="http://www.hornodeluna.es/feed/" target="_blank"></a></li>
</ul>
<span class="widget-title">Recibe las recetas en tu mail:</span>

			<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo esc_attr( $feed_id ); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<input type="text" name="email" placeholder="<?php esc_attr_e( 'Introduce tu email &hellip;', 'tiga' ); ?>" />
				<input type="hidden" value="<?php echo esc_attr( 'hornodeluna' ); ?>" name="uri"/>
				<input type="hidden" name="loc" value="en_US"/>
				<input type="submit" id="buttonsubmit" value="<?php esc_attr_e( 'Apúntate', 'tiga' ); ?>" />
			</form>
					
</div><!-- end .site-branding -->

			<?php get_template_part( 'menu', 'primary' ); // load menu-primary.php file. ?>
			
		</div> <!-- end #main-header -->
		
		<?php get_template_part( 'menu', 'secondary' ); // load menu-secondary.php file. ?>

		<?php tiga_header(); ?>

	</header><!-- #masthead .site-header -->
	
	<?php tiga_main_before(); ?>

	<div id="main">
		
		<?php tiga_main(); ?>
