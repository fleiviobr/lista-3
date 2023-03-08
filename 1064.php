<?php
//Positivos e Media

$positivos = 0;
$soma = 0;
for ($i = 1; $i <= 6; $i++)
    {
        $a = fgets(STDIN);
        if ($a > 0)
        {
            $positivos++;
            $soma += $a;
        }
    }
echo "$positivos valores positivos" . PHP_EOL;
echo number_format($soma / $positivos, 1) . PHP_EOL;
?> 