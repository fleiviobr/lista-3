<?php
// Validacao de Nota

$notas = array();
$i = 0;

while ($i < 2) {
    $nota = floatval(fgets(STDIN));
    
    if ($nota >= 0 && $nota <= 10) {
        $notas[$i] = $nota;
        $i++;
    } else {
        echo "nota invalida\n";
    }
}

$media = array_sum($notas) / count($notas);
echo "media = " . number_format($media, 2) . "\n";
?>
