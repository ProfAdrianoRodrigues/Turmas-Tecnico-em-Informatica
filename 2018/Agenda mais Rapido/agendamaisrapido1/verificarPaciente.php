<?php

function val_login_pac(){
    include"verificarPaciente_banco.php";
$sus = $_POST['sus1'];
$senha = $_POST['senha1'];
if(empty ($sus)){
    return "SUS VAZIO";
}
elseif(empty ($senha)){
    return "SENHA ESTÁ VAZIO";
}
else{
$msg = verPacBanco($sus,$senha);
}

return $msg;

}
    echo val_login_pac();








?>
