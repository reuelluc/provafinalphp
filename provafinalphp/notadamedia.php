<?php
// Função para calcular a média
function calcularMedia($notas) {
    $soma = array_sum($notas); // Soma todas as notas
    $media = $soma / count($notas); // Calcula a média
    return $media;
}

// Solicita ao usuário as notas
$notas = [];
for ($i = 1; $i <= 3; $i++) {
    echo "Digite a nota $i: ";
    $nota = trim(fgets(STDIN)); // Lê a entrada do usuário

    // Verifica se a nota é numérica e está entre 0 e 10
    if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
        $notas[] = $nota; // Adiciona a nota ao array
    } else {
        echo "Por favor, insira um valor numérico entre 0 e 10.\n";
        $i--; // Decrementa o contador para repetir a entrada
    }
}

// Calcula a média
$media = calcularMedia($notas);

// Exibe a média
echo "A média das notas é: " . $media . "\n";
?>