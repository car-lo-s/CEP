<?php
if(isset($_POST['cep']) && !empty($_POST['cep'])){
    if(is_numeric($_POST['cep'])){
        $cep = $_POST['cep'];
        $url = "https://viacep.com.br/ws/$cep/json/";
        @@$endereco = json_decode(file_get_contents($url));
    }
}



