<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';

    $(document).ready(function() {
        if(get){
            $.post('components/core/controllers/vacina/controller_vacina.php',{
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
            $.post('components/core/controllers/vacina/controller_vacina.php', {
                'acao': 'inserir',
                'objeto': JSON.stringify({
                    'lote': $("#lote").val(),
                    'descricao': $("#descricao").val(),
                    'validade': $("#validade").val(),
                    'fabricante': $("#fabricante").val(),
                    'dose': $("#dose").val(),
                    'quantidade': $("#quantidade").val()
                })
            })
            .done(()=>{
                window.location.href = "vacinas.php";
            })
        })

        $('#btn_vacinas').click(function(e){
            e.preventDefault();
            $(location).prop('href', 'vacinas.php');
        })

        carrega_objeto = function(vacina){
            $("#lote").val(vacina.lote);
            $("#descricao").val(vacina.descricao);
            $("#validade").val(vacina.validade);
            $("#fabricante").val(vacina.fabricante);
            $("#dose").val(vacina.dose);
            $("#quantidade").val(vacina.quantidade);
        }
    });
</script>

