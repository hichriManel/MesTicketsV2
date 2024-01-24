<?php
session_start();
if (isset($_SESSION["email"])) {
    if ($_SESSION['type'] == "client") {
        header("location:ajouterticket.php");
    } else {
        header("location:dashboard.php");
    }
} else {
    header("location:login.php");
}
