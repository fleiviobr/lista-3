<?php
// Grenais

$inter = 0;
$gremio = 0;
$empates = 0;
$total = 0;

do {
    list($i, $g) = explode(" ", fgets(STDIN));
    $total++;

    if ($i > $g) {
        $inter++;
    } elseif ($g > $i) {
        $gremio++;
    } else {
        $empates++;
    }

    do {
        echo "Novo grenal (1-sim 2-nao)\n";
        $opcao = intval(fgets(STDIN));
    } while ($opcao != 1 && $opcao != 2);
} while ($opcao == 1);

echo "$total grenais\n";
echo "Inter:$inter\n";
echo "Gremio:$gremio\n";
echo "Empates:$empates\n";

if ($inter > $gremio) {
    echo "Inter venceu mais\n";
} elseif ($gremio > $inter) {
    echo "Gremio venceu mais\n";
} else {
    echo "Não houve vencedor\n";
}
?>
