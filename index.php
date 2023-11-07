<?php
	include_once "./controller/controller_head.class.php";
?> 
<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio développeur web et applications">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= Controller_head::titre ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<ul>
		<li><a href="index.php?page=1">études</a></li>
		<li><a href="index.php?page=2">formations</a></li>
		<li><a href="index.php?page=3">contact</a></li>
		
	</ul>
	<main>
		<h1><?= Controller_head::titre ?></h1>

	
			<?php
				include_once "./controller/controller.class.php";
			?>
	</main>
	<footer>
	<p>&copy; - EDW - <?php $_now_date->dates() ?></p>
</footer>
</body>
</html>