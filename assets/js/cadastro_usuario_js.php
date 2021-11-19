<script>
    var get = '<?=$_GET['id']?>';
    console.log(get);

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