<?php
$email=$_GET['email'];
?>
<html style="background:#eee;">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="http://localhost/gestiondunebibliotheque\css/searchs.css">
</head>
<?php
include_once "..\connexion\connexion.php";
include "..\js/file.php"?>
<?php include "../book/navigation.html"?>

  <body style="background:#eee;">
    <div class="rowp">
    <div class="col2">
      <div class="searchimgs">
      
<img class="borrowimg" src="http://localhost/gestiondunebibliotheque/image/File searching(2).GIF" alt="al">
</div>
</div>

<?php
if (isset($_GET['id'])):?>
<?php 

$id=$_GET['id'];?>
  <div class="col3">
 
 <form  method="POST">
      <div class="searchbar-container">
      <h1 class="heading-primary headingR-primary--main2">borrow a journal</h1><br><br>
     
     <div class="borrowcontainer"> 
<div>
      <input class="inputp" name="id" type="text" placeholder="reference" value="<?php echo $id;?>" readonly>
      </div> 
      <div class="clear-fix"></div>              
                  
                  <br>
    
     <input class="pbsearch" type="text" name="q" placeholder="   search a thesis (by default the search is by reference)...">
     
     
      
  
     <div class="dropdown">
      <div class="select" >
      <select name="column"  id="select_graphtype" class="fa select" style="width: 45px; border-radius:20px" >
      <option value="">  select filter </option>
        <option value="ref_r">ref</option>
        <option value="titre_r">title</option>
        <option value="emp">emplacement</option>
        <option value="annee_r">year</option>
        <option value="nbrexp_r">nbr-copy</option>
        <option value="prix">price</option>
        </select>
      </div>

</div>
          
</div>
<div class="clear-fix"></div>

<div class="btncont">
<button class="btn dropbtnrounded" type="submit" name="srchusrbtn">
                        search
                      </button>    
</div>
                     
                      
</form>

</div>
</div>
<div class="clear-fix"></div>

<div class="cornerimageth" > 
<img src="http://localhost/gestiondunebibliotheque/image/File searching-pana.svg" alt="al">
</div>





 <div class="container text-center">
</body>
<?php endif;?>

<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "ref_r" && $column != "titre_r"  && $column != "emp" && $column != "annee" && $column != "nbrexp_r")){
    //default column
      $column = "ref_r";}
      if ($q==""){
echo "empty field";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM revue WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
        <h1 style="font-size:40px;" > Select a journal</h1>
  <table class="table" style="background:#eee">
    <thead>
      <tr>
      <th>ref</th>
        <th>emp</th>
        <th>title</th>
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
    <td><?php echo $row['ref_r'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre_r'];?></td>
      <td><?php echo $row['nbrexp_r'];?></td>
      <td><?php echo $row['annee_r'];?></td>
      <td><?php echo $row['prix'];?></td>
      <?php if($row['nbrexp_r']!=0): ?>
      <td>
      <a href="searchissuej.php?id=<?php echo $id?>&ref=<?php echo $row['ref_r']; ?>&email=<?php echo $email?>" class="btn btn-info" name='selectr'>select</a>
      
        
      </td>

    </tr>
    <?php endif;  ?>
      <?php if($row['nbrexp_r']==0): ?>
 <td>

 <a href="http://localhost/gestiondunebibliotheque\reserver\reserverfe.php?id=<?php echo $id?>&ref=<?php echo $row['ref_r']?>&genre=<?php echo 'revue'; ?>&email=<?php echo $email;?>" class="btn btn-info" name='reserver_r'>reserve</a>
 </td>
      <?php endif;?>
      </tr>
    <?php endwhile;?>
    
  </table>
</div>
    <?php endif;?>
</html>
<?php endif;?>
    

<?php
if (isset($_GET['ref'])):
$ref=$_GET['ref'];
$sql = $bdd->query("SELECT * FROM exemplairej WHERE ref_fk = $ref"); ?>
       
       <div class="row justify-content-center">
       <h1 style="font-size:40px;" > Select a copy</h1>
 <table class="table" style="background:#eee">
 <thead>
      <tr>
      <th>ref_exp</th>
        <th>emp</th>
        <th>title</th>
        <th>ref_journal</th>
        <th>year</th>
        <th>availability</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row['refr_exp'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre'];?></td>
      <td><?php echo $row['ref_fk'];?></td>
      <td><?php echo $row['annee'];?></td>
      <td><?php echo $row['etat'];?></td>
      <td>
<?php
if ($row['etat']=='available'):?>
     <a href="http://localhost/gestiondunebibliotheque/preter/preterfe.php?user=<?php echo $id?>&preter=<?php echo $row['refr_exp']; ?>&ref_fk=<?php echo $row['ref_fk']; ?>&genre=<?php echo 'revue'; ?>" class="btn btn-info" name='preterth'>borrow</a></td>
<?php endif;?>
<?php
if ($row['etat']=='reserved'):?>
         <a href="http://localhost/gestiondunebibliotheque/reserver/reservationlist.php?user=<?php echo $id?>&preter=<?php echo $row['ref_exp']; ?>&ref_fk=<?php echo $row['ref_fk']; ?>&genre=<?php echo 'revue'; ?>" class="btn btn-info" name='cancelbtn'>cancel reservation</a></td>
     
<?php endif;?>

<?php  endwhile;  endif;
   
   ?>