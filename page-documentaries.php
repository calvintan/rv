<?php get_header(); ?>

<main role="main">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>This is Documentaries page</p>
        <?php
          $press_query = array(
            'post_type' => 'video',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key' => 'type',
            'meta_value' => 'documentary'

          );
          $press = new WP_Query( $press_query );
        ?>
        <?php if ($press->have_posts()) : ?>
          <?php while ( $press->have_posts() ) : $press->the_post(); ?>
            <div class="col-md-6">
              <a href="#"><?php the_title(); ?></a>
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              } ?>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php get_template_part('loop', 'page'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>