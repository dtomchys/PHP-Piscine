<?php
	session_start();
	$_SESSION['kost'] = 0;
	$fl = 0;
	$enemy = $_SESSION['c_pl'] == 1 ? 2 : 1;	
	$_SESSION['cur_kost'] = 0;
	$_SESSION['opponents'][$_SESSION['c_pl'] - 1][0] = 10; 
	$_SESSION['c_pl'] = $_SESSION['c_pl'] == 1 ? 2 : 1;
	for ($i=0; $i < 15000; $i++) {
		if ($_SESSION['field'][$i] == 5)
			$_SESSION['field'][$i] = 0;
	}
	for ($i=0; $i < 15000; $i++) { 
		if ($_SESSION['field'][$i] == $enemy)
			$fl = 1;
	}
	if ($fl)
		header("Location: http://127.0.0.1:8100/game_field.php");
	else
		header("Location: http://127.0.0.1:8100/finish.php");
?>