<?php
require_once('../../dao/usuario/dao_usuario.php');
require_once("../../apoio/apoio.php");

$dao_usuario = new dao_usuario();
apoio::session_start();

$usuario = $dao_usuario->seleciona_objeto_por_user($_SESSION['usuario']);
$senha_antiga = !empty($_POST['senha_antiga']) ? $_POST['senha_antiga'] : null;
$senha_nova = !empty($_POST['senha_nova']) ? $_POST['senha_nova'] : null;

$retorno = false;
if($usuario){
    if($senha_antiga == $usuario->get_senha() && $senha_nova){
        $usuario->set_senha($senha_nova);
        $retorno = $dao_usuario->editar($usuario);
    }
}

echo json_encode($retorno);
