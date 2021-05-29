
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2>Ta Te Ti</h2>
	<div class="form">
		<form method="post" action="play.php" >
		<input class="order" type="text" name="user" placeholder="Player 1">
		<select class="order" name="mode" id ="sel">
			<option value="pvp">pvp</option>
			<option value="pvc">pvc</option>
			<option value="cvc">cvc</option>
		</select>
		<input class="order" type="text" name="user2" placeholder="Player 2" id="ply">
		<select class="order" name="dif" id ="seld" disabled>
			<option value="0">Easy</option>
			<option value="1">Medium</option>
			<option value="2">Hard</option>
		</select>
		<input class="order" type="submit" value="Play">
	</form>
	</div>
	<script type="text/javascript">
		document.addEventListener('input', function (event) {

			// Only run on our select menu
			var player = document.getElementById('ply');
			var dif = document.getElementById('seld');
			var sel = document.getElementById('sel');

			if (sel.value == "pvp") {
				player.removeAttribute("disabled");     
				dif.disabled = true;
			}

			if (event.target.value === "pvc") {
				player.disabled = true;
				dif.removeAttribute("disabled");     
			}

			if (event.target.value === "cvc") {
				player.disabled = true;
				dif.removeAttribute("disabled");     
			}


		}, false);
	</script>
</body>
</html>