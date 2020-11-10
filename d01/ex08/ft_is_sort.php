<?php
function	ft_is_sort($tab)
{
	$cmp = 0;
	$len = 0;
	$i = 0;
	foreach ($tab as $value)
		$len++;
	foreach ($tab as $key => $value)
	{
		if (strcmp($tab[$i], $tab[$key]) > 0)
			return (false);
		$i = $key;
	}
	return (true);
}
?>
