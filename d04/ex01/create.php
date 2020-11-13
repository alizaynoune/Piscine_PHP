<?php
if ($_POST["submit"] === "OK" && $_POST["login"] !== "" && $_POST["passwd"] !== "")
{
    $path = "../private";
    $file = "/passwd";
    
    $hash[0]["login"] = $_POST["login"];
    $hash[0]["passwd"] = hash("whirlpool", $_POST["passwd"]);
    $data_hash = serialize($hash);
    if (!file_exists($path))
    {
        mkdir($path, 0700);
        put_dat($data_hash, $path.$file);
        return(true);
    }
    else if (!check_data_exists($_POST["login"], $path.$file))
    {
        put_dat($data_hash, $path.$file);
        return (true);
    }
    else
    {
        echo "ERROR\n";
        return(false);
    }
}
else
{
    echo "ERROR\n";
    return(false);
}
function        check_data_exists($new_user, $file)
{
    $i = 0;
    $line = "";
    if (!file_exists($file))
        return(false);
    $all_data = file_get_contents($file);
    while ($all_data[$i] !== "")
    {
        if ($all_data[$i] === "\n")
        {
            $old_user = unserialize($line);
            if ($old_user[0]["login"] === $new_user)
                return (true);
            $i++;
            $line = "";
        }
        $line = $line.$all_data[$i++];
    }
    return (false);
}
function        put_dat($data, $file)
{
    file_put_contents($file, $data."\n", FILE_APPEND);
    echo "OK\n";
}
?>