<?php
if ($_POST["submit"] === "OK" && $_POST["login"] !== "" && $_POST["oldpw"] !== "" && $_POST["newpw"] !== "" && ($_POST["oldpw"] !== $_POST["newpw"]))
{
    $file = "../private/passwd";
    if (!($all_data = file_get_contents($file)))
    {
        echo "ERROR\n";
        return (false);
    }
    $old_pw = hash("whirlpool", $_POST["oldpw"]);
    if (usr_exist($file, $old_pw, $_POST["login"], $all_data))
    {
        $init[0]["login"] = $_POST["login"];
        $init[0]["passwd"] = hash("whirlpool", $_POST["newpw"]);
        $new_pass = serialize($init);
        file_put_contents($file, $new_pass."\n", FILE_APPEND);
        echo "OK\n";
        return (true);
    }
    echo "ERROR\n";
    return (false);
}
else
{
    echo "ERROR\n";
    return (false);
}

function        usr_exist($file, $old_pw, $login, $all_data)
{
    $i = 0;
    $ret = false;
    $tab = "";
    $line = "";

    while ($all_data[$i] !== "")
    {
        if ($all_data[$i] === "\n")
        {
            $usr = unserialize($line);
            if ($usr[0]["login"] === $login)
            {
                if ($usr[0]["passwd"] === $old_pw)
                    $ret = true;
                else
                    return (false);
            }
            else
                $tab = $tab.$line."\n";
            $i++;
            $line = "";
        }
        else
            $line = $line.$all_data[$i++];
    }
    if ($ret === true)
        file_put_contents($file, $tab);
    return ($ret);
}
?>