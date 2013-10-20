<?php

/**
* Load CSS and Javascript
*/

function load_styles_and_scripts(){

	//load styles
	wp_enqueue_style(
			'boostrap-styles',
			get_template_directory_uri(). '/css/bootstrap.min.css'
		);
	wp_enqueue_style(
			'main-styles',
			get_template_directory_uri(). '/style.css'
		);	

	//load scripts
	wp_enqueue_script(
			'jquery',
			'http://code.jquery.com/jquery.min.js'
		);
	wp_enqueue_script(
			'bootstrap-scripts',
			get_template_directory_uri(). '/js/bootstrap.min.js'
		);

}


add_action('wp_enqueue_scripts', 'load_styles_and_scripts');



