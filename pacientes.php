<?php 

require_once('components/templates/header.php'); ?>

<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10">
                    <h2>Vacinar Paciente</h2>
                </div>
                <div class="col-md-2">
                    <button id="" class="btn btn-primary">Voltar</button>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF" name="cpf" onkeypress="$(this).mask('000.000.000-00');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="descricao" class="form-label">Vacina:</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Digite a Vacina Aplicada" name="descricao">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="dose" class="form-label">Dose:</label>
                        <input type="number" class="form-control" id="dose" placeholder="Dose Aplicada" name="dose" max="5">
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