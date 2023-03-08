<?php
//Tabuada 

$n = intval(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $n;
    echo $i . " x " . $n . " = " . $resultado . "\n";
}

?>