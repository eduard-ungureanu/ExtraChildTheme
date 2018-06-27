<?php
/* #01 Load Parent Theme style.css file
=============================== */
function extra_enqueue_styles() {
	wp_enqueue_style( 'extra-parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'extra_enqueue_styles' );

/*================================================
#Load the translations from the child theme folder
================================================*/
function wpcninja_translation() {
	load_child_theme_textdomain( 'extra', get_stylesheet_directory() . '/lang/theme/' );
	load_child_theme_textdomain( 'et_builder', get_stylesheet_directory() . '/lang/builder/' );

}
add_action( 'after_setup_theme', 'wpcninja_translation' );