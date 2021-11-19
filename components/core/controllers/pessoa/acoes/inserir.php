<?php

include_once('../../dao/pessoa/dao_pessoa.php');

$dao_pessoa = new dao_pessoa();
$objeto = !empty($_POST['objeto']) ? $_POST['objeto'] : null;
if($objeto){
    $pessoa = new pessoa(json_decode($objeto));
    if(!$dao_pessoa->seleciona_objeto($pessoa->get_cpf())){
        $retorno = $dao_pessoa->inserir($pessoa);
    }else{
        $retorno = $dao_pessoa->editar($pessoa);
    }
}
$retorno = false;

echo json_encode($retorno);
