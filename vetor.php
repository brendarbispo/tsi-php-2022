<?php

//$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2=> 'Terça', 3=> 'Quarta', 4 => 'Quinta', 5 => 'Sexta'];

//echo "<pre>";
// INPORTANTE PARA DEPURAÇÃO DE COD ==> var_dump($diaSemana);
//INTERPOLAÇÃO DE ARRAY COM STRING, ADICIONA CHAVES {}

/*$hoje = date('w');
//echo "Hoje é {$diaSemana [$hoje]} ";

$aluno = [0 'matricula' => 1212, 'nome' => 'Brenda',
            'semestre' => 2 ];

            var_dump($aluno);
            */
            $aluno = [0 => ['matricula' => 0001,
                         'nome' => 'Brenda',
                          'semestre' => 2 ],
                         1 => ['matricula' => 0002,
                        'nome' => 'Ana',
                          'semestre' => 4 ],
                         2 => ['matricula' => 0003,
                          'nome' => 'Julia',
                        'semestre' => 3 ]];
echo '<table>
        <tr>
        <td>Matricula </td>
        <td>Nome </td>
        <td>Semestre </td>
        </tr>';
/*
for ($i = 0; $i < count($aluno); $i++){
    echo " <tr>

        <td>{$aluno[$i]['matricula']}</td>
        <td>{$aluno[$i]['nome']}</td>
        <td>{$aluno[$i]['semestre']}</td>
        </tr>";
}

echo '</table>';
*/

foreach($aluno as $i => $val ){
       echo "<tr>
                <td>{$val['matricula']}</td>
                <td>{$val['nome']}</td>
                <td>{$val['semestre']}</td>
                </tr>";
}
echo '</table>';