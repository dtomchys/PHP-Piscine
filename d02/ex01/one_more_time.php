#!/usr/bin/php
<?php
	setlocale(LC_TIME, 'fr_FR.UTF-8');
	date_default_timezone_set('Europe/Paris');
	if ($argc != 2) {
		return ;
	}
	if (!preg_match("/^\w+ \d{1,2} \w+ \d{4} \d{2}:\d{2}:\d{2}$/i", $argv[1])) {
		echo "Wrong Format\n";
	}
	$arr = preg_split( "/\s/", $argv[1]);
	print_r($arr);
	$time = preg_split( "/:/", $arr[4]);
	print_r($time);
	for ($i=0; $i < 12; $i++) { 
		if (strftime("%B", mktime(0,0,0,$i,1,0)) == strtolower($arr[2])) {
			$month = $i;
			break ;
		}
	}
	echo mktime($time[0], $time[1], $time[2], $month, $arr[1], $arr[3])."\n";
?>
