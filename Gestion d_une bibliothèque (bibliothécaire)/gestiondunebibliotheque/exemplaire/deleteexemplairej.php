<?php
session_start();
include_once "..\connexion\connexion.php";

if (isset($_GET['delete'])){
$ref_exp=$_GET['delete'];
$ref_fk=$_GET['deletex'];


$sql="DELETE FROM exemplairej WHERE refr_exp=$ref_exp ";


    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql="UPDATE revue SET nbrexp_r= nbrexp_r-1 WHERE ref_r=$ref_fk; ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
            
        }
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location:http://localhost/gestiondunebibliotheque/journal/journallist.php");}
}
?>