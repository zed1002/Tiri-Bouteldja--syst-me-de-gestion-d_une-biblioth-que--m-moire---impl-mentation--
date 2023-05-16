<?php
    session_start();
    include_once "..\connexion\connexion.php";
    include "../book/navigation.html";
    
    
    $refm_exp='';
    $emp='';
    $titre='';
    $realiser_par='';
    $specialite='';
    $ref_fk='';
    $annee='';
    
    ?>

<?php


if (isset($_GET['edit'])){
$refm_exp=$_GET['edit'];
  

$sql="SELECT * FROM exemplaireth WHERE refm_exp=$refm_exp ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        
            $row= $result->fetch_array();
            $refm_exp= $row['refm_exp'];
            $emp=$row['emp'];
            $titre= $row['titre'];
             $realiser_par=$row['realiser_par'];
             $specialite=$row['specialite'];
             $annee=$row['annee'];
             $ref_fk=$row['ref_fk'];
             

            
          
        
    }
    
    
}

if(isset($_POST['update'])){
    
    $titre=$_POST['titre'];
    $realiser_par=$_POST['realiser_par'];
    $specialite=$_POST['specialite'];
    $refm_exp=$_POST['refm_exp'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
 
 $sql="UPDATE exemplaireth SET titre='$titre', realiser_par='$realiser_par', specialite='$specialite', refm_exp='$refm_exp', annee='$annee', ref_fk='$ref_fk', emp='$emp' where refm_exp=$refm_exp ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        $_SESSION['message']="record has been updated";
        $_SESSION['msg_type']="success";

        header("Location:http://localhost/gestiondunebibliotheque/exemplaire/exemplairelist.php");
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
        <img src="http://localhost/gestiondunebibliotheque/image/Portfolio Update(1).GIF" alt="al">
      </div>

              <div class="row justify-content-center">
     <form  method="POST">
    <div>
        <div class="form-content">
        <h1 style="font-size:40px">Update thesis copy</h1>
        </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="refm_exp" type="number" placeholder="reference" value="<?php echo $refm_exp;?>" readonly required='required'>
                        
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
                    <label class="label">realised by</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="realiser_par" type="text" placeholder="Entrer le nom d'auteur" value="<?php echo $realiser_par;?>" required='required'>
                        
                  </div>
              </div>
            </div>
            </div>
        
          
            

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">field</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="specialite" type="text" placeholder="Entrer l'edition du livre" value="<?php echo $specialite;?>" required='required'>
                              
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
                          <label class="label">ref_thesis</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="ref_fk" type="number" placeholder="Entrer le nombre d'exemplaire" value="<?php echo $ref_fk;?>" readonly required='required'>
                              
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