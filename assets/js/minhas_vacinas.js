$carrega_datatable = function(){
    $("#tab_minhas_vacinas").DataTable({
        "pageLength": 10,
        ordering: true,
        searching: true,
        responsive: true,
        "processing": true,
        lengthChange: true,
        ajax: {
            type: "POST",
            dataType: "JSON",
            url: 'components/core/controllers/pessoa_nn_vacina/controller_pessoa_nn_vacina.php',
            data: {
                'acao': 'carrega_datatable'
            }
        },
        columns: [{
                "data": 'descrica'
            },
            {
                "data": 'dose_1'
            },
            {
                "data": 'dose_2'
            },
            {
                "data": 'dose_3'
            },
            {
                "data": 'dose_4'
            },
            {
                "data": 'dose_5'
            }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        },
        
    })
}
$carrega_datatable();