<?php
	function exists($post)
	{
		if (file_exists("../private/passwd")) {
			$arr = unserialize(file_get_contents("../private/passwd"));
			foreach ($arr as $key) {
				if ($post['login'] == $key['login'])
					return FALSE;
			}
		}
		return TRUE;
	}
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK" && exists($_POST)) {
		if (!file_exists("../private/passwd")) {
			mkdir("../private");
			file_put_contents("../private/passwd", NULL);
		}
		$arr = unserialize(file_get_contents("../private/passwd"));
		$new['login'] = $_POST['login'];
		$new['passwd']= hash("whirlpool", $_POST['passwd']);
		$arr[] = $new;
		file_put_contents("../private/passwd", serialize($arr));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>