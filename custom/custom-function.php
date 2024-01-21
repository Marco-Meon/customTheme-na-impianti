<?php
  /*  Enqueue javascript
  /* ------------------------------------ */
  function nextframe_scripts() {
  
    wp_enqueue_script( 'nextframe-bundle', get_template_directory_uri() . '/custom/bundle.min.js','','', true );

    wp_enqueue_script( 'nextframe-scripts', get_template_directory_uri() . '/custom/custom-script.js','','', true );
    //if ( is_singular() && get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }
  
  }
  add_action( 'wp_enqueue_scripts', 'nextframe_scripts' );

  /*  Enqueue css
  /* ------------------------------------ */

  function nextframe_custom_styles() {

    wp_enqueue_style( 'nextframe-custom-style', get_template_directory_uri().'/custom/custom-style.css');

    wp_enqueue_style( 'tothetopweb-custom-font-1', 'https://fonts.googleapis.com/css2?family=Italiana&display=swap');

  }

  add_action( 'wp_enqueue_scripts', 'nextframe_custom_styles' );
?>