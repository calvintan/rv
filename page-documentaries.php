<?php get_header(); ?>

<section class="documentaries">
  <div class="documentaries__text">
    <div class="container">
      <h1 class="documentaries__title"><?php single_post_title(); ?></h1>
    </div>
  </div>
  <div class="documentaries__overlay"></div>
  <div class="documentaries__video">
    <video muted>
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.webm" type="video/webm">
      Your browser does not support HTML5 video.
    </video>
  </div>
</section>

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

  <section class="documentaries__collection-videos">
  <div class="container">
  <div class="row">
    <div class="col-12 documentaries__title">
      <h1>Surviving Africa (World’s First VR/360degree documentary)</h1>
    </div>
    </div>
    <div class="row">
        <?php for ($i = 0; $i < 4; $i++): ?>
            <div class="documentaries__collection col-sm-12 col-md-4 col-lg-4 text-center">
                <video muted>
                    <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.mp4" type="video/mp4">
                    <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.webm" type="video/webm">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        <?php endfor; ?>
    </div>
</div>
  </section>

  <section class="documentaries__single-video">
    <div class="container">
    <div class="row">
      <div class="col-12 documentaries__single-video-title">
        <h1>Finding Light in the Dark</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
          <video muted>
            <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/dist/assets/videos/documentaries-short-720.webm" type="video/webm">
            Your browser does not support HTML5 video.
          </video>
        </div>
        </div>
  </section>


</main>

<?php get_footer(); ?>
