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
	<div id="search">
		<?php include_once("searchForm.php") ?>
	</div>
	<div id="links">
		<?php include_once("links.php") ?>
	</div>
<br>
<div id="content">
<?php
if(isset($_GET['keywords'])) {
require_once 'dbconnect.php';
		
	$keywords = $_GET['keywords'];
	
	$query = $handler->query("
		SELECT *
		FROM `ALL`
		WHERE Item LIKE '%{$keywords}%'
		OR Definition LIKE '%{$keywords}%'
		OR History LIKE '%{$keywords}%'
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