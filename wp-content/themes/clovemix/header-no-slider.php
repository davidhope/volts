<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Clovemix
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-wrap">
		<section>
			<div class="clear"></div>
		</section>
    <div class="wrapper_main" >
        <header class="header">
        	<div class="container-header">
                <div class="head_fix">
                 <div id="logo">
                    <h1><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="header_right">

               		<div class="social_icons">
                     	<a href="<?php echo esc_url(get_theme_mod('fb_link','#')); ?>" target="_blank" class="facebook"></a>
                     	<a href="<?php echo esc_url(get_theme_mod('twitt_link','#')); ?>" target="_blank" class="twitter"></a>
                     	<a href="<?php echo esc_url(get_theme_mod('in_link','#')); ?>" target="_blank" class="linkedin"></a>
                     	<a href="<?php echo esc_url(get_theme_mod('gplus_link','#')); ?>" target="_blank" class="gplus"></a>
                     	<a href="<?php echo esc_url(get_theme_mod('flickr_link'.'#')); ?>" target="_blank" class="flickr"></a>
                   </div>
                   			<h6><a href="mailto:<?php echo get_theme_mod('mail_textbox','demo@domain.com'); ?>"><?php echo get_theme_mod('mail_textbox','site@example.com'); ?></a></h6>
                       		<h6><?php echo get_theme_mod('phone_textbox','+91 123456789'); ?></h6>
                </div>
                </div><!--end.head_fix-->
            </div><div class="clear"></div>
            </header>
             <div id="menu_fix">
             <div class="header_menu">
                    <div class="mobile_nav"><a href="#"><?php _e('Menu...','clovemix'); ?></a></div>
                     <nav id="nav">
                       <?php wp_nav_menu( array('theme_location'  => 'primary' ) ); ?>
                     </nav>
             </div> <!--end.header_menu-->
             </div>

        </div>

        <div class="mainpage-area">
