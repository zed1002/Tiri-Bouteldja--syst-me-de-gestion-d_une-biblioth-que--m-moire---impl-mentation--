<?php
include_once "..\connexion\connexion.php";




?>

<?php
$res=$_POST['res'];
$id=$_POST['id'];
$drs=$_POST['drs'];
$genre=$_POST['genre'];
$ref=$_POST['ref'];
$email=$_POST['email'];

if (isset($res)){
    $sql="INSERT INTO reserver(id,ref,drs,genre,email) VALUES('$id','$ref','$drs','$genre','$email')";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
       }
       else {
           echo 'hi';
           header("Location: http://localhost/gestiondunebibliotheque/index.php");
/*if ($genre=='livre'){
        $sql1="UPDATE livre SET nbrres=nbrres+1 where ref=$ref";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
           }
           else{
           
                header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");
               }
       
    }
    else{
        if ($genre=='memoire'){
            $sql1="UPDATE memoire SET nbrres_m=nbrres_m+1 where ref_m=$ref";
            if(!mysqli_query($bdd,$sql1)){
                die('fail:' .$bdd->error);
               }
               else{
                
                    header("Location: http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
                   }}
           
        

        else{
            if ($genre=='revue'){
                $sql1="UPDATE revue SET nbrres_r=nbrres_r+1 where ref_r=$ref";
                if(!mysqli_query($bdd,$sql1)){
                    die('fail:' .$bdd->error);
                   }
                   else{
                    
                        header("Location: http://localhost/gestiondunebibliotheque/journal/journallist.php");
                       }}
               
            
        }

    }*/
}

    
        }
       
             
         
         
     
          
        
    
  
     