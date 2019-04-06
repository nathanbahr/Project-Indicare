<?php include_once("head.php") ?>
<title>Indicare</title>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include_once("dbconnect.php") ?>
	<?php include_once("banner.php") ?>
<div class="content-narrow">
	<?php include_once("title.php") ?>
		<?php 
			$today = date("Y-m-d");
			$weekstart = date("Y-m-d", strtotime("last week sunday"));
			$weekend = date("Y-m-d", strtotime("this week saturday"));
			$year = date("Y");
			$lastyear = date("Y")-1;
			$thisday = date("m-d");
			$month = date("F");
			$pastyears = date("Y")-50;	
		?>
		
<!--On this day-->
		<?php
			$query = $handler->query
			(
				"SELECT * 
				FROM `ALL` 
				WHERE `Timeline` LIKE '%-{$thisday}'
				AND `History` LIKE '%{$month}%'
				ORDER BY `Item` ASC"
			);
			
			if($query->rowCount() > 0) 
			{
				echo ("<h1>on this day</h1>");
			} 
			else
			{
				echo ("<h1>on this day:</h1> nothing happened");
			};
			include ("result.php");
		?>
<!--This week-->
	<h1>this week</h1>
		<?php
			echo "{$weekstart} - {$weekend}";
			$query = $handler->query
			(
				"SELECT * 
				FROM `ALL` 
				WHERE `Timeline` BETWEEN '{$weekstart}' AND '{$weekend}'
				ORDER BY `Timeline` DESC"
			);
				include ("result.php");
		?>
	
	<br>
	<br>
<!--Future-->
	<h1>future</h1>
		<?php
			$query = $handler->query
			(
				"SELECT * 
				FROM `ALL` 
				WHERE `Timeline` > '{$today}'
				ORDER BY `Timeline` DESC"
			);
				include ("result.php");
		?>
	<br>
	<br>		
	<p><a href="timeline.php">More</a></p>
</div>
	<?php include_once("footer.php") ?>
</body>
</html>