<?php
    session_start();
    include_once "..\connexion\connexion.php";
    include "../book/navigation.html"  ;  
    
    $ref='';
    $emp='';
    $titre='';
    $auteur='';
    $edition='';
    $nbrexp='';
    $annee='';
    $prix='';
    ?>

<?php


if (isset($_GET['edit'])){
$ref=$_GET['edit'];
  

$sql="SELECT * FROM livre WHERE ref=$ref ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        
            $row= $result->fetch_array();
            $ref= $row['ref'];
            $emp=$row['emp'];
            $titre= $row['titre'];
             $auteur=$row['auteur'];
             $edi=$row['edi'];
             $annee=$row['annee'];
             $nbrexp=$row['nbrexp'];
             $prix=$row['prix'];

            
          
        
    }
    
    
}

if(isset($_POST['update'])){
    
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $edi=$_POST['edition'];
    $ref=$_POST['ref'];
    $annee=$_POST['annee'];
    $nbrexp=$_POST['nbrexp'];
    $emp=$_POST['emp'];
    $prix=$_POST['prix'];
 
 $sql="UPDATE livre SET titre='$titre', auteur='$auteur', edi='$edi', ref='$ref', annee='$annee', nbrexp='$nbrexp', emp='$emp', prix='$prix' where ref=$ref ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        $_SESSION['message']="record has been updated";
        $_SESSION['msg_type']="success";

        header("Location:http://localhost/gestiondunebibliotheque/book/booklist.php");
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
 
    <div class="form-img" style="margin-top:5px; width: 400px;margin-left: 0;">
        <img src="http://localhost/gestiondunebibliotheque/image/App installation(2).GIF" alt="al">
      </div>
  </head>


  <body style="margin:7%">

              <div class="row justify-content-center">
     <form  method="POST">
    <div >
        <div class="form-content">
        <h1 style="font-size:40px">Update book</h1>
        </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="ref" type="number" placeholder="reference" value="<?php echo $ref;?>" readonly required='required'>
                        
                    </div>  
                  </div>
            </div>
        </div>



        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Emplacement</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                          <input class="input " name="emp" type="text" placeholder="Entrer l'emplacement du livre" value="<?php echo $emp;?>" required='required'>
                          
                    </div>
                </div>
            </div>
            </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Title</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="titre" type="text" placeholder="Entrer le titre du livre" value="<?php echo $titre;?>" required='required'>
                        
                    </div>  
                  </div>
            </div>
        </div>
        
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Author</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="auteur" type="text" placeholder="Entrer le nom d'auteur" value="<?php echo $auteur;?>" required='required'>
                        
                  </div>
              </div>
            </div>
            </div>
        
          
            

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">Edition</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="edition" type="text" placeholder="Entrer l'edition du livre" value="<?php echo $edi;?>" required='required'>
                             
                          </div>
                          <div class="field-label is-normal">
                            <label class="label">year</label>
                          </div>
                          <div class="field-body">
                            <div class="field">

                                <input class="input " name="annee" type="number" placeholder="Entrer l'année" value="<?php echo $annee;?>" required='required'>
                              
                            </div>
                        </div>
                      </div>
                      
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">Nbr-copy</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="nbrexp" type="number" placeholder="Entrer le nombre d'exemplaire" value="<?php echo $nbrexp;?>" readonly>
                              
                          </div>
                          <div class="field-label is-normal">
                            <label class="label">Price</label>
                          </div>
                          <div class="field-body">
                            <div class="field">

                                <input class="input " name="prix" type="number" placeholder="Entrer le prix du livre" value="<?php echo $prix;?>" required='required'>
                                
                            </div>
                        </div>
                      </div>
                      
                    </div>
                    
        
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
           
                      <button class="button is-primary is-rounded is-medium floated-img" name="update">
                        Update
                      </button>

                      
                    </div>
                  </div>
                </div>
              </div>
            
        </div>
    
      </form>
      </div>
</body>
</html>