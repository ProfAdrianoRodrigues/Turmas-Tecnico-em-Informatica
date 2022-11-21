<?php

$bdservidor = '127.0.0.1';
$bdusuario = 'root';
$bdsenha = '';
$bdbanco = 'AGENDA_MAIS';

$conexao = mysqli_connect($bdservidor, $bdusuario, $bdsenha, $bdbanco);

if (mysqli_connect_errno($conexao)){

	echo "Problemas para conectar! verifique a conexão.";
	die();

}

?>