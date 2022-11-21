$(function (){
    $("#editarpaciente").click(function(){
        console.log("fshg");
    
        $.ajax({
            url:"infoPaciente.php",
            dataType:"json",
            success: function(dados){
                console.log(dados);
                $("#email1").val(dados["email"]);
                $("#cep1").val(dados["cep"]);
                $("#rua1").val(dados["rua"]);
                $("#bairro1").val(dados["bairro"]);
                $("#cidade1").val(dados["cidade"]);
                $("#numero1").val(dados["numero"]);
                $("#celular1").val(dados["numero2"]);

                

            }
        })
    })
})
$("#formEditPaciente").submit(function (e){
    $.ajax({
        url:$(this).attr("action"),
        method:"post",
        data:$(this).serialize(),
        success:function(resp){
            if(resp=="Informacoes Editadas"){
                swal({
                    type:"success",
                    title:"EDITOU ;-D",
                    text:"Editado com sucesso!"
                })
            }
            else{
                swal({
                    type:"error",
                    title:"eita! :(",
                    text:resp
                })

            }
        }
    })
    e.preventDefault();
})

function sairPaciente() {
    $.ajax({
        url: "sairPaciente.php",
        type: "POST",
        success: function (data) {
            swal({
                type: "success",
                title:"Volte Sempre",
            })
            window.location.replace("index.php");

        }
    });
    return false;
}
function sairAssistente() {
    $.ajax({
        url: "sairAssistente.php",
        type: "POST",
        success: function (data) {
            swal({
                type: "success",
                title:"Volte Sempre",
            })
            window.location.replace("index.php");
        }
    });
    return false;
}
function sairMedico() {
    $.ajax({
        url: "sairMedico.php",
        type: "POST",
        success: function (data) {
            swal({
                type: "success",
                title:"Volte Sempre",
            })
            window.location.replace("index.php");

        }
    });
    return false;

}

function sairAdm() {
    $.ajax({
        url: "sairAdm.php",
        type: "POST",
        success: function (data) {
            swal({
                type: "success",
                title:"Volte Sempre",
            })
            window.location.replace("index.php");

        }
    });

    return false;
    function sairLogin() {
        $.ajax({
            url: "sairLogin.php",
            type: "POST",
            success: function (data) {
                alert("Volte Sempre");
                window.location.reload();
    
            }
        });
        return false;
    }
}
