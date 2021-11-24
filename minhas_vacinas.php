<?php 

require_once('components/templates/header.php'); ?>
   
   <div class="panel panel-default">
        <div class="panel-heading row">

            <div class="col-md-10">
                <h3>LISTA DE PESSOAS</h3>
            </div>

            <div class="col-md-2">
                <button type="button" id="btn_cadastro_usuario" class="btn btn-primary">Adicionar</button>
            </div>
            
        </div>


        <div class="panel-body">
            <table id="tab_minhas_vacinas">
                <thead>
                    <tr>
                        <th>descricao</th>
                        <th>dose 1</th>
                        <th>dose 2</th>
                        <th>dose 3</th>
                        <th>dose 4</th>
                        <th>dose 5</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/minhas_vacinas.js"></script>

<?php require_once('components/templates/footer.php'); ?>