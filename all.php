<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>

<?php include_once("banner.php") ?>

<div id="content">
<?php include_once("title.php") ?>
		<?php include_once("dbconnect.php") ?>
			<?php
			$query = $handler->query(
				"SELECT * 
				FROM `ALL` 
				ORDER BY `Item` ASC");
			
			while($row = $query->fetch()) {
				include ("result.php");
			}		
			?>
</div>

<?php include_once("footer.php") ?>
</div>
</body>
</html>