#!/usr/bin/php
<?php
if ($argc > 1)
{
	$words = explode(" ", $argv[1]);
	$words = array_filter($words);
	$words = array_values($words);
	$lst = 0;
	$find_words = 0;
	foreach($words as $key => $value)
	{
		$lst = $key;
		$find_words++;
	}
	if ($find_words == 0)
		return ;
	if ($find_words == 1)
		print("$words[0]\n");
	else
	{
		foreach($words as $key => $value)
		{
			if ($key > 0)
			{
				print("$value");
				if ($find_words > 0)
				print(" ");
				$find_words--;
			}
		}
		print("$words[0]\n");
	}
}
?>
