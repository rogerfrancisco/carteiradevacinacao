<?php

include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$objeto = $_POST['objeto'] ? json_decode($_POST['objeto']) : null;
$dao_profissional_saude = new dao_profissional_saude();
if($objeto){

    $retorno = false;
    $profissional_saude = new profissional_saude($objeto);
    if($profissional_saude->get_id() == null){
        $retorno = $dao_profissional_saude->inserir($profissional_saude);
    }else{
        $retorno = $dao_profissional_saude->editar($profissional_saude);
    }

    echo json_encode($retorno);
}