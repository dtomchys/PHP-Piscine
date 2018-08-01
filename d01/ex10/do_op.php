#!/usr/bin/php
<?php
function ft_error()
{
	echo "Incorrect Parameters\n";
}
	if ($argc < 4 || $argc > 4)
	{
		ft_error();
		return ;
	}
	for ($i=1; $i < 4; $i++) { 
		$argv[$i] = trim($argv[$i]);
	}
	if ($argv[2] == '+') {
		print($argv[1] + $argv[3]);	
	}
	elseif ($argv[2] == '-') {
		print($argv[1] - $argv[3]);	
	}
	elseif ($argv[2] == '*') {
		print($argv[1] * $argv[3]);	
	}
	elseif ($argv[2] == '/') {
		print($argv[1] / $argv[3]);	
	}
	elseif ($argv[2] == '%') {
		print($argv[1] % $argv[3]);	
	}
	print("\n");
?>