<?php
session_start();

function verPacBanco($sus,$senha){
    include ('conexao.php');
    $query = "SELECT * FROM TB_LOGIN_PACIENTE WHERE SUS = ? AND SENHA= ? LIMIT 1";
    $sql= $conexao-> prepare($query);
    $sql-> bind_param("is",$sus,$senha);
    $sql->execute();
    $sql->store_result();
    $resultado = $sql->num_rows(); 
    if( !($resultado)){
        return ("Usuario não Localizado no banco!");
    }
    else{ 
        $_SESSION['idpaciente'] = $sus;
        pegarSexo($sus);
        return "Usuario Encontrado";
    }

    
}
function pegarSexo($sus){
include"conexao.php";
$query = "SELECT SEXO FROM TB_PACIENTE WHERE SUS = ?";
$sql= $conexao-> prepare($query);
$sql-> bind_param("i",$sus);
$sql->execute();
$sql-> bind_result($sexo);
while($sql->fetch()){
$_SESSION['sexo'] = $sexo; 
}

}

?>