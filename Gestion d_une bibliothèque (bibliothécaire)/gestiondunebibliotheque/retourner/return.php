<?php
include_once "..\connexion\connexion.php";


?>

<!DOCTYPE html>
<html style="background:#eee">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <?php include "../book/navigation.html";?>
  <body>
  <form style="background:#eee" method="POST">
 
  <a style="margin-left: 5em; margin-top: .5em;" class="navbar-brand" href="http://localhost/gestiondunebibliotheque/index.html">
 <i style="margin:0 !important ; padding:0 !important" class="fas fa-university "></i>   Library</a>
  
  
 
  <div class="searchbar-container">
          <h1 class="heading-primary heading-primary--main"> return document </h1>
<input class="search-bar" type="text" name="q" placeholder="Enter user id">
<span class="icon is-small is-right">
                  <i class="fas fa-search"></i>
                </span>     
</p>
<br>
<button class="button is-primary is-rounded is-medium btn" type="submit" name="srchusrbtnu">
                        search 
                      </button>
                      
                      <br><br><br> 
                      </form>
                      
                      <div class="corner"></div>
                      <div class="scorner"></div>
                      <div class="container text-center">
<?php

    if (isset($_POST['srchusrbtnu'])):
       
        $q = $bdd->real_escape_string($_POST['q']);
        $column = "idu";

        if($q==""){
            echo "le champ est vide";
              }

      if($q!=""):
        $sql = $bdd->query("SELECT * FROM emprunt WHERE $column LIKE '$q'"); ?>
        
        <div class="row justify-content-center">
      <h1 style="font-size:40px">Result</h1>
  <table style="background:#eee" class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>reference</th>
        <th>ref_doc</th>
        <th>borrow date</th>
        <th>return date</th>
        <th>document</th>
        <th>condition</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['idu'];?></td>
      <td><?php echo $row['ref_expe'];?></td>
      <td><?php echo $row['ref_fk'];?></td>
      <td><?php echo $row['dp'];?></td>
      <td><?php echo $row['dr'];?></td>
      <td><?php echo $row['genre'];?></td>
      <td><?php echo $row['answer'];?></td>
      <td>
      <a href="returnfe.php?id=<?php echo $row['idu']; ?>&ref=<?php echo $row['ref_expe']; ?>&ref_fk=<?php echo $row['ref_fk']; ?>&dp=<?php echo $row['dp']; ?>&dr=<?php echo $row['dr']; ?>&genre=<?php echo $row['genre']; ?>&answer=<?php echo $row['answer']; ?>" class="btn btn-info" name='return'>select</a>
      </td>
      </tr>
    <?php endwhile;?>
    
  </table>

    <?php endif;?>
</html>
<?php endif;?>



