<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>

    <?php
 /*   if(isset($_GET['acao'])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    
    echo $nome;
    echo '<br />';
    echo $email;
}*/

// Validação usando post , fica oculto o endereço na URL.

    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    echo $nome;
    echo '<br />';
    echo $email;
}
    ?>

    <form method="post">
    <input type="text" name="nome" />
    <input type="text" name = "email" />
    <input type = "text" name = "acao" value="Enviar"/>
    
    </form>



</body>

</html>