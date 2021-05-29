<?php
session_start();
$_SESSION['action'] = $_GET['action'];
$_SESSION['value'] = $_GET['value'];
$_SESSION['turnX'] = !$_SESSION['turnX'];
$_SESSION['moves'] = $_SESSION['moves'] + 1;

header("location: play.php");
?>