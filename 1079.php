<?php
//Medias Ponderadas

$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);

$media = (($a * 2) + ($b * 3) + ($c * 4) + ($d * 1)) / 10;

echo "Media: " . number_format($media, 1, '.', '') . PHP_EOL;

if ($media >= 7.0)
{
    echo "Aluno aprovado." . PHP_EOL;
}

if ($media < 5.0)
{
    echo "Aluno reprovado." . PHP_EOL;
}

if (($media >= 5.0) && ($media <= 6.9))
{
    echo "Aluno em exame." . PHP_EOL;
    $e = fgets(STDIN);
    echo "Nota do exame: " . number_format($e, 1, '.', '') . PHP_EOL;
    $media = ($media + $e) / 2;
    if ($media >= 5.0)
    {
        echo "Aluno aprovado." . PHP_EOL;
    }
    else
    {
        echo "Aluno reprovado." . PHP_EOL;
    }
    echo "Media final: " . number_format($media, 1, '.', '') . PHP_EOL;
}
?>