$(".marcar").submit(function () {
    
    $.ajax({
        url: "marcar.php",
        type: "POST",
        data: $(".marcar").serialize(),
        dataType:'json',
        success: function (data) { console.log(data);
            
            if (data=="Consulta marcada com sucesso verifique seu email para mais informacoes") {
                swal({
                    type: 'success',
                    title: 'OK',
                    text: 'Consulta marcada com sucesso verifique seu email para mais informações',
                })
            }
            else {
                swal({
                    type: 'error',
                    title: 'Ooops...',
                    text: data,
                })
               
                document.getElementById("first_name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("celular1").value = "";
                document.getElementById("telefone").value = "";
            }
            
        }
    });
    return false
});
