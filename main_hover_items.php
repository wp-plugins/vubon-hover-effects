<?php
/*
Plugin Name: Vubon Hover Effects Wordpress
Plugin URI: http://wpexpert24.com/
Description: Vubon Hover Effects Wordpress allows you to add animation effects to images, when it hovered. Few single effects and more combinations to boost creativity. All effects simulate flash and javascript with pure CSS3 . Each effect on each css and html files.
Author: RAKIBUR RAHMAN SAGAR
Author URI: http://wpexpert24.com/
Version: 1.1
*/

//Loading CSS
function vubon_stylesheet_effects_csjs() {
	wp_enqueue_style('main_css_file', plugins_url( '/css/vub_dem.css' , __FILE__ ) );
	wp_enqueue_style('main1_css_file', plugins_url( '/css/normalize.css' , __FILE__ ) );
	wp_enqueue_style('main2_css_file', plugins_url( '/css/style_one.css' , __FILE__ ) );
	//wp_enqueue_style('main3_css_file', plugins_url( '/css/set2.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'vubon_stylesheet_effects_csjs' );


// Loading VafPress Framework
if(!class_exists('VP_Amazimagehov')){
// Setup Contants
defined( 'VP_AOVPACK_VERSION' ) or define( 'VP_AOVPACK_VERSION', '2.0' );
defined( 'VP_AOVPACK_URL' )     or define( 'VP_AOVPACK_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_AOVPACK_DIR' )     or define( 'VP_AOVPACK_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_AOVPACK_FILE' )    or define( 'VP_AOVPACK_FILE', __FILE__ );

// Lood Bootstrap
require 'framework/bootstrap.php';

}


// Google Font

    // add the font
    $font_face = vp_option('logo_font_face');
    $font_weight = vp_option('vp_get_gwf_weight');
    $font_style = vp_option('logo_font_style');
    VP_Site_GoogleWebFont::instance()->add($font_face, $font_weight, $font_style);
	
    // embed font function
    function vubon_google_hov_embd_fonts()
    {
    // you can directly enqueue and register
    VP_Site_GoogleWebFont::instance()->register_and_enqueue();
    // or register and get the handler to be used as dependency
    VP_Site_GoogleWebFont::instance()->register();
    wp_register_style('mystyle', 'path_to_style.css', VP_Site_GoogleWebFont::instance()->get_names());
    wp_enqueue_style('mystyle');
    }
    add_action('wp_enqueue_scripts', 'vubon_google_hov_embd_fonts');


// Registering Custom Post
function vubon_hov_effects_ecpt_rd() {
	register_post_type( 'amaz-hover',
		array(
			'labels' => array(
				'name' => __( 'Vubon Hov Effects' ),
				'singular_name' => __( 'Hover Effect' ),
				'add_new_item' => __( 'Add new hover item title ' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'hover-effects'),
			'menu_icon' => '',
			'menu_position' => 21,
		)
	);
	
}
add_action( 'init', 'vubon_hov_effects_ecpt_rd' );

// Registering Custom post's category
function vubon_ect_category_sup_rd() {
	register_taxonomy(
		'amaz_cat',  
		'amaz-hover',
		array(
			'hierarchical'          => true,
			'label'                 => 'Vubon Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'vubon-category',
				'with_front'    => true
				)
			)
	);
}
add_action( 'init', 'vubon_ect_category_sup_rd'); 
require 'admin/icon.php';

// Load Metaboxes 

new VP_Metabox(array
(
			'id'          => 'amzhovpck',
			'types'       => array('amaz-hover'),
			'title'       => __('Hover Information ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_AOVPACK_DIR . '/admin/metabox/main.php'
));



//Loading Shortcode
require_once(VP_AOVPACK_DIR . 'admin/shortcode.php');

//Shortcode Generator 
    function vubon_subtle_shortcodegenerator()
    {
    // Built path to shortcode generator template array file
    //$sg_path = VP_TEAM_DIR() . '/admin/shortcode.php';
    // Initialize the ShortcodeGenerator's object
    $vubtmpl_sg = array(
    'name' => 'sg_2',
    'template' => VP_AOVPACK_DIR . '/admin/shortcode_generator.php',
    'modal_title' => __( 'Vubon Shortcode Setting', 'vp_textdomain'),
    'button_title' => __( 'Vubon Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_AOVPACK_URL . 'images/icon_short.png',
    'sprite_image' => VP_AOVPACK_URL . 'images/icon_short.png',
    //'included_pages' => array( 'appearance_page_vpt_option' ),
    );
    
	$vubonsg = new VP_ShortcodeGenerator($vubtmpl_sg);
    
	}
	
    // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
    add_action( 'after_setup_theme', 'vubon_subtle_shortcodegenerator' );
	
	?>