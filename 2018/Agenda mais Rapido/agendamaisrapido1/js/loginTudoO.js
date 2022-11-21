$(function(){
    $("#formTodos").submit(function (e) {

        url = $(this).attr("action");
        method = $(this).attr("method");
        
        $.ajax({
            url: url,
            type: method,
            data: $("#formTodos").serialize(),
            success: function (dado) {  
                 switch (dado) {
                     case "Encontrado Paciente!":
                     case "Encontrado Medico!":
                     case "Encontrado Assistente!":
                     case "Encontrado Administrador!":
                         swal({
                             type: "success",
                             title: 'OK',
                             text: dado,
                         })
                         window.location.replace("index.php");
                         break;
                     case "Usuário e Senha não Encontrado!":
                         swal({
                             type: "error",
                             title: 'Erro querido(a)',
                             text: dado,
                         })
                         break;
                         default:
                         swal({
                            type: "error",
                            title: 'Erro querido(a)',
                            text: dado,
                        })
                        break;
                 }
            }
        })
    
        e.preventDefault();
    })
})
