
$(document).ready(function() {
    $('#btn_salvar').click(function(e){
        e.preventDefault();
        
    })
    
    $('#form_Cadstro_Usuario').validate({
        rules:{
            nome: {
                required:true
            },
            nome_mae: {
                required: true
            },
            cpf: {
                required: true
            },
            cartao_sus: {
                required: true
            },
            endereco: {
                required: true
            },
            cep: {
                required: true
            },
            telefone: {
                required: true
            },
            formacao: {
                required: true
            },
            unidade: {
                required: true
            },
        },

        
    })

    
});