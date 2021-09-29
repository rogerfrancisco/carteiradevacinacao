<?php

include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$dao_profissional_saude = new dao_profissional_saude();
$id = !empty($_POST['id']) ? $_POST['id'] : null;

$retorno = false;
if($id){
    $profissional_saude = $dao_profissional_saude->seleciona_objeto($id);
    if($profissional_saude){
        $retorno = array(
            'id' => trim($profissional_saude->get_id()),
            'formacao' => trim($profissional_saude->get_formacao()),
            'fk_pessoa' => trim($profissional_saude->get_fk_pessoa()),
            'fk_unidade' => trim($profissional_saude->get_fk_unidade())
        );
    }
}

echo json_encode($retorno);