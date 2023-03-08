<?php
//Medias Ponderadas

$n = intval(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    $valores = explode(" ", fgets(STDIN));
    $media = ($valores[0] * 2 + $valores[1] * 3 + $valores[2] * 5) / 10;
    echo number_format($media, 1) . "\n";
}
?>