#!/usr/bin/php
<?php
while (true)
{
    $nbr = readline('Entre a number: ');
    if (feof(STDIN))
    {
        echo"\n";
        exit();
    }
    if (is_numeric($nbr))
    {
        print("The number $nbr");
        if (($nbr % 2) == 1)
           print(" is odd\n");
        else
           print(" is even\n");
    }
    else
    print("'$nbr' is not a number\n");
}
?>