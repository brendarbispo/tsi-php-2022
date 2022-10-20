<?php
require_once('../BancoDeDados/conecta.php');

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');

$alunos =[];
while ($registros = $stmt->fetch(PDO::FETCH_ASSOC)){

    $alunos[] = $registros;
    
}

include('view/listar.php');
