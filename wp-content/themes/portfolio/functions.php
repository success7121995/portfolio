<?php
/**
 * Functions
 * 
 * @package Portfolio
 */

## Increase the upload size
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

## Autoloader will iterate and include all Classes in inc/classes at once.
require_once __DIR__ . '/inc/helpers/autoloader.php';

Register_Scripts_Styles::get_instance();
Shortcodes::get_instance();