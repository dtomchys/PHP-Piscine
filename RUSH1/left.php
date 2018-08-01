<?php
	session_start();
	$p = $_SESSION['c_pl'];
	$cor = $_SESSION['opponents'][$p - 1][3];
	if ($_SESSION['opponents'][$p - 1][0] > 0) {
		if ($_SESSION['opponents'][$p - 1][3] % 150 == 0)
			$_SESSION['opponents'][$p - 1][1] = 0;
		elseif ($_SESSION['field'][$cor - 1] > 2) {
			echo "TUT";
			$_SESSION['opponents'][$p - 1][0] -= 1;
			$_SESSION['opponents'][$p - 1][3] -= 1;
			$_SESSION['field'][$cor - 1] = $p;
			$_SESSION['field'][$cor] = 0;
			if ($_SESSION['opponents'][$p - 1][2]){
				$_SESSION['opponents'][$p - 1][2] = 0;
				$_SESSION['opponents'][$p - 1][1] -= 5;
			}
			else
				$_SESSION['opponents'][$p - 1][1] = 0;
		}
		elseif ($_SESSION['field'][$cor - 1] == 0){
			$_SESSION['opponents'][$p - 1][0] -= 1;
			$_SESSION['opponents'][$p - 1][3] -= 1;
			$_SESSION['field'][$cor - 1] = $p;
			$_SESSION['field'][$cor] = 0;
		}
		else
			echo "You can't!!!";
		if ($_SESSION['opponents'][$p - 1][1] === 0){
			$_SESSION['winner'] = $p;
			header("Location: http://127.0.0.1:8100/finish.php");			
			return ;
		}
	}
	header("Location: http://127.0.0.1:8100/game_field.php");
?>