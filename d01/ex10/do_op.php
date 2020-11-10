#!/usr/bin/php
<?php
if ($argc == 4)
{
	$code_oper = get_oper($argv[2]);
	if ($code_oper == 1)
		print($argv[1] + $argv[3] ."\n");
	else if ($code_oper == 2)
		print($argv[1] - $argv[3] ."\n");
	else if ($code_oper == 3)
		print($argv[1] / $argv[3] ."\n");
	else if ($code_oper == 4)
		print($argv[1] * $argv[3] ."\n");
	else if ($code_oper == 5)
		print($argv[1] % $argv[3] . "\n");
}
else
	print("Incorrect Parameters\n");
function		get_oper($oper)
{
	$oper = explode(" ", $oper);
	$oper = array_filter($oper);
	foreach($oper as $val)
		$new_oper = $new_oper . $val;
	if ($new_oper === "+")
		return (1);
	if ($new_oper === "-")
		return (2);
	if ($new_oper === "/")
		return (3);
	if ($new_oper === "*")
		return (4);
	if ($new_oper === "%")
		return (5);
	return (0);
}
?>
