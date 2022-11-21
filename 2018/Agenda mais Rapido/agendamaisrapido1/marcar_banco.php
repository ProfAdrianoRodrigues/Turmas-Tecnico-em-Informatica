   <?php
   session_start();
   function cadConsulta($especialidade,$unidade,$data,$horario){
    include"conexao.php";
     if(verSUS($especialidade,$horario,$data) == false){
         return "Consulta com esse número ja marcada, para esse horario, essa especialidade e dia";
     }
    $query = "INSERT INTO TB_CONSULTA(DIA,UNIDADE,ESPECIALIDADE,HORARIO,SUS) values(?,?,?,?,?) ";
    $SQL = $conexao->prepare($query);
    $SQL->bind_param("ssssi",$data,$unidade,$especialidade,$horario,$_SESSION["idpaciente"]);
    $SQL->execute();
    return"Consulta marcada com sucesso verifique seu email para mais informacoes";
   }
   function verSUS($especialidade, $horario,$dia){
    include"conexao.php";
    $query = "SELECT * FROM TB_CONSULTA WHERE SUS = ? AND ESPECIALIDADE = ? AND HORARIO = ? and DIA = ?";
    $SQL = $conexao->prepare($query);
    $SQL->bind_param("isss",$_SESSION["idpaciente"],$especialidade,$horario,$dia);
    $SQL->execute();
    $SQL->store_result();
    $resultado = $SQL->num_rows();
    if($resultado == 0){
        return true;
    }
    else{
        return false;
    }
   }
  
   
   ?>