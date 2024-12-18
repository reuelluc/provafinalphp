<?php
// Função para calcular o perímetro e a área do círculo
function calcularCirculo($raio) {
    $perimetro = 2 * M_PI * $raio; // Fórmula do perímetro: 2 * π * r
    $area = M_PI * pow($raio, 2); // Fórmula da área: π * r²

    return array($perimetro, $area);
}

// Solicita ao usuário o raio do círculo
echo "Digite o raio do círculo: ";
$raio = trim(fgets(STDIN)); // Lê a entrada do usuário

// Verifica se o valor é numérico e positivo
if (is_numeric($raio) && $raio > 0) {
    list($perimetro, $area) = calcularCirculo($raio); // Chama a função para calcular

    // Exibe os resultados
    echo "Perímetro do círculo: " . $perimetro . "\n";
    echo "Área do círculo: " . $area . "\n";
} else {
    echo "Por favor, insira um valor numérico positivo para o raio.\n";
}
?>