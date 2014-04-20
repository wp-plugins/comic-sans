<?php
/*
Plugin Name: Comic Sans
Plugin URI: http://www.ramoonus.nl/wordpress/comic-sans/
Description: Replaces all fonts with Comic Sans MS (using one line of CSS)
Author: Ramoonus
Version: 1.0.0
Author URI: http://www.ramoonus.nl/
*/

// Init
function rw_comic_sans_css() { // replaces everything ( * ) with the comic sans MS font
	echo "<style type='text/css'>	* {		font-family: \"Comic Sans MS\" !important;	}	</style>";
} 

// Adding things to the header
add_action('wp_head', 'rw_comic_sans_css');

?>