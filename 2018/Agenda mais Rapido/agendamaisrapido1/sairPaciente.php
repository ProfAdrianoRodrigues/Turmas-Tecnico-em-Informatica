<?php
session_start();

function sairlogin(){
    if(isset($_SESSION["idpaciente"])){
        unset($_SESSION["idpaciente"]);

    }
}


sairlogin();
?>