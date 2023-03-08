<?php
// Tipo de Combustível

$alcool = 0;
$gasolina = 0;
$diesel = 0;

do {
    $tipo = intval(fgets(STDIN));

    switch ($tipo) {
        case 1:
            $alcool++;
            break;
        case 2:
            $gasolina++;
            break;
        case 3:
            $diesel++;
            break;
        case 4:
            break;
        default:
            continue 2; // Pula para a próxima iteração do loop externo
    }

} while ($tipo != 4);

echo "MUITO OBRIGADO\n";
echo "Alcool: $alcool\n";
echo "Gasolina: $gasolina\n";
echo "Diesel: $diesel\n";
?>