<?php

chdir(__DIR__);
require '../sessao.php';

require '../header.php';
require 'model/banco.php';
$lista = listar();

require 'view/lista.php';
chdir(__DIR__);
require '../footer.php';
