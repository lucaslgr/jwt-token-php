<?php
    require 'jwt.php';

    $jwt = new JWT('21jdj0-10i343901ujdsakpdask9131j2ommasda');

    //Verifica se o Token foi enviado
    if(!empty($_GET['jwt'])){
        $token = $_GET['jwt'];
        echo 'Token enviado';
        echo '<br>';

        $info = $jwt->validate($token);

        echo 'Informações do PayLoad: <br>';
        echo '<pre>';
        print_r($info);

        if ($info)
            echo 'Token válido!';
        else
            echo 'Token inválido!';
    }
    else
        echo 'Token não enviado';

    

?>