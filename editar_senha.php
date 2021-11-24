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
                    <div class="col-md-12" id="div_senha_antiga">
                        <label for="senha" class="form-label">Senha atual</label>
                        <input type="password" class="form-control" id="senha_antiga" placeholder="Digite a senha atual">
                    </div>

                    <div class="col-md-12" id="div_senha_nova">
                        <label for="senha" class="form-label">Digite a nova senha:</label>
                        <input type="password" class="form-control" id="senha_nova" placeholder="Digite a nova senha">
                    </div>

                    <div class="col-md-12" id="div_confirmar_senha">
                        <label for="senha" class="form-label">Confirme a nova senha:</label>
                        <input type="password" class="form-control" id="confirmar_senha" placeholder="Digite a nova senha">
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

    <script src="assets/js/editar_senha.js"></script>
<?php 
    require_once('components/templates/footer.php'); 
?>