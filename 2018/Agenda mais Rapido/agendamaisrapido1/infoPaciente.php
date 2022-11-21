<?php       

session_start();
 function procurar(){
    include 'conexao.php';

    $query =  " SELECT pac.email,ende.cep, ende.rua, ende.bairro, ende.cidade,ende.numero,pac.numero2 
    from tb_paciente pac inner join tb_endereco ende on ende.cod_endereco = pac.cod_endereco
     where pac.sus = ?" ;

     $sql = $conexao->prepare($query);
     $sql->bind_param("i",$_SESSION["idpaciente"]);
     $sql->execute();
     $sql->bind_result($email,$cep,$rua,$bairro,$cidade,$numero,$numero2);
     $info= Array();

     while( $sql->fetch()){
        $info["email"] = $email;
        $info["cep"]=$cep;
        $info["rua"]=$rua;
        $info["bairro"]=$bairro;
        $info["cidade"]=$cidade;
        $info["numero"]=$numero;
        $info["numero2"]=$numero2;
         
        
     } 
      return $info;
 }
    echo json_encode(procurar());




?>