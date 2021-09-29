<?php

include_once('../../dao/pessoa/dao_pessoa.php');

$dao_pessoa = new dao_pessoa();
$cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : null;

$retorno = false;
if($cpf){
    $pessoa = $dao_pessoa->seleciona_objeto($cpf);
    if($pessoa){
        $retorno = array(
            'cpf' => trim($pessoa->get_cpf()),
            'nome' => trim($pessoa->get_nome()),
            'nome_mae' => trim($pessoa->get_nome_mae()),
            'cartao_sus' => trim($pessoa->get_cartao_sus()),
            'endereco' => trim($pessoa->get_endereco()),
            'telefone_1' => trim($pessoa->get_telefone_1()),
            'telefone_2' => trim($pessoa->get_telefone_2())
        );
    }
}

echo json_encode($retorno);