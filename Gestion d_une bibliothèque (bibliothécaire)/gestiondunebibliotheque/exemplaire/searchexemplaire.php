<?php
include_once "..\connexion\connexion.php";
include "../user/header.html";

	if (isset($_POST['srchusrbtn'])) {
    if(($_POST['q'] == "" )){
      echo 'enter quelque chose';
      }
      else{
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref_exp" && $column != "titre" && $column != "auteur" && $column != "edition" && $column != "annee" && $column != "emp" && $column != "ref_fk" )){
    //default column
      $column = "ref_exp";}

		$sql = $bdd->query("SELECT * FROM exemplaire WHERE $column LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			while ($data = $sql->fetch_array())
      echo "<br>". " ".$data['ref_exp']. "  ". $data['titre']."  ".  $data['auteur']. "  ". $data['edi']."  ". $data['emp'] ."<br>";
		} else
			echo "<br>"."Your search query doesn't match any data!";
  }
}
?>

<br>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>library management</title>
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
        <option value="ref_exp">ref_exp</option>
        <option value="titre">titre</option>
        <option value="auteur">auteur</option>
        <option value="edition">édition</option>
        <option value="emp">emplacement</option>
        <option value="annee">année</option>
        <option value="ref_fk">ref_livre</option>
        
      </select>
    </div>
  </div>
</div>

                <button class="button is-primary is-rounded is-medium btn" type="submit" name="srchusrbtn">
                        search 
                      </button>
                     
                      
</form>
</body>
</html>
