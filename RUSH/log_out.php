<?php
	session_start();

	if (isset($_POST['logout']) && $_POST['logout'] == "Log Out")
	{
		if ($_SESSION['logged_on_user']) {
			$_SESSION['logged_on_user'] = "";
			$arr = unserialize(file_get_contents("./database/basket"));
			foreach ($arr as $key => $value) {
				unset($arr[$key]);
			}
			file_put_contents("./database/basket", serialize($arr));
			header("Location: http://127.0.0.1:8100/RUSH/home_page.php");
		}
}
?>