<?php
	session_start();
	$p = $_SESSION['c_pl'];
	$pos = $_SESSION['opponents'][$p - 1][3];
	$range = $_SESSION['opponents'][$p - 1][0];
	$_SESSION['opponents'][$p - 1][0] = 0;
	$isKilled = 0;
	$r = $l = 0;
	for ($i=1; $i < $range; $i++) { 
		if ($pos > 150 * $i - 1)
			$_SESSION['field'][$pos - 150 * $i] = 5;
		if (14999 > ($pos + 150 * $i))
			$_SESSION['field'][$pos + 150 * $i] = 5;
		if (!$r && ($pos + $i) % 150 != 0)
			$_SESSION['field'][$pos + $i] = 5;
		else
			$r++;
		if (!$l && $pos % 150 != 0)
			$_SESSION['field'][$pos - $i] = 5;
		else
			$l++;
	}
	header("Location: http://127.0.0.1:8100/game_field.php");
?>