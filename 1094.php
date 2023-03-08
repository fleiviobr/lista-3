<?php
//Experiencias

$coelhos = 0;
$ratos = 0;
$sapos = 0;
$total = 0;

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", fgets(STDIN));
    $quantidade = intval($input[0]);
    $tipo = trim($input[1]);
    
    switch ($tipo) {
        case 'C':
            $coelhos += $quantidade;
            break;
        case 'R':
            $ratos += $quantidade;
            break;
        case 'S':
            $sapos += $quantidade;
            break;
    }
    
    $total += $quantidade;
}

$percentualCoelhos = ($coelhos / $total) * 100;
$percentualRatos = ($ratos / $total) * 100;
$percentualSapos = ($sapos / $total) * 100;

echo "Total: $total cobaias\n";
echo "Total de coelhos: $coelhos\n";
echo "Total de ratos: $ratos\n";
echo "Total de sapos: $sapos\n";
echo "Percentual de coelhos: " . number_format($percentualCoelhos, 2) . " %\n";
echo "Percentual de ratos: " . number_format($percentualRatos, 2) . " %\n";
echo "Percentual de sapos: " . number_format($percentualSapos, 2) . " %\n";

?>
