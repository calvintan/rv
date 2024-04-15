<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>

  <style>
    #wpadminbar {
      display: none;
    }

    html {
      margin-top: 0 !important;
    }
  </style>
</head>
<body <?php body_class(); ?>>

<section class="overlay">
  <div class="overlay__bg">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bg-menu-1.jpg" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bg-menu-2.jpg" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/bg-menu-3.jpg" alt="">
  </div>
  <div class="overlay__cover"></div>
  <div class="overlay__line"></div>

  <div class="overlay__text">
    <div class="container">
      <div class="row">
        <div class="col">

          <ul class="overlay__menu">
            <li><a href="<?php echo esc_url(site_url('/about/')); ?>">Who We Are</a></li>
            <li><a href="<?php echo esc_url(site_url('/corporate-videos/')); ?>">Investor Roadshow Videos</a></li>
            <li><a href="<?php echo esc_url(site_url('/documentaries/')); ?>">Documentaries</a></li>
          </ul>

          <ul class="overlay__contact footer__contact">
            <li>
              <h3>Email</h3>
              <a href="mailto:info@relay.video">info@relay.video</a>
            </li>
            <li>
              <h3>WeChat</h3>
              <a>XFSP1989</a>
            </li>
            <li>
              <h3>WhatsApp</h3>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal">Abe <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon-external.svg" alt="open in pop-up"></a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="menu">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <a class="menu__logo" href="<?php echo esc_url(site_url()) ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.svg" alt="Relay logo">
      </a>
      <div class="menu__wrap d-flex align-items-center gap-5">
        <!-- <a class="menu__lang" href="#">中</a> -->
        <a class="menu__icon" href="#"><span></span></a>
      </div>
    </div>
  </div>
</div>
