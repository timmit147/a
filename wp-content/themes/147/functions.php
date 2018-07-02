<?php

// menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );


// logo
function theme_prefix_setup() {

    add_theme_support('custom-logo', array());}

add_action( 'after_setup_theme', 'theme_prefix_setup' );

// widget
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget',
		'id'            => 'footer_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
add_editor_style('css/admin.css');
add_editor_style('css/bootstrap-grid.css');
add_editor_style('css/mean.css');

?>