<div class="footer">
    <a href="#">top</a>
	
    <p id="end"></p>
	<div class="modified">
		<?php include_once("connect.php");
		$utc_sql = "SELECT CONVERT_TZ(`Modified`, @@session.time_zone, '+00:00') AS `utc_datetime` FROM `ALL` ORDER BY `utc_datetime` DESC LIMIT 1";
		foreach ($handler->query($utc_sql) as $row) {
				print '<p>Database last modified: ' . $row['utc_datetime'] . ' UTC</p>';
			}
		?>
	</div>
	
	<div class="sitemap">
		<div id="col1">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="categories.php">categories</a></li>
				<li><a href="recent.php">recent</a></li>
				<li><a href="timeline.php">timeline</a></li>
				<li><a href="https://github.com/nathanbahr/Project-Indicare.git">source</a></li>
				<li><a href="http://tocrg.org/phpmyadmin/">log in</a></li>	
			</ul>
		</div>
		
		<div id="col2">
			<ul>
				<li><a href="commands.php">commands</a></li>
				<li><a href="devices.php">devices</a></li>
				<li><a href="electrical.php">electrical</a></li>
				<li><a href="games.php">games</a></li>
				<li><a href="html.php">html</a></li>
				<li><a href="networking.php">networking</a></li>
				<li><a href="people.php">people</a></li>
				<li><a href="servers.php">servers</a></li>
				<li><a href="software.php">software</a></li>
				<li><a href="webdev.php">webdev</a></li>
				<li><a href="websites.php">websites</a></li>
			</ul>
		</div>
	</div>	
</div>