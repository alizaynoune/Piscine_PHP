<?php
$action = $_GET[action];
if ($action === "set")
    setcookie($_GET[name], $_GET[value], time()+3600);
else if ($action === "get")
{
    $val = $_COOKIE[$_GET[name]];
    if ($val)
        echo $val."\n";
}
else if ($action === "del")
    setcookie($_GET[name], "", time()-3600);
?>