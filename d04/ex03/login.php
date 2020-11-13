<?php
include 'auth.php';
$login = $_GET["login"];
$pass = $_GET["passwd"];
if (auth($login, $pass))
{
    session_start();
    $_SESSION["loggued_on_user"] = $login;
    echo "OK\n";
    return (true);
}
else
{
    echo "ERROR\n";
    return (false);
}
?>