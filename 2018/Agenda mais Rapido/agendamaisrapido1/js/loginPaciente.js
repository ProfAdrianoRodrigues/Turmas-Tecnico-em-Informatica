$(".formLoginPaciente").submit(function () {
    $.ajax({
        url: "verificarPaciente.php",
        type: "POST",
        data: $(".formLoginPaciente").serialize(),
        // função caso tudo ocorra normalmente
        success: function (data) {
            var dataStr = String(data);
            if (dataStr == "Usuario Encontrado") {
                alert(data);
                $(location).attr("href", "index.php");
            }
            else {
                alert(data);
            }


        }
    });
    return false;
})