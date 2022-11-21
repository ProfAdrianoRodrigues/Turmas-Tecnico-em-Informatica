<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Agenda Mais Rápido - Início</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" href="css/tabela.css">
  <link rel="stylesheet" href="css/pqp.css">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/sair.js"></script>
  <script>
    $(document).ready(function () {
      $('#modal1').modal();
      $('.parallax').parallax();
      $('.slider').slider({
        height: 500,
      });
    });
  </script>

</head>

<body on="clickModal()">

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
  <div class="texto-pqp row center col l12">
    <h1 class="header center blue-text text-darken-2">Agenda Mais Rápido</h1>
    <div class="texto-titulo container">
      <span>
        <p class="black-text text-darken-3 center lighten-3">No Agenda + Rápido você pode marcar suas consultas próxima
          a sua
          residência. Sem a necessidade de ficar esperando em filas enormes tendo maior comodidade e aproveitamento do
          seu
          dia! Você pode ter tudo isso com apenas um cadastro! Então está esperando o que ?
          <br> Crie sua conta gratuitamente e garanta menos tempo em espera!</p>
      </span>
    </div>
  </div>

  <div class="slider">
    <ul class="slides">
      <li>
        <img class="responsive-img" src="img/Med.jpg">
        <div class="caption center-align">

        </div>
      </li>
      <li>
        <img class="responsive-img" src="img/outubro-rosa.png">
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img class="responsive-img" src="img/Novembro-Azul.jpg">
        <div class="caption right-align">
        </div>
      </li>
      <li>
        <img class="responsive-img" src="img/vacina.png">
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>
  <div class="container tb">
    <table class="striped  center">
      <th>
        <h5>Estabelecimento</h5>
      </th>
      <th>
        <h5>Rua</h5>
      </th>
      <th>
        <h5>Bairro</h5>
      </th>
      <th>
        <h5>Telefone</h5>
      </th>
      </tr>
      </tr>
      <td>UBS III COHAB II ALTO DA COLINA</td>
      <td>RUA LUIS BELLI 781 </td>
      <td>COHAB II</td>
      <td>(11)41436429</td>
      </tr>
      </tr>
      <tr>
        <td>UBS III COHAB ITAPEVI</td>
        <td>RUA SEBASTIAO MAMEDE 205 </td>
        <td>COHAB I</td>
        <td>(11)41435465</td>
      </tr>
      </tr>
      <tr>
        <td>UBS III SANTA RITA</td>
        <td>RUA DA PORTUGUESA 15 </td>
        <td>VILA SANTA RITA</td>
        <td>(11)41421938</td>
      </tr>
      </tr>
      <tr>
        <td>UBS III SANTA RITA II</td>
        <td>RUA ALCIDES COTRIM S/N </td>
        <td>JARDIM STA RITA</td>
        <td>(11)41435462</td>
        <td></td>
      </tr>
      </tr>
      <tr>
        <td>UBS IV DR NICANOR ANTONIO ABREU DE OLIVERA</td>
        <td>AV NOVE DE JULHO 39 </td>
        <td>JARDIM DA RAINHA</td>
        <td>(11)41435459</td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA AMBUITA</td>
        <td>RUA EMILIO LEHMANN 71 </td>
        <td>AMBUITA</td>
        <td>(11)41448295</td>
        <td></td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA CHACARA SANTA CECILIA</td>
        <td>ESTRADA VELHA 155 </td>
        <td>CHACARA SANTA CECILIA</td>
        <td>(11)47737175</td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA JARDIM ROSEMEIRE</td>
        <td>R SERRA VOTUPORAMA 09 </td>
        <td>ITAPEVI</td>
        <td>(11)42053365</td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA JD BRIQUET</td>
        <td>RUA MOSSORO S/N </td>
        <td>JD BRIQUET</td>
        <td>(11)42052861</td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA JD VITAPOLIS</td>
        <td>RUA NELSON FERREIRA DA COSTA 853 </td>
        <td>JD VITAPOLIS</td>
        <td>(11)42054870</td>
        <td>
        </td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA PARQUE SUBURBANO</td>
        <td>RUA CATARINENSES 243 </td>
        <td>PQ SUBURBANO</td>
        <td>(11)42053365</td>
      </tr>
      </tr>
      <tr>
        <td>UNIDADE DE SAUDE DA FAMILIA VILA GIOIA</td>
        <td>RUA SILVIA NOGUEIRA 86</td>
        <td>VILA GIOIA</td>
        <td>(11)42053365</td>
      </tr>
      <tr>
        <td colspan="2"><br />Município: ITAPEVI<br />Tipo de Unidade: CENTRO DE SAUDE/UNIDADE BASICA<br /></td>
      </tr>
    </table>
  </div>
  <br> <br>

  <div class="row col l12">
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/dente.jpeg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-2">Com ajuda do SUS, população retoma o sorriso nas
          cidades<i class="material-icons right">more_vert</i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">SUS nas unidades básicas.<i class="material-icons right">close</i></span>
        <p>té pouco tempo atrás, o morador do Distrito Federal Rigoneide Soares, 35 anos, desconhecia uma realidade
          presente em mais de 5 mil municípios brasileiros. Ex-jogador de futebol, ele não sabia que tinha direito aos
          serviços odontológicos de forma gratuita pelo Sistema Único de Saúde (SUS).
          Hoje, faz parte parte dos mais de 100 milhões de brasileiros que já foram beneficiados pelo programa Brasil
          Sorridente.
          O desconhecimento levava Rigoneide a recorrer à rede particular sempre que precisava do atendimento. "Aqui
          não tem diferença, é uma briga acirrada [com os serviços privados]. O atendimento daqui, dependendo, é até
          melhor do que o particular. Você não paga nada e é bem atendido”, afirmou, enquanto aguardava a consulta para
          reparar um tratamento de canal na Unidade Básica de Saúde do Guará (DF)..</p>
        <p><a href="http://www.brasil.gov.br/noticias/saude/2018/10/milhoes-de-brasileiros-sao-beneficiados-com-atendimento-odontologico-gratuito-pelo-SUS">Saiba
            Mais!</a></p>
      </div>
    </div>
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/cao.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-4">Itapevi recebe 3ª Feira de Adoção de Cães e Gatos no
          Ita Shopping Vila Nova<i class="material-icons right">more_vert</i></span>

      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Animais podem ser adotados gratuitamente; interessados devem
          ser maiores de 18 anos e levar cópia do RG, CPF e comprovante de endereço<i class="material-icons right">close</i></span>
        <p>A Prefeitura de Itapevi promove, no dia 24 de novembro, um sábado, a “3ª Feira de Adoção de Cães e Gatos Me
          Leva Pra Casa”, no Ita Shopping Vila Nova (R. José Michelotti, 88, Vila Nova Itapevi). A ação acontece das
          11h às 15h. A iniciativa tem como objetivo dar um lar para os animais abrigados no Canil mantido pela
          administração municipal.

          Apenas maiores de 18 anos podem fazer as adoções e devem levar cópia do RG, CPF e comprovante de endereço. Os
          interessados devem levar coleira e guia, para cães, e caixa de transporte, para gatos.
          Neste ano, a Prefeitura doou 36 animais nas duas feiras de adoção realizadas em agosto e setembro.
          Diretamente no canil, foram adotados 13 animais de janeiro a outubro deste ano. Já em 2017, foram adotados 45
          animais. Os dados são da Divisão de Controle e Proteção Animal do município.
          Atualmente há 185 animais abrigados no canil da Prefeitura – destes, 50 estão aptos para serem adotados
          imediatamente.
          Programa de adoção
          Em Itapevi, é possível adotar gratuitamente um bichinho de estimação. Para isso, existe o programa Me Leva
          Pra Casa, um serviço de adoção responsável disponível a toda população.</p>
        <p><a href="http://www.canalitapevi.com.br/itapevi-recebe-feira-adocao-caes-gatos-ita-shopping-vila-nova/">Saiba
            Mais!</a></p>
      </div>
    </div>
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/igor.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-4">Albert Einstein apresenta a gestores propostas para
          melhorar saúde de Itapevi<i class="material-icons right">more_vert</i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Profissionais irão discutir melhor maneira de implementar
          mudanças propostas em Itapevi<i class="material-icons right">close</i></span>
        <p> Nesta quarta-feira (24), profissionais do Hospital Albert Einstein realizaram mais uma apresentação do
          relatório de consultoria dos serviços de saúde em Itapevi, desta vez para gestores municipais de saúde. O
          evento aconteceu na nova sede da Prefeitura, na Vila Nova Itapevi, e reuniu cerca de 50 servidores.
          O estudo teve início no mês de junho, e apresentou uma série de sugestões que podem ser implantadas para
          melhorar o atendimento à população. No último dia 15, o documento já havia sido apresentado ao prefeito Igor
          Soares.
          Entre as ações propostas, estão a implantação de novos protocolos de atendimento e de diretrizes de
          procedimentos administrativos e de recursos humanos. Além disso, o estudo enfatiza a reestruturação do
          atendimento básico de saúde.
          Segundo o levantamento, se bem estruturadas com recursos humanos, equipamentos e insumos em quantidade
          suficientes, as unidades básicas de saúde são capazes de resolver 90% das demandas da população.
          Durante o encontro, o prefeito Igor Soares destacou a importância do trabalho feito pelo Einstein e convidou
          os gestores a trabalharem por uma mudança de cultura no serviço de saúdeS..</p>
        <p><a href="http://www.canalitapevi.com.br/albert-einstein-apresenta-gestores-propostas-para-melhorar-saude-itapevi/">Saiba
            Mais!</a></p>

      </div>
    </div>
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/ta.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-4">Itapevi disponibiliza 1.900 exames de mamografia
          para mulheres acima de 40 anos<i class="material-icons right">more_vert</i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Ação integra programação do Outubro Rosa, mês de
          conscientização contra o câncer de mama
          Para combater o câncer de mama em Itapevi, a Prefeitura está disponibilizando 1.900 exames de mamografia para
          mulheres acima dos 40 anos de idade. As solicitações devem ser feitas até o dia 9 de novembro.
          Mulheres de 35 a 39 anos, que tenham histórico de câncer de mama ou de ovário na família, também podem fazer
          o exame.</p>
          <p><a href="http://www.canalitapevi.com.br/itapevi-disponibiliza-1-900-exames-mamografia-para-mulheres-acima-anos/">Saiba
              Mais!</a></p>

      </div>
    </div>
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/itapevi.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-4">Prefeitura conquista R$ 50 milhões em Brasília para
          investir em Itapevi<i class="material-icons right">more_vert</i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">Representantes da Prefeitura de Itapevi assinaram na última
          semana contrato com a Caixa Econômica Federal visando repasse de R$ 50 milhões para investimentos em diversas
          obras na cidade. Os recursos virão por meio do FINISA (Financiamento à Infraestrutura e ao Saneamento).
          Os recursos serão destinados a quatro importantes obras espalhadas por Itapevi.
          São elas: a duplicação da Rodovia Renê Benedito, no trecho entre a rotatória da Cohab e a antiga Cimenrita; a
          canalização do córrego Paim, entre a rotatória da Cohab e a Escola de Tempo Integral do Parque Suburbano, com
          a construção de duas novas vias; a construção do Parque da Cidade, que terá mais de 50 mil m² de área; e a
          pavimentação e recuperação de diversas vias.
          O montante será liberado por etapas, com a primeira parcela, de R$ 5 milhões, disponível até janeiro de 2019.
          Ao longo do próximo ano ainda serão liberados em parcelas mais R$ 30 milhões, restando R$ 15 milhões para
          2020.</p>
          <p><a href="http://www.itapevi.sp.gov.br/noticiasNovo/noticias/mostra_noticia.php?id=2002">Saiba Mais!</a></p>

      </div>
    </div>
    <div class="card col l4 small">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="img/medalha.jpeg">
      </div>
      <div class="card-content">
        <span class="card-title activator blue-text text-darken-4">Itapevi conquista três medalhas nos Jogos
          Matemáticos da USP.<i class="material-icons right">more_vert</i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title blue-text text-darken-4">No último sábado (10), alunos da rede municipal de Itapevi
          conseguiram uma importante conquistas na matemática. Três deles faturaram medalhas no 1º Campeonato JogoMat
          (Jogos Matemáticos), realizado na USP e promovido pelo Centro de Aperfeiçoamento do Ensino de Matemática/
          Instituto de Matemática e Estatística da Universidade de São Paulo (CAEM/IME/USP).
          Ao todo, 16 estudantes do 1º ao 5º ano da rede municipal de ensino participaram da competição em duas
          categorias. Os medalhistas foram da categoria Sub-10 (4º e 5º ano), no Jogo 123. O 2º lugar (medalha de
          prata) ficou com o estudante Lucas Gabriel Carlos da Silva Peres (5º ano B – Cemeb Tarsila do Amaral); o 3º
          lugar (medalha de bronze), com o aluno Pedro Henrique Crispim Feitosa (4º ano B – Cemeb João Guimarães Rosa)
          e o 4º lugar (medalha de bronze), com Vitor Hugo Negri Costa (4º ano A – Cemeb Manuel Bandeira).
          Também foram disputados os Jogos Mijnlieff (1º a 3º ano), mas não houve medalhas nesta modalidade..</p>
          <p><a href="http://www.itapevi.sp.gov.br/noticiasNovo/noticias/mostra_noticia.php?id=2003 ">Saiba Mais!</a></p>

      </div>
    </div>
    <br>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/BACK1.jpg"></div>
  </div>
  <?php
include ("footer.html");
?>


</body>

</html>