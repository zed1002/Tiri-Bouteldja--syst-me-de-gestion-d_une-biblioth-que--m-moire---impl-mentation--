
    <?php
    session_start();
    include_once "..\connexion\connexion.php";
    include "../book/navigation.html";
    
    
    $id='';
    $nom='';
    $prenom='';
    $tel='';
    $email='';
    $points='';
    ?>

<?php


if (isset($_GET['edit'])){
$id=$_GET['edit'];
  

$sql="SELECT * FROM abonne WHERE id=$id ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        
            $row= $result->fetch_array();
            $id=$row['id'];
            $nom=$row['nom'];
            $prenom=$row['prenom'];
            $email=$row['email'];
            $tel=$row['tel'];
            $points=$row['points'];

         
        
    }
    
    
}

if(isset($_POST['update'])){
    
 $id=$_POST['id'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $tel=$_POST['tel'];
 $email=$_POST['email'];
 $points=$_POST['points'];
 
 $sql="UPDATE abonne SET id='$id', nom='$nom', prenom='$prenom', tel='$tel', email='$email', points='$points' where id=$id ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        $_SESSION['message']="record has been updated";
        $_SESSION['msg_type']="success";

        header("Location:http://localhost/gestiondunebibliotheque/user/userslist.php");
    }
 
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/styles.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body style="margin:7%">
  <div class="form-img" style="margin-top:5px; width: 400px;margin-left: 0;">
        <img src="http://localhost/gestiondunebibliotheque/image/Status update(1).GIF" alt="al">
      </div>
<form  method="POST">
    
        <div class="forms-content">

        <h1>Update user</h1>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">id</label>
                </div>
                <div class="field-body">
                  <div class="field">

                      <input class="input" name="id" type="number" placeholder="id" value="<?php echo $id;?>" readonly required='required' >
                     
                  </div>  
                </div>
              </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Last Name </label>
                </div>
                <div class="field-body">
                  <div class="field">

                      <input class="input" name="nom" type="text" placeholder="Entrer votre nom" value="<?php echo $nom;?>" required='required'>
                      
                  </div>
                </div>
            </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">First name</label>
                    </div>
                    <div class="field-body">
                      <div class="field">

                          <input class="input" name="prenom" type="text" placeholder="Entrer votre prenom" value="<?php echo $prenom;?>" required='required'>
                         
                    </div>
                </div>
              </div>

              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Email</label>
                </div>
                <div class="field-body">
                  <div class="field">

                        <input class="input " name="email" type="email" placeholder="Email" value="<?php echo $email;?>" required='required'>
                      
                  </div>
              </div>
              </div>

              <div class="field is-horizontal">
                <div class="field-label is-normal"><label class="label">phone</label></div>
                <div class="field-body">
                  <div class="field is-expanded">
                    <div class="field has-addons">
                      <p class="control">
                        <a class="button is-static">
                          +213
                        </a>
                      </p>
                      <p class="control is-expanded">
                        <input class="input" name="tel" type="number" placeholder="Entrer votre numéro de telephone" value="<?php echo $tel;?>" required='required'>
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
                 
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">points</label>
                </div>
                <div class="field-body">
                  <div class="field">

                      <input class="input" name="points" type="number" placeholder="points" value="<?php echo $points;?>" required='required'>
                      
                  </div>  
                </div>
              </div>

              <div class="field-body">
                 
                  <div class="field is-horizontal">
                <div class="field-label">
                  <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                    <button class="button is-danger is-rounded is-medium floated-img" type="cancel">
                 <a style=" color:white;" href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>
                 </button>

              <button class="button is-primary is-rounded is-medium floated-img" type="submit" name="update" >
              Update 
                      </button>
                      </div>
                  </div>
                </div>
              </div>
              
</div>
</div>
               



      </form>
</body>
</html>