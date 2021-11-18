<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/css_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <title>Login</title>
</head>
<body>
    <h1>e-Vacin</h1>
    <div class="panel panel-default">
        <div class="panel-heading"><h1>Login</h1></div>
        <div class="panel-body">
            <form id="form-login">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="user" id="user" placeholder="Usuário" onkeypress="$(this).mask('000.000.000-00');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="btn_logar" class="btn btn-success">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/login.js"></script>
</body>
</html>