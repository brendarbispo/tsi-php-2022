<?php
//$nome = 'Brenda';
//interpolação *imprim indo na tela//
//echo "Olá $nome";
//comentario de uma linha
#comentario de uma linha
/* comentario
de
bloco */

//documentação php:: https://www.php.net

/*
-- FOR

for($i = 0; $i<= 10; $i++){
    echo "$nome <br>"; 
}

-- WHILE
$i = 0;
while($i <= 10){
    echo "$nome <br>";
    $i++;
}


//-- DO WHILE

$i = 0;
do{
    echo "$nome <br>";
    $i++;
}while( $i < 10);

-- IF/ELSE

if(5 > 10)
    echo " 5 é maior que 10";
else
 echo "não é maior";
*/
//-- SWITCH
$i = 30;

switch($i){

    case 0:
        echo "Segunda-Feira";
        break;
    case 1:
        echo "Terça-feira";
        break;
    case 2:
        echo "Quarta-feira";
        break;
    case 3:
        echo "Quita-feira";
        break;
    case 4:
         echo "Sextou!";
         break;
    default:
        echo "Numero inválido!";
}