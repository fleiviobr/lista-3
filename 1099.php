<?php
//Soma de Impares Consecutivos II

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", fgets(STDIN));
    $x = intval($input[0]);
    $y = intval($input[1]);
    
    $soma = 0;
    $min = min($x, $y);
    $max = max($x, $y);
    
    for ($j = $min + 1; $j < $max; $j++) {
        if ($j % 2 != 0) {
            $soma += $j;
        }
    }
    
    echo $soma . "\n";
}

?>
