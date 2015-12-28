<div id="footer">
    <a href="#">Home</a>
	
    <p id="end"></p>
	<div id="modified">
		<?php include_once("connect.php") ?>
		<?php
		//outputs date: 2015-07-17 23:45:47.
			$query = $handler->query("SELECT Modified FROM `ALL` ORDER BY Modified DESC LIMIT 1");
			   
			while($row = $query->fetch()) {
			   echo '<p>Database last modified: ' . $row['Modified'] . '</p>';
			}
		?>
		
		<!---<?php
		// outputs e.g. Last modified: December 29 2002 22:16:23.

		$filename = 'search.php';
		if (file_exists($filename)) {
			echo "<p>Page last modified: " . date ("F d Y H:i:s", filemtime($filename)) . "</p>";
		}
		?>--->
	</div>
	
	<table class="footer">
		<tr><td><a href="commands.php">commands</a></td> <td><a href="electrical.php">electrical</a></td></tr>
	</table>
	
	<div>
		<a href="https://github.com/nathanbahr/Project-Indicare.git">GitHub</a>
	</div>
</div>