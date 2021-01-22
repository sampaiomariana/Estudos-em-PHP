<?php
    
    //Criar função

    function mostrarnome($nome,$idade){
        echo '<h2>Nome e: </h2> '.$nome;
        echo '<hr>';
        echo "Idade: $idade";
    }

    mostrarnome('Joao', 21);

    function calculadora($numero1 =10, $numero2 = 5 ){
        echo ($numero1+$numero2);
    }

    calculadora(20,30);
    //Resultado = 50

    function verdade(){
        return true;
    }

function retornarstring (){
    return 'Mariana';
}

// é necessário chamar o echo para printar na tela a mensagem

echo retornarstring();

// Funções nativas do php


// definição de  fuso horário
date_default_timezone_set('Ameria/Sao_Paulo');
//Pegar a hora atual e adicionar 10 minutos
$data = date('d/m/Y H:i:s', time() + (60*10));
echo $data;

//Manipular strings 

$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium pellentesque erat quis molestie. 
Vivamus vitae sodales metus, elementum congue felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
Cras sollicitudin eleifend molestie. Sed volutpat gravida tortor auctor convallis. 
Aenean tincidunt, elit ut mattis congue, tortor justo tincidunt elit, ut tempus odio nisi vitae tortor. 
Praesent posuere nisl at nunc hendrerit posuere. In pretium eu nulla sed scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Donec quam ex, sodales id odio eu, efficitur volutpat orci.';

//retornar recorte de uma string 
echo substr($conteudo,0,20);

$x = 'Mariana Sampaio';

//recortar com base no espaço
$xs = explode('', $x);
print_r($xs);

//juntar um array com um delimitador
$xs = implode('',$xs);
print_r($xs);

$exemplo = '<h1> Mariana </h1> outra coisa';

//Retira o html e mantém o texto
echo strip_tags($exemplo);

//mostrar o html da função
echo htmlentities('<div> </div>');

?>


