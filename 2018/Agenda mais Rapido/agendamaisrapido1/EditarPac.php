<?php
session_start();
function vali(){
    if(empty($_POST["email1"])){
        return "Campo email vazio";
    }
    else{
        $email = $_POST["email1"];
    }
   
    if(empty($_POST["cep1"])){
       return "Campo cep vazio";
    }
    else{
        $cep = $_POST["cep1"];
    }
    if(empty($_POST["rua1"])){
        return "Campo rua vazio";
    }
    else{
        $rua = $_POST["rua1"];
    }
    if(empty($_POST["bairro1"])){
        return "Campo bairro vazio";
    }
    else{
        $bairro = $_POST["bairro1"];
    }
    if(empty($_POST["cidade1"])){
        return "Campo cidade vazio";
    }
    else{
        $cidade = $_POST["cidade1"];
    }
    if(empty($_POST["numero1"])){
        return "Campo número vazio";
    }
    else{
        $numero = $_POST["numero1"];
    }

    if(empty($_POST["celular1"])){
        return "Campo celular vazio";
    }
    else{
        $celular = $_POST["celular1"];
        updatend($cep,$rua,$bairro,$cidade,$numero);
        return editPac($email,$celular);
        
    }
}
function editPac($email,$celular){
    include "conexao.php";
    $query ="UPDATE tb_paciente  set email=?, numero1=?  where sus = ?";
    $sql=$conexao->prepare($query);
    $sql->bind_param("ssi",$email,$celular,$_SESSION['idpaciente']);
    $sql->execute();
    $sql->close();
    $conexao->close();
    return "Informacoes Editadas";
}
function updatend($cep,$rua,$bairro,$cidade,$numero){
    $recebe=idEnde();
    include "conexao.php";
    $query ="UPDATE tb_endereco  set cep = ?,rua=?, bairro=?, cidade=?, numero =?  where cod_endereco = ?";
    $sql=$conexao->prepare($query);
    $sql->bind_param("ssssii",$cep,$rua,$bairro,$cidade,$numero,$recebe);
    $sql->execute();
    $sql->close();
    $conexao->close();

}
function idEnde(){
    include "conexao.php";
    $query = "SELECT cod_endereco from tb_paciente where sus = ?";
    $sql=  $conexao->prepare($query);
    $sql->bind_param("i",$_SESSION['idpaciente']);
    $sql->execute();
    $sql->bind_result($id);
    $result= 0;
    while($sql->fetch()){
        $result = $id;
    }
    $sql->close();
    $conexao->close();
    return $result;

}
   echo json_encode(vali());
?>