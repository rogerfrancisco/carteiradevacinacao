<?php
    require_once("../../apoio/apoio.php");
    $token = !empty($_POST['token']) ? $_POST['token'] : 'bXlzcWx8fHVzLWNkYnItZWFzdC0wNC5jbGVhcmRiLmNvbXx8IHx8YmRlYjZjMzA0NDAwZTJ8fGFkZWIwZTQyfHxoZXJva3VfNzM4MDQ0NDM2Zjg3OGFk';
    $acao = !empty($_POST['acao']) ? $_POST['acao'] : null;

    if($token){
        apoio::conecta_token($token);
        switch($acao){
            case "inserir":
                require_once("acoes/inserir.php");
                break;
    
            case "carrega_datatable":
                require_once("acoes/carrega_datatable.php");
                break;

        }
    }else{
        echo("token inexistente!");
    }