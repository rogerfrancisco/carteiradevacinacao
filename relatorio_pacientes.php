<?php 

require_once('components/templates/header.php'); ?>
<div class="panel panel-default">
        <div class="panel-heading row">

            <div class="col-md-10">
                <h3>Pacientes Vacinados</h3>
            </div>

            <div class="col-md-2">
                <button type="button" id="btn_pacientes" class="btn btn-primary">Adicionar</button>
            </div>
            
        </div>


        <div class="panel-body">
            <table id="tab_pacientes">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Vacina</th>
                        <th>Dose</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/unidades.js"></script>

<?php require_once('components/templates/footer.php'); ?>