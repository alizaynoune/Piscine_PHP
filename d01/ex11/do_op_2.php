#!/usr/bin/php
<?php
if ($argc == 2)
{
	$oper = 0;
	if (($pos = strpos($argv[1], "+")))
		$oper =  1;
	else if (($pos = strpos($argv[1], "-")))
		$oper = 2;
	else if (($pos = strpos($argv[1], "*")))
		$oper = 3;
	else if (($pos = strpos($argv[1], "/")))
		$oper = 4;
	else if (($pos = strpos($argv[1], "%")))
		$oper = 5;
	else
		print("Syntax Error\n");
	if ($oper != 0)
	{
		$nbr1 = substr($argv[1], 0, $pos);
		$nbr2 = substr($argv[1], $pos + 1);
		if (!check_nbr($nbr1))
			print("Syntax Error\n");
		else if (!check_nbr($nbr2))
			print("Syntax Error\n");
		else
			print_result($nbr1, $nbr2, $oper);
	}
}
else
	print("Incorrect Parameters\n");

function		print_result($nbr1, $nbr2, $oper)
{
	if ($oper == 1)
		print($nbr1 + $nbr2 . "\n");
	else if ($oper == 2)
		print($nbr1 - $nbr2 . "\n");
	else if ($oper == 3)
		print($nbr1 * $nbr2 . "\n");
	else if ($oper == 4)
		print($nbr1 / $nbr2 . "\n");
	else if ($oper == 5)
		print($nbr1 % $nbr2 . "\n");




}

function		check_nbr($str)
{
	$i = skip_space($str);
	$nbr = 0;
	while ($str[$i] >= "0" && $str[$i] <= "9")
	{
		$i++;
		$nbr++;
	}
	$i += skip_space(substr($str, $i));
	if ($str[$i] || $nbr == 0 )
		return (false);
	return (true);
}
function		skip_space($str)
{
	$i = 0;
	while ($str[$i] == " " || $str[$i] == "	")
		$i++;
	return ($i);
}
?>
