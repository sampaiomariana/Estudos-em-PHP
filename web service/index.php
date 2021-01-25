<form method="post">

    <input type = "text" name= "adress" />
    <input type="submit" name= "acao" value="Enviar" />

</form>


<?php

    if(isset($_POST['acao'])){
        $url = urldecode($_POST['adress']);
        //Google API
        //Requisição do servidor de mapas do google
        $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway+Mountain+View+CA&sensor=false'.$url.'$sensor=false');

        echo '<pre>';
        var_dump($str);
        echo'<pre />';

        $endereco = json_decode($str);

        print_r( $endereco);

        echo $endereco ->results[0]->address_components[1]->short_name;

    }



?>