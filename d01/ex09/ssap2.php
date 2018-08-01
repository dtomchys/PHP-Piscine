#!/usr/bin/php
<?php
function ft_split($arg)
{
	$pieces = preg_split( "/[\s]+/", ($arg = trim($arg)));
	sort($pieces);
	return $pieces;
}
function ft_sort($a, $b)
{
	$count_a = 0;
	$count_b = 0;
	$i = 0;
	do {
		if ($a[$i] == $b[$i])
		{
			$i++;
			continue ;
		}
		if ($a[$i] >= '0' && $a[$i] <= '9')
			$count_a += 2;
		elseif ($a[$i] >= 'a' && $a[$i] <= 'z' || $a[$i] >= 'A' && $a[$i] <= 'Z')
			$count_a += 3;
		else
			$count_a += 1;
		if ($b[$i] >= '0' && $b[$i] <= '9')
			$count_b +=2;
		elseif ($b[$i] >= 'a' && $b[$i] <= 'z' || $b[$i] >= 'A' && $b[$i] <= 'Z')
			$count_b += 3;
		else
			$count_b += 1;
		if ($count_a == $count_b)
		{
			$hui = ord($a[$i]);
			$piz = ord($b[$i]);
			if ($a[$i] >= 'A' && $a[$i] <= 'Z')
				$hui += 32;
			if ($b[$i] >= 'A' && $b[$i] <= 'Z')
				$piz += 32;		
			$res = $hui - $piz;
			break ;
		}
		$i++;
	 } while ($a[$i - 1] == $b[$i - 1] && $a[$i] && $b[$i]);
	if ($res)
		return ($res);
	$res = $count_a - $count_b;
	$len_dif = count($a) - count($b);
	if ($len_dif > 0 && $res == 0)
		return (1);
	if ($len_dif < 0 && $res == 0)
		return (-1); 
	return ($res * -1);
}
	if ($argc == 1)
		return ;
	unset($argv[0]);
	$str = implode( " " , $argv);
	$arr = ft_split($str);
	usort($arr, ft_sort);
	foreach ($arr as $var) {
		print($var."\n");
	}
?>