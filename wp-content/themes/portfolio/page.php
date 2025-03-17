<?php
/**
 * Navbar
 * 
 * @package Portfolio
 * 
 */

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}