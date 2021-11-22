$.carrega_datatable = function(){
    $("#tab_pessoas").DataTable({
        "pageLength": 10,
        ordering: true,
        searching: true,
        responsive: true,
        "processing": true,
        lengthChange: true,
        ajax: {
            type: "POST",
            dataType: "JSON",
            url: 'components/core/controllers/pessoa/controller_pessoa.php',
            data: {
                'acao': 'carrega_datatable'
            }
        },
        columns: [{
                "data": 'cpf'
            },
            {
                "data": 'nome'
            },
            {
                "data": 'nome_mae'
            },
            {
                "data": 'cartao_sus'
            },
            {
                "data": 'endereco'
            },
            {
                "data": 'telefone_1'
            },
            {
                "data": 'telefone_2'
            },
            {
                "data": 'editar'
            }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        },
        
    })
}
$.carrega_datatable();

$('#btn_cadastro_usuario').click(function(e){
    e.preventDefault();
    $(location).prop('href', 'cadastro_usuario.php');
})