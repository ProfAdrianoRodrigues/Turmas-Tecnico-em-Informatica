<?php
session_start();

function sairlogin(){
    if(isset($_SESSION["idmedico"])){
        unset($_SESSION["idmedico"]);

    }
}


sairlogin();
?>