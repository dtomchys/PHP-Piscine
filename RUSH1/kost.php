<?php
	session_start();
	$_SESSION['kost'] = rand(1, 6);
	$_SESSION['opponents'][0][0] = $_SESSION['c_pl'] == "1" ? $_SESSION['opponents'][0][0] + $_SESSION['kost'] : $_SESSION['opponents'][0][0];
	$_SESSION['opponents'][1][0] = $_SESSION['c_pl'] == "2" ? $_SESSION['opponents'][1][0] + $_SESSION['kost'] : $_SESSION['opponents'][1][0];	
	$_SESSION['cur_kost'] = 1;
	header("Location: http://127.0.0.1:8100/game_field.php");
?>