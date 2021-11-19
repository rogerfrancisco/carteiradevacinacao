<?php

include_once('../../dao/pessoa/dao_pessoa.php');

$dao_pessoa = new dao_pessoa();
$objeto = !empty($_POST['objeto']) ? $_POST['objeto'] : null;
$objeto = json_decode(json_encode($objeto));
if($objeto){
    if($objeto->cpf && $objeto->nome){
        $pessoa = new pessoa($objeto);
        if(!$dao_pessoa->seleciona_objeto($pessoa->get_cpf())){
            $retorno = $dao_pessoa->inserir($pessoa);
        }else{
            $retorno = $dao_pessoa->editar($pessoa);
        }
    }
}
$retorno = false;

echo json_encode($retorno);
