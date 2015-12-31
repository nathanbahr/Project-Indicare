<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include_once("dbconnect.php") ?>
	<?php include_once("banner.php") ?>
<div class="content">
<?php include_once("title.php") ?>
	<div class="content-narrow">
		<?php
			$query = $handler->query(
				"SELECT * 
				FROM `ALL` 
				ORDER BY `ALL`.`Modified` DESC 
				LIMIT 0 , 128");
				
			include ("result.php");	
		?>
	</div>
</div>
<?php include_once("footer.php") ?>
</body>
</html>