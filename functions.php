<?php 

/*
* Function definitions for Tranquil Spa Theme - this file will contain all of the functions required for our theme - this file is used to change the default behavior - it can be used to add functionality and add new features 

*/
?>

<?php 
if (! isset ($content_width)) {
    $content_width = 660;
}

function tranquilwp_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    /**
    * Register Custom Navigation Walker
    */

	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menus( array(
        'primary' => __( 'Main header menu', 'tranquilwp' ),
    ) );
  
}

add_action('after_setup_theme', 'tranquilwp_setup');

function tranquil_scripts() {
    /*  Add Styles */
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() .'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() .'/css/fontawesome/css/all.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() .'/style.css');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'tranquil_scripts')

?>