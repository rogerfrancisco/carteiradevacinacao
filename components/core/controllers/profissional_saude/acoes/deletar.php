<?php

include_once('../../dao/profissional_saude/dao_profissional_saude.php');

$dao_profissional_saude = new dao_profissional_saude();
$id = !empty($_POST['id']) ? $_POST['id'] : null;

echo json_encode($id ? $dao_profissional_saude->deletar($id) : false);