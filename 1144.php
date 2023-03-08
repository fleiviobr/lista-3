<?php
// Sequência Lógica

$n = intval(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    printf("%d %d %d\n", $i, pow($i, 2), pow($i, 3));
    printf("%d %d %d\n", $i, pow($i, 2)+1, pow($i, 3)+1);
}
?>