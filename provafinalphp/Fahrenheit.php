<?php
// Função para converter Celsius em Fahrenheit
function celsiusParaFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9 / 5) + 32; // Fórmula de conversão
    return $fahrenheit;
}

// Solicita ao usuário a temperatura em Celsius
echo "Digite a temperatura em graus Celsius: ";
$celsius = trim(fgets(STDIN)); // Lê a entrada do usuário

// Verifica se a entrada é numérica
if (is_numeric($celsius)) {
    // Converte para Fahrenheit
    $fahrenheit = celsiusParaFahrenheit($celsius);
    
    // Exibe o resultado
    echo "A temperatura em graus Fahrenheit é: " . $fahrenheit . "°F\n";
} else {
    echo "Por favor, insira um valor numérico para a temperatura em Celsius.\n";
}
?>