<?php
// Quadrado e ao Cubo

$n = intval(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    printf("%d %d %d\n", $i, pow($i, 2), pow($i, 3));
}
?>