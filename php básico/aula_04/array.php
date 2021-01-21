<?php 

    /*Variavéis com diversas chaves*/

    $nome = array('Mariana', 'Joao', 'Guilherme');
    echo $nome[0];
    echo $nome[1];
    echo $nome[2];
    
    /* Segunda forma de declarar array*/

    $name[] = 'Joao';
    $name[] = 'Guilherme';

    echo $name[1];

    /*Terceira forma*/

    $var = ['Guilherme', 'Joao'];

    echo $var[0];


    $info['nome'] ='Mariana';
    $info['idade'] = 25;
    $info['cidade'] = 'Brasília';

    echo $info['nome'];
    echo '<br />';
    echo $info['idade'];
    echo '<br />';
    echo $info['cidade'];

    echo '<br />';
   
    /*Concatenação*/

    $frase = 'Meu nome é';
    $name = 'Mariana';
    $nomedaclass = 'box';

    define('NOME', 'Joao');

    echo $frase.$nome;


    /*Com " " */

    echo "Meu nome é $name";

    echo "<div class = \"$nomedaclass \"> Meu conteúdo da div </div>";





?>