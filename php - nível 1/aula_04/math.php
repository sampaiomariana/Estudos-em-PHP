<?php
  
  
/*Operações matemáticas*/

$numero = 10;

$numero2= 2;

$resultado0 = $numero/$numero2;
$resultado1 = $numero + $numero2;

echo $resultado;


$resto0 = 4 % 2;
echo $resto;
$resto1  = 10 % 6;
echo $resto1;

//Se o resto for igual a zero, temos um número par.

//Condições

$var1 = 'Guilherme';
$var2 = 'Joao';

if ($var1 == $var2){

    echo '<div style = "widht: 300px; height: 300px; background: red;"></div>';
} else {

    echo 'false';
}

$var5 = 10 +5;
$var6 = '10 + 5';

if ($var5 == $var6){
    echo 'verdade';
} else if ($var5 != $var6) {
    echo 'verdade na condição else if';
} else {
    echo 'falso';
}

//Operadores 

$valor = 12;
$valor2 = 12;

//Valores identicos
if ($valor === $valor2){
    echo 'verdade.';
}


// math
$numero5 = 10;
$numero6 = 11;

if($numero5 < $numero6){
    //Execute
}else {

}

if ($numero5 <= $numero6){
    echo 'execute';
}

if ($numero5 > $numero6){
    echo 'execute';
}


if ($numero5 >= $numero6){
    echo 'execute';
}

// Lógicos 

$a = 'valor1';
$b = 'valor2';
$c = 'valor3';

// AND 
if (($a == $b) && ($b == $c)){
    echo 'verdade';
}

// OR

if ($a == $b || $a == $c){
    echo 'false.';
} 

// Loopings 

for ($contador = 10; $contador >=0; $contador--){
    echo 'Ola mundo';
    echo '<br />';
    echo $contador;
    echo '<hr>';
}

//while 

$contador = 0;
while($contador < 10){
    echo 'ola mundo';
    echo '<hr>';
    $contador+=1;
}

//DO

$contador3 = 0;
do{
    echo 'ola mundo';
    echo '<br />';
    $contador++;
}while($contador3 < 10);


?>