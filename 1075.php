<?php
//Resto 2

$x = fgets(STDIN);

for ($i = 1; $i <= 10001; $i++)
{
    $a = fgets(STDIN);
    if (($i % $x) == 2)
    {
        echo "$i" . PHP_EOL;
    }
}
?> 