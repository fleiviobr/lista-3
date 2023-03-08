<?php
// Crescente e Decrescente

while (true) {
    $input = explode(" ", fgets(STDIN));
    $x = intval($input[0]);
    $y = intval($input[1]);
    
    if ($x == $y) {
        break;
    }
    
    if ($x < $y) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }
}

?>
