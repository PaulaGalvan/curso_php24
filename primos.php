<?php

/*
    Calcular os 5 primeiros numeros primos.
    Saída esperada: 2, 3, 5, 7, 11.
    Regra: só é divisivel por 1 e por ele mesmo.
    Ex.: 7 => 7/1 e 7/7.
    Dica: Utilizar o operador de módulo % para pegar o resto da divisão.
*/

for($i = 1; $i <= 12; $i++)
{
    $divisores = 0;
     
    for($j = $i; $j >= 1; $j--)
    {
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
     
    if ($divisores == 2)
    {
        echo $i . ', ';
    }
}
