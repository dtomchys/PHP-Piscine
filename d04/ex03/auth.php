<?php
	function auth($login, $passwd){
		$arr = unserialize(file_get_contents("../private/passwd"));
		foreach ($arr as $key) {
			if ($key['login'] == $login){
				if ($key['passwd'] == hash("whirlpool", $passwd)) {
					return TRUE;
				}
			}
		}
	}
	return FALSE;
?>