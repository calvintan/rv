<?php get_header(); ?>

<!-- ********************************************************************
hero section (shadow overlay + background video + center headings)
******************************************************************** -->
<section class="documentaries">
  <div class="documentaries__text">
    <div class="container">
      <h1 class="documentaries__title"><?php single_post_title(); ?></h1>
    </div>
  </div>
  <div class="documentaries__overlay"></div>
  <div class="documentaries__video">
    <video autoplay muted loop>
      <source src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" type="video/mp4">
      <source src="https://dl6.webmfiles.org/cars-nyc_HD.webm" type="video/webm">
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
          <p>We have experience in production around the world from China to Africa to South America and more. With over 20 years of experience in long form documentaries, we’ve seen it all and are excited to do more! </p>

          <p>We specialize in survivalist documentaries (check out our work with Ed Stafford!) and VR/360 documentaries (we produced the world’s first VR survivalist show in 360).</p>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ********************************************************************
  collection videos section
  ******************************************************************** -->
  <section class="documentaries__collection-videos">
    <div class="container">
      <div class="row">
        <div class="col-12 documentaries__title">
          <h1>Surviving Africa (World’s First VR/360degree documentary)</h1>
        </div>
        </div>
        <div class="row">
          <!-- A collection of 4 videos layout -->
          <?php
            for ($i = 1; $i <= 4; $i++) {
                echo '<div class="documentaries__collection col-sm-12 col-md-4 col-lg-4 text-center" id="openPopup-documentaries'.$i.'">
                    <div class="documentaries__collection-video'.$i.'">
                        <video id="video'.$i.'">
                        
                            <source src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" type="video/mp4">
                            <source src="https://dl6.webmfiles.org/cars-nyc_HD.webm" type="video/webm">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>';
            }
            ?>

            <?php
                for ($i = 1; $i <= 4; $i++) {
                    echo '<div id="videoPopup-documentaries'.$i.'" class="modal">
                        <div class="modal__content">
                          <span class="modal__close-documentaries'.$i.'">&times;</span>
                          <video id="video'.$i.'" controls>
                            
                            <source src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" type="video/mp4">
                            <source src="https://dl6.webmfiles.org/cars-nyc_HD.webm" type="video/webm">
                            Your browser does not support the video tag.
                          </video>
                        </div>
                      </div>';
                }
              ?>

        </div>
    </div>
  </section>

  <!-- ********************************************************************
  single video section
  ******************************************************************** -->

  <section id="openPopup-sv" class="documentaries__single-video ">
    <div class="container">
    <div class="row">
      <div class="col-12 documentaries__single-video-title">
        <h1>Finding Light in the Dark</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
          <video muted>
            <!-- Source can be changed to CMS video link -->
            <source src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" type="video/mp4">
            <source src="https://dl6.webmfiles.org/cars-nyc_HD.webm" type="video/webm">
            Your browser does not support HTML5 video.
          </video>
        </div>
    </div>

    <!-- Single video popup -->
    <div id="videoPopup-sv" class="modal">
      <div class="modal__content">
          <span class="modal__close-sv">&times;</span>
          <video id="video-sv" controls>
              <!-- Source can be changed to CMS video link -->
              <source src="https://codingyaar.com/wp-content/uploads/video-in-bootstrap-card.mp4" type="video/mp4">
              <source src="https://dl6.webmfiles.org/cars-nyc_HD.webm" type="video/webm">
              Your browser does not support the video tag.
          </video>
      </div>
    </div>
  </section>
  

</main>

<?php get_footer(); ?>
