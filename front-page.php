<?php get_header(); ?>

<section class="hero">
  <div class="hero__text">
    <div class="container">
      <div class="row">
        <div class="col-10 col-md-8 col-lg-6">
          <h1>Stunning Videos For Global Audiences</h1>
          
          <p>Relay is a creative video production agency specializing in investor roadshow videos and factual content.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="hero__cover"></div>
  <div class="hero__video">
    <video autoplay loop muted>
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/hero.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/hero.mp4" type="video/mp4">
    </video>
  </div>
</section>

<main role="main">
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about__vid">
            <video controls>
              <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/relay-showreel.webm" type="video/webm">
              <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/relay-showreel.mp4" type="video/mp4">
              Sorry, your browser doesn't support embedded videos.
            </video>
          </div>
          <div class="about__text">
            <h2>Who We are</h2>

            <p>Relay is a creative video production agency specializing in investor roadshow videos and factual content.</p>
            
            <p>We're a bilingual Asia-based team with a global network of resources - both here in Asia and around the world. We're experts in <span>communicating stories to a global audience</span>.</p>

            <div class="btn-gradient">
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="work">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>What we make</h2>

          <div class="work__wrap">
            <div class="work__item">
              <div class="work__item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/video-thumb-1.jpg" alt="">
              </div>
              <div class="work__item__text">
                <h3>Investor Roadshow Videos</h3>
                
                <p>Proven success with creating tailor-made roadshow videos.</p>
                
                <p>We've helped TME, Pinduoduo, Mogujie, Sogou, Meituan, 360Finance, Pop Mart, Hesai, Leap Motor and many more companies to raise over 8 billion USD through making videos to explain their company and products in roadshow presentations.</p>

                <a href="#">Learn More</a>
              </div>
            </div>
            
            <div class="work__item">
              <div class="work__item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/video-thumb-2.jpg" alt="">
              </div>
              <div class="work__item__text">
                <h3>Documentaries</h3>

                <p>Production around the world from China to Africa to South America and more.</p>

                <p>With over 20 years of experience in long form documentaries, we've seen it all and are excited to do even more! We specialize in survivalist documentaries (check out our work with Ed Stafford!) and VR/360 documentaries (we produced the world's first VR survivalist show in 360).</p>

                <a href="#">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="client">
    <h2 class="text-center">Our clients</h2>
    <ul class="logos">
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-1-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-2-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-3-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-4-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-5-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-6-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-7-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-8-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-9-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-10-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-11-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-12-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-13-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-14-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-15-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-16-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-17-2x.png" alt=""></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logos/logo-18-2x.png" alt=""></li>
    </ul>
  </section>

  <!--
  <section class="homepage-top">
    <div class="container">
      <?php get_template_part('loop', 'page'); ?>
    </div>
  </section>
  -->
</main>

<?php get_footer(); ?>