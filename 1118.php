<?php
// Várias Notas Com Validação

do {
    $nota1 = floatval(fgets(STDIN));
    while ($nota1 < 0 || $nota1 > 10) {
        echo "nota invalida\n";
        $nota1 = floatval(fgets(STDIN));
    }
    
    $nota2 = floatval(fgets(STDIN));
    while ($nota2 < 0 || $nota2 > 10) {
        echo "nota invalida\n";
        $nota2 = floatval(fgets(STDIN));
    }
    
    $media = ($nota1 + $nota2) / 2;
    echo "media = " . number_format($media, 2) . "\n";
    
    do {
        echo "novo calculo (1-sim 2-nao)\n";
        $opcao = intval(fgets(STDIN));
    } while ($opcao != 1 && $opcao != 2);
} while ($opcao == 1);
?>
