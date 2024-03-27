<?php

function soma($num, $num2) {
    $resultado = $num + $num2;

    return $resultado;
}

echo "Soma:" . soma(2, 2) . "<br>";

function subtrair($num, $num2) {
    $resultado = $num - $num2;

    return $resultado;
}

echo "Subtrair:" . subtrair(10, 2) . "<br>";

function vezes($num, $num2) {
    $resultado = $num * $num2;

    return $resultado;
}

echo "Vezes:" . vezes(3, 4) . "<br>";

function dividir($num, $num2) {
    $resultado = $num / $num2;

    return $resultado;
}

echo "Dividir:" . dividir(30, 5) . "<br>";

function porcentagem($valor, $percentual) {
    $resultado = $valor * ($percentual / 100);

    return $resultado;
}

echo "Porcentagem:" . porcentagem(1000, 100) . "<br>";

function aumento($valor, $percent) {
    $resultado = $valor + porcentagem($valor, $percent);

    return $resultado;
}

function desconto($valor, $percent) {
    $resultado = $valor - porcentagem($valor, $percent);

    return $resultado;
}

$salario = 1412.00;
$aumento_percentual = 5;
$desconto_inss = 11;

function calcular_salario($salario, $aumento_percentual, $desconto_inss){

    $salario_final = aumento($salario, $aumento_percentual);
    $salario_final = desconto($salario_final, $desconto_inss);

    $salario_final = round ($salario_final, 2);

    echo "Salario: {$salario}_" . "Salario_final:" . $salario_final . "<br>";
}

 /* EXEMPLO COM ARRAY || VETOR.
    * 10% - empregado
    * 12% - supervisor
    * 14% - gerente
    * 16% - diretor
 */

$aumento_percentual = 10;
calcular_salario($salario, $aumento_percentual, $desconto_inss);

$aumento_percentual = 12;
calcular_salario($salario, $aumento_percentual, $desconto_inss);

$aumento_percentual = 14;
calcular_salario($salario, $aumento_percentual, $desconto_inss);

$aumento_percentual = 16;
calcular_salario($salario, $aumento_percentual, $desconto_inss);



