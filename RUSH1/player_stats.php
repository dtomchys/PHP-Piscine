<?php
	session_start();
	function ft_player_stats(){
		echo "<div class=\"stat\">
		<p class=\"title\" style=\"color:green;\">Player #".$_SESSION['c_pl']."</p>
		<p class=\"cur\">Name:   ".$_SESSION['opponents'][$_SESSION['c_pl'] == "1" ? 0 : 1][4]."</p>
		<p class=\"cur\">Power:  ".$_SESSION['opponents'][$_SESSION['c_pl'] == "1" ? 0 : 1][0]."</p>
		<p class=\"cur\">Shield: ".$_SESSION['opponents'][$_SESSION['c_pl'] == "1" ? 0 : 1][2]."</p>
		<p class=\"cur\">Health: ".$_SESSION['opponents'][$_SESSION['c_pl'] == "1" ? 0 : 1][1]."</p>
		</div>";
	}
?>