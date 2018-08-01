#!/usr/bin/php
<?php
	while (1)
	{
		print("Enter a number: ");
		$d = fgets(STDIN);
		$d = trim($d);
		if (feof(STDIN)) {
			echo "^D\n";
			break ;
		}
		else if (is_numeric($d)) {
			if (!($d % 2))
				echo "The number ".$d." is even\n";
			else
				echo "The number ".$d." is odd\n";
		}
		else
			echo "'".$d."' is not a number\n";
	}
?>