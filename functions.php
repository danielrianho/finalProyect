<?php

	require "includes/cpt.php";

/* Enqueue Styles and Scripts
	---------------------------------------------------------------------------------------------*/
	
	function theme_scripts(){
		wp_enqueue_style( 'font-awesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( 'extra' , get_template_directory_uri().'/assets/css/extra.css' );
		wp_enqueue_script( 'script' , get_template_directory_uri().'/assets/js/script.js' , array('jquery') , "1.0" , true );
	}
	
	add_action('wp_enqueue_scripts', 'theme_scripts');

	/* Register menu 
	---------------------------------------------------------------------------------------------*/
	
	function register_my_menu() {
		register_nav_menu( 'huvudmeny' , 'Huvudmeny' );
	}
	
	add_action( 'after_setup_theme' , 'register_my_menu' );

	/* Add post type support
	---------------------------------------------------------------------------------------------*/

	add_theme_support('post-thumbnails');
	add_post_type_support( 'post' , array( 'thumbnail' ) );
	add_post_type_support( 'page' , array( 'excerpt' , 'thumbnail' ) );
	
	/* Options Page
	---------------------------------------------------------------------------------------------*/
	
	if ( function_exists( 'acf_add_options_page' ) ){
		acf_add_options_page();
	}

	/* Sidebar
	---------------------------------------------------------------------------------------------*/


	function register_my_sidebars(){
		register_sidebar(array(
			'name' => 'Min Sidebar',
			'id' => 'my-sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		));
	}

	add_action( 'widgets_init' , 'register_my_sidebars' );

	/* Custom functions
	---------------------------------------------------------------------------------------------*/

	function get_post_thumbnail( $id ){
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $id ) , 'full' );
		return $thumb['0'];
	}

	function get_image( $file ) {
		$url = get_template_directory_uri() . '/assets/img/' . $file;
		return $url;
	}

	function my_posts_where( $where ) {
	
		$where = str_replace("meta_key = 'cast_%", "meta_key LIKE 'cast_%", $where);

		return $where;
	}

	add_filter('posts_where', 'my_posts_where');

	define('FS_METHOD' , 'direct');
