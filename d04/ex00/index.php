<?php
session_start();
if ($_GET['submit'] === "OK")
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form action="index.php" method="get">
<input type="text" name="login" placeholder="login" value = "<?=$_SESSION['login']?>"/></br>
<input type="password" name="passwd" placeholder="password" value="<?=$_SESSION['passwd']?>"/></br>
<input type="submit" name="submit" placeholder="OK" value="OK"/></br>
</form>
</body></html>
