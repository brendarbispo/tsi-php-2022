<?php

//buscamos o cod que conecta ao SGBD
require_once '../BancoDeDados/conecta.php';

//apenas para ficar mais 
$id = $_POST['id'] ?? 0;

$id = preg_replace('/\D/', '', $id);

if($bd->exec(" DELETE FROM ALUNOS WHERE id = $id") ){

    $apagado = true;
}else{

    $apagado = false;
}

    include 'index.php';
