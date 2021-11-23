validar_formulario = function(campos){
    $(".append").remove();
    var validacao = true;

    campos.forEach((campo)=>{
        if($("#"+ campo).val() == ''){
            validacao = false;
            append_div(campo);
        }
    })
    return validacao;
}

append_div = function(div){
    $("#div_" + div).append('<span class="append">Este campo não está preenchido</span>');
}