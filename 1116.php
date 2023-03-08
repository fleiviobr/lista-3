<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", fgets(STDIN));
    $x = intval($input[0]);
    $y = intval($input[1]);
    
    if ($y == 0) {
        echo "divisao impossivel\n";
    } else {
        $resultado = $x / $y;
        echo number_format($resultado, 1) . "\n";
    }
}

?>
