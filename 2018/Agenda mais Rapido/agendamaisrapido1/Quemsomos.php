<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <title>QUEM SOMOS</title>
</head>
<body>

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

 
  <div class=" container row center col l12">
        <h1 class="header center blue-text text-darken-2">Agenda Mais Rápido</h1>
        <div class="texto-titulo container">
          <p class="black-text text-darken-3 center lighten-3">
            Criado no ano de 2017 pelo grupo com o intuito de 
            melhorias nos processos de agendamento nas Unidades Básicas de saúde na região de Itapevi.
             Os integrantes são Leonardo, Felipe, Erick e Daniela.
              Quando houver
            problemas você encontra respostas!  
            Trabalho de Conclusão de curso. 3ºTI. Nesse trabalho foi utilizado um framework chamado Materialize<3
          </p>
        </div>

		    
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/lalala.jpg"></div>
  </div>
 
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js">
  </script>
  <script>
     $(document).ready(function () {
          $('.parallax').parallax();
     });
  </script>
   <?php
include ("footer.html");
?>

</body>
</html>
