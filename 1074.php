<?php
//Par ou impar
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
  $num = intval(fgets(STDIN));
  if ($num == 0) {
    echo "NULL\n";
  } else {
    if ($num % 2 == 0) {
      echo "EVEN ";
    } else {
      echo "ODD ";
    }
    if ($num > 0) {
      echo "POSITIVE\n";
    } else {
      echo "NEGATIVE\n";
    }
  }
}
?>