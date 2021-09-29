<?php

include_once('../../dao/unidade/dao_unidade.php');

$dao_unidade = new dao_unidade();
$cnes = !empty($_POST['cnes']) ? $_POST['cnes'] : null;

$retorno = false;
if($cnes){
    $unidade = $dao_unidade->seleciona_objeto($cnes);
    if($unidade){
        $retorno = array(
            'cnes' => trim($unidade->get_cnes()),
            'descricao' => trim($unidade->get_descricao()),
            'endereco' => trim($unidade->get_endereco())
        );
    }
}

echo json_encode($retorno);