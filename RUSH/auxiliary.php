<?php

function exist($post) {
		$tmp = unserialize(file_get_contents("./database/user"));
		foreach ($tmp as $arr) {
			if ($arr['username'] == $post)
				return (true);
		}
	return (false);
}

function ver_pass($pass, $login) {
	$tmp = unserialize(file_get_contents("./database/user"));
	$den = hash("whirlpool", $pass);
	foreach ($tmp as $key) {
		if ($key['username'] == $login) {
			if ($key['password'] == $den) {
				return TRUE;
			}
		}
	}
	return FALSE;
}
