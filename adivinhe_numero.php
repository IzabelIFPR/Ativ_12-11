<?php

$min = (int) readline("Digite o valor mínimo do intervalo: ");
$max = (int) readline("Digite o valor máximo do intervalo: ");

$numero_chutes = 0;

$numero_correto = mt_rand($min, $max);

do {

    $chute = (int) readline("Digite um número: ");
    $numero_chutes++;

    if ($chute === $numero_correto) {
        echo "Parabéns! Você acertou o número. \n";
        echo "Número de chutes: $numero_chutes \n";
    } else {
        echo "Você errou. \n";

        if ($chute > $numero_correto) {
            echo "O seu chute é maior que o número correto. \n";
        } else if ($chute < $numero_correto) {
            echo "O seu chute é menor que o número correto. \n";
        } else {
            echo "O seu chute é igual ao número correto. \n";
        }
    }
} while ($chute != $numero_correto);
