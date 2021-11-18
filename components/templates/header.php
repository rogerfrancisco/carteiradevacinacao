<?php require_once('C:/wamp64_2/www/carteiradevacinacao/components/core/sessao/validar_sessao.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/css_base.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="javascript:void(0)">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="mynavbar">
                                <ul class="navbar-nav me-auto">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Meu Perfil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Paciente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Vacina</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Profissional</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)">Unidade</a>
                                    </li>
                                </ul>
                                <button onClick="window.location.href = 'components/core/sessao/deslogar.php'">deslogar</button>
                            </div>
                        </div>
                    </nav>                   
                </div>
            </div>
        </header>

        
    