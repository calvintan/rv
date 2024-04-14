<?php get_header(); ?>

<!-- ********************************************************************
hero section (shadow overlay + background video + center headings)
******************************************************************** -->

<section class="corporate">
  <div class="corporate__text">
    <div class="container">
      <h1 class="corporate__title">
        <?php single_post_title(); ?>
      </h1>
    </div>
  </div>
  <div class="corporate__overlay"></div>
  <div class="corporate__video">
    <video autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/corporate-short-720.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/corporate-short-720.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div>
</section>

<!-- ********************************************************************
main section
******************************************************************** -->

<main role="main">
  <section class="intro">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
          <h1>
            We are the market leader for investor roadshow videos.
          </h1>
        </div>
        <div class="col-12 col-lg-8">
          <p>We have proven success with making investor roadshow videos for China's biggest IPOs: TME, Pinduoduo, Mogujie, Sogou, J&T, Meituan, 360Finance, Pop Mart, Leap Motor and many more companies.</p>

          <p>Our clients have raised over 8 billion USD, and Relay Video helped them do that through making videos to explain their company and products in roadshow presentations.</p>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="project">
    <!-- Loop over using WP query loop -->
    <?php
      $corporate_query = array(
        'post_type' => 'video',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_key' => 'type',
        'meta_value' => 'corporate',
        'order' => 'ASC'
      );
      $corporate = new WP_Query( $corporate_query );
    ?>

    <?php if ($corporate->have_posts()) : $item = 0; ?>
      <?php while ( $corporate->have_posts() ) : $corporate->the_post(); 
        $item++;
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      ?>
        <div id="openPopup-corporate<?php echo $item; ?>" class="project__item">
          <div class="project__item__bg" style="background-image: url(<?php echo esc_url($featured_img_url); ?>);"></div>
          <div class="project__item__cover">
            <h3 class="m-0"><?php the_title(); ?></h3>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>

  <!-- Loop through the videos and create a modal for each video -->
  <!-- The variables can be changed to the video data from the database -->
  <?php
    for ($i = 1; $i <= 6; $i++) {
        echo '<div id="videoPopup-corporate'.$i.'" class="modal">
                <div class="modal__content">
                  <span class="modal__close-corporate'.$i.'">&times;</span>
                  <video id="video'.$i.'" controls poster="//localhost/relay/wp-content/themes/wp-starter/dist/assets/images/corporate-'.$i.'.jpg">
                    <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.webm" type="video/webm">
                    <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.mp4" type="video/mp4">
                  </video>
                </div>
              </div>';
    }
  ?>

</main>

<?php get_footer(); ?>
