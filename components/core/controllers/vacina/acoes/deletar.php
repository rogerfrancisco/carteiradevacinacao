<?php

include_once('../../dao/vacina/dao_vacina.php');

$dao_vacina = new dao_vacina();
$id = !empty($_POST['id']) ? $_POST['id'] : null;

echo json_encode($id ? $dao_vacina->deletar($id) : false);