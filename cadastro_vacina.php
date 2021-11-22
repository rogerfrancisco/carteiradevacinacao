<?php 

require_once('components/templates/header.php'); ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10" >
                    <h2>Cadastro de Vacina</h2>
                </div>
                <div class="col-md-2">
                    <button id="btn_vacinas" class="btn btn-primary">Voltar</button>
                </div>
            </div>

            <form class="form-controll">
                <div class="row">
                    <div class="col-md-12">
                        <label for="lote" class="form-label">Lote:</label>
                        <input type="text" class="form-control" id="lote" placeholder="Digite o lote" name="lote" onkeypress="$(this).mask('0000000-0');">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Digite o nome da vacina" name="descricao">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="validade" class="form-label">Validade:</label>
                        <input type="text" class="form-control" id="validade" placeholder="Digite a validade da vacina" name="validade" onkeypress="$(this).mask('0000-00-00');">
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
                    <div class="col-md-1">
                        <button id="btn_salvar" class="btn btn-success">Salvar</button>
                    </div>
                    
                </div>   
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

<?php
    require_once('assets/js/cadastro_vacinas_js.php');
    require_once('components/templates/footer.php'); 
?>