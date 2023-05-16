<?php
session_start();
include_once "..\connexion\connexion.php";
$idd=0;
?>

<?php
if(isset ($_POST['ajouter']) ){
    
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $edi=$_POST['edition'];
    $ref_exp=$_POST['ref_exp'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
    $query = "SELECT * FROM exemplaire
          where ref_exp='$ref_exp'";

$result = mysqli_query($bdd,$query);

    if(mysqli_num_rows($result) > 0){
        echo"<script language=\"javascript\">";
        echo"alert('book copy already exists')";
       
        echo"</script>";
        echo"<script language=\"javascript\">";
        echo 'window.location.href = " http://localhost/gestiondunebibliotheque/book/booklist.php";';
        echo"</script>";
     exit;
    }


  else{
  
    $sql="INSERT INTO exemplaire(titre,auteur,edi,ref_exp,annee,ref_fk,emp) VALUES('$titre','$auteur','$edi',$ref_exp,$annee,$ref_fk,'$emp')";
echo $ref_fk;
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $sql="UPDATE livre SET nbrexp= nbrexp+1 WHERE ref=$ref_fk; ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
             
        }
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");
    }
   
}}



if(isset($_POST['update'])){
    $idd=$_POST['idd'];
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $edi=$_POST['edition'];
    $ref=$_POST['ref'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
    
    $sql="UPDATE livre SET titre='$titre', auteur='$auteur', edi='$edi', ref='$ref', annee='$annee', nbrexp='$nbrexp', emp='$emp', prix='$prix' WHERE idd=$idd ";
   $result=mysqli_query($bdd,$sql);
       if(!mysqli_query($bdd,$sql)){
           die('fail:' .$bdd->error);
           
       }
       else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/book/booklist.php");
    }
    
   }







if(isset ($_POST['ajouterM']) ){
    
    $titre=$_POST['titre'];
    $realiser_par=$_POST['realiser_par'];
    $specialite=$_POST['specialite'];
    $ref_exp=$_POST['refm_exp'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    


    $query = "SELECT * FROM exemplaireth
    where refm_exp='$ref_exp'";

$result = mysqli_query($bdd,$query);

if(mysqli_num_rows($result) > 0){
  echo"<script language=\"javascript\">";
  echo"alert('thesis copy already exists')";
 
  echo"</script>";
  echo"<script language=\"javascript\">";
  echo 'window.location.href = " http://localhost/gestiondunebibliotheque/thesis/thesislist.php";';
  echo"</script>";
exit;
}


else{
    
  
    $sql="INSERT INTO exemplaireth(titre,realiser_par,specialite,refm_exp,annee,ref_fk,emp) VALUES('$titre','$realiser_par','$specialite',$ref_exp,$annee,$ref_fk,'$emp')";
echo $ref_fk;
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $sql="UPDATE memoire SET nbrexp_m= nbrexp_m+1 WHERE ref_m=$ref_fk; ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
             
        }
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
    }
   
}}

if(isset($_POST['updateM'])){
    $idd=$_POST['idd'];
    $titre=$_POST['titre_m'];
    $realiser_par=$_POST['reliser_par'];
    $specialite=$_POST['specialite'];
    $ref=$_POST['ref_m'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
    
    $sql="UPDATE memoire SET titre='$titre', realiser_par='$realiser_par', specialite='$specialite', ref_m='$ref', annee_m='$annee', nbrexp_m='$nbrexp', emp_m='$emp' WHERE idd=$idd ";
   $result=mysqli_query($bdd,$sql);
       if(!mysqli_query($bdd,$sql)){
           die('fail:' .$bdd->error);
           
       }
       else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
    }
    
   }










if(isset ($_POST['ajouterR']) ){
    
    $titre=$_POST['titre'];
    
    $refr_exp=$_POST['refr_exp'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
    $query = "SELECT * FROM exemplairej
    where refr_exp='$refr_exp'";

$result = mysqli_query($bdd,$query);

if(mysqli_num_rows($result) > 0){
  echo"<script language=\"javascript\">";
  echo"alert('journal copy already exists')";
 
  echo"</script>";
  echo"<script language=\"javascript\">";
  echo 'window.location.href = " http://localhost/gestiondunebibliotheque/journal/journallist.php";';
  echo"</script>";
exit;
}


else{
  
    $sql="INSERT INTO exemplairej(titre,refr_exp,annee,ref_fk,emp) VALUES('$titre',$refr_exp,$annee,$ref_fk,'$emp')";
echo $ref_fk;
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $sql="UPDATE revue SET nbrexp_r= nbrexp_r+1 WHERE ref_r=$ref_fk; ";
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
             
        }
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/journal/journallist.php");
    }
   
}}

if(isset($_POST['updateR'])){
    $idd=$_POST['idd'];
    $ref=$_POST['ref_r'];
    $titre=$_POST['titre_r'];
    $prix=$_POST['prix_r'];
    $annee=$_POST['annee_r'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp_r'];
    
    $sql="UPDATE revue SET titre_r='$titre', ref_r='$ref', annee_r='$annee', nbrexp_r='$nbrexp', emp_r='$emp', prix_r=$prix WHERE idd=$idd ";
   $result=mysqli_query($bdd,$sql);
       if(!mysqli_query($bdd,$sql)){
           die('fail:' .$bdd->error);
           
       }
       else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/journal/journallist.php");
    }
    
   }

?>