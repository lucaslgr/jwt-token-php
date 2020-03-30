<?php
    //Example os using the class JWT

    require 'jwt.php';

    $jwt = new JWT();

    $token = $jwt->create(
                array(
                    'id_user' => 123
                ),
                '21jdj0-10i343901ujdsakpdask9131j2ommasda' //Qualquer coisa
            );

    echo "TOKEN: ".$token;
    //Para conferir a validação do TOKEN podemos utilizar o site: https://www.jsonwebtoken.io/
?>