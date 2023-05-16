<?php
include_once "..\connexion\connexion.php";

$ref_fk=$_POST['ref_fk'];

echo $ref_fk;
?>

<?php
$rtn=$_POST['rtn'];
$id=$_POST['id'];
$ref=$_POST['ref'];
$dr=$_POST['dro'];
$answer=$_POST['answer'];
$answer1=$_POST['answer1'];
$genre=$_POST['genre'];

if (isset($rtn)){
    $sql1="DELETE  FROM emprunt where ref_expe=$ref and genre='$genre'";
    if(!mysqli_query($bdd,$sql1)){
        die('fail:' .$bdd->error);
       }else{

    $sql="INSERT INTO retourner(id,ref,dr,etat,genre) VALUES('$id','$ref','$dr','$answer','$genre')";
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
       }
       else {
           
if ($genre=='livre'){

        $sql1="UPDATE livre SET nbrexp=nbrexp+1 where ref=$ref_fk";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
           }
           else{
       
            $sql0="UPDATE exemplaire SET etat='available' where ref_exp=$ref; ";
            if(!mysqli_query($bdd,$sql0)){
                die('fail:' .$bdd->error);}
               else{
                $sql0="UPDATE abonne SET nbremp=nbremp-1 where id=$id; ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}
                    else{
                        $sql10="select * from reserver where ref=$ref_fk and genre='livre' order by drs DESC";
                        $result=mysqli_query($bdd,$sql10);
                        $rowcount=mysqli_num_rows($result);
                        if ($rowcount!=0){
                               while($row = $result->fetch_assoc()){
                                   echo $row['email'];
                                   $sql11="UPDATE exemplaire SET etat='reserved' where ref_exp=$ref; ";
                                   if(!mysqli_query($bdd,$sql11)){
                                       die('fail:' .$bdd->error);}
                                       $date= date("Y-m-d") ;
                                   header("Location: http://localhost/gestiondunebibliotheque/sendmail.php?to=$row[email]&date=$date&ref=$ref");
                               }
                           }
                           else{
                        
                               header("Location: http://localhost/gestiondunebibliotheque/index.php");
                           }
               }}
       }
      
    }

    if ($genre=='memoire'){

        $sql1="UPDATE memoire SET nbrexp_m=nbrexp_m+1 where ref_m=$ref_fk";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
           }
           else{
       
            $sql0="UPDATE exemplaireth SET etat='available' where refm_exp=$ref; ";
            if(!mysqli_query($bdd,$sql0)){
                die('fail:' .$bdd->error);}
               else{
                $sql0="UPDATE abonne SET nbremp=nbremp-1 where id=$id; ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}
                    else{
                        $sql10="select * from reserver where ref=$ref_fk and genre='memoire'; ";
                        $result=mysqli_query($bdd,$sql10);
                        $rowcount=mysqli_num_rows($result);
                           if ($rowcount!=0){
                               while($row = $result->fetch_assoc()){
                                   echo $row['email'];
                                   $sql11="UPDATE exemplaireth SET etat='reserved' where refm_exp=$ref; ";
                                   if(!mysqli_query($bdd,$sql11)){
                                       die('fail:' .$bdd->error);}
                                   header("Location: http://localhost/gestiondunebibliotheque/sendmail.php?to=$row[email]&date=$date&ref=$ref");
                               }
                           }
                           else{
                               header("Location: http://localhost/gestiondunebibliotheque/index.php");
                           }
               }}
       }
       
    }


    if ($genre=='revue'){

        $sql1="UPDATE revue SET nbrexp_r=nbrexp_r+1 where ref_r=$ref_fk";
        if(!mysqli_query($bdd,$sql1)){
            die('fail:' .$bdd->error);
           }
           else{
       
            $sql0="UPDATE exemplairej SET etat='available' where refr_exp=$ref; ";
            if(!mysqli_query($bdd,$sql0)){
                die('fail:' .$bdd->error);}
               else{
                $sql0="UPDATE abonne SET nbremp=nbremp-1 where id=$id; ";
                if(!mysqli_query($bdd,$sql0)){
                    die('fail:' .$bdd->error);}
                    else{
                        $sql10="select * from reserver where ref=$ref_fk and genre='revue'; ";
                        $result=mysqli_query($bdd,$sql10);
                        $rowcount=mysqli_num_rows($result);
                        if ($rowcount!=0){
                               while($row = $result->fetch_assoc()){
                
                                   echo $row['email'];
                                   $sql11="UPDATE exemplairej SET etat='reserved' where refr_exp=$ref; ";
                                   if(!mysqli_query($bdd,$sql11)){
                                       die('fail:' .$bdd->error);}
                                   header("Location: http://localhost/gestiondunebibliotheque/sendmail.php?to=$row[email]&date=$date&ref=$ref");
                               }
                           }
                           else{
                               header("Location: http://localhost/gestiondunebibliotheque/index.php");
                           }
               }}
       }
    }

      
    if ($answer1=='oui'){
        $sql9="UPDATE abonne SET points=points-20 where id=$id; ";
            if(!mysqli_query($bdd,$sql9)){
                die('fail:' .$bdd->error);}
    }
 /*   $sql10="select * from reserver where ref=$ref_fk";
 $result=mysqli_query($bdd,$sql10);
    if ($result!=0){
        while($row = $result->fetch_assoc()){
            echo $row['email'];
            header("Location: http://localhost/gestiondunebibliotheque/sendmail.php?to=$row[email]");
        }
    }
    else{
        header("Location: http://localhost/gestiondunebibliotheque/user/userlist.php");
    }*/
    }
}}

         
     
          
        
    
  
     