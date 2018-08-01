#!/usr/bin/php
<?php
function ft_split($arg)
{
	$pieces = preg_split( "/[\s]+/", ($arg = trim($arg)));
	sort($pieces);
	return $pieces;
}
	if ($argc == 1)
		return ;
	unset($argv[0]);
	$str = implode( " " , $argv);
	$arr = ft_split($str);
	sort($arr);
	foreach ($arr as $var) {
		print($var."\n");
	}
?>