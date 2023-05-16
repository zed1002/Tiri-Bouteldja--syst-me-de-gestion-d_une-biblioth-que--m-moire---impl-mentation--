<?php
session_start();
include_once "..\connexion\connexion.php";?>

<?php
if (isset($_GET['delete'])){
$ref=$_GET['delete'];
  

$sql="DELETE FROM livre WHERE ref=$ref ";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql1="DELETE FROM exemplaire WHERE ref_fk=$ref  ";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
            
        }
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");}
}
?>



<?php

if (isset($_GET['deleteM'])){
$ref=$_GET['deleteM'];
  

$sql="DELETE FROM memoire WHERE ref_m=$ref ";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql1="DELETE FROM exemplaireth WHERE ref_fk=$ref  ";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
            
        }
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location: http://localhost/gestiondunebibliotheque/thesis/thesislist.php");}
}
?>


<?php

if (isset($_GET['deleteR'])){
$ref=$_GET['deleteR'];
  

$sql="DELETE FROM revue WHERE ref_r=$ref ";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    
    else{
        $sql1="DELETE FROM exemplairej WHERE ref_fk=$ref  ";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
            
        }
    $_SESSION['message']="record has been deleted";
    $_SESSION['msg_type']="danger";

    header("Location: http://localhost/gestiondunebibliotheque/journal/journallist.php");}
}
?>