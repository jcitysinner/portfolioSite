<?php

	/**
	 * Define location for a menu
	 *
	 * The first parameter is the ID value used to reference
	 * the menu in the wp_nav_menu function (see header.php)
	 *
	 * The second paramter is the text that appears in the 
	 * WordPress admin to describe the menu locatin
	 */
	register_nav_menu( 'main-menu', 'Primary site navigation' );
	register_nav_menu( 'blog-menu', 'Navigation for the Blog' );

	/**
	 * Define a sidebar
	 *
	 * Accepts an array of configuration options
	 *
	 * "id" is used to reference the sidebar in the 
	 * dynamic_sidebar function (see sidebar.php)
	 *
	 * "name" is the text that appears in the WordPress admin
	 * to describe the sidebar or widget area
	 */

	add_theme_support('post-thumbnails');
	
	register_sidebar( array(
		'id' => 'sidebar-right',
		'name' => 'Right Sidebar'
	) );


	function my_init() {
		if (!is_admin()) {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js', false, '1.3.2'); 
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'my_init');

	// function get_the_twitter_excerpt(){
	// 	$excerpt = get_the_content();
	// 	$excerpt = strip_shortcodes($excerpt);
	// 	$excerpt = strip_tags($excerpt);
	// 	$the_str = substr($excerpt, 0, 20);
	// 	return $the_str;
	// }
		

?>