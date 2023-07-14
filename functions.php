<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/styles/reset.css' );
    wp_enqueue_style( 'krepost-style', get_template_directory_uri() . '/assets/styles/krepost-style.css' );

	wp_enqueue_script( 'krepost-script', get_template_directory_uri() . '/assets/js/krepost-script.js', array(), null, true );
    wp_enqueue_script( 'gsap.min', get_template_directory_uri() . '/assets/gsap/gsap.min.js', array(), null, true );
    wp_enqueue_script( 'ScrollTrigger.min', get_template_directory_uri() . '/assets/gsap/ScrollTrigger.min.js', array(), null, true );
    wp_enqueue_script( 'ScrollSmoother.min', get_template_directory_uri() . '/assets/gsap/ScrollSmoother.min.js', array(), null, true );
});

add_theme_support('post_thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>