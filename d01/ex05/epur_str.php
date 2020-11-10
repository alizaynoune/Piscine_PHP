#!/usr/bin/php
<?php
if ($argc == 2)
{
	$words = explode(" ", $argv[1]);
	$words = array_filter($words);
	$i = 0;
	foreach($words as $value)
		$i++;
	foreach($words as $value)
	{
		$i--;
		print($value);
		if ($i > 0)
			print(" ");
		else
			print("\n");
	}
}
?>
