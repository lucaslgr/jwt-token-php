<?php
    //Example os using the class JWT

    require 'jwt.php';

    $jwt = new JWT('21jdj0-10i343901ujdsakpdask9131j2ommasda');

    $token = $jwt->create(
                array(
                    'name' => 'Lucas Guimarães',
                    'id_user' => 123
                )
            );

    echo "TOKEN: ".$token;
    //Para conferir a validação do TOKEN podemos utilizar o site: https://www.jsonwebtoken.io/
?>

<hr>
<br><br>
<h1>Send Token to Validate Test</h1>
<form action="validate-test.php" method="GET">
    <input style="width:800px;" type="text" name="jwt" value="<?php echo $token;?>"><br>
    <input type="submit" value="Validar">
</form>
<br><br>
<hr>