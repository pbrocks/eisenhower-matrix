<?php
/**
 * Plugin Page template
 */
get_header();

the_title( '<h2 class="entry-title">', '</h2>' );

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

	<div class="matrix-container bg1">
		<div class="header">Box 1</div>
		<div class="box box1" 
		ondrop="drop(event)" 
		ondragover="allowDrop(event)"
		ondragstart="drag(event)" >

	</div>
</div>
<div class="matrix-container bg2">
	<div class="header">Box 2</div>
	<div class="box box2" 
	ondrop="drop(event)" 
	ondragover="allowDrop(event)"
	ondragstart="drag(event)" >

</div>
</div>


</div>
<div class="matrix-container bg3">
	<div class="header">Box 3</div>
	<div class="box box3" 
	ondrop="drop(event)" 
	ondragover="allowDrop(event)"
	ondragstart="drag(event)" >
	<div class="draggable last</div>" id="dragme0" draggable="true">Drag Me</div>
	<div class="draggable last" id="dragme1" draggable="true">Drag Me</div>
	<div class="draggable" id="dragme2" draggable="true">Drag Me</div>
	<div class="draggable" id="dragme3" draggable="true">Drag Me</div>
	<div class="draggable" id="dragme4" draggable="true">Drag Me</div>
	<div class="draggable" id="dragme5" draggable="true">Drag Me</div>
</div>
</div>
<div class="matrix-container bg4">
	<div class="header">Box 4</div>
	<div class="box box4" 
	ondrop="drop(event)" 
	ondragover="allowDrop(event)"
	ondragstart="drag(event)" >

</div>
</div>
