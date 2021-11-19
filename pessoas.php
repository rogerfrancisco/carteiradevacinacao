<?php 

require_once('components/templates/header.php'); ?>
<div class="panel panel-default">
        <div class="panel-heading">
            <h3>LISTA DE PESSOAS</h3>
        </div>
        <div class="panel-body">
            <table id="tab_pessoas">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>NOME</th>
                        <th>NOME MÃE</th>
                        <th>CARTÃO SUS</th>
                        <th>ENDEREÇO</th>
                        <th>TELEFONE 1</th>
                        <th>TELEFONE 2</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

<script src="assets/js/pessoas.js"></script>

<?php require_once('components/templates/footer.php'); ?>