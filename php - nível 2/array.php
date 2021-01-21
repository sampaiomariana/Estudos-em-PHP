<?php

    // percorrendo o array

    $arr = array ('Mariana', 'Borges', 'de', 'Sampaio');

    foreach ($arr as $key => $value){

        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';

    }

    $total = count($arr);

    for($x = 0; $x < $total; $x++){

        echo $arr[$x];
        echo '<br />';
    }

    // array multidimensional 

    $arr2 = array(array('Mariana', 'Sampaio'), array(22,25));

    echo $arr2[0][1];
    echo $arr2[1][0];
    
    $arr2[0] = array('joao', 'bispo');
    



?>
