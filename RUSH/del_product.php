<?php
		$arr = unserialize(file_get_contents("./database/catalog"));
		foreach ($arr as $key => $value) {
			if ($_POST['id'] == $value['id']) {
				unset($arr[$key]);
			}
		}
		file_put_contents("./database/catalog", serialize($arr));
		header("Location: http://127.0.0.1:8100/RUSH/admin.php");
?>