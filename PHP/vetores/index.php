<?php 


date_default_timezone_set("America/Sao_Paulo");

$semana[0] = 'domingo';
$semana[1] = 'segunda';
$semana[2] = 'terça';
$semana[3] = 'quarta';
$semana[4] = 'quinta';
$semana[5] = 'sexta';
$semana[6] = 'sábado';

$dia = date('w');
echo "Bom dia ! hoje é $semana[$dia] !";

echo '<br><br>';

unset($semana);

$semana['Sunday']  = 0;
$semana['Monday']  = 1;
$semana['Tuesday']    = 2;
$semana['Wednesday']   = 3;
$semana['Thursday']   = 4;
$semana['Friday']    = 5;
$semana['sábado']   = 6;

$dia = date('l');
echo "Bom dia ! hoje é $semana[$dia] - alfanúmerico !";


// montar frase

$usuario = [	'nome' 	=> 	'Luiz Bono',
				'idade'	=>	25,
				'peso'	=>	67.8,
                'signo'	=>	'aquariano'
            ];

echo '<br><br>';
echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa " . number_format($usuario['peso'], 2 , ',', '.') . "kg e é {$usuario['signo']}.";

echo '<br><br>';
echo "O professor " . $usuario['nome'] . " tem " . $usuario['idade'] . " anos, pesa " . $usuario['peso'] . " kg e é " . $usuario['signo'];

// constante
echo '<br><br>';
define('MUNDO','Terra');
echo 'Olá ' . MUNDO; 
                

// matrix
$professores = [    0  => ['nome' => 'Luiz', 'idade' => 25, 'peso' => 75.50, 'signo' => 'Aquariano'],
                    1 => ['nome' => 'Thyago', 'idade' => 26, 'peso' => 90.50, 'signo' => 'Outro ai'],
                    2  => ['nome' => 'Thiago', 'idade' => 30, 'peso' => 80.50, 'signo' => 'Aquariano']
                ];

$numprof = 1;

echo '<br><br>';

// estrutura base do table
$tabela = '<table border= 1px>
             <thead>
                <tr>
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Peso</td>
                    <td>Signo</td>
                </tr>
             </thead>
             <tbody>';

// montando linhas
$linha = '';
for ($i = 0; $i < 3; $i++){

    $linha = $linha .'<tr>';
    $linha = $linha . '<td>' . $professores[$i]['nome'] . '</td>';
    $linha = $linha . '<td>' . $professores[$i]['idade'] . '</td>';
    $linha = $linha . '<td>' . $professores[$i]['peso'] . '</td>';
    $linha = $linha . '<td>' . $professores[$i]['signo'] . '</td>';
    $linha = $linha . '</tr>';
}

// juntando linhas
$tabela = $tabela . $linha . '</tbody></table>';
echo $tabela; 

