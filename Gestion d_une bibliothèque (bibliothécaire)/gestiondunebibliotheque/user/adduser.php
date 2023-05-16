<?php
session_start();
include_once "..\connexion\connexion.php";

$idd=0;

if(isset ($_POST['ajouter']) ){
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];

$query = "SELECT * FROM abonne
          where id='$id'";

$result = mysqli_query($bdd,$query);

    if(mysqli_num_rows($result) > 0){
        echo"<script language=\"javascript\">";
        echo"alert('user already exists')";
       
        echo"</script>";
        echo"<script language=\"javascript\">";
        echo 'window.location.href = " http://localhost/gestiondunebibliotheque/user/userslist.php";';
        echo"</script>";
     exit;
    }


  else{
    $sql="INSERT INTO abonne(id,nom,prenom,tel,email) VALUES('$id','$nom','$prenom',$tel,'$email')";
   
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    else{
        $sql1="INSERT INTO user(user,password,email,status) VALUES('$id','','$email',0)";
   
    if(!mysqli_query($bdd,$sql1)){
        die('fail:' .$bdd->error);
         
    }
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/user/userslist.php");
    }
}
}

if(isset($_POST['update'])){
    $idd=$_POST['idd'];
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    
    $sql="UPDATE abonne SET id='$id', nom='$nom', prenom='$prenom', tel='$tel', email='$email' WHERE idd=$idd ";
   $result=mysqli_query($bdd,$sql);
       if(!mysqli_query($bdd,$sql)){
           die('fail:' .$bdd->error);
           
       }
       else{
        $_SESSION['message']="record has been saved";
        $_SESSION['msg_type']="success";

        header("Location: http://localhost/gestiondunebibliotheque/user/userslist.php");
    }
    
   }

?>