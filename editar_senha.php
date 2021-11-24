<?php 

require_once('components/templates/header.php'); ?>

<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10">
                    <h2>Editar Minha Senha</h2>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12" id="">
                        <label for="senha" class="form-label">Senha atual</label>
                        <input type="password" class="form-control" id="" placeholder="Digite a senha atual" name="senha">
                    </div>

                    <div class="col-md-12" id="">
                        <label for="senha" class="form-label">Digite a nova senha:</label>
                        <input type="password" class="form-control" id="" placeholder="Digite a nova senha" name="senha">
                    </div>

                    <div class="col-md-12" id="">
                        <label for="senha" class="form-label">Confirme a nova senha:</label>
                        <input type="password" class="form-control" id="" placeholder="Digite a nova senha" name="senha">
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