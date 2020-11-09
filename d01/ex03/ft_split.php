<?php
function ft_split($str)
{
    $words = explode(" ", $str);
    $words = array_filter($words);
    $words = array_values($words);
    sort($words);
    return ($words);
}
?>