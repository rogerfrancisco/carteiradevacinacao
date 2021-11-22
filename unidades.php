<?php 

require_once('components/templates/header.php'); ?>
<div class="panel panel-default">
        <div class="panel-heading row">

            <div class="col-md-10">
                <h3>LISTA DE UNIDADES DE VACINAÇÃO</h3>
            </div>

            <div class="col-md-2">
                <button type="button" id="btn_cadastro_unidade" class="btn btn-primary">Adicionar</button>
            </div>
            
        </div>


        <div class="panel-body">
            <table id="tab_unidades">
                <thead>
                    <tr>
                        <th>CNES</th>
                        <th>NOME</th>
                        <th>ENDEREÇO</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/unidades.js"></script>

<?php require_once('components/templates/footer.php'); ?>