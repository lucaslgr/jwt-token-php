<?php
    class JWT
    {
        /**
         * Criando um JWT com criptografia HS256 
        */
        public function create(array $data, string $secret_key)
        {
            $header = json_encode(array(
                "type" => "JWT",
                "alg" => "HS256"
            ));

            $payload = json_encode($data);

            //HASH do header
            $base_header = $this->base64url_encode($header);
            $base_payload = $this->base64url_encode($payload);

            //Tipo da criptografia alg->HS256->sha256
            /**
             * O ultimo parametro como true é para ele manter letras maiúsculas e minusculas
            */
            $signature = hash_hmac("sha256",$base_header.'.'.$base_payload, $secret_key, true);
            $base_signature = $this->base64url_encode($signature);

            //Montando o JWT
            $jwt = $base_header.'.'.$base_payload.'.'.$base_signature;

            return $jwt;
        }


        //https://www.php.net/manual/pt_BR/function.base64-encode.php
        //Funções para base64URL que não tem +, nem / e nem =
        private function base64url_encode($data)
        {
            return rtrim(strtr(base64_encode($data),'+/','-_'),'=');
        }
        private function base64url_decode($data)
        {
            return base64_decode(strtr($data,'-_','+/').str_repeat('=',3-(3+strlen($data))%4));
        }
    }

?>