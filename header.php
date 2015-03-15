<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0px!important;">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <noscript>
      <link rel="stylesheet" href="<?php \Transit4WP\ThemeSetup::getResourcesPath(); ?>css/skel.css" />
      <link rel="stylesheet" href="<?php \Transit4WP\ThemeSetup::getResourcesPath(); ?>css/style.css" />
      <link rel="stylesheet" href="<?php \Transit4WP\ThemeSetup::getResourcesPath(); ?>css/style-xlarge.css" />
   </noscript>
   <?php wp_head(); ?>

   <?php if( !( \Transit4WP\ThemeOptions::getOption('scriptsInFooter') ) ){ ?>
      <script id="skelInitScript" src="<?php \Transit4WP\ThemeSetup::getResourcesPath(); ?>js/init.js" data-mediapath="<?php \Transit4WP\ThemeSetup::getResourcesPath(); ?>"></script>
   <?php } ?>

</head>
<body <?php body_class( ( is_front_page() ? 'landing' : '' ) ); ?>>

<!-- Header -->
<header id="header">
   <p class="siteTitle"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
   <nav id="nav">
      <?php \Transit4WP\ThemeSetup::getMainMenu( array( 'menu' => 'Menu Principal' ) ); ?>
   </nav>
</header>


