<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Agenda + Rápido - Início</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>

  <script>
      $(document).ready(function(){
      $('#modal1').modal();
    });
    $(document).ready(function(){
      $('.parallax').parallax();
    });
  </script>

</head>

<body>
<?php
      session_start();
      if(! isset($_SESSION['idpaciente'])){
        header("location:index.php");
        include_once ("barra.html");
       }
       else{
        include_once ("barraLogado.html");
       }
     
     ?>

  <div class="parallax-container">
    <div class="parallax">
      <img src="img/top.jpg">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Cadastro de Administrador</h2>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" name="nome"class="validate">
              <label for="first_name">Nome</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" name="sobrenome" class="validate">
              <label for="last_name">Sobrenome</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="adm" type="text" name="nomeadm" class="validate">
              <label for="administrador">Usuário</label>
            </div>
        <div class="input-field col s6">
              <input id="cargo" type="text" name="cpf" class="validate">
              <label for="cargo">CPF</label>
            </div>
          </div>
        </div>
             <div class="input-field col s10">
              <input id="endereco" type="text" name="endereco" class="validate">
              <label for="endereco">Endereço</label>
            </div>
             <div class="input-field col s2">
              <input id="numero" type="number" name="Número" class="validate">
              <label for="numero">Número</label>
            </div>  
             <div class="input-field col s6">
              <input id="bairro" type="text" name="Bairro" class="validate">
              <label for="bairro">Bairro</label>
            </div>  
             <div class="input-field col s4">
              <input id="cidade" type="text" name="Cidade" class="validate">
              <label for="cidade">Cidade</label>
            </div> 
             <div class="input-field col s2">
              <input id="estado" type="text" name="Estado" class="validate">
              <label for="estado">Estado</label>
            </div>   
          
          <div class="row">
            <div class="input-field col s12">
              <input id="disabled" type="email" name="email" class="validate">
              <label for="disabled" data-error="Email incorreto" data-success="Email válido">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="password" type="password" name="senha" class="validate">
              <label for="password" data-success="Senha válida">Senha de login</label>
            </div>
            <div class="input-field col s6">
              <input id="password" type="password" name="senha2" class="validate">
              <label for="password" data-success="Senha válida">Confirmar Senha</label>
            </div>
          </div>
        </div>
           <div class="row">
            <div class="center">
                <a class="waves-effect waves-light btn blue"><i class="material-icons left">check_circle</i>Confirmar Cadastro</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre o Projeto</h5>
          <p class="grey-text text-lighten-4">Trabalho de Conclusão de curso. Feito por Daniela, Erick, Leonardo e Leone - 3ºTI<br><br> Para esse trabalho foi utilizado um framework chamado Materialize e alguns conceitos do Bootstrap.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Recursos</h5>
          <ul>
            <li><a class="white-text" href="http://materializecss.com/getting-started.html">Materialize</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contato</h5>
          <ul>
            <li><a class="white-text" href="www.facebook.com.br">NextArt</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2018 by Agenda Mais Rápido™ All rights reserved.
      </div>
    </div>
  </footer>

  </body>
</html>