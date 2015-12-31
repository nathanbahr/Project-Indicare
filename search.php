<!DOCTYPE html>
<html>
<head>
	<?php include_once("head.php") ?>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php require_once("dbconnect.php") ?>
	<?php include_once("banner.php") ?>
<div class="content-narrow">
<?php
if(isset($_GET['keywords'])) {
		
	$keywords = $_GET['keywords'];
	
	$query = $handler->query("
		SELECT *
		FROM `ALL`
		WHERE Item LIKE '%{$keywords}%'
		OR AltName LIKE '%{$keywords}%'
		OR Definition LIKE '%{$keywords}%'
		OR History LIKE '%{$keywords}%'
		OR Link1DN LIKE '%{$keywords}%'
		OR Link2DN LIKE '%{$keywords}%'
		OR Link3DN LIKE '%{$keywords}%'
		OR Link4DN LIKE '%{$keywords}%'
		OR Link5DN LIKE '%{$keywords}%'
		OR Link6DN LIKE '%{$keywords}%'
		ORDER BY Item ASC
	");
	
	if($query->rowCount()) {
		print 'results for ' . $keywords;
		
			include ("result.php");
			
	} else {
		print 'No results for ' . $keywords;
	}
		
}
?>
</div>
<?php include_once ("footer.php")?>
</body>
</html>