<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shannon
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
<div id="page" class="site">
<header class="site-header max">
  <div class="site-topbar">

    <div class="site-slogan">

				<p class="site-description"><?php echo $description; ?></p>

    </div> <!-- .site-slogan -->
      <div class="search-box">

        <form action="/" method="get">

          <input type="search" name="s" id="search" value="" class="search-field" placeholder="Search">
          <button type="submit">
          <img src="<?php bloginfo('template_url'); ?>/images/search-1.svg" alt="Search" class="search-icon" />
        </button>
        </form>
      </div> <!-- .search-box -->


  </div> <!-- .site-topbar -->

  <div class="site-branding">
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="The Shannon Group"></a>
    </div>
    <div class="address">
      <p>Dromenagh Farm, Seven Hills Road<br>
      Iver, Buckinghamshire, SL0 0PA</p>
    </div>
    <div class="contact">
      <p>info@theshannongroup.co.uk<br>
          +44 (0)1895 448 111</p>
    </div>
  </div>





    <div id="header">
      <nav class="site-navigation">
         <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav> <!-- .site-navigation -->
       <div class="contact-menu">
           <a href="contact.php">Contact us</a>
       </div>
    </div>
  </header> <!-- .site-header -->







	<div id="content" class="site-content">
