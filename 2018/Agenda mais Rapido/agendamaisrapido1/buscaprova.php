<?php
session_start();
include_once('conexao.php');
	
	if((!empty($_POST))){

		$busca = $_POST['busca'];
		

		$sql = "SELECT * FROM TB_LOGIN WHERE cpf = '$busca' OR email = '$busca' LIMIT 1";
		$query = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($query);



		if(!empty($resultado)){

			$usuario = $resultado['usuario'];			
			$email = $resultado['email'];
			$cpf = $resultado['cpf'];
			$rg = $resultado['rg'];
			$dd = $resultado['dd'];
			$tel = $resultado['tel'];
			$senha = $resultado['senha'];
			$sexo = $resultado['sexo'];









			
			$_SESSION['usuario'] =  $usuario;
			$_SESSION['email'] =  $email;
			$_SESSION['cpf'] =  $cpf;
			$_SESSION['rg'] =  $rg;
			$_SESSION['dd'] =  $dd;
			$_SESSION['tel'] =  $tel;
			$_SESSION['senha'] =  $senha;
			$_SESSION['sexo'] =  $sexo;










			header("Location: Prova.php");
		}

	




	}

?>