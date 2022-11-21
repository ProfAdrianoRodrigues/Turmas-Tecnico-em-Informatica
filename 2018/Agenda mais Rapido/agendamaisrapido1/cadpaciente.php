<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Agenda + Rápido - Início</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/materialize.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
  <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"></script>
  <style>
  .input-field input[type=text] {
  border-bottom: 1px solid #1976d2 !important;
  box-shadow: 0 1px 0 0 #1976d2 !important;
}
.input-field input[type=email] {
  border-bottom: 1px solid #1976d2 !important;
  box-shadow: 0 1px 0 0 #1976d2 !important;
}
.input-field input[type=password] {
  border-bottom: 1px solid #1976d2 !important;
  box-shadow: 0 1px 0 0 #1976d2 !important;
}
  </style>


</head>

<body>

  <div class="parallax-container">
    <?php
      session_start();
       include_once ("barraNaoLogado.html");
     
     ?>
    <div class="parallax">
      <img src="img/top.jpg">
    </div>
  </div>
  <div class="row col l12 center container">
    <fieldset>
      <legend>
      <h3>CADASTRO DE PACIENTE</h3>
      </legend>
      <form action="cad_paciente.php" method="POST" class="cadpaciente1">
        <div class="input-field col l6">
          <input type="text" name="nome" id="nome">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col l6">
          <input type="text" name="sobrenome" id="sobrenome">
          <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col l6">
          <input type="text" name="sus" id="sus">
          <label for="sus">Número do SUS</label>
        </div>
        <div class="input-field col l6">
          <input type="text" name="cpf" id="cpf1" onkeydown="maskara('cpf')">
          <label for="cpf1">CPF</label>
        </div>
        <div class="input-field col l3">
          <input type="text" name="cep" id="cep">
          <label for="cep">CEP</label>
        </div>
        <div class="input-field col l6">
          <input type="text" name="endereco" id="rua">
          <label for="endereco">Endereço</label>
        </div>
       <div class="input-field col l3">
          <input type="text" name="numero" id="numero">
          <label for="numero">Número</label>
        </div>
        <div class="input-field col l6">
          <input type="text" name="bairro" id="bairro">
          <label for="bairro">Bairro</label>
        </div>
        <div class="input-field col l3">
          <input type="text" name="cidade" id="cidade">
          <label for="cidade">Cidade</label>
        </div>
        <div class="select col l3 m12 s12">
          <label for="estado" class="">Estado</label>
          <select name="estado" class="browser-default " id="UF">
            <option value="AC"> AC </option>
            <option value="AL"> AL </option>
            <option value="AP"> AP </option>
            <option value="AM"> AM </option>
            <option value="BA"> BA </option>
            <option value="CE"> CE </option>
            <option value="DF"> DF </option>
            <option value="ES"> ES </option>
            <option value="GO"> GO </option>
            <option value="MA"> MA </option>
            <option value="MT"> MT </option>
            <option value="MS"> MS </option>
            <option value="MG"> MG </option>
            <option value="PA"> PA </option>
            <option value="PB"> PB </option>
            <option value="PR"> PR </option>
            <option value="PE"> PE </option>
            <option value="PI"> PI </option>
            <option value="RJ"> RJ </option>
            <option value="RN"> RN </option>
            <option value="RS"> RS </option>
            <option value="RO"> RO </option>
            <option value="RR"> RR </option>
            <option value="SC"> SC </option>
            <option value="SP"> SP </option>
            <option value="SE"> SE </option>
            <option value="TO"> TO </option>
          </select>
        </div>
        <div class="input-field col l6">
          <input type="email" name="email" id="email">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col l6">
          <p>
            SEXO:
            <label>
              <input type="radio" name="sexo" value="F">
              <span> Feminino</span>
            </label>
            <label>
              <input type="radio" name="sexo" value="M">
              <span> Masculino</span>
            </label>
          </p>
        </div>
        <div class="input-field col l6">
          <input type="password" name="senha" id="senha">
          <label for="senha">Senha</label>

        </div>
        <div class="input-field col l6">
          <input type="password" name="senha2" id="senha2">
          <label for="senha2">Confirmar Senha</label>
        </div>
        <div class="input-field col l6">
          <input type="text" name="tel" id="celular1" onkeydown="maskara('celular')">
          <label for="celular1">Celular</label>
        </div>
        <div class="input-field col l6">
          <input type="text" name="tel2" id="telefone" onkeydown="maskara('telefone')">
          <label for="telefone">Telefone</label>
        </div>
        <div class="col l12">
          <input class="btn blue darken-2" type="submit" id="submit" class="submit" value="Cadastrar">
        </div>
      </form>
    </fieldset>
  </div>
  <?php
include ("footer.html");
?>


  <script src="js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/MASKARAS.js"> </script>
  <script src="js/jquery.cpfcnpj.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
  <script src="js/cadpaciente1.js"></script>

  <script>
    $(document).ready(function () {
      $('#modal1').modal();
      $('.parallax').parallax();
      $("#cep").mask("99999-999");
    });
    
    $(document).ready(function () {
  function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function () {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#UF").val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});



  </script>
</body>

</html>