<?php
session_start();


if(isset($_POST['gravar'])){
    chdir(__DIR__);
    require "model/banco.php";
    require "controller/verif_cadastro.php";
}
chdir(__DIR__);
require '../header.php';
require "view/cadastro_tpl.php";


chdir(__DIR__);
require '../footer.php';