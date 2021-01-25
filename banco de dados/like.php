<?php
     $pdo = new PDO('mysql:host=localhost;dbname=cadastro', 'root','');

     $sql = $pdo->prepare("SELECT * FROM  clientes LIKE '%g%' " );
    // possia g em qualquer lugar %g%

    $sql->execute();
    $emails = $sql->fetchAll():

    print_r($emails);

?>