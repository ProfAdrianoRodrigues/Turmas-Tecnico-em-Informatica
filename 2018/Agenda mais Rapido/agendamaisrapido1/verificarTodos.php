<?php

function val_login_todos(){         
    include "verificarTodos_banco.php";


if(empty ($_POST['usuario'])){
    return "USUÁRIO VAZIO";
}
else{
    $usuario = $_POST['usuario'];
}

if(empty ($_POST['senha1'])){
    return "SENHA ESTÁ VAZIO";
}
else{
    $senha = $_POST['senha1'];
$msg = verTodBanco($usuario,$senha);
}
return $msg;
}
    print_r(val_login_todos());








?>
