<?php

include_once('../../dao/unidade/dao_unidade.php');

$dao_unidade = new dao_unidade();

$unidades = $dao_unidade->seleciona_todos();

$retorno = array();
if($unidades){
    foreach($unidades as $unidade){
        array_push($retorno, array(
            'cnes' => trim($unidade->get_cnes()),
            'descricao' => trim($unidade->get_descricao()),
            'endereco' => trim($unidade->get_endereco())
        ));
    }
}

echo json_encode($retorno);