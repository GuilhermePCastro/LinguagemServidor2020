<?php

$clima = 'gelado';

// if norsssmal
if($clima === 'gelado'){
    echo "Meu pé congela!";
}
else{
    echo "Meu pé não congela!";
}


// if ternario
/*
$bool = "true";
$cond = $bool === true ?  "<br><br> É true <br><br>" : "<br><br> Não é true <br><br>";
echo $cond . "Vai sim";
*/ 


// condição com função
$frase = 'Aqui tem uma palavra';

if(strpos($frase,'Aqui') !== false){
    echo "<br><br> Achei a palavra! <br><br>";
}
else{
    echo "<br><br> Não achei a palavra! <br><br>";
}


// switch
switch ($clima){
    case 'gelado':
        
        echo "<br><br> Tá frio em fi";

    break;

    case 'quente':

        echo "<br><br> Tá quente em fi";

    break;
    
    default:

        echo "<br><br> Ahh, tá gostosinho";

    break;
}

$variavel = 'isso';
$variavel = $variavel ?? 'nada';
echo "<br><br> Olha só $variavel";

