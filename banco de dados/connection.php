<?php
// Importar e exportar o banco de dados

/*Classe com metodos estáticos*/
// conectar com mysql

define ('HOST', 'localhost');
define ('DB', 'cadastro');
define('USER',' root');
define('PASS','');

try{
    $pdo = new PDO('mysql:host = ' .HOST.';dbname'.DB,USER,PASS, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo 'Erro ao conectar';
}

?>