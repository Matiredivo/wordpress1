<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
	use Singleton;

   protected function __construct() {


		$this->setup_hooks();
	}


 protected function setup_hooks() {

   /**
    *  Actions.
    */

   add_action('wp_enqueue_scripts', [ $this, 'register_styles' ] );

   add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ] );
 }

public function register_styles(){
    //Register Style
    wp_register_style('style.css', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css',get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

    //Enqueue Style
    wp_enqueue_style('style.css');
    wp_enqueue_style('bootstrap-css');
}

public function register_scripts(){
    //Register Script
    wp_register_script( 'main.js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true);
    
    //Enqueue Script
    wp_enqueue_script('main.js');
    wp_enqueue_script('bootstrap.js');
}


}

