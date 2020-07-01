<a href="./LICENSE">![GitHub](https://img.shields.io/badge/license-PROPRIETARY-blue)</a>

# Classe para criação e validação de um JWT token com PHP 

## :rocket: Tecnologias utilizadas
<li>PHP</li>

## :clipboard: Instruções para rodar o projeto

### Pré-requisitos

- Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

<li>![Git](https://git-scm.com)</li>
<li>![Apache](https://www.apachefriends.org/pt_br/index.html)</li>
<li>![MySQL](https://www.apachefriends.org/pt_br/index.html)</li>
<li>Caso não tenha, instle um editor, eu indico o <b>[VSCode](https://code.visualstudio.com/)</li>

### Instalando:

- 1º: Você pode clonar este repositório OU baixar o .zip
  
  ```bash
  # Clonando este repositório
  $ git clone https://github.com/lucaslgr/jwt-token-php
  ```

- 2º: Inicie o Apache e o MySQL via XAMPP ou via terminal e abra no navegador

### Utilizando:

- 1º: Criação:
```php
    //EXEMPLO 
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
```

- 2º: Validação:
```php
    //EXEMPLO 
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
```

## :man_technologist: Autoria

Lucas Guimarães

https://lucaslgr.github.io/