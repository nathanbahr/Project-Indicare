<div class="header">
	<div id="banner">
		<div class="banner">
			<h1><a href="index.php">Project Indicāre</a></h1>
		</div>

			<?php
			$input = array("Latin. To show, to point out, to indicate. <a href='https://en.wiktionary.org/wiki/indicare'>Wikipedia</a>", "The online index.", "A quick reference guide for computers and technology", "You can't know what you don't know you don't know.", "No");
			$rand_keys = array_rand($input, 2);
			echo $input[$rand_keys[0]] . "<br>";
			?>

			<?php include_once("searchForm.php") ?>
			
		<div class="nav_buttons">
			<div class="list-centered">
				<ul id="nav_page">	
					<li><a href="index.php">home</a></li> 
					<li><a href="recent.php">recent</a></li> 
					<li><a href="timeline.php">timeline</a></li>
					<li>
						<a href="categories.php">categories</a>
						<?php include_once("categories-list.php") ?>
					</li>	
				</ul>
			</div>
		</div>
	</div>
</div>
<?php include_once("links.php") ?>