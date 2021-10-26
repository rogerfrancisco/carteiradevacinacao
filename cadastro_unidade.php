<?php 

require_once('components/templates/header.php'); ?>

<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Cadastro de Vacina</h2>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label for="cnes" class="form-label">CNES:</label>
                        <input type="text" class="form-control" id="cnes" placeholder="Digite o CNES" name="cnes">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite o Nome" name="nome">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Digite o Endereço" name="endereco">
                    </div>
                </div>
                 
                <br>

                <div class="row">
                    <div class="col-md-8">
                        <button type="new" class="btn btn-primary">Novo</button>
                        <button type="search" class="btn btn-primary">Buscar</button>
                        <button type="edit" class="btn btn-primary">Editar</button>
                        <button type="delete" class="btn btn-danger">Excluir</button>
                        <button type="save" class="btn btn-primary">Salvar</button>
                    </div>
                </div>    
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>


<?php require_once('components/templates/footer.php'); ?>