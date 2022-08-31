<?php

$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2=> 'Terça', 3=> 'Quarta', 4 => 'Quinta', 5 => 'Sexta'];

//echo "<pre>";
// INPORTANTE PARA DEPURAÇÃO DE COD ==> var_dump($diaSemana);
//INTERPOLAÇÃO DE ARRAY COM STRING, ADICIONA CHAVES {}

$hoje = date('w');
//echo "Hoje é {$diaSemana [$hoje]} ";

$aluno = ['matricula' => 1212, 'nome' => 'Brenda',
            'semestre' => 2 ];

            var_dump($aluno);