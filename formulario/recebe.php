<?php

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

echo "Bem Vindo, "  . $nome . '!<br>';

echo "Você tem {$idade}, CPF: {$cpf}<br>";

echo "E seu periodo é : {$periodo}";

/*
$_SERVER possui muitas variaveis de ambiente que podem ser
muito importantes para voce em algum momento, ex IP do 
requisitante
*/

$arquivo = fopen('alunos.csv', 'a'); //abrir arquivo para append ::: 'a'
fwrite($arquivo, "$nome, $idade, $cpf, $periodo; {$_SERVER ['REMOTE_ADDR']}\r\n");
fclose($arquivo);