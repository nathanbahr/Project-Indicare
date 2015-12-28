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
<div class="content-narrow">
<h2>recent</h2>
		<?php include_once("dbconnect.php") ?>
			<?php
			$query = $handler->query(
				"SELECT * 
				FROM `ALL` 
				ORDER BY `ALL`.`Modified` DESC 
				LIMIT 0 , 128");
			
			while($row = $query->fetch()) {
				include ("result.php");
			}		
			?>
</div>

<?php include_once("footer.php") ?>
</div>
</body>
</html>