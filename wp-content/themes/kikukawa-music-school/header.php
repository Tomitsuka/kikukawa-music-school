<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KIKUKAWA_MUSIC_SCHOOL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--- テーマ -->
  <?php wp_head(); ?>
  <!--- //テーマ -->
  <meta content="茅ヶ崎市・船橋市にある音楽ピアノ教室です。子供から大人まで「学びあるレッスン」をモットーに教室を運営しています。" name="description" />
  <meta content="telephone=no" name="format-detection" />
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144" />
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/assets/swiper-bundle.min.js" type="text/javascript"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/style.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/assets/main.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <div class="container">
    <header class="header">
      <div class="header_wrap">
        <div class="header_logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.svg" alt="<?php bloginfo('name'); ?>">
          </a>
        </div>
        <nav class="menu">
          <div class="menu_btn">
            <div class="menu_icon">
              <div class="menu_bar"></div>
              <div class="menu_bar"></div>
              <div class="menu_bar"></div>
            </div>
          </div>
          <div class="menu_wrap">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </div>
        </nav>
      </div>
    </header>
    <div class="side__box">
      <div class="side__sns">
        <div class="sns__item instagram">
          <a href="https://www.instagram.com/kikukawa_piano/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram.svg" alt="instagram"></a>
        </div>
        <div class="sns__item twitter">
          <a href="https://twitter.com/kikukawa_piano" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.svg" alt="twitte"></a>
        </div>
        <!-- <div class="sns__item facebook">
          <a href="###" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.svg" alt="facebook"></a>
        </div> -->
      </div>
      <div class="side__contact">
        <div class="side__item contact__mail">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon_mail.svg" alt="mail">
          <a href="https://forms.gle/hYhretfVKwrViTqp9" target="_blank">お問い合わせはこちら</a>
        </div>
      </div>
    </div>