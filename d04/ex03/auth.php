<?php
function auth($login, $passwd)
{
    $file = "../private/passwd";
    $all_users = file_get_contents($file);
    if ($all_users)
        {
            $init_user[0]["login"] = $login;
            $init_user[0]["passwd"] = hash("whirlpool", $passwd);
            $hash_user = serialize($init_user);
            if (loop_users($all_users, $hash_user))
                return (true);
        }
    return(false);
}

function    loop_users($all_users, $hash_user)
{
    $i = 0;
    $line = "";
    while ($all_users[$i] !== "")
    {
        if ($all_users[$i] === "\n")
        {
            if ($line == $hash_user)
                return (true);
            $line = "";
            $i++;
        }
        $line = $line.$all_users[$i++];
    }
    return (false);
}
?>