<?php
include_once "..\connexion\connexion.php";
include "..\user/header.html";?>

<?php
$id=70;
$ref_expp=760;
$dp='2020-05-07';
$dr='2020-05-22';
$answer='good';
$sql="INSERT INTO emprunt(idu,ref_expe,dp,dr,answer) VALUES('$id','$ref_expp','$dp','$dr','$answer')";
if(!mysqli_query($bdd,$sql)){
    die('fail:' .$bdd->error);
   }
   else {
       echo 'hi';
   }

/*<?php
$id=90;
$ref_expp=960;
$dp='2020-05-07';
$dr='2020-05-22';
$answer='good';

 
 $sql="INSERT INTO preter(id,ref_expp,dp,dr,answer) VALUES('$id','$ref_expp','$dp','$dr','$answer')";
 $result=mysqli_query($bdd,$sql);
     if(!mysqli_query($bdd,$sql)){
        $sql1="UPDATE livre SET nbrexp=nbrexp-1 where ref=1";
        $result=mysqli_query($bdd,$sql1);
    if(!mysqli_query($bdd,$sql1)){
        die('fail:' .$bdd->error);
       }
        echo'hi';
        $sql2="UPDATE livre SET nbrexp=nbrexp+1 where ref=1";
        $result=mysqli_query($bdd,$sql2);
         
      }
      else {header("Location: http://localhost/Gestion%20d'une%20biblioth%C3%A8que/book/booklist.php");
      }
      
      ?>
*/

