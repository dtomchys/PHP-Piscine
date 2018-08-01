<?php
	session_start();
	$arr = unserialize(file_get_contents("./database/basket"));
	$temp = $_POST['id'];
	$arr[] = $temp;
	file_put_contents("./database/basket", serialize($arr));
	header("Location: http://127.0.0.1:8100/RUSH/home_page.php");
?>