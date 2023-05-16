<?php
session_start();
include_once "..\connexion\connexion.php";

if (isset($_GET['delete'])){
$refm_exp=$_GET['delete'];
$ref_fk=$_GET['deletex'];


$sql="DELETE FROM exemplaireth WHERE refm_exp=$refm_exp ";


    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql="UPDATE memoire SET nbrexp_m= nbrexp_m-1 WHERE ref_m=$ref_fk; ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
            
        }
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location:http://localhost/gestiondunebibliotheque/thesis/thesislist.php");}
}
?>