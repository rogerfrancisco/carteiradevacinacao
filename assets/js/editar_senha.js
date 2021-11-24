var campos = ['senha_antiga', 'senha_nova', 'confirmar_senha'];

$("#btn_salvar").click((e)=>{
    e.preventDefault();
    if(validar_formulario(campos)){
        if($("#senha_nova").val() == $("#confirmar_senha").val()){
            $.post('components/core/controllers/usuario/trocar_senha.php', {
                'senha_antiga': $("#senha_antiga").val(),
                'senha_nova': $("#senha_nova").val()
            }).done((resposta)=>{
                var validacao = JSON.parse(resposta);
                if(validacao){
                    alert("Senha Alterada com Sucesso!");
                }else{
                    alert("Senha Atual não correspondente!");
                }
            })
        }else{
            alert("nova senha não corresponde!");
        }
    }
})