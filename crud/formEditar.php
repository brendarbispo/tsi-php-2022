<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
</head>
<body>
    
    <form action ="atualizar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value = "<?php echo $aluno['nome'];?>" >
        <br>
        <label for="turno">Turno: </label>
        <select name="turno" id="turno" >
            <option value = "">Escolha</option>
            <option value="matutino" <?php echo $aluno ['turno']== 'matutino'? 'selected' : '';?>>Matutino</option>
            <option value="vespertino" <?php echo $aluno ['turno']== 'vespertino'? 'selected' : '';?>>Vespertino</option>
            <option value="noturno" <?php echo $aluno ['turno']== 'noturno'? 'selected' : '';?>>Noturno</option>
        </select>
       <br>
       <label for="inicio">Inicio</label>
       <input type="date" name="inicio" id="inicio"value = "<?php echo $aluno['inicio'];?>">
       <br>
       <input type="hidden" name= "id" value= "<?php echo $aluno['id'];?>">
       <input type="submit" value="Atualizar">
    </form>

</body>
</html>




