<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body <?php body_class() ?>>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url("/") ?>">
    <img src="/wp-content/themes/Tema-Aplicacions-Web/img/logo.png" alt="" height="40">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
    wp_nav_menu( array(
      'theme_location'    => 'cybergarden2077_main_menu',
      'depth'             => 3,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'navbarNav',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
    ?>
</nav>