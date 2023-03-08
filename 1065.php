<?php
//Pares entre Cinco Numeros

$a = fgets(STDIN);
$b = fgets(STDIN);

if ($a > $b)
{
    $maior = $a;
    $menor = $b;
}
else
{
    $maior = $b;
    $menor = $a;
}

for ($i = $menor + 1; $i < $maior; $i++)
{
    if (($i % 2) == 0)
    {
        echo "$i" . PHP_EOL;
    }
}

?>