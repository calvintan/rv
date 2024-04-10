<?php get_header(); ?>

<section class="corporate">
  <div class="corporate__text">
    <div class="container">
      <h1 class="corporate__title" >
        <?php single_post_title(); ?>
      </h1>
  </div>
  <div class="corporate__overlay">
  </div>
  <div class="corporate__video">
    <video autoplay muted loop>
      <source src="//localhost/wp-content/themes/wp-starter/dist/assets/videos/hero.mp4" type="video/mp4">
      <source src="//localhost/wp-content/themes/wp-starter/dist/assets/videos/hero.webm" type="video/webm">
      Your browser does not support HTML5 video.
    </video>
  </div>
</section>

<main role="main">
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4 about__heading">
          <h1>
            We are the market leader for investor roadshow videos.
          </h1>
        </div>
        <div class="col-sm-12 col-lg-8 about__text">
          <p>
            We have proven success with making investor roadshow videos for China’s biggest IPOs: TME, Pinduoduo, Mogujie, Sogou, J&T, Meituan, 360Finance, Pop Mart, Leap Motor and many more companies. 
            Our clients have raised over 8 billion USD, and Relay Video helped them do that through making videos to explain their company and products in roadshow presentations.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>