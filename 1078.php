<?php
//Tabuada 

$a = fgets(STDIN);
$y = 1;

while ($y <= 10) {
    
    $t = $y * $a;
    
    echo "$y x $a = $t" . PHP_EOL;

    $y++;
}
?>