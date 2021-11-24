<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';
    var campos = ['nome', 'nome_mae', 'cartao_sus', 'endereco', 'cpf', 'telefone_1']

    $(document).ready(function() {
        if(get){
            $.post('components/core/controllers/pessoa/controller_pessoa.php',{
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
            if (validar_formulario(campos)) {
                $.post('components/core/controllers/pessoa/controller_pessoa.php', {
                    'acao': 'inserir',
                    'objeto': JSON.stringify({
                        'cpf': $("#cpf").val(),
                        'nome': $("#nome").val(),
                        'nome_mae': $("#nome_mae").val(),
                        'cartao_sus': $("#cartao_sus").val(),
                        'endereco': $("#endereco").val(),
                        'telefone_1': $("#telefone_1").val(),
                        'telefone_2': $("#telefone_2").val(),
                        'profissional': $("#check_profissional").prop('checked') ? "S": 'N',
                        'formacao': $("#formacao").val(),
                        'unidade': $("#unidade").val()
                    })

                })
                .done(()=>{
                    window.location.href = "pessoas.php";
                })
            }        
        })

        $('#btn_pessoas').click(function(e){
            e.preventDefault();
            $(location).prop('href', 'pessoas.php');
        })

        carrega_objeto = function(pessoa){
            $("#nome").val(pessoa.nome);
            $("#nome_mae").val(pessoa.nome_mae);
            $("#cpf").val(pessoa.cpf);
            $("#cartao_sus").val(pessoa.cartao_sus);
            $("#endereco").val(pessoa.endereco);
            $("#telefone_1").val(pessoa.telefone_1);
            $("#telefone_2").val(pessoa.telefone_2);
            if(pessoa.formacao){
                $("#check_profissional").prop("checked", true);
                $("#formacao").val(pessoa.formacao);
                $.carrega_selected_unidade(pessoa.unidade);
                $.mostra_div_profissional();

            }
        }

        $.mostra_div_profissional=function(){
            $(".profissional").prop('disabled', false);
            $("#div_profissional").css("display", "block");
            $.carrega_selected_unidade();
        }

        $.esconder_div_profissional=function(){
            $(".profissional").prop('disabled', true);
            $("#div_profissional").css("display", "none");
        }

        $("#check_profissional").click(()=>{
            if ($("#check_profissional").prop('checked')) {
                $.mostra_div_profissional();
            }else{
                $.esconder_div_profissional();
            }
        })

        $.carrega_selected_unidade = (unidade)=>{
            $("#unidade").empty();

            $.post('components/core/controllers/unidade/controller_unidade.php', {
                'acao': 'selecionar_todos'
            }).done((retorno)=>{
                $.each(JSON.parse(retorno), function(key, value){
                    $("#unidade").append($('<option>', {
                        text: value.descricao,
                        value: value.cnes
                    }))

                    if(value.cnes == unidade){
                        $("unidade option[value='" + unidade + "']").prop({
                            selected: "selected"
                        })
                    }
                })
            })
        }
        

    });

</script>