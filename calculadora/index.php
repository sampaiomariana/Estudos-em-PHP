<?php

    $valor1 = $_GET['valor1'];
    $sinal = $_GET['sinal'];
    $valor2 = $_GET['valor2'];

    if($sinal == 'mais'){
        $resultado = $valor1+$valor2;

    }else if ($sinal == 'menos'){
        $resultado = $valor1 - $valor2;
    }

    echo $resultado;

  /* Soma via URL  calculadora/?valor1=10&valor2=20&sinal=mais 
    Subtração via URL  calculadora/?valor1=10&valor2=20&sinal=menos
  */
?>