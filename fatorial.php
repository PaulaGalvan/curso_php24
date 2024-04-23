<?php 

/*
    Calcular o fatorial de um Numero N (N!) informado pelo usuário.
    Onde "N" é o numero em si 4! (4 fatorial).
    Regra: "a multiplicação desse número por seus antecessores com exceção do zero".
    Ex.: "4! = 4 * 3 * 2 * 1 = 24"
    Dica: Pode-se utilizar laço de repetição (while, for, ...).
*/

$numero = 4;

$fatorial = 1;

for($i = 1; $i <= $numero; $i++){
    // $fatorial = $fatorial * $1; (extensa)
    $fatorial *= $i; // (simplificada) // multiplica o fatorial pelo numero atual;
}

echo "O fatorial de {$numero} é {$fatorial}.";

/**
 * 4
 * 2 
 * 1*2*3*4
*/
