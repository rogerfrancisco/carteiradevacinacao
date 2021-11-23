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
        
        $(function(){
            $("#form_validate").validate();
        });
                
        $('#btn_salvar').click(function(e){
            
            if ( $("#form_validate").validate()) {
                
                $("#form_validate").AjaxForm({
                    type:"POST",
                    dataType: "JSON",
                    url: 'components/core/controllers/vacina/controller_vacina.php',
                    data:{
                        'acao': 'inserir'
                    },

                    success: function(){
                        window.location.href = "vacinas.php";
                    }
                })
            }
            e.preventDefault();
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

