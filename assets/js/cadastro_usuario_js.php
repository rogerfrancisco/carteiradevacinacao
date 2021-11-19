<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';

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
            $.post('components/core/controllers/pessoa/controller_pessoa.php', {
                'acao': 'inserir',
                'objeto': JSON.stringify({
                    'cpf': $("#cpf").val(),
                    'nome': $("#nome").val(),
                    'nome_mae': $("#nome_mae").val(),
                    'cartao_sus': $("#cartao_sus").val(),
                    'endereco': $("#endereco").val(),
                    'telefone_1': $("#telefone_1").val(),
                    'telefone_2': $("#telefone_2").val()
                })
            })
            .done(()=>{
                window.location.href = "pessoas.php";
            })
        })

        carrega_objeto = function(pessoa){
            $("#nome").val(pessoa.nome);
            $("#nome_mae").val(pessoa.nome_mae);
            $("#cpf").val(pessoa.cpf);
            $("#cartao_sus").val(pessoa.cartao_sus);
            $("#endereco").val(pessoa.endereco);
            $("#telefone_1").val(pessoa.telefone_1);
            $("#telefone_2").val(pessoa.telefone_2);
        }
    });
</script>