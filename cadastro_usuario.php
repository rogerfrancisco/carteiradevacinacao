<?php 

require_once('components/templates/header.php'); ?>
   <link rel="stylesheet" href="assets/css/css_cadastro_pessoa.css">
   <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">    
                <div class="col-md-10">
                    <h2>Cadastro de Pessoa</h2>
                </div>
                
                <div class="col-md-2">
                    <button id="btn_pessoas" class="btn btn-primary">Voltar</button>
                </div>
            </div>

            <form id="form_Cadastro_Usuario">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="nome_mae" class="form-label">Nome da mãe:</label>
                        <input type="text" class="form-control" id="nome_mae" placeholder="Digite o nome da sua mãe" name="nome_mae">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite o seu CPF" name="cpf" onkeypress="$(this).mask('000.000.000-00');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="cartao_sus" class="form-label">Cartão SUS:</label>
                        <input type="text" class="form-control" id="cartao_sus" placeholder="Digite o número do cartão SUS" name="cartao_sus">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Digite o seu endereço" name="endereco">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="telefone_1" class="form-label">Telefone fixo:</label>
                        <input type="text" class="form-control" id="telefone_1" placeholder="Digite o seu telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-0000');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="telefone_2" class="form-label">Telefone Celular:</label>
                        <input type="text" class="form-control" id="telefone_2" placeholder="Digite o seu telefone" name="telefone" onkeypress="$(this).mask('(00) 00000-0000');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-check-label">
                            <input id="check_profissional" class="form-check-input" type="checkbox" name="profissional"> Profissional da Saúde
                        </label>
                    </div>
                </div>
                <div id="div_profissional">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="formacao" class="form-label">Formação:</label>
                            <input type="text" class="form-control profissional" disabled id="formacao" placeholder="Digite a sua formação" name="formacao">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="unidade">Unidade</label>
                            <select id="unidade" disabled class="form-control profissional">
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-1">
                        <button id="btn_salvar" class="btn btn-success">Salvar</button>
                    </div>
                </div>    
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>


<?php 
    require_once('assets/js/cadastro_usuario_js.php');
    require_once('components/templates/footer.php');
?>