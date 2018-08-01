<?php

function exist($post) {
	if (file_exists("../private")) {
		$tmp = unserialize(file_get_contents("../private/passwd"));
		foreach ($tmp as $arr) {
			if ($arr['login'] == $post['login'])
				return (true);
		}
	}
	return (false);
}

	if (($_POST['login'] && $_POST['oldpw'] && $_POST['newpw']) && $_POST['submit'] == 'OK' && exist($_POST)) {
			$tmp = unserialize(file_get_contents("../private/passwd"));
			foreach ($tmp as $i => $value) {
				if ($value['login'] = $_POST['login']) {
					if ($value['passwd'] != hash("whirlpool", $_POST['oldpw'])) {
						echo "ERROR\n";
						return ;
					}
					elseif ($value['passwd'] == hash("whirlpool", $_POST['newpw'])) {
						echo "ERROR\n";
						return ;
					}
					else {
						$tmp[$i]['passwd'] = hash("whirlpool", $_POST['newpw']);
						break ;
					}
				}
			}
			file_put_contents("../private/passwd", serialize($tmp));
			echo "OK\n";
	}
	else
		echo "ERROR\n";
?>