<?php

include_once('../../dao/pessoa/dao_pessoa.php');
include_once('../../dao/profissional_saude/dao_profissional_saude.php');
include_once('../../dao/usuario/dao_usuario.php');

$dao_pessoa = new dao_pessoa();
$dao_profissional_saude = new dao_profissional_saude();
$dao_usuario = new dao_usuario();

$objeto = !empty($_POST['objeto']) ? json_decode($_POST['objeto']) : null;
if($objeto){
    $pessoa = $dao_pessoa->seleciona_objeto($objeto->cpf);
    if(!$pessoa){
        $pessoa = new pessoa($objeto);
        $retorno = $dao_pessoa->inserir($pessoa);
        $usuario = new usuario();
        $usuario->set_user($pessoa->get_cpf());
        $usuario->set_senha($pessoa->get_cartao_sus());
        $usuario->set_permissao($objeto->profissional == "S" ? 1 : 0);
        $dao_usuario->inserir($usuario);
    }else{
        $usuario = $dao_usuario->seleciona_objeto_por_user($pessoa->get_cpf());
        if($objeto->profissional == "S" && $usuario->get_permissao() == 0 || $objeto->profissional == "N" && $usuario->get_permissao() == 1){
            $usuario->set_permissao($objeto->profissional == "S" ? 1 : 0);
            $dao_usuario->editar($usuario);
        }
        $retorno = $dao_pessoa->editar($pessoa);
    }
    
    if($objeto->profissional == "S"){
        $profissional = $dao_profissional_saude->seleciona_objeto_por_pessoa($pessoa->get_cpf());
        if(!$profissional){
            $profissional = new profissional_saude();
            $profissional->set_formacao($objeto->formacao);
            $profissional->set_fk_unidade($objeto->unidade);
            $profissional->set_fk_pessoa($pessoa->get_cpf());
            $dao_profissional_saude->inserir($profissional);
        }else{
            $profissional->set_formacao($objeto->formacao);
            $profissional->set_fk_unidade($objeto->unidade);
            $dao_profissional_saude->editar($profissional);
        }
    }else{
        $profissional = $dao_profissional_saude->seleciona_objeto_por_pessoa($pessoa->get_cpf());
        if($profissional){
            $dao_profissional_saude->deletar($profissional->get_id());
        }
    }
}
$retorno = false;

echo json_encode($retorno);
