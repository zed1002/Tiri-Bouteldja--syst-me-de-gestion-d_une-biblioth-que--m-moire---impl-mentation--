<?php
include_once "..\connexion\connexion.php";
include "..\user/header.html";
$emp='';
?>
<?php
if (isset($_GET['emp'])){
    $id=$_GET['emp'];
      
    
    $sql="SELECT * FROM user WHERE id=$id  ";
    $result=mysqli_query($bdd,$sql);
        if(!mysqli_query($bdd,$sql)){
            die('fail:' .$bdd->error);
            
        }
        else{
            
                $row= $result->fetch_array();
                $id= $row['id'];
        } }                ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
      <form  method="POST">

      <p class="control has-icons-right">
      <input class="input is-rounded" type="text" name="q" placeholder="Search...">
      <span class="icon is-small is-right">
                        <i class="fas fa-search"></i>
                      </span>     
     </p>
</br> </br>
      <div class="field">
  <label class="label">search by</label>
  <div class="control">
    <div class="select" >
      <select name="column">
      <option value="">séléctionner un filtre</option>
        <option value="id">id</option>
        <option value="nom">nom</option>
        <option value="prenom">prénom</option>
        <option value="email">email</option>
        <option value="num-tel">numéro de téléphone</option>
      </select>
    </div>
  </div>
</div>

                <button class="button is-primary is-rounded is-medium btn" type="submit" name="srchusrbtnu">
                        search 
                      </button>
                     
                      
</form>




<?php

	if (isset($_POST['srchusrbtnu'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "id" && $column != "nom" && $column != "prenom" && $column != "email" && $column != "num-tel")){
    //default column
      $column = "id";}
      if ($q==""){
echo "le champ est vide";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM abonne WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>prénom</th>
        <th>téléphone</th>
        <th>email</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['nom'];?></td>
      <td><?php echo $row['prenom'];?></td>
      <td><?php echo $row['tel'];?></td>
      <td><?php echo $row['email'];?></td>
      <td>
       
        <a href="preter.php?id=<?php echo $row['id']; ?>" class="btn btn-info" name='edit'>select</a>
       
      </td>

    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>
<?php 
if (isset($_GET['id'])):
$id=$_GET['id'];?>

</body>
  <body>
  <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control is-expanded has-icons-left">
                        <input class="input" name="emp" type="text" placeholder="reference" value="<?php echo $id;?>">
                        <span class="icon is-small is-left">
                          <i class="fas fa-user"></i>
                        </span>
                      </p>
                    </div>  
                  </div>
            </div>
        </div>
<?php endif;?>
      <form  method="POST">

      <p class="control has-icons-right">
      <input class="input is-rounded" type="text" name="q" placeholder="Search...">
      <span class="icon is-small is-right">
                        <i class="fas fa-search"></i>
                      </span>     
     </p>
</br> 

      <div class="field">
  <label class="label">search by</label>
  <div class="control">
    <div class="select" >
      <select name="column">
      <option value="">séléction un filtre</option>
        <option value="ref">ref</option>
        <option value="titre">titre</option>
        <option value="auteur">auteur</option>
        <option value="edition">édition</option>
        <option value="emp">emplacement</option>
        <option value="annee">année</option>
        <option value="nbrexp">nbr-exp</option>
        <option value="prix">prix</option>
      </select>
    </div>
  </div>
</div>

                <button class="button is-primary is-rounded is-medium btn" type="submit" name="srchusrbtn">
                        search 
                      </button>
                     
                      
</form>
</body>


<h1>Livres</h1>


<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref" && $column != "titre" && $column != "auteur" && $column != "edi" && $column != "emp" && $column != "annee" && $column != "nbrexp")){
    //default column
      $column = "ref";}
      if ($q==""){
echo "le champ est vide";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM livre WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
      <th>ref</th>
        <th>emp</th>
        <th>titre</th>
        <th>auteur</th>
        <th>edition</th>
        <th>nbrexp</th>
        <th>annee</th>
        <th>prix</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row['ref'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre'];?></td>
      <td><?php echo $row['auteur'];?></td>
      <td><?php echo $row['edi'];?></td>
      <td><?php echo $row['nbrexp'];?></td>
      <td><?php echo $row['annee'];?></td>
      <td><?php echo $row['prix'];?></td>

      <?php if($row['nbrexp']!=0): ?>
      <td>
      <a href="http://localhost/gestiondunebibliotheque/preter/preterfe.php?user=<?php echo $id?>&preter=<?php echo $row['ref']; ?>" class="btn btn-info" name='preter'>preter</a>
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref']; ?>)" > borrowed </a>
      </td>

    </tr>
    <?php endif;  ?>
      <?php if($row['nbrexp']==0): ?>
 <td>

   <a href="http://localhost/gestiondunebibliotheque/reserver/reserverfe.php " class="btn btn-info" name="res" value="res"  > reserved </a>
 </td>
      <?php endif;?>
      </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>
    

<h1>Revues</h1>

<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref_r" && $column != "titre_r"  && $column != "emp" && $column != "annee" && $column != "nbrexp_r")){
    //default column
      $column = "ref_r";}
      if ($q==""){
echo "le champ est vide";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM revue WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
      <th>ref</th>
        <th>emp</th>
        <th>titre</th>
        <th>nbrexp</th>
        <th>annee</th>
        <th>prix</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row['ref_r'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre_r'];?></td>
      <td><?php echo $row['nbrexp_r'];?></td>
      <td><?php echo $row['annee_r'];?></td>
      <td><?php echo $row['prix'];?></td>

      <?php if($row['nbrexp_r']!=0): ?>
      <td>
     
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_r']; ?>)" > preter </a>
      </td>
      <?php endif;  ?>
      <?php if($row['nbrexp_r']==0): ?>
 <td>

   <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_r']; ?>)" > reserver </a>
 </td>
      <?php endif;?>
    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>



<h1>Mémoire</h1>
<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref_m" && $column != "titre_m" && $column != "reliser_par" && $column != "specialite" && $column != "emp_m" && $column != "annee_m" && $column != "nbrexp_m")){
    //default column
      $column = "ref_m";}
      if ($q==""){
echo "le champ est vide";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM memoire WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
      <th>ref</th>
        <th>emp</th>
        <th>titre</th>
        <th>réaliser par</th>
        <th>spécialité</th>
        <th>nbrexp</th>
        <th>annee</th>
        
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row['ref_m'];?></td>
      <td><?php echo $row['emp_m'];?></td>
      <td><?php echo $row['titre_m'];?></td>
      <td><?php echo $row['realiser_par'];?></td>
      <td><?php echo $row['specialite'];?></td>
      <td><?php echo $row['nbrexp_m'];?></td>
      <td><?php echo $row['annee_m'];?></td>
      
      <?php if($row['nbrexp_m']!=0): ?>
      <td>
      <a href="http://localhost/gestiondunebibliotheque/thesis/updatethesis.php?preter=<?php echo $row['ref_m']; ?>" class="btn btn-info" name='preter'>preter</a>
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_m']; ?>)" > preter </a>
      </td>
      <?php endif;  ?>

      <?php if($row['nbrexp_m']==0): ?>
 <td>

   
   <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_m']; ?>)" > reserver </a>
 </td>
      <?php endif;?>
    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>

   
