<?php
		$arr = unserialize(file_get_contents("./database/catalog"));
		$tmp['img'] = $_POST['img'];
		$tmp['name'] = $_POST['name_p'];
		$tmp['detail'] = $_POST['detail'];
		$tmp['price'] = $_POST['price'];
		$tmp['id'] = $_POST['id'];
		$tmp['cat'] = $_POST['cat'];
		$arr[] = $tmp;
		file_put_contents("./database/catalog", serialize($arr));
		header("Location: http://127.0.0.1:8100/RUSH/admin.php");
?>