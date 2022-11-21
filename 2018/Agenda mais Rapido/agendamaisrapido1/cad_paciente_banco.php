<?php
function sus($sus)
{
    include'conexao.php';
    $query ="SELECT * FROM TB_PACIENTE WHERE SUS = ?";
    $sql= $conexao->prepare($query);
    $sql->bind_param("i",$sus);
    $sql->execute();
    $sql->store_result();
     $resultado = $sql->num_rows();
    $sql->close();
     $conexao->close();      
            return $resultado;
}
function CadLogPaciente($sus, $senha){
    include 'conexao.php';
    $query = "INSERT INTO TB_LOGIN_PACIENTE (SUS,SENHA) VALUES (?,?)";
    $sql= $conexao->prepare($query);
    $sql->bind_param("is",$sus,$senha);
    $sql->execute();
    $sql->close();
    $conexao->close();
}
function CadPac($sus,$nome,$sobrenome,$rua,$bairro,$cidade,$uf,$cep,$cpf,
$email,$sexo,$numero,$celular,$telefone,$senha){
    $codE=  CadEnde($rua,$bairro,$cidade,$uf,$cep,$numero);
    if($codE < 1){
        return"Erro ao cadastrar endereço";
    }
    else{
       CadLogPaciente($sus, $senha);
        include'conexao.php';
        $query= "INSERT INTO TB_PACIENTE(SUS,NOME,SOBRENOME,CPF,EMAIL,SEXO,NUMERO1,NUMERO2,COD_ENDERECO)VALUES (?,?,?,?,?,?,?,?,?)";
        $sql= $conexao->prepare($query);
        $sql->bind_param("isssssssi",$sus,$nome,$sobrenome,$cpf,$email,$sexo,$celular,$telefone,$codE);
        $sql->execute();
        $sql->close();
        $conexao->close();      
        return "Paciente Cadastrado com Sucesso!";
    }
}
function CadEnde($rua,$bairro,$cidade,$uf,$cep,$numero){
include'conexao.php';
$query= "INSERT INTO  TB_ENDERECO (RUA,BAIRRO,CIDADE,ESTADO,CEP,NUMERO)  VALUES (?,?,?,?,?,?)";
$sql= $conexao->prepare($query);
$sql->bind_param("sssssi",$rua,$bairro,$cidade,$uf,$cep,$numero);
$sql->execute();
$result=$conexao->insert_id;
$sql->close();
$conexao->close();      
return $result;
}




?>