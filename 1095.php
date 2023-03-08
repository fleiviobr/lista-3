<?php
//Sequencia IJ 1
$i = 1;
$j = 60;
while (true)
{

    if ($j >= 0) {
        echo "I=$i J=$j" . PHP_EOL;
    }

    else {
        break;
    }

    $i += 3;
    $j -= 5;
}