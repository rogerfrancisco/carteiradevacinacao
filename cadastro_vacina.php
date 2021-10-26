<?php 

require_once('components/templates/header.php'); ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Cadastro de Vacina</h2>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label for="lote" class="form-label">Lote:</label>
                        <input type="text" class="form-control" id="lote" placeholder="Digite o lote" name="lote">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="nome_vacina" class="form-label">Nome da vacina:</label>
                        <input type="text" class="form-control" id="nome_vacina" placeholder="Digite o nome da vacina" name="nome_vacina">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="validade" class="form-label">Validade:</label>
                        <input type="text" class="form-control" id="validade" placeholder="Digite a validade da vacina" name="validade">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="fabricante" class="form-label">Fabricante:</label>
                        <input type="text" class="form-control" id="fabricante" placeholder="Digite o fabricante" name="fabricante">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="dose" class="form-label">Dose:</label>
                        <input type="text" class="form-control" id="dose" placeholder="Digite a dose" name="dose">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="text" class="form-control" id="quantidade" placeholder="Digite a quantidade" name="quantidade">
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