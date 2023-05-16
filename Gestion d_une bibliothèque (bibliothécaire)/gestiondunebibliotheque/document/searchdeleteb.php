<?php
include_once "..\connexion\connexion.php";
include "..\user/header.html";?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
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
      <td>
      <a href="http://localhost/gestiondunebibliotheque\exemplaire/exemplaire.php?addex=<?php echo $row['ref']; ?>" class="btn btn-info" name='addex'>Add exemplaire</a>
        <a href="updatebook.php?edit=<?php echo $row['ref']; ?>" class="btn btn-info" name='edit'>Edit</a>
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref']; ?>)" > Delete </a>
      </td>

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
      <td>
      <a href="http://localhost/gestiondunebibliotheque\exemplaire/exemplairej.php?addex=<?php echo $row['ref_r']; ?>" class="btn btn-info" name='addex'>Add exemplaire</a>
        <a href="updatebook.php?edit=<?php echo $row['ref_r']; ?>" class="btn btn-info" name='edit'>Edit</a>
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_r']; ?>)" > Delete </a>
      </td>

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
      
      <td>
      <a href="http://localhost/gestiondunebibliotheque\exemplaire/exemplaireth.php?addex=<?php echo $row['ref_m']; ?>" class="btn btn-info" name='addex'>Add exemplaire</a>
        <a href="updatebook.php?edit=<?php echo $row['ref_m']; ?>" class="btn btn-info" name='edit'>Edit</a>
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['ref_m']; ?>)" > Delete </a>
      </td>

    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>


