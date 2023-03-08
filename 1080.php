<?php
// Maior e posição

$maior = 0;
$posicao = 0;

for ($i = 1; $i <= 100; $i++) {
    $numero = intval(fgets(STDIN));
    
    if ($numero > $maior) {
        $maior = $numero;
        $posicao = $i;
    }
}

echo $maior . "\n" . $posicao . "\n";
?>