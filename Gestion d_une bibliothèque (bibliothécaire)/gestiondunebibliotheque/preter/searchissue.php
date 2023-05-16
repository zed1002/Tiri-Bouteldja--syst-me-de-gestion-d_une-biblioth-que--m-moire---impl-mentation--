<html style="background:#eee">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="http://localhost/gestiondunebibliotheque\css/searchs.css">
</head>
<?php
include_once "..\connexion\connexion.php";
include "..\js/file.php"?>
<?php include "../book/navigation.html"?>

  <body style="background:#eee">
    <div class="rowp">
    <div class="col1">
      <div class="searchimgs">
<img src="http://localhost/gestiondunebibliotheque/image/People search-amico (1).svg" alt="al">
</div>
</div>
      <div class="col1">
      <form  method="POST">
        <br>
        <div class="searchbar-container">
      <h1 class="heading-primary headingR-primary--main">borrow a document</h1>
    <br><br>
      <input class="psearch" type="text" name="q" placeholder="    search for a user (by default the search is by id)">
          
      <br>
     <div class="dropdown">
      <div class="select" >
      <select name="column"  id="select_graphtype" class="fa select" style="width: 45px; border-radius:20px" >
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

<br> <br>
    
         
    
    
      
                      <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">choose a document</label>
                </div>
                <div class="field-body">
                  <div class="field">
<div class="control">
  <label class="radio">
    <input type="radio" name="answer" value="livre">
    <img style="width:40px" src="book1.png" alt=""> Book 
  </label>
  <label class="radio">
    <input type="radio" name="answer" value="memoire">
    <img style="width:40px"  src="memoire1.png" alt=""> Thesis 
  </label>
  <label class="radio">
    <input type="radio" name="answer" value="revue">
   <img style="width:40px" src="revue1.png" alt=""> Journal 
  </label>
</div>
</div>
</div>
</div>


</div>
<div class="btncont">
<button class="btn dropbtnrounded" type="submit" name="srchusrbtnu">
                        search
                      </button>   
</div>
</form>
  


</div>
<div class="clear-fix"></div>




 <div class="container text-center">

<?php

	if (isset($_POST['srchusrbtnu'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "id" && $column != "nom" && $column != "prenom" && $column != "email" && $column != "num-tel")){
    //default column
      $column = "id";}
      if ($q==""){
echo "empty field";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM abonne WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
        <h1 style="font-size:40px;" > Select a user</h1> 
  <table style="background:#eee" class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>last name</th>
        <th>first name</th>
        <th>phone number</th>
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
       
      <?php
      if (isset($_POST['answer'])):
      if ($_POST['answer']=='livre'):?>
      <?php
      if ($row['points']==0):?>
        <p>you have 0 points you can't borrow a document </p>
<?php endif;
if ($row['points']>0):
if ($row['nbremp']<3):?>
        <a href="searchissueb.php?id=<?php echo $row['id']; ?>&email=<?php echo $row['email'];?>" class="btn btn-info" name='edit'>select</a>
<?php endif; 
if ($row['nbremp']==3):?>
<p> you have already borrowed 3 documents
<a href="http://localhost/gestiondunebibliotheque/retourner/return.php?id=<?php echo $row['id']; ?>" class="btn btn-info" name='edit'>return</a>
 </p>
<?php endif;?>
      </td>

    </tr>
    <?php endif; endif;?>


   <?php if ($_POST['answer']=='memoire'):?>
      <?php
      if ($row['points']==0):?>
        <p>you have 0 points you can't borrow a document </p>
<?php endif;
if ($row['points']>0):
if ($row['nbremp']<3):?>
        <a href="searchissueth.php?id=<?php echo $row['id']; ?>&email=<?php echo $row['email'];?>" class="btn btn-info" name='edit'>select</a>
<?php endif; 
if ($row['nbremp']==3):?>
<p> you have already borrowed 3 documents
<a href="http://localhost/gestiondunebibliotheque/retourner/return.php?id=<?php echo $row['id']; ?>" class="btn btn-info" name='edit'>return</a>
 </p>
<?php endif;?>
      </td>

    </tr>
    <?php endif; endif; ?>


    <?php if ($_POST['answer']=='revue'):?>
      <?php
      if ($row['points']==0):?>
        <p>you have 0 points you can't borrow a document </p>
<?php endif;
if ($row['points']>0):
if ($row['nbremp']<3):?>
        <a href="searchissuej.php?id=<?php echo $row['id']; ?>&email=<?php echo $row['email'];?>" class="btn btn-info" name='edit'>select</a>
<?php endif; 
if ($row['nbremp']==3):?>
<p> you have already borrowed 3 documents
<a href="http://localhost/gestiondunebibliotheque/retourner/return.php?id=<?php echo $row['id']; ?>" class="btn btn-info" name='edit'>return</a>
 </p>
<?php endif;?>
      </td>

    </tr>
    <?php endif; endif;?>




    <?php endif;?>
    <?php endwhile;?>
    
  </table>
</div>

    <?php endif;?>
</html>
<?php endif;?>

 









