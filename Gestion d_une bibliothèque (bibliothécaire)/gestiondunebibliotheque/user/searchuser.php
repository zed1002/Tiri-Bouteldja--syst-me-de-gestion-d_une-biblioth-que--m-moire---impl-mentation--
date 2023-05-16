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
  <div class="waveu-search">
  <form action="http://localhost/gestiondunebibliotheque/user/searchuser.php" method="POST">
    
      <div class="searchbar-container">
          <h1 class="heading-primary heading-primary--main"> SEARCH USER </h1>
        <input class="search-bar" type="text" name="q" placeholder="search...(by default the search will be by id)"/>
         <div class="dropdown">
    <div class="select" >
    <select name="column"  id="select_graphtype" class="fa select" style="width: 45px; border-radius:20px" >
      <option value="">&#xf0b0; select filter</option>
      <option value="id">id</option>
        <option value="nom">last name</option>
        <option value="prenom">first name</option>
        <option value="email">email</option>
        <option value="num-tel">phone number</option>
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
<div class="svg-cont" style="margin-top: 100px;">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#01bbab" fill-opacity="1" d="M0,288L6.2,272C12.3,256,25,224,37,224C49.2,224,62,256,74,256C86.2,256,98,224,111,181.3C123.1,139,135,85,148,53.3C160,21,172,11,185,26.7C196.9,43,209,85,222,90.7C233.8,96,246,64,258,69.3C270.8,75,283,117,295,133.3C307.7,149,320,139,332,144C344.6,149,357,171,369,149.3C381.5,128,394,64,406,48C418.5,32,431,64,443,106.7C455.4,149,468,203,480,202.7C492.3,203,505,149,517,112C529.2,75,542,53,554,85.3C566.2,117,578,203,591,213.3C603.1,224,615,160,628,128C640,96,652,96,665,117.3C676.9,139,689,181,702,165.3C713.8,149,726,75,738,58.7C750.8,43,763,85,775,90.7C787.7,96,800,64,812,42.7C824.6,21,837,11,849,53.3C861.5,96,874,192,886,192C898.5,192,911,96,923,80C935.4,64,948,128,960,176C972.3,224,985,256,997,229.3C1009.2,203,1022,117,1034,96C1046.2,75,1058,117,1071,149.3C1083.1,181,1095,203,1108,197.3C1120,192,1132,160,1145,160C1156.9,160,1169,192,1182,176C1193.8,160,1206,96,1218,64C1230.8,32,1243,32,1255,32C1267.7,32,1280,32,1292,74.7C1304.6,117,1317,203,1329,224C1341.5,245,1354,203,1366,202.7C1378.5,203,1391,245,1403,266.7C1415.4,288,1428,288,1434,288L1440,288L1440,0L1433.8,0C1427.7,0,1415,0,1403,0C1390.8,0,1378,0,1366,0C1353.8,0,1342,0,1329,0C1316.9,0,1305,0,1292,0C1280,0,1268,0,1255,0C1243.1,0,1231,0,1218,0C1206.2,0,1194,0,1182,0C1169.2,0,1157,0,1145,0C1132.3,0,1120,0,1108,0C1095.4,0,1083,0,1071,0C1058.5,0,1046,0,1034,0C1021.5,0,1009,0,997,0C984.6,0,972,0,960,0C947.7,0,935,0,923,0C910.8,0,898,0,886,0C873.8,0,862,0,849,0C836.9,0,825,0,812,0C800,0,788,0,775,0C763.1,0,751,0,738,0C726.2,0,714,0,702,0C689.2,0,677,0,665,0C652.3,0,640,0,628,0C615.4,0,603,0,591,0C578.5,0,566,0,554,0C541.5,0,529,0,517,0C504.6,0,492,0,480,0C467.7,0,455,0,443,0C430.8,0,418,0,406,0C393.8,0,382,0,369,0C356.9,0,345,0,332,0C320,0,308,0,295,0C283.1,0,271,0,258,0C246.2,0,234,0,222,0C209.2,0,197,0,185,0C172.3,0,160,0,148,0C135.4,0,123,0,111,0C98.5,0,86,0,74,0C61.5,0,49,0,37,0C24.6,0,12,0,6,0L0,0Z"></path>
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

  if ( ($column == "" ||$column != "id" && $column != "nom" && $column != "prenom" && $column != "email" && $column != "num-tel")){
  //default column
    $column = "id";}
    if ($q==""){
echo "le champ est vide";
    }
   
if($q!=""):
      $sql = $bdd->query("SELECT * FROM abonne WHERE $column LIKE '%$q%'"); ?>
     
      <div class="row justify-content-center">
      <h1 style="font-size:40px">Result</h1>
<table class="table">
<thead>
  <tr>
  <th>id</th>
        <th>nom</th>
        <th>prénom</th>
        <th>téléphone</th>
        <th>email</th>
        <th>points</th>
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
      <td><?php echo $row['points'];?></td>
      <td>
      <a href="updateuser.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary" name='edit'>Edit</a>

<?php
      $id=$row['id'];
        $query = "SELECT * FROM emprunt
          where idu='$id'";
$result = mysqli_query($bdd,$query);
if(mysqli_num_rows($result) == 0): ?> 
        <a style="color:white" class="btn btn-danger" name="delete" value="delete"  onClick="crnu(<?php echo $row['id']; ?>)" > Delete </a>
     
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

<br><br><br>
<?php
 //pre_r($result);
 $sql="select * from abonne ";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
<h1 style="font-size:40px">users list</h1>
  <table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prénom</th>
        <th>téléphone</th>
        <th>email</th>
        <th>points</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['nom'];?></td>
      <td><?php echo $row['prenom'];?></td>
      <td><?php echo $row['tel'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['points'];?></td>
      <td>
      <a href="updateuser.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary" name='edit'>Edit</a>
       
      <?php 
       $id=$row['id'];
        $query2 = "SELECT * FROM emprunt
          where idu='$id'";
$result2 = mysqli_query($bdd,$query2);
if(mysqli_num_rows($result2) == 0): ?> 
       
        <a style="color:white" class="btn btn-danger" name="delete" value="delete"  onClick="crnu(<?php echo $row['id']; ?>)" > Delete </a>
       
        <?php endif;
      if(mysqli_num_rows($result2) > 0): 
        echo "this user didn't return a document please retrn first "?>
        <a href="http://localhost/gestiondunebibliotheque/retourner/return.php" class="btn btn-info" name='edit'>return</a>
      <?php endif;?>
     
      </td>
    
        </tr>
    <?php endwhile; ?>
  </table>
</div>


    

