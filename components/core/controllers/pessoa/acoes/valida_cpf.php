<?php

require_once('../../dao/pessoa/dao_pessoa.php');

$dao_pessoa = new dao_pessoa();

$cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : null;

$retorno = false;
if($cpf){
    $retorno = $dao_pessoa->valida_cpf($cpf);
}

echo json_encode($retorno);