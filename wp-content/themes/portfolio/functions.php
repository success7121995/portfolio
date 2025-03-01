<?php
/**
 * Functions
 * 
 * @package Portfolio
 */

/** Autoloader will iterate and include all Classes in inc/classes at once.
 */
require_once __DIR__ . '/inc/helpers/autoloader.php';

Register_Scripts_Style::get_instance();

Shortcodes::get_instance();