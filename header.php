<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slavinraphael
 */

?>
<!doctype html>
<html <?php
language_attributes();
?>>
<head>
      <meta charset="<?php
bloginfo('charset');
?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Prototype" />
      <meta name="HandheldFriendly" content="True" />
      <meta content='' name='description'>
      <meta content='width=device-width' name='viewport'>
      <meta content='yes' name='apple-mobile-web-app-capable'>
      <meta content='yes' name='apple-touch-fullscreen'>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/imgs/favicon.ico" />
      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="">
      <meta itemprop="description" content="">
      <meta itemprop="image" content="">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" name="description">
      <meta content="width=device-width" name="viewport">
      <!-- Google -->
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency' name='description">
      <meta content="fashion, sales, wholesale, distribution, distributors, Toronto Sales Agency, Sales Agents" name="keywords">
      <meta content="SlavinRaphael" name="author">
      <meta content="SlavinRaphael 2018" name="copyright">
      <meta content="SlavinRaphael" name="application-name">
      <!-- Facebook -->
      <meta content="SlavinRaphael" property="og:title">
      <meta content="website" property="og:type">
      <meta content="<?php bloginfo('template_url'); ?>/assets/imgs/share.jpg" property="og:image">
      <meta content="http://slavinraphael.com" property="og:url">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" property="og:description">
      <!-- Twitter -->
      <meta content="summary" name="twitter:card">
      <meta content="SlavinRaphael" name="twitter:title">
      <meta content="SlavinRaphael &#8211; Wholesale multi-brand sales agency" name="twitter:description">
      <meta content="<?php bloginfo('template_url'); ?>/assets/imgs/share.jpg" name="twitter:image">
      <?php wp_head(); ?>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113948560-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-113948560-1');</script>
</head>
<body class="home--interior">
<div id ="wrapper" class="wrapper__home--interior">
<div class="container">
<header class = "header">
        <div class="inner">
           <nav>
          <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu'
));
?>
       </nav>
          <a class="navbar-brand main-header__logo" href ="/">
            SlavinRaphael
          </a>
        </div>
      </header>
      <main  id="content" <?php
body_class();
?>>
