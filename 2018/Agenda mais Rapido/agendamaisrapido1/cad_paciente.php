<?php
function val_pac(){
include 'cad_paciente_banco.php';

  if(!empty($_POST["nome"])){
    $nome=$_POST["nome"];
  } else{
    return "Campo nome vazio!";
  }
  if(!empty($_POST["sobrenome"])){
    $sobrenome=$_POST["sobrenome"];
  } else{
    return "Campo sobrenome vazio!";
  }
  if(!empty($_POST["sus"])){
    $sus=$_POST["sus"];
  } else{
    return "Campo numero do SUS vazio!";
  }
  if(!empty($_POST["cpf"])){
    $cpf=$_POST["cpf"];
  } else{
    return "Campo CPF vazio!";
  }
  if(!empty($_POST["endereco"])){
    $rua=$_POST["endereco"];
  } else{
    return "Campo Endereço vazio!";
  }
  
  if(!empty($_POST["cep"])){
    $cep=$_POST["cep"];
  } else{
    return "Campo CEP vazio!";
  }

  if(!empty($_POST["numero"])){
    $numero=$_POST["numero"];
  } else{
    return "Campo Número vazio!";
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
  if(!empty($_POST["estado"])){
    $uf=$_POST["estado"];
  } else{
    return "Campo Estado vazio!";
  }
  if(!empty($_POST["email"])){
    $email=$_POST["email"];
  } else{
    return "Campo E-mail vazio!";
  }
  if(!empty($_POST["sexo"])){
    $sexo=$_POST["sexo"];
  } else{
    return "Selecione um Sexo";
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
  
  if(!empty($_POST["tel"])){
    $celular=$_POST["tel"];
  } else{
    return "Campo Celular vazio!";
  }
  if(!empty($_POST["tel2"])){
    $telefone=$_POST["tel2"];
  } else{
    $telefone  = "";
  }
  if($senha !=$senha2)
  {
    return "Senhas não conferem";
  }
   else{
      if(sus($sus)==0){
        return CadPac($sus,$nome,$sobrenome,$rua,$bairro,$cidade,$uf,$cep,$cpf,
        $email,$sexo,$numero,$celular,$telefone,$senha);
      }
      else {
        return "NÚMERO DE SUS JÁ CADASTRADO";
      }

   }
} 
echo val_pac();
?>