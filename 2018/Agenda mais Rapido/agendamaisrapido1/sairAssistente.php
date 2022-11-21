<?php
session_start();

function sairlogin(){
    if(isset($_SESSION["idassist"])){
        unset($_SESSION["idassist"]);

    }
}


sairlogin();
?>