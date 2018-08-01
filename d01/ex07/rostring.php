#!/usr/bin/php
<?php
function ft_split($arg)
{
	$pieces = preg_split( "/[\s]+/", ($arg = trim($arg)));
	return $pieces;
}
	if ($argc < 2)
		return ;
	$arr = ft_split($argv[1]);
	$temp = $arr[0];
	$arr[0] = $arr[count($arr)];
	$arr[count($arr)] = $temp;
	$str = trim($str = implode(" ", $arr));
	print($str."\n");
?>