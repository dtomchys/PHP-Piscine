<?php

include 'auxiliary.php';

$errors = array();

if (isset($_POST['login'])) {
	if (empty($_POST['username'])) {
		array_push($errors, "Username is required");
		header("Location: http://127.0.0.1:8100/RUSH/index.php");		
	}
	if (empty($_POST['password'])) {
		array_push($errors, "Password is required");
		header("Location: http://127.0.0.1:8100/RUSH/index.php");		
	}
	if (count($errors) == 0 && exist($_POST['username']) != false) {
		$tmp = unserialize(file_get_contents("./database/user"));
		if (ver_pass($_POST['password'], $_POST['username'])) {
			session_start();
			$_SESSION['logged_on_user'] = $_POST['username'];
			header("Location: http://127.0.0.1:8100/RUSH/home_page.php");
		}
	}
	else {
		array_push($errors, "User not exist!");
		header("Location: http://127.0.0.1:8100/RUSH/index.php");
	}
}
?>