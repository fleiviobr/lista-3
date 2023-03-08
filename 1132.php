<?php
// Multiplos de 13

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));

if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$soma = 0;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 13 != 0) {
        $soma += $i;
    }
}

echo "$soma\n";
?>
