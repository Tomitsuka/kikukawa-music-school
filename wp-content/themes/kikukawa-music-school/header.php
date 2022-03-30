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
          <a href="###" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram.svg" alt="instagram"></a>
        </div>
        <div class="sns__item twitter">
          <a href="###" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.svg" alt="twitte"></a>
        </div>
        <div class="sns__item facebook">
          <a href="###" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.svg" alt="facebook"></a>
      </div>
      </div>
      <div class="side__contact">
        <div class="side__item contact__mail">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon_mail.svg" alt="mail">
          <!-- <a href="mailto:kikukawa817.piano&#64;gmail.com?subject=%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B">kikukawa817.piano@gmail.com</a> -->
          <script type="text/javascript">
          <!--
          function converter(M){
          var str="", str_as="";
          for(var i=0;i<M.length;i++){
          str_as = M.charCodeAt(i);
          str += String.fromCharCode(str_as + 1);
          }
          return str;
          }
          function mail_to(k_1,k_2)
          {eval(String.fromCharCode(108,111,99,97,116,105,111,110,46,104,114,101,102,32,
          61,32,39,109,97,105,108,116,111,58)
          + escape(k_1) +
          converter(String.fromCharCode(106,104,106,116,106,96,118,96,55,48,54,45,111,104,96,109,110,63,102,108,96,104,107,45,98,110,108,96,
          62,114,116,97,105,100,98,115,60))
          + escape(k_2) + "'");}
          document.write('<a href=JavaScript:mail_to("","")><img src="<?php echo get_template_directory_uri(); ?>/images/side_mail.svg" alt=""><\/a>');
          //-->
          </script>
          <noscript><img src="<?php echo get_template_directory_uri(); ?>/images/side_mail.svg" alt=""></noscript>
          </script>
        </div>
        <div class="side__item contact__tel">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon_tel.svg" alt="tel">
          <svg width="12" height="102" viewBox="0 0 12 102" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.196 98.108C11.196 96.176 9.418 94.93 5.834 94.93C2.278 94.93 0.556 96.176 0.556 98.108C0.556 100.068 2.278 101.314 5.834 101.314C9.418 101.314 11.196 100.068 11.196 98.108ZM10.16 98.108C10.16 99.284 8.858 100.082 5.834 100.082C2.852 100.082 1.578 99.284 1.578 98.108C1.578 96.946 2.852 96.162 5.834 96.162C8.858 96.162 10.16 96.946 10.16 98.108Z" fill="#56C6D6" /><path d="M11.196 90.3984C11.196 88.4664 9.6 86.6744 5.428 86.6744C2.166 86.6744 0.555999 88.1444 0.555999 90.1184C0.555999 91.7144 1.9 93.0584 3.888 93.0584C6.016 93.0584 7.108 91.9524 7.108 90.2304C7.108 89.3484 6.576 88.4384 5.764 87.7944L4.742 87.8644C5.764 88.5364 6.17 89.3344 6.17 90.0204C6.17 91.2384 5.26 91.8544 3.888 91.8544C2.474 91.8544 1.55 91.0984 1.55 90.1184C1.55 88.6764 2.908 87.8784 5.428 87.8784C8.942 87.8784 10.132 89.0684 10.132 90.4404C10.132 91.0984 9.838 91.7284 9.334 92.1624L10.146 92.8764C10.748 92.3024 11.196 91.5184 11.196 90.3984Z" fill="#56C6D6" /><path d="M11.196 81.4567C11.196 79.5247 9.418 78.2787 5.834 78.2787C2.278 78.2787 0.555999 79.5247 0.555999 81.4567C0.555999 83.4167 2.278 84.6627 5.834 84.6627C9.418 84.6627 11.196 83.4167 11.196 81.4567ZM10.16 81.4567C10.16 82.6327 8.858 83.4307 5.834 83.4307C2.852 83.4307 1.578 82.6327 1.578 81.4567C1.578 80.2947 2.852 79.5107 5.834 79.5107C8.858 79.5107 10.16 80.2947 10.16 81.4567Z" fill="#56C6D6" /><path d="M7.584 76.3791L7.584 72.7951L6.604 72.7951L6.604 76.3791L7.584 76.3791Z" fill="#56C6D6" /><path d="M11.196 67.3956C11.196 65.8136 9.852 64.4556 7.864 64.4556C5.708 64.4556 4.644 65.5756 4.644 67.3116C4.644 68.1376 5.148 69.0896 5.974 69.7196L6.996 69.6776C5.974 68.9916 5.582 68.1656 5.582 67.5076C5.582 66.2756 6.464 65.6596 7.864 65.6596C9.25 65.6596 10.188 66.4156 10.188 67.3956C10.188 68.8376 8.746 69.6356 6.114 69.6356C2.754 69.6356 1.62 68.4316 1.62 66.9896C1.62 66.3736 1.914 65.7436 2.39 65.3516L1.606 64.6376C1.004 65.1976 0.555998 65.9816 0.555998 67.0456C0.555998 69.0336 2.096 70.8396 6.114 70.8396C9.502 70.8396 11.196 69.3696 11.196 67.3956Z" fill="#56C6D6" /><path d="M11 62.052L11 56.424L9.936 56.424L9.936 58.496L0.737998 58.496L0.737998 59.476C1.074 60.022 1.312 60.68 1.466 61.604L2.292 61.604L2.292 59.77L9.936 59.77L9.936 62.052L11 62.052Z" fill="#56C6D6" /><path d="M11.196 50.7444C11.196 49.1624 9.852 47.8044 7.864 47.8044C5.708 47.8044 4.644 48.9244 4.644 50.6604C4.644 51.4864 5.148 52.4384 5.974 53.0684L6.996 53.0264C5.974 52.3404 5.582 51.5144 5.582 50.8564C5.582 49.6244 6.464 49.0084 7.864 49.0084C9.25 49.0084 10.188 49.7644 10.188 50.7444C10.188 52.1864 8.746 52.9844 6.114 52.9844C2.754 52.9844 1.62 51.7804 1.62 50.3384C1.62 49.7224 1.914 49.0924 2.39 48.7004L1.606 47.9864C1.004 48.5464 0.555997 49.3304 0.555998 50.3944C0.555998 52.3824 2.096 54.1884 6.114 54.1884C9.502 54.1884 11.196 52.7184 11.196 50.7444Z" fill="#56C6D6" /><path d="M11.196 42.7267C11.196 40.8087 10.034 39.5067 8.536 39.5067C7.136 39.5067 6.352 40.3467 5.834 41.2427L5.764 41.2427C5.288 40.6267 4.378 39.8707 3.286 39.8707C1.718 39.8707 0.597997 40.9347 0.597997 42.6847C0.597998 44.2947 1.634 45.5127 3.188 45.5127C4.266 45.5127 5.05 44.8687 5.568 44.1127L5.624 44.1127C6.128 45.0507 7.08 46.0027 8.466 46.0027C10.048 46.0027 11.196 44.6167 11.196 42.7267ZM5.442 42.0267C4.966 43.2307 4.42 44.3367 3.188 44.3367C2.208 44.3367 1.536 43.6507 1.536 42.7127C1.536 41.6067 2.348 40.9627 3.356 40.9627C4.126 40.9627 4.826 41.3267 5.442 42.0267ZM10.23 42.6987C10.23 43.9307 9.432 44.8547 8.34 44.8547C7.36 44.8547 6.548 44.2807 6.016 43.4407C6.604 41.9987 7.122 40.7387 8.494 40.7387C9.516 40.7387 10.23 41.5227 10.23 42.6987Z" fill="#56C6D6" /><path d="M7.584 37.6631L7.584 34.0791L6.604 34.0791L6.604 37.6631L7.584 37.6631Z" fill="#56C6D6" /><path d="M11 32.2776L11 25.8376L9.908 25.8376L9.908 28.6796C9.908 29.1976 9.95 29.8136 10.006 30.3596C7.724 27.9376 5.638 26.3276 3.58 26.3276C1.746 26.3276 0.555997 27.4756 0.555997 29.3096C0.555997 30.6116 1.158 31.5076 2.068 32.3476L2.782 31.6056C2.11 31.0316 1.592 30.3036 1.592 29.4636C1.592 28.1896 2.46 27.5876 3.636 27.5876C5.386 27.5876 7.444 29.0576 10.258 32.2776L11 32.2776Z" fill="#56C6D6" /><path d="M11.196 21.292C11.196 19.36 9.6 17.568 5.428 17.568C2.166 17.568 0.555996 19.038 0.555996 21.012C0.555996 22.608 1.9 23.952 3.888 23.952C6.016 23.952 7.108 22.846 7.108 21.124C7.108 20.242 6.576 19.332 5.764 18.688L4.742 18.758C5.764 19.43 6.17 20.228 6.17 20.914C6.17 22.132 5.26 22.748 3.888 22.748C2.474 22.748 1.55 21.992 1.55 21.012C1.55 19.57 2.908 18.772 5.428 18.772C8.942 18.772 10.132 19.962 10.132 21.334C10.132 21.992 9.838 22.622 9.334 23.056L10.146 23.77C10.748 23.196 11.196 22.412 11.196 21.292Z" fill="#56C6D6" /><path d="M11.196 12.5883C11.196 10.8663 9.908 9.22834 7.668 9.22834C5.4 9.22834 4.392 10.6143 4.392 12.3223C4.392 12.9383 4.546 13.4003 4.798 13.8623L1.83 13.5963L1.83 9.71833L0.737996 9.71833L0.737996 14.7163L5.54 15.0383L5.974 14.3523C5.582 13.7643 5.358 13.3303 5.358 12.6443C5.358 11.3703 6.24 10.5303 7.71 10.5303C9.194 10.5303 10.132 11.4963 10.132 12.7143C10.132 13.8903 9.586 14.6463 8.984 15.2203L9.824 15.8643C10.524 15.1643 11.196 14.1843 11.196 12.5883Z" fill="#56C6D6" /><path d="M11.196 4.02471C11.196 2.09272 9.418 0.846714 5.834 0.846714C2.278 0.846714 0.555995 2.09272 0.555996 4.02472C0.555996 5.98472 2.278 7.23072 5.834 7.23072C9.418 7.23072 11.196 5.98472 11.196 4.02471ZM10.16 4.02472C10.16 5.20072 8.858 5.99871 5.834 5.99871C2.852 5.99871 1.578 5.20072 1.578 4.02472C1.578 2.86272 2.852 2.07872 5.834 2.07872C8.858 2.07872 10.16 2.86271 10.16 4.02472Z" fill="#56C6D6" /></svg>
        </div>
      </div>
    </div>