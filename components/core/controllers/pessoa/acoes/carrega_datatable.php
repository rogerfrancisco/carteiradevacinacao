<?php

include_once('../../dao/pessoa/dao_pessoa.php');
$dao_pessoa = new dao_pessoa();

$pessoas = $dao_pessoa->seleciona_todos();

$retorno['data'] = array();
if($pessoas){
    foreach($pessoas as $pessoa){
        array_push($retorno['data'], array(
            'cpf' => $pessoa->get_cpf(),
            'nome' => $pessoa->get_nome(),
            'nome_mae' => $pessoa->get_nome_mae(),
            'cartao_sus' => $pessoa->get_cartao_sus(),
            'endereco' => $pessoa->get_endereco(),
            'telefone_1' => $pessoa->get_telefone_1(),
            'telefone_2' => $pessoa->get_telefone_2(),
            'editar' => '<a href="cadastro_usuario.php?id=' . $pessoa->get_cpf() . '">Editar</a>'
        ));
    }
}

echo json_encode($retorno);