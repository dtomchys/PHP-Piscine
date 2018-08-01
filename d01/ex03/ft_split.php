#!/usr/bin/php
<?php
function ft_split($arg)
{
	$pieces = preg_split( "/[\s]+/", ($arg = trim($arg)));
	sort($pieces);
	return $pieces;
}
?>