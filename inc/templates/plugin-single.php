<?php
/**
 * Plugin file for theme single file
 */

echo '<h2>Post template</h2>';
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
		//
		the_content();
	} // end while
} // end if

?>
<h1>This is the plugin single file</h1>
