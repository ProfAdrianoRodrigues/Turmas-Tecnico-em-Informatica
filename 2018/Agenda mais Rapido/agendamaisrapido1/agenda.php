<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Mais Rápido</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />


</head>
<body>
<?php   
 include ("conexao.php");
 include ("barraMedico.html"); 
 ?> 
  
    <div class="container ">
    <fieldset> 
       <table >
        <thead>
          <tr>
              <th>NOME</th>
              <th>DIA</th>
              <th>UNIDADE</th>
              <th>ESPECIALIDADE</th>
              <th>HORARIO</th>
              <th>CODIGO SUS</th>
          </tr>
        </thead>
        <br>
   <?php
   $sql = "SELECT * FROM TB_CONSULTA C INNER JOIN TB_PACIENTE A ON A.SUS = C.SUS order by C.DIA";
   $select = mysqli_query($conexao,$sql);
         
         while($linha_ag = mysqli_fetch_assoc($select)){
          
           ?>
        <tbody>
          <tr>
            <td><?php echo $linha_ag["NOME"]; ?></td>
            <td><?php echo $linha_ag["DIA"]; ?></td>
            <td><?php echo $linha_ag["UNIDADE"]; ?></td>
            <td><?php echo $linha_ag["ESPECIALIDADE"]; ?></td>
            <td><?php echo $linha_ag["HORARIO"]; ?></td>
            <td><?php echo $linha_ag["SUS"]; ?></td>
          
            
          </tr>
         
        </tbody>
   <?php } ?> 
      </table>
      </div>
      </fieldset>    













</body>
</html>