<?php
/**
 * @package WordPress
 * @subpackage iglu-design
 */

function iglu_setup() {

	load_theme_textdomain( 'iglu-design', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'iglu_setup' );
?>
