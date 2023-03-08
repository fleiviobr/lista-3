<?php
// Quadrante

while (true) {
    $input = explode(" ", fgets(STDIN));
    $x = intval($input[0]);
    $y = intval($input[1]);
    
    if ($x == 0 || $y == 0) {
        break;
    }
    
    if ($x > 0 && $y > 0) {
        echo "primeiro\n";
    } elseif ($x < 0 && $y > 0) {
        echo "segundo\n";
    } elseif ($x < 0 && $y < 0) {
        echo "terceiro\n";
    } else {
        echo "quarto\n";
    }
}

?>
