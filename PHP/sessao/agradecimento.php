<?php
session_start();
$nota = $_GET['nota'];


if($nota < 9){
    echo "<p>Sua nota foi $nota <br> O que podemos fazer para melhorar ?</p>";
}else{
    echo " <p> Sua nota foi $nota <br> Muito obrigado pelo carinho!</p>";
}