<div style="position: absolute;top: -32%; opacity: 95%;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fac104" fill-opacity="1" d="M0,128L21.8,144C43.6,160,87,192,131,197.3C174.5,203,218,181,262,170.7C305.5,160,349,160,393,160C436.4,160,480,160,524,181.3C567.3,203,611,245,655,256C698.2,267,742,245,785,224C829.1,203,873,181,916,197.3C960,213,1004,267,1047,250.7C1090.9,235,1135,149,1178,117.3C1221.8,85,1265,107,1309,112C1352.7,117,1396,107,1418,101.3L1440,96L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg></div>
<?php
include_once "..\connexion\connexion.php";
include "..\js/file.php"?>


<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="http://localhost/gestiondunebibliotheque\css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

  <?php include "../book/navigation.html"?>
  <body>
 <br>
  <div class="rowp">
  
  <div class="col2" style="float: right;">
  <img class="borrowimg" src="http://localhost/gestiondunebibliotheque/image/People search.GIF" alt="al">
</div> 

<div class="col3" style="float: right;">
<br><br><br>
<form  method="POST">
       
        <div class="searchbar-container">
      <h1 class="heading-primary headingR-primary--main">delete user     </h1>
    <br><br>
      <input style="border: 2px #eee solid;" class="psearch" type="text" name="q" placeholder="    search for a user (by default the search is by id)">
          
      <br>
     <div class="dropdown">
      <div class="select" >
      <select name="column"   style="width: 45px; border-radius:20px" >
      <option value="">  select filter </option>
        <option value="id">id</option>
        <option value="nom">last name</option>
        <option value="prenom">first name</option>
        <option value="email">email</option>
        <option value="num-tel">phone number</option>
      </select>
    </div>
<br> <br>
</div>
          
</div>
<div class="clear-fix"></div>
<div class="btncont">
<button class="btn dropbtnrounded" type="submit" name="srchusrbtn" style="margin-right: 110px;">
                        search
                      </button>   
</div>
               
                     
                      
           
</form>
</div>





</div>
</body>

<div class="clear-fix"></div>

<div class="cornerimage" style="left:-5%; bottom:-5%; width:400px; height:400px;"> 
<img src="http://localhost/gestiondunebibliotheque/image/Setup-amico1.svg" alt="al" >
</div>



 <div class="container text-center">

<?php

	if (isset($_POST['srchusrbtn'])):
    
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
        <th>last name</th>
        <th>first name</th>
        <th>phone number</th>
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

       <?php 
       $id=$row['id'];
        $query = "SELECT * FROM emprunt
          where idu='$id'";
$result = mysqli_query($bdd,$query);
if(mysqli_num_rows($result) == 0): ?> 
        
        <a class="btn btn-info" name="delete" value="delete"  onClick="crnu(<?php echo $row['id']; ?>)" > Delete </a>
      
        <?php endif;
      if(mysqli_num_rows($result) > 0): 
        echo "this user didn't return a document please retrn first "?>
        <a href="http://localhost/gestiondunebibliotheque/retourner/return.php" class="btn btn-info" name='edit'>return</a>
      <?php endif;?>
      
      </td>

    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>
    