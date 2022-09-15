<?php

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

echo "Bem Vindo, "  . $nome . '!<br>';

echo "Você tem {$idade}, CPF: {$cpf}<br>";

echo "E seu periodo é : {$periodo}";


$arquivo = fopen('alunos.csv', 'a'); //abrir arquivo para append ::: 'a'
fwrite($arquivo, "$nome, $idade, $cpf, $periodo \r\n");
fclose($arquivo);