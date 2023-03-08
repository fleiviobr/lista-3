<?php
//Pares entre Cinco Numeros

$count = 0;

for ($i = 0; $i < 5; $i++) {
  $num = intval(fgets(STDIN));
  if ($num % 2 == 0) {
    $count++;
  }
}

echo "$count valores pares\n";

?>