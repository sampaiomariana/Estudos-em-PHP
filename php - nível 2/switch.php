<?php

$nome = 'Mariana';

switch($nome){
    case 'Mariana':
        echo 'Minha variavel e Mariana';
        break;
    case 'Joao':
        echo  'Minha variavel e joao';
        break;
}

// Comentar as funções para compilar sem erro.
for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<hr>';
    if($i == 5)
        break;
}

// Ele irá omitiri o 5 e o 9 da lista

for ($n = 0; $n < 10, $n++){
    if($n == 5 || $n == 9)
        continue;
    echo $n;
    echo '<hr>';
}

?>