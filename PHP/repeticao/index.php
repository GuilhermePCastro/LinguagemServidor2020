<?php 

date_default_timezone_set("America/Sao_Paulo");
// exemplo for
for($i = 0, $j = 4; $i < 5; $i++, $j-- ){
    echo "Linha $i $j - for <br>";
    
}

//exemplo while
$a = 0;

echo " <br><br>";
while($a < 5){
    echo "Linha $a - while <br>";

    $a ++;
}

// exemplo do while
$b = 0;

echo " <br><br>";
do{
    echo "Linha $b - do while <br>";
    $b++;
}while($b < 5);

$semana[0] = 'domingo';
$semana[1] = 'segunda';
$semana[2] = 'terça';
$semana[3] = 'quarta';
$semana[4] = 'quinta';
$semana[5] = 'sexta';
$semana[6] = 'sábado';

echo "<br>";
$dia = date('w');
echo "Bom dia ! hoje é $semana[$dia] !";