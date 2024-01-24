<?php
session_start();
if($_SESSION['email']==""){
    header("location:login.php");
}else{
    if ($_SESSION['type'] == "client") {
        header("location:ajouterticket.php");
    } else {
        header("location:dashboard.php");
    }
}

