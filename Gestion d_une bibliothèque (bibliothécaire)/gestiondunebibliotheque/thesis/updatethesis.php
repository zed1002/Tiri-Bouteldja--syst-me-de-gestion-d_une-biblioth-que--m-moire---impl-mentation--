<?php
    session_start();
    include_once "../connexion/connexion.php";
    include "../book/navigation.html";
    
    
    $ref='';
    $emp='';
    $titre='';
    $realiser_par='';
    $specialite='';
    $nbrexp='';
    $annee='';
    $type='';
    ?>

<?php


if (isset($_GET['editM'])){
$ref=$_GET['editM'];
  

$sql="SELECT * FROM memoire WHERE ref_m=$ref ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        
            $row= $result->fetch_array();
            $ref= $row['ref_m'];
            $emp=$row['emp_m'];
            $titre= $row['titre_m'];
             $realiser_par=$row['realiser_par'];
             $specialite=$row['specialite'];
             $nbrexp=$row['nbrexp_m'];
             $annee=$row['annee_m'];
             $type=$row['type'];
             
             

            
          
        
    }
    
    
}

if(isset($_POST['updateM'])){
    
    $titre=$_POST['titre_m'];
    $realiser_par=$_POST['realiser_par'];
    $specialite=$_POST['specialite'];
    $ref=$_POST['ref_m'];
    $annee=$_POST['annee_m'];
    $nbrexp=$_POST['nbrexp_m'];
    $emp=$_POST['emp_m'];
    $type=$_POST['type'];
    
 
 $sql="UPDATE memoire SET titre_m='$titre', realiser_par='$realiser_par', specialite='$specialite', ref_m='$ref', annee_m='$annee', nbrexp_m='$nbrexp', emp_m='$emp', type='$type' where ref_m=$ref ";
$result=mysqli_query($bdd,$sql);
    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
        
    }
    else{
        $_SESSION['message']="record has been updated";
        $_SESSION['msg_type']="success";

        header("Location:http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
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
        <img src="http://localhost/gestiondunebibliotheque/image/App installation(1).GIF" alt="al">
      </div>
  
  </head>
  <body style="margin:7%">


              <div class="row justify-content-center">
     <form  method="POST">
    <div>
        <div class="form-content">
        <h1 style="font-size:40px">Update thesis</h1>
        </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="ref_m" type="number" placeholder="reference" value="<?php echo $ref;?>" readonly required='required'>
                       
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

                          <input class="input " name="emp_m" type="text" placeholder="Entrer l'emplacement du livre" value="<?php echo $emp;?>"  required='required' >
                         
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

                        <input class="input" name="titre_m" type="text" placeholder="Entrer le titre du livre" value="<?php echo $titre;?>"  required='required'>
                        
                    </div>  
                  </div>
            </div>
        </div>
        
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Realised by</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="realiser_par" type="text" placeholder="Entrer le nom d'auteur" value="<?php echo $realiser_par;?>"  required='required'>
                        
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

                                <input class="input " name="specialite" type="text" placeholder="Entrer l'edition du livre" value="<?php echo $specialite;?>"  required='required'>
                              
                          </div>
                          <div class="field-label is-normal">
                            <label class="label">year</label>
                          </div>
                          <div class="field-body">
                            <div class="field">

                                <input class="input " name="annee_m" type="number" placeholder="Entrer l'année" value="<?php echo $annee;?>" required='required'>
                                
                            </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">type</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="type" type="text" placeholder="Enter the type of thesis" value="<?php echo $type;?>" required='required'>
                        
                  </div>
              </div>
            </div>
           
                        <div class="field-label is-normal">
                          <label class="label">Nbr-copy</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="nbrexp_m" type="number" placeholder="Entrer le nombre d'exemplaire" value="<?php echo $nbrexp;?>"readonly required='required'>
                             
                          </div>
                          
                      </div>
                      
                    </div>
                    

              
        
</div>

       <br>     
            
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

                      <button class="button is-primary is-rounded is-medium floated-img" name="updateM">
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