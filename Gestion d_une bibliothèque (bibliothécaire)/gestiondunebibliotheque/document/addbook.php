
<?php
session_start();
include_once "../connexion/connexion.php";
$idd=0;
?>
<?php
if(isset ($_POST['ajouter']) ){
    
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $edi=$_POST['edition'];
    $ref=$_POST['ref'];
    $annee=$_POST['annee'];
    $nbrexp=$_POST['nbrexp'];
    $emp=$_POST['emp'];
    $prix=$_POST['prix'];
    $des=$_POST['des'];
    $img=$_POST['image-bk'];



    $query = "SELECT * FROM livre
          where ref='$ref'";

$result = mysqli_query($bdd,$query);

    if(mysqli_num_rows($result) > 0){
        echo"<script language=\"javascript\">";
        echo"alert('book already exists')";
       
        echo"</script>";
        echo"<script language=\"javascript\">";
        echo 'window.location.href = " http://localhost/gestiondunebibliotheque/book/booklist.php";';
        echo"</script>";
     exit;
    }


  else{
  
    $sql="INSERT INTO livre(titre,auteur,edi,ref,annee,nbrexp,emp,prix,dis,img) VALUES('$titre','$auteur','$edi',$ref,$annee,$nbrexp,'$emp',$prix,'$des','$img')";

    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
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
    $nbrexp=$_POST['nbrexp'];
    $emp=$_POST['emp'];
    $prix=$_POST['prix'];
    
    $sql="UPDATE livre SET titre='$titre', auteur='$auteur', edi='$edi', ref='$ref', annee='$annee', nbrexp='$nbrexp', emp='$emp', prix='$prix' WHERE idd=$idd ";
   $result=mysqli_query($bdd,$sql);
       if(!mysqli_query($bdd,$sql)){
           die('fail:' .$bdd->error);
           
       }
       else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location:  http://localhost/gestiondunebibliotheque/book/booklist.php");
    }
    
   }



if(isset ($_POST['ajouterM']) ){
    
    $titre=$_POST['titre_m'];
    $realiser_par=$_POST['realiser_par'];
    $specialite=$_POST['specialite'];
    $ref=$_POST['ref_m'];
    $annee=$_POST['annee_m'];
    $nbrexp=$_POST['nbrexp_m'];
    $emp=$_POST['emp_m'];
    $type=$_POST['type'];
   



    $query = "SELECT * FROM memoire
    where ref_m='$ref'";

$result = mysqli_query($bdd,$query);

if(mysqli_num_rows($result) > 0){
  echo"<script language=\"javascript\">";
  echo"alert('thesis already exists')";
 
  echo"</script>";
  echo"<script language=\"javascript\">";
  echo 'window.location.href = " http://localhost/gestiondunebibliotheque/thesis/thesislist.php";';
  echo"</script>";
exit;
}


else{
  
    $sql="INSERT INTO memoire(titre_m,realiser_par,specialite,ref_m,annee_m,nbrexp_m,emp_m,type) VALUES('$titre','$realiser_par','$specialite',$ref,$annee,$nbrexp,'$emp','$type')";

    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
    }
   
}}

if(isset($_POST['updateM'])){
    $idd=$_POST['idd'];
    $titre=$_POST['titre_m'];
    $realiser_par=$_POST['rea$realiser_par'];
    $specialite=$_POST['specialite'];
    $ref=$_POST['ref_m'];
    $annee=$_POST['annee_m'];
    $nbrexp=$_POST['nbrexp_m'];
    $emp=$_POST['emp_m'];
    $type=$_POST['type'];
    
    
    $sql="UPDATE memoire SET titre_m='$titre', realiser_par='$realiser_par', specialite='$specialite', ref_m='$ref', annee_m='$annee', nbrexp_m='$nbrexp', emp_m='$emp', type='$type' WHERE idd=$idd ";
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
    
    $titre=$_POST['titre_r'];
    $ref=$_POST['ref_r'];
    $annee=$_POST['annee_r'];
    $nbrexp=$_POST['nbrexp_r'];
    $emp=$_POST['emp'];
    $prix=$_POST['prix'];
    $img=$_POST['image-r'];
   


    $query = "SELECT * FROM revue
    where ref_r='$ref'";

$result = mysqli_query($bdd,$query);

if(mysqli_num_rows($result) > 0){
  echo"<script language=\"javascript\">";
  echo"alert('journal already exists')";
 
  echo"</script>";
  echo"<script language=\"javascript\">";
  echo 'window.location.href = " http://localhost/gestiondunebibliotheque/journal/journallist.php";';
  echo"</script>";
exit;
}


else{
    
  
    $sql="INSERT INTO revue (titre_r,ref_r,annee_r,nbrexp_r,emp,prix,img) VALUES('$titre',$ref,$annee,$nbrexp,'$emp',$prix,'$img')";

    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/journal/journallist.php");
    }
   
}}

if(isset($_POST['updateR'])){
    $idd=$_POST['idd'];
    $titre=$_POST['titre_r'];
    $ref=$_POST['ref_r'];
    $annee=$_POST['annee_r'];
    $nbrexp=$_POST['nbrexp_r'];
    $emp=$_POST['emp'];
    $prix=$_POST['prix_r'];
    
    $sql="UPDATE revue SET titre_r='$titre', ref_r='$ref', annee_r='$annee', nbrexp_r='$nbrexp', emp='$emp',prix_r=$prix WHERE idd=$idd ";
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