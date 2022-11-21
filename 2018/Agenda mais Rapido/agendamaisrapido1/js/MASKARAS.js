function maskara(tipo){
    if(tipo === "cpf"){
        var seuCampoCpf = $("#cpf1");
        seuCampoCpf.mask('000.000.000-00', {reverse: false});
    }
    if(tipo === "celular"){
        var cel = $("#celular1");
        cel.mask('(00) 00000-0000'),{reverse:false};
    }
    if(tipo === "telefone"){
        var cel = $("#telefone");
        cel.mask('(00) 0000-0000'),{reverse:false};
    }
    if(tipo === "cnpj"){
        var cel = $("#cnpj");
        cel.mask('00.000.000/0000-00'),{reverse:false};
    }
    if (tipo == "cep") {
        var cep = $("#cep");
        cep.mask("99999-999");
    }

}