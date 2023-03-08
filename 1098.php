<?php
//Sequencia IJ 4

$i = 0;

while (true) {
    $j= $i + 1;
    for ($x = 1 ; $x <= 3; $x++) {
        echo "I=" . number_format($i, 1, '.', '') . " J=" . number_format($j, 1, '.', '') . PHP_EOL;
        $j ++;
        
    }
    $i += 0.2;

    if ($i > 2) {
        break;
    }
}
?>  