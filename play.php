<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Play</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php
	if (!isset($_SESSION['action'])) {
		$_SESSION['action'] = '';
		$_SESSION['value'] = 0;
		$_SESSION['user'] = '';
		$_SESSION['mode'] = $_POST['mode'];
		$_SESSION['turnX'] = true;
		$_SESSION['moves'] = 0;
		$_SESSION['board'] = array( //$board['replace']
		'upleft' => 0,
		'upmiddle' => 0,
		'upright' => 0, 
		'midleft' => 0,
		'midmiddle' => 0,
		'midright' => 0, 
		'downleft' => 0,
		'downmiddle' => 0,
		'downright' => 0, 
	);
	}else{

		 $action = $_SESSION['action'];
		$_SESSION['board'][$action] = $_SESSION['value'];
	}
	if (isset($_POST['user'])) {
		$_SESSION['user'] = $_POST['user'];
	}else{
		if ($_SESSION['user'] == '') {
			$user = "Anon";
		}else{
			$user = $_SESSION['user'];
		}
	}
	$board = $_SESSION['board'];
	$mode = $_SESSION['mode'];
	$turnX = $_SESSION['turnX'];
		//detectar

function detectar($ply){
	$board = $_SESSION['board'];
	if (
	($board["upleft"] == $board["upmiddle"] && $board["upmiddle"] == $board["upright"] && $board["upleft"] == $ply ) ||
	($board["midleft"] == $board["midmiddle"] && $board["midmiddle"] == $board["midright"] && $board["midleft"] == $ply ) ||
	($board["downleft"] == $board["downmiddle"] && $board["downmiddle"] == $board["downright"]  && $board["downleft"] == $ply) ||
	($board["upleft"] == $board["midleft"] && $board["midleft"] == $board["downleft"] && $board["upleft"] == $ply ) ||
	($board["upmiddle"] == $board["midmiddle"] && $board["midmiddle"] == $board["downmiddle"] && $board["midmiddle"] == $ply ) ||
	($board["upright"] == $board["midright"] && $board["midright"] == $board["downright"] && $board["downright"] == $ply ) ||
	($board["upright"] == $board["midmiddle"] && $board["midmiddle"] == $board["downleft"] && $board["upright"] == $ply ) ||
	($board["upleft"] == $board["midmiddle"] && $board["midmiddle"] == $board["downright"] && $board["downright"] == $ply )
	) {
		return(true);
	}else{
		return(false);
	}//end ifelse
}
if (detectar(1)) {
	header("location:end.php?x");
}
if (detectar(2)) {
	header("location:end.php?o");
}
if ($_SESSION['moves'] == 9) {
	header("location:end.php?d");
}

		//fin detectar
	?>
	<div class="form">
		<img src="img/board_h.png">
		<div id="upleft">
			<?php
			switch ($board['upleft']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=upleft&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=upleft&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="upmiddle">
			<?php
			switch ($board['upmiddle']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=upmiddle&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=upmiddle&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="upright">
			<?php
			switch ($board['upright']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=upright&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=upright&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="midleft">
			<?php
			switch ($board['midleft']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=midleft&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=midleft&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="midmiddle">
			<?php
			switch ($board['midmiddle']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=midmiddle&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=midmiddle&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="midright">
			<?php
			switch ($board['midright']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=midright&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=midright&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="downleft">
			<?php
			switch ($board['downleft']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=downleft&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=downleft&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="downmiddle">
			<?php
			switch ($board['downmiddle']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=downmiddle&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=downmiddle&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
		<div id="downright">
			<?php
			switch ($board['downright']) {
				case 1:
					?>
					<img src="img/x.png">
					<?php
					break;
				case 2:
					?>
					<img src="img/o.png">
					<?php
					break;
				default:
					if ($turnX) {
						echo "<a href='action.php?action=downright&value=1'><img class='may' src='img/x.png'></a>";
					}else{
						echo "<a href='action.php?action=downright&value=2'><img class='may' src='img/o.png'></a>";
					}
					break;
			}
			?>
		</div>
	</div>
	<div class="left">
		<a href="destroy.php">reset</a>
	</div>
	<div class="right">
		
	</div>
	<?php

	?>

</body>
</html>