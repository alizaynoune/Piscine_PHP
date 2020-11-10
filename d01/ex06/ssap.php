#!/usr/bin/php
<?php
if ($argc > 1)
{
	foreach($argv as $key => $value)
	{
		if ($key > 0)
		{
			$words = $words . ' ' . $value;
		}
	}
	$words = explode(" ", $words);
	$words = array_filter($words);
	sort($words);
	foreach($words as $val)
		print("$val\n");
}
?>
