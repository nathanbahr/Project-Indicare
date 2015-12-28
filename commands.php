<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include_once("dbconnect.php") ?>
	<?php include_once("banner.php") ?>
<div class="content-narrow">
	<?php include_once("title.php") ?>
	<?php
		$query = $handler->query(
			"SELECT * 
			FROM `ALL` 
			WHERE `Type ID` =100
			ORDER BY `Item` ASC");
				
		include ("result.php");
	?>
</div>
	<?php include_once("footer.php") ?>
</div>
</body>
</html>