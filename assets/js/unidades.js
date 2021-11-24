$.carrega_datatable = function(){
    $("#tab_unidades").DataTable({
        "pageLength": 10,
        ordering: true,
        searching: true,
        responsive: true,
        "processing": true,
        lengthChange: true,
        ajax: {
            type: "POST",
            dataType: "JSON",
            url: 'components/core/controllers/unidade/controller_unidade.php',
            data: {
                'acao': 'carrega_datatable'
            }
        },
        columns: [{
                "data": 'cnes'
            },
            {
                "data": 'descricao'
            },
            {
                "data": 'endereco'
            },
            {
                "data": 'editar'
            }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        }        
    })
}
$.carrega_datatable();

$('#btn_cadastro_unidade').click(function(e){
    e.preventDefault();
    $(location).prop('href', 'cadastro_unidade.php');
})        
