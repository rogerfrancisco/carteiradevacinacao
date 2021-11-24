<script>
    var get = '<?=isset($_GET['id']) ? $_GET['id'] : ''?>';
    var campos = ['lote', 'descricao', 'validade', 'fabricante', 'dose', 'quantidade']

    $(document).ready(function() {
        if(get){
            $.post('components/core/controllers/vacina/controller_vacina.php',{
                'acao': 'selecionar_objeto',
                'id': get
            })
            .done((dados)=>{
                console.log(JSON.parse(dados));
                carrega_objeto(JSON.parse(dados));
            })
        } 
        
                
        $('#btn_salvar').click(function(e){
            e.preventDefault();
            if (validar_formulario(campos)) {
                
                $.post('components/core/controllers/vacina/controller_vacina.php', {
                    'acao': 'inserir',
                    'objeto': JSON.stringify({
                        'id': $("#id").val(),
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
            }
        })

        $('#btn_vacinas').click(function(e){
            e.preventDefault();
            $(location).prop('href', 'vacinas.php');
        })

        carrega_objeto = function(vacina){
            $("#id").val(vacina.id);
            $("#lote").val(vacina.lote);
            $("#descricao").val(vacina.descricao);
            var data = vacina.validade.split('-');
            $("#validade").val(data[2] + "/" + data[1] + '/' + data[0]);
            $("#fabricante").val(vacina.fabricante);
            $("#dose").val(vacina.dose);
            $("#quantidade").val(vacina.quantidade);
        }

    });

    $(function() {
        $( "#validade" ).datepicker({
            dateFormat: 'dd/mm/yy',
            closeText:"Fechar",
            prevText:"&#x3C;Anterior",
            nextText:"Próximo&#x3E;",
            currentText:"Hoje",
            monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
            monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
                dayNames:["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"],
                dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
            dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
            weekHeader:"Sm",
            firstDay:1
        });
    });

    


</script>

