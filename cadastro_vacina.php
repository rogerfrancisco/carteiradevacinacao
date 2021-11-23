<?php 

require_once('components/templates/header.php'); ?>
    <link rel="stylesheet" href="assets/css/css_cadastro_vacinas.css">
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

            <form id="form_validate">
                                
                <div class=" form-group row">
                    <div class="col-md-12">
                        <label for="lote" class="form-label">Lote:</label>
                        <input type="text"  name="lote" id="lote"  placeholder="Digite o lote" class="form-control" required minlength="8" onkeypress="$(this).mask('0000000-0');">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="descricao" class="form-label">Descrição:</label>
                        <input type="text" name="descricao" id="descricao" placeholder="Digite o nome da vacina" required class="form-control"> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="validade" class="form-label">Validade:</label>
                        <input type="text" name="validade" id="validade" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="fabricante" class="form-label">Fabricante:</label>
                        <input type="text" name="fabricante" id="fabricante" placeholder="Digite o fabricante" class="form-control" required >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="dose" class="form-label">Dose:</label>
                        <input type="number" max="5" name="dose" id="dose" placeholder="Digite a dose" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" name="quantidade" id="quantidade" placeholder="Digite a quantidade" class="form-control" required>
                    </div>
                </div>
                    
                    <br>
                    
                    <div class="row">
                        <div class="col-md-1">
                            <button type="submit" id="btn_salvar" class="btn btn-success">Salvar</button>
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