<?php

include_once('../../dao/pessoa/dao_pessoa.php');
include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$dao_pessoa = new dao_pessoa();
$dao_profissional_saude = new dao_profissional_saude();
$objeto = !empty($_POST['objeto']) ? json_decode($_POST['objeto']) : null;
if($objeto){
    $pessoa = new pessoa($objeto);
    if(!$dao_pessoa->seleciona_objeto($pessoa->get_cpf())){
        $retorno = $dao_pessoa->inserir($pessoa);
    }else{
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
    }
}
$retorno = false;

echo json_encode($retorno);
