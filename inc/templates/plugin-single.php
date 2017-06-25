<?php
/**
 * Plugin file for theme single file
 */

echo '<h2>Page template</h2>';
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if

?>
<h1>This is the plugin single file</h1>
