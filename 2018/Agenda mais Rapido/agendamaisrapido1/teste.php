<?php

include'conexao.php';
$id_end = cadEnd($rua,$bairro,$estado,$cep,$numero,$cidade);
$id_login = CadLogMed($usuario, $senha);
$query = "INSERT INTO TB_medicos (nome,cpf,email,sexo,especialidade,numero1,
numero2,cod_endereco,id_login,id_unidade)VALUES(?,?,?,?,?,?,?,?,?,?)";
 $sql = $conexao->prepare($query);
 $sql->bind_param('sssssssiii',$nome,$cpf,$email,$sexo,$especialidade,$celular,
 $telefone,$id_end,$id_login,$unidade);
 $sql->execute();
 echo "Médico Cadastrado com sucesso";
function cadEnd($endereco,$bairro,$estado,$cep,$numero,$cidade){
    include'conexao.php';
    $query = "INSERT INTO TB_ENDERECO(RUA,BAIRRO,CIDADE,ESTADO,CEP,NUMERO)
    VALUES(?,?,?,?,?,?)";
    $sql= $conexao->prepare($query);
    $sql->bind_param("ssssii",$endereco,$bairro,$cidade,$estado,$cep,$numero);
    $sql->execute();
    $id_endereco = $conexao->insert_id;
    $conexao->close();
    return $id_endereco;
}
function CadLogMed($usuario, $senha){
    include 'conexao.php';
    $query = "INSERT INTO TB_LOGIN (USUARIO,SENHA) VALUES (?,?)";
    $sql= $conexao->prepare($query);
    $sql->bind_param("ss",$usuario,$senha);
    $sql->execute();
    $id_login = $conexao->insert_id;
    $conexao->close();
    return $id_login;

}
?>