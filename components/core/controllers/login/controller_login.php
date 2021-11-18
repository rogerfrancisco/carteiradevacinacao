<?php
    require_once("../../apoio/apoio.php");
    require_once('../../dao/usuario/dao_usuario.php');

    $objeto = apoio::verifica_post('objeto');
    apoio::conecta_token('bXlzcWx8fHVzLWNkYnItZWFzdC0wNC5jbGVhcmRiLmNvbXx8IHx8YmRlYjZjMzA0NDAwZTJ8fGFkZWIwZTQyfHxoZXJva3VfNzM4MDQ0NDM2Zjg3OGFk');

    $dao_usuario = new dao_usuario();

    $dados = $dao_usuario->verica_login($objeto['user'], $objeto['senha']);
    if($dados){
        $_SESSION['id_usuario'] = $dados->get_id();
        $_SESSION['permissao'] = $dados->get_permissao();
        echo true;
    }else{
        echo false;
    }