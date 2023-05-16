<?php
include_once "..\connexion\connexion.php";

if (isset($_GET['delete'])){
    
  $id=$_GET['delete'];
    
  
  $sql1="DELETE FROM news WHERE idarticle=$id ";
      if(!mysqli_query($bdd,$sql1)){
          die('fail:' .$bdd->error);
          
      }
      else{
      
      header("Location: http://localhost/gestiondunebibliotheque/article/article.php");
    }
  
}
?>