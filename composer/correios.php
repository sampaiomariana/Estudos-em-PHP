<?php

//Localizador
use FlyingLuscas\Correios\Client;

   require 'vendor/autoload.php';
   
   $correios = new Client;
   
   print_r($correios->zipcode()
       ->find('71939-360'));


?>