<?php get_header(); ?>

<section class="hero">
  <div class="hero__text">
    <div class="container">
      <div class="row">
        <div class="col-10 col-md-8 col-lg-6">
          <h1 class="page__title">
            <?php single_post_title(); ?>
          </h1>
      </div>
    </div>
  </div>
  <div class="hero__overlay">

  </div>
  <div class="hero__video">
    <video autoplay="" loop="" muted="">
      <source src="//localhost:3000/wp-content/themes/wp-starter/dist/assets/videos/hero.webm" type="video/webm">
    </video>
  </div>
</section>
<!-- <main role="main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="page__header">
          <h1 class="page__title">
            <?php single_post_title(); ?>
          </h1>
        </header>
      </div>
    </div>
    <div class="row">
      <?php get_template_part('loop', 'index'); ?>
    </div>
  </div>
</main> -->

<?php get_footer(); ?>