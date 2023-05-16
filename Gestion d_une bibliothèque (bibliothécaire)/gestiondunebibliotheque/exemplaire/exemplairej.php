<?php
    session_start();
    include_once "..\connexion\connexion.php";
    $idd=0;
 
    $ref_r='';
    $emp='';
    $titre='';
    $refr_exp='';
    $annee='';
    
    
    
 ?>
 <?php
if (isset($_GET['addex'])){

    $ref_r=$_GET['addex'];
  

    $sql="SELECT * FROM revue WHERE ref_r=$ref_r ";
    $result=mysqli_query($bdd,$sql);
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
            
        }
        else{
            
                $row= $result->fetch_array();
                $ref_r= $row['ref_r'];
                $emp=$row['emp'];
                $titre= $row['titre_r'];
                 $annee=$row['annee_r'];
                 
                 
    
                
              
            
        }
        
        
    }

?>

<?php
if(isset ($_POST['ajouter']) ){
    
    $titre=$_POST['titre'];
    $ref_exp=$_POST['refr_exp'];
    $annee=$_POST['annee'];
    $ref_fk=$_POST['ref_fk'];
    $emp=$_POST['emp'];
    
    
  
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

        header("Location:http://localhost/gestiondunebibliotheque/thesis/thesislist.php");
    }
   
}
?> 


<!DOCTYPE html>
<html class="form-html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a journal copy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/login/css/login.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
  </head>
  <?php include "../book/navigation.html"?>

<body style="background-image: linear-gradient(to right bottom,  #ffb900, #ff7730);">
<div class="cont">

<div class="rapper-jex">
  <div class="rightside">

      <form style=" margin: 70px; margin-top: 30px;" action="addexemplaire.php" method="POST">
    <div class="form-container">
    <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Add a new journal copy
                            </h2>
                           </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                        <input class="input" name="refr_exp" type="text" placeholder="reference"  value="<?php echo $refr_exp;?>">
                        
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

                          <input class="input " name="emp" type="text" placeholder="Entrer l'emplacement du livre" value="<?php echo $emp;?>" >
                          
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

                        <input class="input" name="titre" type="text" placeholder="Entrer le titre du livre" value="<?php echo $titre;?>">
                       
                    </div>  
                  </div>
            </div>
        </div>
        
       
        
        <div class="field is-horizontal">
            <div class="field-body">
        
                          <div class="field-label is-normal">
                            <label class="label">year</label>
                          </div>
                          <div class="field-body">
                            <div class="field">

                                <input class="input " name="annee" type="text" placeholder="Entrer l'année" value="<?php echo $annee;?> ">
                               
                            </div>
                        </div>
                      </div>
                      
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">ref_journal</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                                <input class="input " name="ref_fk" type="text" placeholder="Entrer la référence du livre" value="<?php echo $ref_r;?>" readonly>
                              
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
                      <button class="button is-primary is-rounded is-medium btn" name="ajouterR"> 
                        Add
                      </button>

                      <button class="button is-danger is-rounded is-medium floated-img" type="cancel">
                 <a style=" color:white;" href="http://localhost/gestiondunebibliotheque/index.php">cancel </a>
                 </button>

                    </div>
                  </div>
                </div>
              </div>
              
        </div>
    
      </form>

      </div>
</div>

<div class="rapper2">
                
<div class="leftside-jex" ><img class="pswimg" src="http://localhost/gestiondunebibliotheque/image/Library-cuat.svg" alt=""> </div>

</div> 

</div> 

        </body>
        </html>

        