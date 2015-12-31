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
	<div id="col1">
			<?php
				include ("query1.php");	
				include ("result.php");	
			?>
	</div>
	<div id="col2">
			<?php
				include ("query2.php");	
				include ("result.php");	
			?>
	</div>
</div>
<?php include_once("footer.php") ?>
</body>
</html>