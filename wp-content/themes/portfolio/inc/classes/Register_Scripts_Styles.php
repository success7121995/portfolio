<?php
/**
 * Register_Scripts_Styles
 * 
 * @package Personal Website
 * 
 * Register and enqueue script and stylesheet
 * 
 */

class Register_Scripts_Styles {
  // Prevent from multiple instantiations
  use Singleton;

  // The __construct function is set to private since it is not allowed to instantiate in in public.
  private function __construct() {
    // Actions
    add_action('wp_enqueue_scripts', [$this, 'register_stylesheet']);
    add_action('wp_enqueue_scripts', [$this, 'register_javascript']);
  }
  
  // Register Stylesheet
  public function register_stylesheet() {  
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Damion&family=Playpen+Sans:wght@100..800&display=swap', [], null, 'all');
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', [], filemtime(get_template_directory() . '/src/output.css'), 'all');
    
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
  }

  // Register Javascript
  public function register_javascript() {
    wp_deregister_script('jquery');

    // Register scripts
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', [], '3.7.1', false);
    wp_register_script('main-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);

    // Pass WordPress functions to script.js
    wp_localize_script('main-script', 'themeData', array(
      'templateUrl' => get_template_directory_uri()
    ));

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-script');
  }

}