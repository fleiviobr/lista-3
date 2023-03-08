<?php
//Sequencia de Números e Soma

while (true) {
    $input = explode(" ", fgets(STDIN));
    $m = intval($input[0]);
    $n = intval($input[1]);
    
    if ($m <= 0 || $n <= 0) {
        break;
    }
    
    $soma = 0;
    $min = min($m, $n);
    $max = max($m, $n);
    
    for ($i = $min; $i <= $max; $i++) {
        echo $i . " ";
        $soma += $i;
    }
    
    echo "Sum=" . $soma . "\n";
}

?>
