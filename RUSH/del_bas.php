<?php
	$arr = unserialize(file_get_contents("./database/basket"));
	foreach ($arr as $key => $value) {
		if ($_POST['del'] == $arr[$key]) {
			unset($arr[$key]);
			break ;
		}
	}
	file_put_contents("./database/basket", serialize($arr));
	header("Location: http://127.0.0.1:8100/RUSH/busket.php");
?>