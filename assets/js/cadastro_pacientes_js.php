<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';
    var campos = ['cpf', 'vacina', 'dose'];
    var valida = false;

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
            if(valida_formulario(campos) && valida){
                $.post('components/core/controllers/pessoa_nn_vacina/controller_pessoa_nn_vacina.php', {
                    'acao': 'inserir',
                    'objeto': JSON.stringify({
                        'cpf': $("#cpf").val(),
                        'vacina': $("#vacina").val(),
                        'dose': $("#dose").val(),
                        'unidade': $("#unidade").val()
                    })
                })
                .done(()=>{
                    $("#cpf").val('');
                    $("#dose").val('');
                })
            }
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

        $.carrega_selected_unidade = (unidade)=>{
            $("#unidade").empty();

            $.post('components/core/controllers/unidade/controller_unidade.php', {
                'acao': 'selecionar_todos'
            }).done((retorno)=>{
                $.each(JSON.parse(retorno), function(key, value){
                    $("#unidade").append($('<option>', {
                        text: value.descricao,
                        value: value.id
                    }))

                    if(value.id == unidade){
                        $("unidade option[value='" + unidade + "']").prop({
                            selected: "selected"
                        })
                    }
                })
            })
        }
        $.carrega_selected_unidade('');

        
        $("#cpf").focusout(()=>{
            $.post('components/core/controllers/pessoa/controller_pessoa.php',{
                'acao': 'valida_cpf',
                'cpf': $("#cpf").val()
            }).done((resposta)=>{
                $(".invalido").remove();
                valida = JSON.parse(resposta);
                if(!valida){
                    $("#div_cpf").append('<span class="invalido">Este cpf não existe</span>')
                }
            })
        })

    });
</script>   

