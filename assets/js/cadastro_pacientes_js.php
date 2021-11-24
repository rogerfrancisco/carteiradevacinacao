<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';

    $(document).ready(function() {
        if(get){
            $.post('components/core/controllers/unidade/controller_unidade.php',{
                'acao': 'selecionar_objeto',
                'cpf': get
            })
            .done((dados)=>{
                console.log(JSON.parse(dados));
                carrega_objeto(JSON.parse(dados));
            })
        }     
        
        $('#btn_salvar').click(function(e){
            e.preventDefault();
            $.post('components/core/controllers/unidade/controller_unidade.php', {
                'acao': 'inserir',
                'objeto': JSON.stringify({
                    'cnes': $("#cnes").val(),
                    'descricao': $("#descricao").val(),
                    'endereco': $("#endereco").val()
                })
            })
            .done(()=>{
                window.location.href = "unidades.php";
            })
        })

        $('#btn_unidades').click(function(e){
            e.preventDefault();
            $(location).prop('href', 'unidades.php');
        })

        carrega_objeto = function(unidade){
            $("#cnes").val(unidade.cnes);
            $("#descricao").val(unidade.nome);
            $("#endereco").val(unidade.endereco);
        }

        $.carrega_selected_vacina = (vacina)=>{
            $("#vacina").empty();

            $.post('components/core/controllers/vacina/controller_vacina.php', {
                'acao': 'selecionar_todos'
            }).done((retorno)=>{
                $.each(JSON.parse(retorno), function(key, value){
                    $("#vacina").append($('<option>', {
                        text: value.descricao,
                        value: value.id
                    }))

                    if(value.id == vacina){
                        $("vacina option[value='" + vacina + "']").prop({
                            selected: "selected"
                        })
                    }
                })
            })
        }
        $.carrega_selected_vacina('');

    });
</script>   

