<?php 

require_once('components/templates/header.php'); ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Cadastro de Pessoa</h2>
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
                        <input type="text" class="form-control" id="cpf" placeholder="Digite o seu CPF" name="cpf">
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
                        <label for="telefone_1" class="form-label">Telefone 1:</label>
                        <input type="text" class="form-control" id="telefone_1" placeholder="Digite o seu telefone" name="telefone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="telefone_2" class="form-label">Telefone 2:</label>
                        <input type="text" class="form-control" id="telefone_2" placeholder="Digite o seu telefone" name="telefone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Profissional da Saúde
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="formacao" class="form-label">Formação:</label>
                        <input type="text" class="form-control" id="formacao" placeholder="Digite a sua formação" name="formacao">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="unidade" class="form-label">Unidade:</label>
                        <input type="text" class="form-control" id="unidade" placeholder="Digite a sua unidade" name="unidade">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-8">
                        <button type="new" class="btn btn-primary">Novo</button>
                        <button type="search" class="btn btn-primary">Buscar</button>
                        <button type="edit" class="btn btn-primary">Editar</button>
                        <button type="delete" class="btn btn-danger">Excluir</button>
                        <button type="save" id="btn_salvar" class="btn btn-primary">Salvar</button>
                    </div>
                </div>    
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>


<?php require_once('assets/js/cadastro_usuario_js.php');
require_once('components/templates/footer.php'); ?>