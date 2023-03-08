<?php
//Numeros Positivos

$positivos = 0;
for ($i = 1; $i <= 6; $i++)
    {
        $a = fgets(STDIN);
        if ($a > 0)
        {
            $positivos++;
        }
    }
echo "$positivos valores positivos" . PHP_EOL;
?> 