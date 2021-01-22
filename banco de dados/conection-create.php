<?php

    //Conexão com o banco e inserção de dados no banco via formulário
    //CRUD

    //Definição global pra fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //Conexão
    $pdo = new PDO('mysql:host=localhost;dbname=cadastro', 'root','');

    //Create 
    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cidade = $_POST['cidade'];
    $cadastro_date = date('Y-m-d H:i:s');
   
    $sql = $pdo->prepare("INSERT INTO `cliente` VALUES (NULL, ?,?,?,?)");

    $sql->execute(array($nome,$sobrenome,$cidade,$cadastro_date));
    echo 'Cliente inserido com sucesso';
    }


    //Update 

    $cliente_id = 2;

    $sql = $pdo->prepare("UPDATE `cliente` SET nome = 'Joao', sobrenome = 'Pereira' WHERE
   cliente_id = ?");

    if($sql->execute(array($cliente_id))){
        echo 'Os dados do cliente foram atualizados com sucesso!';
    }

    //Delete

    
    $cliente_id = 2;

    $sql = $pdo->prepare("DELETE FROM `cliente` WHERE cliente_id = ?");

    if($sql->execute(array($cliente_id))){
        echo 'Os dados do cliente foram deletados com sucesso!';
    }



?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastro</title>

</head>

<body>
    <form method="post">
    <input type = "text" name = "nome" required />
    <input type = "text" name = "sobrenome" required />
    <input type = "text" name = "cidade" required />
    <input type = "submit" name = "acao" value ="Enviar" />
    
    
    </form>

</body>


</html> 


