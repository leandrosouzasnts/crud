$("#formAtirador").validate({
    rules : {
          nome:{
                 required:true,
                 maxlength:45
          },
          cpf:{
                 required:true,
                 minlength:14
          },
          nascimento:{
                 required:true
          }                                 
    },
    messages:{
          nome:{
                 required:"Por favor, informe seu nome",
                 minlength:"O nome deve ter no máximo 45 caracteres"
          },
          cpf:{
                 required:"É necessário informar o CPF"
          },
          nascimento:{
                 required:"Data deve ser preenchida"
          }      
    }
});
