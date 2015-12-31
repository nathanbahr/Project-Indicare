<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include_once("dbconnect.php") ?>
	<?php include_once("banner.php") ?>
<div id="content">
<div class="title"><h2>#</h2></div>
	<div id="col1">
			<?php
				$query = $handler->query("SELECT * FROM `ALL` WHERE Item REGEXP '^[0-9]' AND Col=1 ORDER BY Item ASC");
				include ("result.php");	
			?>
	</div>
	<div id="col2">
			<?php	
				$query = $handler->query("SELECT * FROM `ALL` WHERE Item REGEXP '^[0-9]' AND Col=2 ORDER BY Item ASC");
				include ("result.php");
			?>
	</div>
</div>
<?php include_once("footer.php") ?>
</div>
</body>
</html>