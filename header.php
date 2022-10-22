<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php bloginfo();?>/css/style.css">
  <?php wp_head();?>
</head>
<body>
  <div id="wrapper">
    <div class="line-height">
      <img src="<?= get_template_directory_uri(); ?>/img/mari.png" alt="">
      <div class="text">
        <p>Ясинская Марина Владимировна</p>
        <p>Председатель Партии ОСВОБОЖДЕНИЯ. Польша.</p>
      </div>
      <a href="https://vk.com/public213049540"><img src="<?= get_template_directory_uri(); ?>/img/vk.png" alt="">
  </a>
      <img src="<?= get_template_directory_uri(); ?>/img/flag.jpg" alt="">
      <img src="<?= get_template_directory_uri(); ?>/img/emblem.jpg" alt="">
    </div>
    <div class="header">
  <?php

      $args=array (
  'theme_location'  => '',
  'menu'            => '',
  'container'       => 'ul',
  'container_class' => 'nav-navbar',
  'container_id'    => '',
  'menu_class'      => 'nav-navbar',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',
  );
      wp_nav_menu ($args); ?>

      <!-- <div class="navbar">
        <ul class="nav-navbar">
          <li><a href="index.html">ГЛАВНАЯ</a></li>
          <li><a href="biography.html">БИОГРАФИЯ</a></li>
          <li><a href="news.html">НОВОСТИ</a></li>
          <li><a href="photo.html">ФОТО</a></li>
          <li><a href="contacts.html">КОНТАКТЫ</a></li>
          <li><a href="help.html">ПОМОЩЬ</a></li>
          <li><a href="search.html">ПОИСК</a></li>
        </ul>
      </div> -->
    </div>
