<?php

    /*cookie -> nós decidimor por quanto tempo pode ficar válido o cookie.
    */

    session_start();
    setcookie('nome', 'Mariana', time() + (60*60*24), '/');

    echo $_COOKIE['nome'];

    //Para destruir , colocar um tempo negativo.

?>