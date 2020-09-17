<?php

function calcula (float $num1, float $num2, string $sinal = '+'): ?float{

    switch($sinal){

        case '+':
            return $num1 + $num2;
            
        case '-':
            return $num1 - $num2;

        case '*':
            return $num1 * $num2;
        
        case '/':
            return $num1 / $num2;
        
        default:
            return null;
    }
}

echo "O resultado é " . calcula(25,25,'*');


function DiaDaSemana (int $dia): string{

    $semana[0] = 'domingo';
    $semana[1] = 'segunda-feira';
    $semana[2] = 'terça-feira';
    $semana[3] = 'quarta-feira';
    $semana[4] = 'quinta-feira';
    $semana[5] = 'sexta-feira';
    $semana[6] = 'sábado';

    return $semana[$dia] ?? '(esse dia não é válido)';
}

echo "<br><br>";
echo "O dia da semana é " . DiaDaSemana(7);

//Por referência
$num = 1;
function MudaNumero (int &$num): int{

   $num = 2;
   return $num;
}

echo "<br><br>";
echo "O retorno é " . MudaNumero($num);