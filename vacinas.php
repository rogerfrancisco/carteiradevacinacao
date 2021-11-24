<?php 

require_once('components/templates/header.php'); ?>
<div class="panel panel-default">
        <div class="panel-heading row">

            <div class="col-md-10">
                <h3>LISTA DE VACINAS</h3>
            </div>

            <div class="col-md-2">
                <button type="button" id="btn_cadastro_vacina" class="btn btn-primary">Adicionar</button>
            </div>
            
        </div>


        <div class="panel-body">
            <table id="tab_vacinas">
                <thead>
                    <tr>
                        <th>Lote</th>
                        <th>Descrição</th>
                        <th>Validade</th>
                        <th>Fabricante</th>
                        <th>Dose</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/vacinas.js"></script>

<?php require_once('components/templates/footer.php'); ?>