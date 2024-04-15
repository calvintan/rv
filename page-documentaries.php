<?php get_header(); ?>
<?php $series1 = get_field('series_1'); ?>
<?php $series2 = get_field('series_2'); ?>
<?php
  // echo "<pre>";
  // echo var_dump($series1);
  // echo "</pre>";
?>

<!-- ********************************************************************
hero section (shadow overlay + background video + center headings)
******************************************************************** -->
<section class="documentaries">
  <div class="documentaries__text">
    <div class="container">
      <h1 class="documentaries__title">
        <?php single_post_title(); ?>
      </h1>
    </div>
  </div>
  <div class="documentaries__overlay"></div>
  <div class="documentaries__video">
    <video autoplay muted loop>
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.webm" type="video/webm">
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.mp4" type="video/mp4">
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
            We are experts in international production for factual content. 
          </h1>
        </div>
        <div class="col-12 col-lg-8">
          <p>We have experience in production around the world from China to Africa to South America and more. With over 20 years of experience in long form documentaries, we've seen it all and are excited to do more! </p>

          <p>We specialize in survivalist documentaries (check out our work with Ed Stafford!) and VR/360 documentaries (we produced the world's first VR survivalist show in 360).</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ********************************************************************
  collection videos section
  ******************************************************************** -->
  <section class="documentaries__series">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="documentaries__title">Surviving Africa (World's First VR/360degree documentary)</h3>
        </div>
      </div>

      <!-- A collection of 4 videos layout -->
      <?php if( $series1 ): $item = 0; ?>
      <div class="col">
        <div class="documentaries__group">
          <?php foreach( $series1 as $post ): 
          setup_postdata($post); 
            $item++;
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
          ?>
            <div id="openPopup-documentaries<?php echo $item; ?>" class="project__item">
              <div class="project__item__bg" style="background-image: url(<?php echo esc_url($featured_img_url); ?>);"></div>
              <div class="project__item__cover">
                <h3 class="m-0"><?php the_title(); ?></h3>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <?php endif; ?>

      <?php
        for ($i = 1; $i <= 4; $i++) {
            echo '<div id="videoPopup-documentaries'.$i.'" class="modal">
                <div class="modal__content">
                  <span class="modal__close-documentaries'.$i.'">&times;</span>
                  <video id="video'.$i.'" controls>
                    <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.webm" type="video/webm">
                    <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>';
        }
      ?>
    </div>
  </section>

  <!-- ********************************************************************
  single video section
  ******************************************************************** -->

  <section class="documentaries__series">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="documentaries__title">Finding Light in the Dark</h3>
        </div>
      </div>

      <!-- Single Video -->
      <?php if( $series2 ): $item = 0; ?>
      <div class="col">
        <div class="documentaries__group">
          <?php foreach( $series2 as $post ): 
          setup_postdata($post); 
            $item++;
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
          ?>
            <div id="openPopup-sv" class="project__item">
              <div class="project__item__bg" style="background-image: url(<?php echo esc_url($featured_img_url); ?>);"></div>
              <div class="project__item__cover">
                <h3 class="m-0"><?php the_title(); ?></h3>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- Single video popup -->
      <div id="videoPopup-sv" class="modal">
        <div class="modal__content">
          <span class="modal__close modal__close-sv">&times;</span>
          <video id="video-sv" controls>
            <!-- Source can be changed to CMS video link -->
            <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.webm" type="video/webm">
            <source src="//localhost/relay/wp-content/themes/wp-starter/dist/assets/videos/hero.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
