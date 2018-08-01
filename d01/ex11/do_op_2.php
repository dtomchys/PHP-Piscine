#!/usr/bin/php
<?php
function ft_error_param()
{
	echo "Incorrect Parameters\n";
}
function ft_err_syn()
{
	echo "Syntax Error\n";
}
function ft_split($arg)
{
	$pieces = preg_split( "/\s+[- \+ \* \/ %]\s+/", ($arg = trim($arg)));
	return $pieces;
}
	if ($argc != 2)
	{
		ft_error_param();
		return ;
	}
	$arr = ft_split($argv[1]);
	if (count($arr) > 2)
	{
		ft_err_syn();
		return ;
	}
	if (!is_numeric($arr[0]) || !is_numeric($arr[1])) {
		ft_err_syn();
		return ;
	}
	if (preg_match("/[\+]/", $argv[1])) {		
		print($arr[0] + $arr[1]);	
	}
	elseif (preg_match("/[-]/", $argv[1])) {
		print($arr[0] - $arr[1]);	
	}
	elseif (preg_match("/[\*]/", $argv[1])) {
		print($arr[0] * $arr[1]);
	}
	elseif (preg_match("/[\/]/", $argv[1])) {
		print($arr[0] / $arr[1]);	
	}
	elseif (preg_match("/[%]/", $argv[1])) {
		print($arr[0] % $arr[1]);	
	}
	print("\n");
?>