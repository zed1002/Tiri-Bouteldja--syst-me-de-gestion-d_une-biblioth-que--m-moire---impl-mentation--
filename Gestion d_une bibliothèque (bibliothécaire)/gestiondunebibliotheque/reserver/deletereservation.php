<?php
session_start();
include_once "..\connexion\connexion.php";
if (isset($_GET['delete'])){
$id=$_GET['delete'];
$idr=$_GET['deleter'];
$email=$_SESSION['email'];

  

$sql="DELETE FROM reserver WHERE id=$id && idreservation=$idr  ";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location:http://localhost/gestiondunebibliotheque/reserver/reservationlist");}
}


if (isset($_GET['deleterp'])){
    $id=$_GET['deleterp'];
    $idr=$_GET['deleter'];
    $re=$_GET['deleterppr'];
    $g=$_GET['deleterpp'];
    $ref=$_GET['ref_fk'];
    $genre=$_GET['genre'];
    $email=$_GET['emailrpp'];
      
    
    $sql="DELETE FROM reserver WHERE id=$id && idreservation=$idr  ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
            
        }
        
        else{
        $_SESSION['message']="record has been deleted";
        $_SESSION['msg_type']="danger";
        

        if($g=='livre'){
            $sql0="UPDATE exemplaire SET etat='available' where ref_fk=$re ";
                          if(!mysqli_query($bdd,$sql0)){
                              die('fail:' .$bdd->error);}
                              header("Location:http://localhost/gestiondunebibliotheque/reserver/cancelreservation?email=$email");
                            
                            
                            
                            }
          
                              if($g=='memoire'){
            $sql0="UPDATE exemplaireth SET etat='available' where ref_fk=$re ";
                          if(!mysqli_query($bdd,$sql0)){
                              die('fail:' .$bdd->error);}
                              header("Location:http://localhost/gestiondunebibliotheque/reserver/cancelreservation?email=$email");
                            }
          
          
                              if($g=='revue'){
            $sql0="UPDATE exemplaireth SET etat='available' where ref_fk=$re ";
                          if(!mysqli_query($bdd,$sql0)){
                              die('fail:' .$bdd->error);}
                              header("Location:http://localhost/gestiondunebibliotheque/reserver/cancelreservation?email=$email");
                            }
    
       // header("Location:http://localhost/gestiondunebibliotheque/reserver/reservationlist");
    }
    }




    


?>