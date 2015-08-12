<div>
<h2>Project Indicāre [BETA]</a></h2> 

<?php
$input = array("Latin. To show, to point out, to indicate. <a href='https://en.wiktionary.org/wiki/indicare'>Wikipedia</a>", "The online index.", "A quick reference guide for computers and technology", "You can't know what you don't know you don't know.", "No");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "<br>";
?>
</div>

<div id="search">
	<?php include_once("searchForm.php") ?>
</div>
<br><br>