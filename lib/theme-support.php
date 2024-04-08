<?php

function _themename_theme_support() {
  add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption') );
}

add_action( 'after_setup_theme', '_themename_theme_support' );

//  Remove default image sizes
function disable_image_sizes($sizes) {  
  unset($sizes['thumbnail']);    // Disable thumbnail size
  unset($sizes['medium']);       // Disable medium size
  unset($sizes['large']);        // Disable large size
  unset($sizes['medium_large']); // Disable medium-large size
  unset($sizes['1536x1536']);    // Disable 2x medium-large size
  unset($sizes['2048x2048']);    // Disable 2x large size
  
  return $sizes;
}

// Hook to remove generated image sizes.
add_action('intermediate_image_sizes_advanced', 'disable_image_sizes');

// Disable scaled image size.
add_filter('big_image_size_threshold', '__return_false');

?>