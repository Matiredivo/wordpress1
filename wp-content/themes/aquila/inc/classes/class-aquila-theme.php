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

    //Load class

    Assets::get_instance();
    
    Menus::get_instance();

		$this->setup_hooks();
	} 


 protected function setup_hooks() {

   /**
    *  Actions.
    */
    add_action('after_setup_theme', [ $this, 'setup_theme' ] );

 }
 public function setup_theme() {

  /**
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /**
   * Custom logo.
   *
   * @see Adding custom logo
   * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
   */
  add_theme_support(
    'custom-logo',
    [
      'header-text' => ['site-title','site-description',],
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
    ]
  );
add_theme_support(
  'custom-background',
  [
    'default-color' => 'ffffff',
    'default-image' => '',
    'default-repeat' => 'no-repeat',
  ]
);
add_theme_support('post-thumbnails');

add_theme_support('customize-selective-refresh-widgets');

add_theme_support('automatic-feed-links');

add_theme_support(
  'html5',
  [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  ]
);

add_editor_style();
add_theme_support( 'wp-block-styles' );

add_theme_support( 'align-wide' );

global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1240;
		}
}
}

