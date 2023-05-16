<?php
include_once "..\connexion\connexion.php";

$ref_fk=$_POST['ref_fk'];

echo $ref_fk;
?>

<?php
$pre=$_POST['pre'];
$id=$_POST['id'];
$ref_expp=$_POST['ref'];
$dp=$_POST['dp'];
$dr=$_POST['dr'];
$answer=$_POST['answer'];
$genre=$_POST['genre'];

if (isset($pre)){
    $sql="INSERT INTO emprunt(idu,ref_expe,ref_fk,dp,dr,answer,genre) VALUES('$id','$ref_expp','$ref_fk','$dp','$dr','$answer','$genre')";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
       }
       else {
if ($genre=='livre'){
        $sql1="UPDATE livre SET nbrexp=nbrexp-1 where ref=$ref_fk";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
           }
           else{
            $sql0="UPDATE exemplaire SET etat='borrowed' where ref_exp=$ref_expp; ";
            if(!mysqli_query($bdd,$sql0)){
                die('fail:' .$bdd->error);}
               else{
                $sql0="UPDATE abonne SET nbremp=nbremp+1 where id=$id; ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}
                    else{
                header("Location: http://localhost/gestiondunebibliotheque/preter/issuelist.php");
               }}
       }
    }
    else{
        if ($genre=='memoire'){
            $sql1="UPDATE memoire SET nbrexp_m=nbrexp_m-1 where ref_m=$ref_fk";
            if(!mysqli_query($bdd,$sql1)){
                die('fail:' .$bdd->error);
               }
               else{
                $sql0="UPDATE exemplaireth SET etat='borrowed' where refm_exp=$ref_expp; ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}
                   else{
                    $sql0="UPDATE abonne SET nbremp=nbremp+1 where id=$id; ";
                    if(!mysqli_query($bdd,$sql0)){
                        die('fail:' .$bdd->error);}
                        else{
                    header("Location: http://localhost/gestiondunebibliotheque/preter/issuelist.php");
                   }}
           }
        }

        else{
            if ($genre=='revue'){
                $sql1="UPDATE revue SET nbrexp_r=nbrexp_r-1 where ref_r=$ref_fk";
                if(!mysqli_query($bdd,$sql1)){
                    die('fail:' .$bdd->error);
                   }
                   else{
                    $sql0="UPDATE exemplairej SET etat='borrowed' where refr_exp=$ref_expp; ";
                    if(!mysqli_query($bdd,$sql0)){
                        die('fail:' .$bdd->error);}
                       else{
                        $sql0="UPDATE abonne SET nbremp=nbremp+1 where id=$id; ";
                        if(!mysqli_query($bdd,$sql0)){
                            die('fail:' .$bdd->error);}
                            else{
                        header("Location: http://localhost/gestiondunebibliotheque/preter/issuelist.php");
                       }}
               }
            }
        }

    }
}
       
     
      /*else{
  
        
         $sql0="UPDATE exemplaire SET etat='preter' where ref_exp=$ref_expp; ";
         
         $result0=mysqli_query($bdd,$sql0);
         if(!mysqli_query($bdd,$sql0)){
             die('fail:' .$bdd->error);}
            else{
            $sql1="UPDATE livre SET nbrexp=nbrexp-1 where ref=$ref_fk; ";
             $result1=mysqli_query($bdd,$sql1);
             if(!mysqli_query($bdd,$sql1)){
                 die('fail:' .$bdd->error);}
                
                 header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");
                }
         }*/
        }
       
             
         
         
     
          
        
    
  
     