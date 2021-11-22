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
            <table id="tab_pessoas">
                <thead>
                    <tr>
                        <th>Vacina 1</th>
                        <th>Vacina 2</th>
                        <th>Vacina 3</th>
                        <th>Vacina 4</th>
                        <th>Vacina 5</th>
                        <th>Vacina 6</th>
                        <th>Vacina 7</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/pessoas.js"></script>

<?php require_once('components/templates/footer.php'); ?>