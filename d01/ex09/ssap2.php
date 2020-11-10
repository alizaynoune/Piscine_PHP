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
	asort($words, SORT_STRING | SORT_FLAG_CASE);
	foreach($words as $val)
	{
		if (is_numeric($val))
				$nume[] = $val;
		else if (ctype_alpha($val))
				$alpha[] = $val;
		else
			$ascii[] = $val;
	}
	foreach($alpha as $val)
		print("$val\n");
	foreach($nume as $val)
		print("$val\n");
	foreach($ascii as $val)
		print("$val\n");
}
?>
