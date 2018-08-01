#!/usr/bin/php
<?php
	if ($argc != 2)
		return ;
	$str = preg_replace("/  +/", " ", $argv[1]);
	$str = trim($str);
	print($str."\n");
?>