#!/usr/bin/php
<?php
	if ($argc < 2) {
		return ;
	}
	$tmp = trim($argv[1]);
	$tmp = preg_replace("/[\t+]/", " ", $tmp);
	$arr = preg_split("/\s+/", $tmp);
	$tmp = implode(" ", $arr);
	echo "$tmp";
	print("\n");
?>
