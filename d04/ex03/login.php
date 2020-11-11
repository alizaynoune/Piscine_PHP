<?php
include 'auth.php';
if (auth($_GET["login"], $_GET["passwd"]))
{
    echo "ok\n";
}
else
{
    echo "error\n";
}
?>