<?php
session_start();

function sairAdm(){
    if(isset($_SESSION["idadm"])){
        unset($_SESSION["idadm"]);

    }
}


sairAdm();


?>



