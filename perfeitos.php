<?php

// calcular os 4 primeiros numeros perfeitos
// um num perfeito é quando a soma dos divisores é igual ao numero;

$arrayPerfeitos=[];

function isPerfeito($num){
    $arrayDiv=[];
    for ($div = 1; $div < $num; $div++){
        if ($num % $div == 0){
            $arrayDiv[]=$div;
        }
    }
    $totalDiv= array_sum($arrayDiv);
    if ($totalDiv == $num){
        return true;
    }
}
$num=2;
while (count($arrayPerfeitos) < 4){
    if(isPerfeito($num)){
        $arrayPerfeitos[]=$num;
    }
    $num++;
}
echo implode(" , ", $arrayPerfeitos);
