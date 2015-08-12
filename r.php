<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
	<div id="headerL">		
		<?php include_once("banner.php") ?>
	</div>
	<div id="links">
		<?php include_once("links.php") ?>
	</div>
<br>
<div id="content">
<?php include_once("title.php") ?>
	<div id="col1">
		<?php include_once("dbconnect.php") ?>
			<?php
			$query = $handler->query("SELECT * FROM `ALL` WHERE Item LIKE 'r%' AND Col=1 ORDER BY Item ASC");
			
			while($row = $query->fetch()) {
				include ("result.php");
			}		
			?>
	</div>
	<div id="col2">		
			<?php	
			$query = $handler->query("SELECT * FROM `ALL` WHERE Item LIKE 'r%' AND Col=2 ORDER BY Item ASC");
			
			while($row = $query->fetch()) {
				include ("result.php");
			}		
			?>
	</div>
</div>
<?php include_once("footer.php") ?>
</div>
</body>
</html>