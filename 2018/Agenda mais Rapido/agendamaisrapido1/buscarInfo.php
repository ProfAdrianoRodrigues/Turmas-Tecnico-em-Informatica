<?php
session_start();
function buscar(){
    include"conexao.php";
    $informacoes = Array();
    $query  = "SELECT DIA,UNIDADE,ESPECIALIDADE,HORARIO,COD_CONSULTA  from tb_consulta where SUS = ? and  situacao = 'true'";
    $sql =  $conexao->prepare($query);
    $sql->bind_param("i",$_SESSION["idpaciente"]);
    $sql->execute();
    $sql->bind_result($DIA,$UNIDADE,$ESPECIALIDADE,$HORARIO,$COD_CONSULTA);
    $n = 0;
    while($sql->fetch()){
        $informacoes["dia"][$n] = $DIA;
        $informacoes["unidade"][$n] = $UNIDADE;
        $informacoes["especialidade"][$n] = $ESPECIALIDADE;
        $informacoes["horario"][$n]= $HORARIO;
        $informacoes["cod_consulta"][$n]= $COD_CONSULTA;
        $n++;
    }
    $informacoes["vezes"] = $n;
    return $informacoes;
}
echo json_encode(buscar());
?>