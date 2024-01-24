<?php
session_start();



if ($_SESSION['type'] == "client") {
    header("location:ajouterticket.php");
} else {
    header("location:dashboard.php");
}
