<!DOCTYPE html>
<html>
    <title>Questionário </title>
</head>
<body>

<?php
    if(isset($_POST['acao'])){
        $resposta = array('25','ensino superior','mulher');
        $pontuacao = 0;
        $index = 0;
        foreach($_POST as $key => $value){
            if($key != 'acao'){
                if($resposta[$index] == $value){
                    $pontuacao++;

                }
                $index++;

            }
        }
        echo '<h2> O seu resultado final foi: </h2>'.$pontuacao.'/'.($index);
    }
?>

<form method = "post">
    

    <p>Qual a sua idade? </p>
    <span>25</span> <input type="radio" name="pergunta1" value="25">
    <br />
    <span>35</span> <input type="radio" name="pergunta1" value="35">
    <br />
    <span>45</span> <input type="radio" name="pergunta1" value="45">
    <br>
    <span>65</span> <input type="radio" name="pergunta1" value="65">
    <hr>


    <p>Nível de escolaridade</p>
    <span>Ensino Médio </span> <input type="radio" name="pergunta2" value="ensino médio">
    <br />
    <span>Ensino Superior </span> <input type="radio" name="pergunta2" value="ensino superior">
    <br />
    <span>Mestrado </span> <input type="radio" name="pergunta2" value="mestrado">
    <br />
    <span>Doutorado </span> <input type="radio" name="pergunta2" value="doutorado">
    <hr>

    <p> Qual seu sexo? </p>
    <span> Homem </span> <input type="radio" name="pergunta3" value="homem">
    <br />
    <span> Mulher </span> <input type="radio" name="pergunta3" value="mulher">
    <hr>

    <input type="submit" name="acao" value="Enviar!">
    

</form>
</body>
</html>