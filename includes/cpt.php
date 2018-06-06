<?php

function create_post_types() {

	register_post_type('proyect', array(
		'labels' => array(

			'name' => 'Projekt',
			'singular_name' => 'Projekt'
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-admin-generic'
	));
}

add_action( 'init' , 'create_post_types');

function create_taxonomy(){
	register_taxonomy(
		'renovation' ,
		array('proyect'),
		array(
			'labels' => array(
				'name' => 'Arbete',
				'singular_name' => 'Arbete'
			),
			'hierarchial' => true
		)
	);

}

add_action( 'init' , 'create_taxonomy');