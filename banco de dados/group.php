<?php

    $pdo = new PDO('mysql:host=localhost;dbname =estrutura2', 'root', '' );
    
    //Visualizar os erros 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo LIMIT 1");
    // Outras formas de chamada do sql
    //Separa em grupo pelo cargo e ordena de forma decrescente pelo nome, limitado a 3 dados.
    $sql = $pdo -> prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome
    DESC LIMIT 3");
    //Ordem alfabetica , limitado a 1.
    $sql = $pdo -> prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 1");
    $sql->execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value){
        echo $value ['nome'];
        echo '<hr>';
    }

    // left e right join 
    $pdo = new PDO('mysql:host=localhost;dbname =estrutura2', 'root', '' );
    //Visualizar os erros 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargos` ON `clientes`.`id` 
    = `cargos`.`id`");
    $sql->execute();
    $clientes = $sql -> fetchAll();
    foreach ($clientes as $key => $value){
        echo $value ['nome'];
        echo '|';
        echo $value['nome_cargo'];
        echo '<hr>';
    }

    // Inner join só retorna o que o id bate com o id do cargo
    // left join retorna o cliente mesmo que não bata - independente dos cargos vazios retorna tudo dos clientes
    //right join retorna apenas o que bate dos cargos - retorna todos os cargos independete do cliente
   

?>