<?php
session_start();
include_once "..\connexion\connexion.php";
if (isset($_GET['delete'])){
$id=$_GET['delete'];
  

$sql="DELETE FROM abonne WHERE id=$id ";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql1="DELETE FROM user WHERE user=$id ";
    if(!mysqli_query($bdd,$sql1)){
        die('fail:' .$bdd->error);
        
    }
    else{
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location:http://localhost/gestiondunebibliotheque/user/userslist.php");}
}}
?>