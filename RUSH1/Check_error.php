<?php
	session_start();
	if (!$_GET['player1'] || !$_GET['player2']){
		$_SESSION['err'] = "player_err";
		header("Location: /index.php");
	}
	else{
		$_SESSION['pls']['p1'] = $_GET['player1'];
		$_SESSION['pls']['p2'] = $_GET['player2'];
		header("Location: /game_field.php");
	}
?>