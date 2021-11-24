<?php 

require_once('components/templates/header.php'); ?>

<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10">
                    <h2>Cadastro de Pontos de Vacinação</h2>
                </div>
                <div class="col-md-2">
                    <button id="btn_unidades" class="btn btn-primary">Voltar</button>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12" id="div_cnes">
                        <label for="cnes" class="form-label">CNES:</label>
                        <input type="text" class="form-control" id="cnes" placeholder="Digite o CNES" name="cnes" onkeypress="$(this).mask('0-0000');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="div_descricao">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição" name="descricao">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="div_endereco">
                        <label for="endereco" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Digite o Endereço" name="endereco">
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
    require_once('assets/js/cadastro_unidades_js.php');
    require_once('components/templates/footer.php'); 
?>