<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
require_once('components/core/dao/validacao/dao_paginas.php');

$dao_pagina = new dao_pagina();
$pagina = $dao_pagina->verifica_pagina($url[sizeof($url) - 1]);
if($pagina){
    if($_SESSION['permissao'] < $pagina->permissao){
        ?><script>window.location.href = "home.php";</script><?php
    }
}
?>