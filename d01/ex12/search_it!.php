#!/usr/bin/php
<?php
if ($argc > 2)
{
	$i = $argc - 1;
	while ($i > 1)
	{
		if (check_key($argv[1], $argv[$i--]))
			break ;
	}
}

function		check_key($key, $str)
{
	if (!($spr = strpos($str, ":")))
		return (false);
	$n_key = substr($str, 0, $spr);
	if (strcmp($key, $n_key) !== 0)
		return (false);
	$value = substr($str, $spr + 1);
	print("$value\n");
	return(true);
}
?>
