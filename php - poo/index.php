<?php

// objetos são as classes 

class Pessoa{
    //Objeto pessoa
    private $nome = 'Mariana';
    private $idade = 24;
    private $peso = '54kg';


    public function crescer (){
        // trabalhando dentro do objeto é necessário chamar o 'this'
        $this->comer();
        echo 'crescer';
    }

    private function comer(){
        echo 'comer';

    }
}

// Instanciar 

$Pessoa = new Pessoa;
// O new pessoa terá os dados da classe pessoa

//acessar o método
//como é privado ele só será acessado dentro da classe
$pessoa->crescer();

?>