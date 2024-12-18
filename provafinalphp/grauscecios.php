<?php
// Função para converter Fahrenheit em Celsius
function fahrenheitParaCelsius($fahrenheit) {
    $celsius = (5 * ($fahrenheit - 32)) / 9; // Fórmula de conversão
    return $celsius;
}

// Solicita ao usuário a temperatura em Fahrenheit
echo "Digite a temperatura em graus Fahrenheit: ";
$fahrenheit = trim(fgets(STDIN)); // Lê a entrada do usuário

// Verifica se a entrada é numérica
if (is_numeric($fahrenheit)) {
    // Converte para Celsius
    $celsius = fahrenheitParaCelsius($fahrenheit);
    
    // Exibe o resultado
    echo "A temperatura em graus Celsius é: " . $celsius . "°C\n";
} else {
    echo "Por favor, insira um valor numérico para a temperatura em Fahrenheit.\n";
}
?>