<?php 
session_start();
    $_SESSION['loggedin']=false;
    header('Location: http://localhost/gestiondunebibliotheque/login/login.php');
?>