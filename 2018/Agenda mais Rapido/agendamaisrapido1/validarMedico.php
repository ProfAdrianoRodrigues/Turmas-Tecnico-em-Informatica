<?php
function val_med(){
    include 'validarMedico_banco.php';
    
      if(!empty($_POST["nome"])){
        $nome=$_POST["nome"];
      } else{
        return "Campo nome vazio!";
      }
     
      if(!empty($_POST["cpf"])){
        $cpf=$_POST["cpf"];
      } else{
        return "Campo CPF vazio!";
      }
      
      if(!empty($_POST["sexo"])){
        $sexo=$_POST["sexo"];
      } else{
        return "Selecione um Sexo";
      }

      if(!empty($_POST["celular"])){
        $celular=$_POST["celular"];
      } else{
        return "Campo celular vazio!";
      }
      if(!empty($_POST["telefone"])){
        $telefone=$_POST["telefone"];
      } else{
        $telefone  = "";
      }
      if(!empty($_POST["cep"])){
        $cep=$_POST["cep"];
      } else{
        return "Campo CEP vazio!";
      }

      if(!empty($_POST["rua"])){
        $rua=$_POST["rua"];
      } else{
        return "Campo Rua vazio!";
      }
      if(!empty($_POST["bairro"])){
        $bairro=$_POST["bairro"];
      } else{
        return "Campo Bairro vazio!";
      }
      if(!empty($_POST["cidade"])){
        $cidade=$_POST["cidade"];
      } else{
        return "Campo Cidade vazio!";
      }
      if(!empty($_POST["numero"])){
        $numero=$_POST["numero"];
      } else{
        return "Campo Número vazio!";
      }
      if(!empty($_POST["usuario"])){
        $usuario=$_POST["usuario"];
      } else{
        return "Campo Usuario vazio!";
      }
      if(!empty($_POST["senha"])){
        $senha=$_POST["senha"];
      } else{
        return "Campo Senha vazio!";
      }
    
      if(!empty($_POST["senha2"])){
        $senha2=$_POST["senha2"];
      } else{
        return "Campo Confirmar Senha vazio!";
      }
      
      if($senha !=$senha2)
      {
        return "Senhas não conferem";
      }
       else{
        $unidade=$_POST ["unidade"];
        $especialidade= $_POST["especialidade"];
        $email=$_POST["email"];
        $estado=$_POST["estado"];
        return cadMed($rua,$bairro,$estado,$cep,$numero,$cidade,
          $nome,$cpf,$email,$sexo,$especialidade,$celular,$telefone,
          $usuario, $senha,$unidade);
       }
    } 
    echo val_med();




?>
