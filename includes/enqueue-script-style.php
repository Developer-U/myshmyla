<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), null, 'all');

	wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), null, 'all');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), null, 'all');

	wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), null, 'all');
	
	wp_enqueue_style( 'boxicons-css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), true);

	wp_enqueue_style( 'glightbox-css', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), true);

	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), null, 'all');

	// wp_enqueue_style( 'b-plugin-css', get_template_directory_uri() . '/assets/vendor/b-plugin/vendors.css', array(), null, 'all');

	// wp_enqueue_style( 'b-plugin-main-css', get_template_directory_uri() . '/assets/vendor/b-plugin/main.css', array(), null, 'all');

	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css', array('swiper-bundle'), null, 'all');
}

add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {

	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, true );

	wp_enqueue_script( 'glightbox-js', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true );
	
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true );	

	wp_enqueue_script( 'swiper-bundle-js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true );

	// wp_enqueue_script( 'b-plugin-js', get_template_directory_uri() . '/assets/vendor/b-plugin/vendors.js', array(), null, true );

	// wp_enqueue_script( 'b-plugin-main-js', get_template_directory_uri() . '/assets/vendor/b-plugin/main.js', array(), null, true );
	
	wp_enqueue_script( 'popups', get_template_directory_uri() . '/assets/js/popups.js', array(), 'all', true );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), 'all', true );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}