<?php include_once("connect.php") ?>
		<?php
		try {
			$handler = new PDO('mysql:host=localhost;dbname=tocrg', $user, $pass);
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
		
		$query = $handler->query('SELECT * FROM `ALL`');
		
		while($row = $query->fetch()) {
			include ("result.php");
		}		
		?>