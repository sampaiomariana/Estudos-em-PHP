<?php

// chama dinamicamente a classe
    function myautoload($class){
        $class = str_replace('\\','/', $class );
        //Para ver se foi substituido
        echo $class;

        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }

    spl_autoload_register('myautoload');


?>