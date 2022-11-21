<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Agenda + Rápido - Início</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <style>
    img{
      margin-right:60px;
    }
    
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
 if(isset($_SESSION["idpaciente"])){

  include "barraPaciente.html";
 }
  elseif(isset($_SESSION["idassist"])){
    include "barraAssistente.html";
  } 
  elseif(isset($_SESSION["idmedico"])){
    include "barraMedico.html";
  }
  elseif(isset($_SESSION["idadm"])){
    include "barraAdm.html";
  }
    else{
      include "barraNaoLogado.html";
    }

?>
    <div class="parallax">
      <img src="img/saude.jpg">
    </div>
  </div>
  <div class="section">
    <div class="row container">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a class="active blue-text darken-2" href="#test1">Marcar Consulta</a></li>
            <li class="tab col s3"><a class="blue-text darken-2" href="#test2" onclick="marcados()">Consultas Agendadas</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12 center">
          <h2 class=" blue-text text-darken-2 header"> Marcar Consulta</h2>
          <form class="marcar" method="POST">
            <div class="row col s12">
              <div class="input-field col s6">
                <input id="first_name" type="text" name="nome" class="validate">
                <label for="first_name">Nome</label>
              </div>
              <br>
              <div class="col s6">
                <label class="left blue-text darken-2" for="Especialidades">Especialidades</label>
                <select name="especialidade" class="browser-default" id="Especialidades">
                  <option value="Clinico Geral">Clinico Geral</option>
                  <option value="Pediatria">Pediatria</option>
                  <option value="Ortopedia">Ortopedia</option>
                  <option value="Ginecologia">Ginecologia</option>
                  <option value="Ortodontia">Ortodontia</option>
                  <option value="Fisioterapia">Fisioterapia</option>
                </select>
              </div>
              <div class="col s6">
                <label class="left blue-text darken-2" for="Unidades">UNIDADES</label>
                <select name="unidade" class="browser-default" id="Unidades">
                <option value="1"> UBS III COHAB ALTO DA COLINA</option>
                <option value="2"> UBS III COHAB ITAPEVI</option>
                  <option value="3">UBS III SANTA RITA</option>
                  <option value="4">UBS III SANTA RITA II</option>
                  <option value="5">UBS IV DR. NICANOR ANTONIO ABREU DE
                    OLIVEIRA</option>
                  <option value="6">UBS DA FAMILIA AMBUITA</option>
                  <option value="7">UBS CHACARA SANTA CECILIA</option>
                  <option value="8">UBS JARDIM ROSIMEIRE</option>
                  <option value="9">UBS JARDIM BRIQUET</option>
                  <option value="10">UBS DA FAMILIA JARDIM VITAPOLIS</option>
                  <option value="11">UBS PARQUE SUBURBANO</option>
                  <option value="12">UBS VILA GIOIA</option>

                </select>
              </div>

              <div class="input-field col s3">
                <input id="data" type="text" name="data" class="datepicker">
                <label for="data">DATA</label>
              </div>
              <div class="col s3">
                <label class="left blue-text darken-2" for="horario">HORARIO</label>
                <select name="horario" id="horario" class="browser-default ">
                  <option value="06:00">06:00</option>
                  <option value="07:00">07:00</option>
                  <option value="08:00">08:00</option>
                  <option value="09:00">09:00</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                </select>
              </div>
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email" data-error="Email incorreto" data-success="Email válido">Email</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="celular" class="validate" id="celular1" onkeydown="maskara('celular')">
                <label for="tel">Celular</label>
              </div>
              <div class="input-field col s6">
                <input type="text" name="telefone" class="validate" id="telefone" onkeydown="maskara('telefone')">
                <label for="tel2">Telefone</label>
              </div>
              <div class=" col s12">
                <input type="submit" class="btn blue white-text" value="Marcar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="test2" class="">
      <div  class=" row col l12 ">
      <ul class="collapsible informacoes col l8 push-l2">
        <li class="clinico">
          <div class="collapsible-header blue-text darken-2"><img src="img/clinico.png"  alt="" width="40px" height="40px"> Clínico Geral</div>
          <div class="collapsible-body corpo"> <span class="c">Nada marcado para esta especialidade</span></div>
        </li>
        <li class="pediatria">
          <div class="collapsible-header blue-text darken-2"><img src="img/pediatria.png" alt="" width="40px" height="40px">Pediatria</div>
          <div class="collapsible-body corpo1"><span class="p">Nada marcado para esta especialidade</span></div>
        </li>
        <li class="ortopedia">
          <div class="collapsible-header blue-text darken-2"><img src="img/ortopedia.png" alt="" width="40px" height="40px">Ortopedia</div>
          <div class="collapsible-body corpo2"><span class="o">Nada marcado para esta especialidade</span></div>
        </li>
        <li class="ginecologia">
          <div class="collapsible-header blue-text darken-2"><img src="img/ginecologia.png" alt="" width="40px" height="40px">Ginecologia</div>
          <div class="collapsible-body corpo3"><span class="g">Nada marcado para esta especialidade</span></div>
        </li>
        <li class="ortodontia">
          <div class="collapsible-header blue-text darken-2"><img src="img/ortodontia.png" alt="" width="40px" height="40px">Ortodontia</div>
          <div class="collapsible-body corpo4"><span class="or">Nada marcado para esta especialidade</span></div>
        </li>
        <li class="fisioterapia">
          <div class="collapsible-header blue-text darken-2"><img src="img/physiotherapy.png" alt="" width="40px" height="40px">Fisioterapia</div>
          <div class="collapsible-body corpo5"><span class="f">Nada marcado para esta especialidade</span></div>
        </li>
      </ul>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/MASKARAS.js"> </script>
    
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/marcar.js"></script>
    <script>
      $(document).ready(function () {
        $('#modal1').modal();
        $('.parallax').parallax();
        $("#cep").mask("99999-999");
        $('.tabs').tabs();
        $('.datepicker').datepicker({
          i18n: {
            months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
            today: 'Hoje',
            clear: 'Limpar',
            cancel: 'Sair',
            done: 'Confirmar',
            labelMonthNext: 'Próximo mês',
            labelMonthPrev: 'Mês anterior',
            labelMonthSelect: 'Selecione um mês',
            labelYearSelect: 'Selecione um ano',
            selectMonths: true,
            selectYears: 15,
          },
          format: 'dd mmmm, yyyy',
          container: 'body',
          minDate: new Date(),
        });
        $('.collapsible').collapsible();
      });
      function marcados(){
  $.ajax({
    url: "buscarInfo.php",
    type: "POST",
    dataType: 'json',
    success: function (data) {
      var dia;
      var unidade;
      var especialidade;
      var horario;
      index = 0;
      
      while (index < data["vezes"]) {
        dia = data["dia"][index];
        console.log(data["especialidade"][index]);
        unidade = data["unidade"][index];
        horario = data['horario'][index];
        especialidade = data["especialidade"][index];
          switch(data["especialidade"][index]){
            case "Clinico Geral":
            span = $(".c");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            break;
            case "Pediatria":
            span = $(".p");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            break;
            case "Ortopedia":
            span = $(".o");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            break;
            case "Ginecologia":
            span = $(".g");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            break;
            case "Ortodontia":
            span = $(".or");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            case "Fisioterapia":
            span = $(".f");
            var texto = "Data: " + data["dia"][index] + "\nHorario: " + data["horario"][index] + "\nUnidade: " + data["unidade"][index];
            span.text(texto);
            a = $("<a/>",{
              class:"btn blue right",
              text:"Desmarcar",
              idConsulta:data["cod_consulta"][index],
            }).click(function(){
              $idConsulta = $(this).attr("idConsulta");
              const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
              })
              swalWithBootstrapButtons({
                title: 'Tem certeza?',
                text: "Você não pode reverter isso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, desmarcar!',
                cancelButtonText: 'Não, cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
                  swalWithBootstrapButtons(
                    'Desmarcada!',
                    'Consulta desmarcada com sucesso',
                    'success'
                  )
                  desmarcar($idConsulta);
                } else if (
                  // Read more about handling dismissals
                  result.dismiss === swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons(
                    'Cancelar',
                    'Sua consulta está a salvo :)',
                    'error'
                  )
                }
              })
            })
            span.append(a);
            break;
          }
        index++;
      }
    }
  });
}
function desmarcar(idConsulta) {
  $.ajax({
    url:"desmarcarConsulta.php",
    method:"post",
    data:{idConsulta:idConsulta},
    
    success:function (resp) {
      
    }
  })
}
    </script>
</body>

</html>