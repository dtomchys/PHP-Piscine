<?php
		$arr = unserialize(file_get_contents("./database/user"));
		foreach ($arr as $key => $value) {
			if ($_POST['login'] == $value['username'] && $_POST['login'] != 'admin') {
				unset($arr[$key]);
			}
		}
		file_put_contents("./database/user", serialize($arr));
		header("Location: http://127.0.0.1:8100/RUSH/admin.php");
?>