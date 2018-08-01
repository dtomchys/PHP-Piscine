<?php
function ft_is_sort($arg){
	$temp = $arg;
	sort($temp);
	for ($i=0; $i < count($arg); $i++) {
		if ($temp[$i] != $arg[$i])
			return FALSE;
	}
	return TRUE;
}
?>