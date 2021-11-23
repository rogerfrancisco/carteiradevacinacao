$.carrega_datatable = function(){
    $("#tab_vacinas").DataTable({
        "pageLength": 10,
        ordering: true,
        searching: true,
        responsive: true,
        "processing": true,
        lengthChange: true,
        ajax: {
            type: "POST",
            dataType: "JSON",
            url: 'components/core/controllers/vacina/controller_vacina.php',
            data: {
                'acao': 'carrega_datatable'
            }
        },
        columns: [{
                "data": 'lote'
            },
            {
                "data": 'descricao'
            },
            {
                "data": 'validade'
            },
            {
                "data": 'fabricante'
            },
            {
                "data": 'dose'
            },
            {
                "data": 'quantidade'
            }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        }        
    })
}
$.carrega_datatable();

    $('#btn_cadastro_vacina').click(function(e){
        e.preventDefault();
        $(location).prop('href', 'cadastro_vacina.php');
    })  
