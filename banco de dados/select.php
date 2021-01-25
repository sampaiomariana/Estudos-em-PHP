<?php
    /*Demonstração de como pode ser feito o select em php*/

    //Definição global pra fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //Conexão
    $pdo = new PDO('mysql:host=localhost;dbname=cadastro', 'root','');

    //Select
    $sql = $pdo-> prepare("SELECT * FROM posts");
    $sql -> execute();
    
    //Puxa direto do banco de dados como array.
    $info = $sql ->fetchAll();
    echo '<pre>';
    print_r($info);
    echo '</pre>';

    // Puxa direto do banco de dados em linhas.
    foreach($info as $key => $value){
        echo 'Titulo:   '.$value['titulo'];
        echo '<br />';
        echo 'Noticia:  ' .$value['conteudo'];
        echo '<hr>';
    }

    // Extraindo os dados de forma geral
    $sql = $pdo-> prepare("SELECT * FROM posts  where categoria_id= ?");
    $sql -> execute(array($_GET['categoria_id']));
    
    $info = $sql ->fetchAll();

    foreach($info as $key => $value){
        echo 'Titulo:   '.$value['titulo'];
        echo '<br />';
        echo 'Noticia:  ' .$value['conteudo'];
        echo '<hr>';
    }

    //Exibindo os dados separando por categorias 

    $sql =  $pdo->prepare("SELECT * FROM categorias");
    
    $sql->execute();

    $info = $sql->fetchAll();

    //Pegando os dados de forma dinâmica
    foreach($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exibindo posts de:    '.$value['nome'];
        echo '<br />';
        $sql = $pdo->prepare("SELECT * FROM post WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql-> fetchAll();
        foreach($infoPosts as $key => $value){
            echo 'Titlo:    '.$value['titulo'];
            echo '<br />';
            echo 'Noticias: '.$value['conteudo'];
            echo'<ht>';
        }
    }

    // Outra forma de obter o mesmo resultado 
    //Inner join une posts a categorias, criando uma categoria entre as tabelas.

    $sql = $pdo->prepare("SELECT * FROM `post` INNER JOIN `categoria` ON `posts`.`categoria_id` = 
    `categoria`.`id`");

    $sql ->execute();
    $info = $sql->fetchAll();

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($info);
    echo '</pre>';



?>