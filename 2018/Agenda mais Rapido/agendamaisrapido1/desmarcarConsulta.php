<?php
$idConsulta = $_POST["idConsulta"];
include"conexao.php";
$query = "UPDATE tb_consulta set situacao = 'false' where cod_consulta = ?";
$sql = $conexao->prepare($query);
$sql->bind_param("i",$idConsulta);
$sql->execute();
$sql->close();
$conexao->close();
echo"Desmarcado";
?>