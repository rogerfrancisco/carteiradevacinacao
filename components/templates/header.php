<?php include __DIR__ . '/../core/sessao/validar_sessao.php';
require_once('components/core/apoio/valida_permissao.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/css_base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>


    <!-- DATATABLE -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.jqueryui.min.js">
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <div class="container-fluid">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pessoas.php">Pessoas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pacientes.php">Paciente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vacinas.php">Vacinas</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Profissional</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="unidades.php">Unidade</a>
                                </li>
                            </ul>
                            <button class="btn btn-danger" onClick="window.location.href = 'components/core/sessao/deslogar.php'">deslogar</button>
                        
                        </div>
                    </nav>  
                </div>                     
            </div>
        </div>
    </header>

        
    