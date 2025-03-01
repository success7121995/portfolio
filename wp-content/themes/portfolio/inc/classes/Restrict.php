<?php
/**
 * Restrict
 * 
 * @package Portfolio
 * 
 * Set restrictions rules
 * 
 */

class Restrict {
  use Singleton;

  private function __construct() {
    // Register the method using an array format for class methods
    add_action('template_redirect', [$this, 'restrict_page_access']);
  }

  public function restrict_page_access() {
    if (is_page(['intro', 'about-me', 'education', 'work-experience', 'skills'])) {
      if (!is_user_logged_in()) {
        wp_redirect(home_url('/404')); // Redirect to 404 page
        exit;
      }
    }
  }
}