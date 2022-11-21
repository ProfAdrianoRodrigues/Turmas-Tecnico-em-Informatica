<?php
function validarconsulta(){
    include ("marcar_banco.php");
    $nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$unidade = $_POST['unidade'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$email = $_POST['email'];
$tel = $_POST['celular'];


if(empty ($nome)){
    return "NOME VAZIO";
}
elseif(empty ($especialidade)){
    return "ESPECIALIDADE VAZIA";
}
elseif(empty ($unidade)){
    return "CAMPO UNIDADE VAZIO";
}
elseif(empty ($data)){
    return "DATA VAZIA";
}
elseif(empty ($horario)){
    return "HORÁRIO VAZIO";
}
elseif(empty ($email)){
    return "E-MAIL VAZIO";
}
elseif(empty ($tel)){
    return "TELEFONE VAZIO";

}
elseif($_SESSION["sexo"] == 'M' && $especialidade == "Ginecologia"){
    return "Pessoas do sexo masculino não podem marcar ginecologia";
}
else{
    $msg = cadConsulta($especialidade,$unidade,$data,$horario);
}

return $msg;

}
echo json_encode(validarconsulta());
?>