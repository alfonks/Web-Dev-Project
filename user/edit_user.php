<?php

session_start();
if(!isset($_SESSION['loginas'])){
    header('location:../form_login.php');
}else{
    if($_SESSION['loginas'] != "Mahasiswa"){
        header('location:../admin/index.php');
    }
}


?>