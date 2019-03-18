<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anton_Agency
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<?php wp_head(); ?>

	   <!-- Add to home screen for Safari on iOS -->
	   <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0065a1">
    <meta name="apple-mobile-web-app-title" content="Anton Agency">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url')?>/img/icons/icon-192x192.png">
  
  <!-- Add to homescreen for Chrome on Android -->
    <meta name="theme-color" content="#0065a1"/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="<?php bloginfo('template_url')?>/img/icons/icon-192x192.png">
    
   <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url')?>/icons/touch/icon-192x192.png">
    <meta name="msapplication-TileColor" content="#0065a1">


    <meta http-equiv="Expires" content="2419200">
	<meta http-equiv="content-language" content="es-do">
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site ">