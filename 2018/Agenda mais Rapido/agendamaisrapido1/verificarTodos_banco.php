<?php
session_start();
function verTodBanco($usuario,$senha){
    $msg = pacLog($usuario,$senha);
    if($msg == "Encontrado!"){
        pegarSexo($usuario);
        return "Encontrado Paciente!";
    }else{
        $msg = medLog($usuario,$senha);
        if($msg == "Encontrado!"){
            return "Encontrado Medico!";
        } else{
            $msg = assiLog($usuario,$senha);
            if($msg == "Encontrado!"){
                return "Encontrado Assistente!";
            } else{
                $msg = admLog($usuario,$senha);
                if($msg == "Encontrado!"){
                    return "Encontrado Administrador!";
                }
                else{
                    return "Usuário e Senha não Encontrado!"; 
                }
            }
        }
    }  
}
function pacLog($sus,$senha){
    include'conexao.php';
    $query = "SELECT sus from tb_login_paciente where sus = ? and senha = ?";
    $sql= $conexao-> prepare($query);
    $sql->bind_param("is",$sus,$senha);
    $sql->execute();
    $sql->store_result();
    $msg = "";
    if($sql->num_rows>0){
        $msg = "Encontrado!";
    } else{
        $msg = "Não encontrado";
    }
    $sql->close();
    $conexao->close();
    if($msg == "Encontrado!"){
        $_SESSION["idpaciente"] = $sus;
        return $msg;
    }
    else{
        return $msg;
    }
    
}


function medLog($usuario,$senha){
    include'conexao.php';
    $query = "SELECT id from tb_login_medico  where usuario = ? and senha = ?";
    $sql= $conexao-> prepare($query);
    $sql->bind_param("is",$usuario,$senha);
    $sql->execute();
    $sql->store_result();
    if($sql->num_rows>0){
        $msg = "Encontrado!";
    } else{

        $msg = "Não encontrado";
    }
    $sql->close();
    $conexao->close();
    if($msg == "Encontrado!"){
        $_SESSION["idmedico"] = $usuario;
        return $msg;
    }
    else{
        return $msg;
    }
}
function assiLog($usuario,$senha){
    include'conexao.php';
    $query = "SELECT id from tb_login_assistente where usuario = ? and senha = ?";
    $sql= $conexao-> prepare($query);
    $sql->bind_param("is",$usuario,$senha);
    $sql->execute();
    $sql->store_result();
    if($sql->num_rows>0){
        $msg = "Encontrado!";
    } 
    else{

        $msg = "Não encontrado";
    }
    $sql->close();
    $conexao->close();
    if($msg == "Encontrado!"){
        $_SESSION["idassist"] = $usuarios;
        return $msg;
    }
    else{
        return $msg;
    }
}


function admLog($usuario,$senha){
    include'conexao.php';
    $query = "SELECT id from tb_login_ADM where usuario = ? and senha = ?";
    $sql= $conexao-> prepare($query);
    $sql->bind_param("ss",$usuario,$senha);
    $sql->execute();
    $sql->store_result();
    if($sql->num_rows>0){
        $msg ="Encontrado!";
    } 
    else{
        $msg ="Não encontrado";
    }
    $sql->close();
    $conexao->close();
    if($msg == "Encontrado!"){
        $_SESSION["idadm"] = $usuario;
        return $msg;
    }
    else{
        return $msg;
    }
}

function pegarSexo($sus){
    include"conexao.php";
    $query = "SELECT SEXO FROM TB_PACIENTE WHERE SUS = ?";
    $sql= $conexao-> prepare($query);
    $sql->bind_param("i",$sus);
    $sql->execute();
    $sql-> bind_result($sexo);
    while($sql->fetch()){
        $_SESSION['sexo'] = $sexo; 
    }
    $sql->close();
    $conexao->close();
}

?>