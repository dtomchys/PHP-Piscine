<?php
	function ft_kost(){
		if ($_SESSION['cur_kost'] == 0){
			echo "<div><h6 id=\"kost_txt\">Kiday,bl*a!</h6><form action=\"kost.php\" method=\"post\"><button class=\"kost\" type=\"submit\" name=\"kost\" value=\"random\">".$_SESSION['kost']."</button></form></div>";
		}
		else{
			echo "<div><h6 id=\"kost_txt\">Kiday,bl*a!</h6><button class=\"kost\" type=\"submit\" name=\"\" value=\"\">".$_SESSION['kost']."</button></div>";
		}
	}
?>