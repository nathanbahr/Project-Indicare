<?php
	// outputs e.g. Last modified: December 29 2002 22:16:23.

	$filename = basename($_SERVER["REQUEST_URI"])
		
	if (file_exists($filename)) {
		echo "<p>Page last modified: " . date ("F d Y H:i:s", filemtime($filename)) . "</p>";
	}
?>