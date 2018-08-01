<?php
	session_start();
	$res = 0;
	$ids = unserialize(file_get_contents("./database/basket"));
	$src = unserialize(file_get_contents("./database/catalog"));
	$dst = unserialize(file_get_contents("./database/order"));
	$tmp['fname'] = $_POST['f_name'];
	$tmp['sname'] = $_POST['s_name'];
	$tmp['mobile'] = $_POST['num'];
 	foreach ($ids as $i => $val) {
		foreach ($src as $key => $value) {
			if ($value['id'] == $val) {
				$tmp[] = $value['name'];
				$res += $value['price'];
			}
	}
}
	$tmp['total'] = $res;
	$dst[] = $tmp;
	foreach ($ids as $key => $value) {
			unset($ids[$key]);
	}
	file_put_contents("./database/basket", serialize($ids));
	file_put_contents("./database/order", serialize($dst));
	header("Location: http://127.0.0.1:8100/RUSH/home_page.php");
?>
