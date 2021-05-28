<?php
//function enqueue_child_styles() {
	//$parent_handle = "style.css"; // Set the parent handle here 
	//$parent_uses_get_template_approach = false;
	//wp_register_style("child-style", 
	//	 get_stylesheet_directory_uri() . "/style.css");
	//wp_enqueue_style("child-style");
	//if(!$parent_uses_get_template_approach) {
	//	wp_register_style($parent_handle, get_template_directory_uri() . "/style.css");
	//	wp_enqueue_style($parent_handle);
	//}
//}
//add_action("wp_enqueue_scripts", "enqueue_child_styles");

function my_theme_enqueue_styles() {
 
    $parent_style = 'twentytwenty-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>