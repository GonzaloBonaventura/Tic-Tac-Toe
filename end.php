<!DOCTYPE html>
<html>
<head>
	<title>Game Over</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php
	if (isset($_GET['x'])) {
		echo "<img src=img/x.png> <h2> X es el ganador </h2>";
	}else{
		if (isset($_GET['o'])) {
			echo "<img src=img/o.png> <h2> O es el ganador </h2>";
		}else{
			if (isset($_GET['d'])) {
				echo "<img src=img/o.png><img src=img/x.png> <h2> ¡Empate! </h2>";
			}else{
				header("location:destroy.php");
			}
		}
	}
	?>
	<a href="index.php">Return</a>
</body>
</html>