$("#btn_logar").click(()=>{
    if(validar_form()){
        $.post('components/core/controllers/login/controller_login.php', {
            objeto: {
                'user': $("#user").val(),
                'senha': $("#senha").val()
            }
        })
        .done((resposta)=>{
            if(resposta){
                window.location.href = "index.php";
            }else{
                alert('As informações não coincidem');
            }
        });
    }

    console.log("user: " + $("#user").val() + "senha: " + $("#senha").val());
})

validar_form = ()=>{
    if($("#user").val() == '' || $("#senha").val() == ''){
        alert("Um dos campos não está preenchido");
        return false;
    }else{
        return true;
    }
}