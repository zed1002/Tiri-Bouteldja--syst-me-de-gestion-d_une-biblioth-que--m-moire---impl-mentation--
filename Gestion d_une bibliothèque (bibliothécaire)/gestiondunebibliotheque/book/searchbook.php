<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="http://localhost/gestiondunebibliotheque\css/searchs.css">
</head>
<?php
include_once "..\connexion\connexion.php";
include "..\js/file.php"?>
<?php include "../book/navigation.html"?>

  <body>


<section class="section-1">
  <div class="wave-search">
  <a href="http://localhost/gestiondunebibliotheque/index.php" style="position: fixed; bottom: 90%; font-size: 25px; color: white; margin-left: -47%;"><i class="fas fa-university "></i>Library</a>
  
  <form action="http://localhost/gestiondunebibliotheque/book/searchbook.php" method="POST">
    
      <div class="searchbar-container">
          <h1 class="heading-primary heading-primary--main"> SEARCH BOOK </h1>
        <input class="search-bar" type="text" name="q" placeholder="search...(by default the search will be by reference)"/>
         <div class="dropdown">
    <div class="select" >
    <select name="column"  id="select_graphtype" class="fa select" style="width: 45px; border-radius:20px" >
      <option value="">&#xf0b0; select filter</option>
        <option value="ref">ref</option>
        <option value="titre">title</option>
        <option value="auteur">author</option>
        <option value="edi">edition</option>
        <option value="emp">emplacement</option>
        <option value="annee">year</option>
        <option value="nbrexp">nbr-copy</option>
        <option value="prix">price</option>
      </select>
    </div>
    <div class="clear-fix"></div>
  </div>
</div>

<button class="btn dropbtnp" type="submit" name="srchusrbtn">
                        search 
                      </button>
    </section>
                     
                      
</form>
<div class="svg-cont">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#eb05d7" fill-opacity="1" d="M0,64L7.7,90.7C15.5,117,31,171,46,192C61.9,213,77,203,93,170.7C108.4,139,124,85,139,96C154.8,107,170,181,186,224C201.3,267,217,277,232,240C247.7,203,263,117,279,74.7C294.2,32,310,32,325,69.3C340.6,107,356,181,372,208C387.1,235,403,213,418,176C433.5,139,449,85,465,85.3C480,85,495,139,511,154.7C526.5,171,542,149,557,149.3C572.9,149,588,171,604,160C619.4,149,635,107,650,128C665.8,149,681,235,697,245.3C712.3,256,728,192,743,176C758.7,160,774,192,790,192C805.2,192,821,160,836,170.7C851.6,181,867,235,883,261.3C898.1,288,914,288,929,261.3C944.5,235,960,181,975,144C991,107,1006,85,1022,106.7C1037.4,128,1053,192,1068,197.3C1083.9,203,1099,149,1115,117.3C1130.3,85,1146,75,1161,106.7C1176.8,139,1192,213,1208,234.7C1223.2,256,1239,224,1254,208C1269.7,192,1285,192,1301,176C1316.1,160,1332,128,1347,144C1362.6,160,1378,224,1394,213.3C1409,203,1425,117,1432,74.7L1440,32L1440,0L1432.3,0C1424.5,0,1409,0,1394,0C1378.1,0,1363,0,1347,0C1331.6,0,1316,0,1301,0C1285.2,0,1270,0,1254,0C1238.7,0,1223,0,1208,0C1192.3,0,1177,0,1161,0C1145.8,0,1130,0,1115,0C1099.4,0,1084,0,1068,0C1052.9,0,1037,0,1022,0C1006.5,0,991,0,975,0C960,0,945,0,929,0C913.5,0,898,0,883,0C867.1,0,852,0,836,0C820.6,0,805,0,790,0C774.2,0,759,0,743,0C727.7,0,712,0,697,0C681.3,0,666,0,650,0C634.8,0,619,0,604,0C588.4,0,573,0,557,0C541.9,0,526,0,511,0C495.5,0,480,0,465,0C449,0,434,0,418,0C402.6,0,387,0,372,0C356.1,0,341,0,325,0C309.7,0,294,0,279,0C263.2,0,248,0,232,0C216.8,0,201,0,186,0C170.3,0,155,0,139,0C123.9,0,108,0,93,0C77.4,0,62,0,46,0C31,0,15,0,8,0L0,0Z"></path>
</svg>
</div>
</div>
</body>
</html>
<div class="container text-center">

<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref" && $column != "titre" && $column != "auteur" && $column != "edi" && $column != "emp" && $column != "annee" && $column != "nbrexp" && $column != "prix")){
    //default column
      $column = "ref";}
      if ($q==""){
echo "le champ est vide";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM livre WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
  <h1 style="font-size:40px">Result</h1>
  <table class="table">
    <thead>
      <tr>
      <th>ref</th>
        <th>emp</th>
        <th>title</th>
        <th>author</th>
        <th>edition</th>
        <th>nbrcopy</th>
        <th>year</th>
        <th>price</th>
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
      <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaire.php?addex=<?php echo $row['ref']; ?>" class="btn btn-info" name='addex'>Add exemplaire</a>
        <a href="updatebook.php?edit=<?php echo $row['ref']; ?>" class="btn btn-warning" name='edit'>Edit</a>
        <a style="color:white" class="btn btn-danger" name="delete" value="delete"  onClick="crnb(<?php echo $row['ref']; ?>)" > Delete </a>
      </td>

    </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>

<br><br><br>
<?php
 //pre_r($result);
 $sql="select * from livre order by ref";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
<h1 style="font-size:40px">Books list</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ref</th>
        <th>emp</th>
        <th>title</th>
        <th>author</th>
        <th>edition</th>
        <th>nbrcopy</th>
        <th>year</th>
        <th>price</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
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
      <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaire.php?addex=<?php echo $row['ref']; ?>" class="btn btn-info" name='addex'>Add exemplaire</a>
        <a href="updatebook.php?edit=<?php echo $row['ref']; ?>" class="btn btn-warning" name='edit'>Edit</a>
        <a style="color:white" class="btn btn-danger" name="delete" value="delete"  onClick="crnb(<?php echo $row['ref']; ?>)" > Delete </a>
      </td>

    </tr>
    <?php endwhile; ?>
  </table>
</div>


    

