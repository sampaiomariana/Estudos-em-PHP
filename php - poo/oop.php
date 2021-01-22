<?php

include('exemplo.class.php');
//Intanciar o novo objeto
$exemplo = new Exemplo();
$exemplo->var2 = 'Mariana';

$exemplo2  = new Exemplo;
$exemplo2 -> var2 = 'maria';

echo $exemplo -> var2;
echo '<br />';
echo $exemplo2 -> var2;

// ela não está acessível
echo $exemplo -> var3;

// está acessível
echo Exemplo::$var3;


?>