<?php
// PUM

$n = intval(fgets(STDIN));
$count = 1;

for ($i = 0; $i < $n; $i++) {
    printf("%d %d %d PUM\n", $count, $count+1, $count+2);
    $count += 4;
}
?>