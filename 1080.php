<?php
// Maior e posição

$maior = 0;
$posicao = 0;
$a = 0;

for ($i = 1; $i <= 100; $i++)
{
    $a = fgets(STDIN);
    if ($a > $maior)
    {
        $maior = $a;
        $posicao = $i;
    }
}

echo "$maior" . PHP_EOL;
echo "$posicao" . PHP_EOL;
?>
    