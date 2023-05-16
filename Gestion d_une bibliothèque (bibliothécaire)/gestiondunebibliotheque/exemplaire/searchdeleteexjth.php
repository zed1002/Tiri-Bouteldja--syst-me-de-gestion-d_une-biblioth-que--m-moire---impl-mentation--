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
  <div class="wave-container">

  <a href="http://localhost/gestiondunebibliotheque/index.php" style="position: fixed; bottom: 90%; font-size: 25px; color: white; margin-left: -47%;"><i class="fas fa-university "></i>Library</a>


  <form  method="POST">
    
      <div class="searchbar-container">
          <h1 class="heading-primary heading-primary--main"> EDIT/DELETE THESIS </h1>
        <input class="search-bar" type="text" name="q" placeholder="search...(by default the search will be by reference)"/>
         <div class="dropdown">
         
  <div class="select" >
      <select name="column"  id="select_graphtype" class="fa select" style="width: 45px; border-radius:20px" >
      <option value=""> &#xf0b0; select filter </option>
        <option value="refm_exp">ref_copy</option>
        <option value="titre">title</option>
        <option value="realiser_par">realised by</option>
        <option value="specialite">field</option>
        <option value="emp">emplacement</option>
        <option value="annee">year</option>
        <option value="ref_fk">ref_thesis</option>
        
      </select>
    </div>
    <div class="clear-fix"></div>
    
</div> 

      </div>
      <button class="btn dropbtn" type="submit" name="srchusrbtn">
                        search 
                      </button>
    </section>
                     
                      
</form>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#0099ff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,218.7C384,245,480,267,576,261.3C672,256,768,224,864,208C960,192,1056,192,1152,213.3C1248,235,1344,277,1392,298.7L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
</div>
</body>

<div class="container text-center">

<?php

	if (isset($_POST['srchusrbtn'])):
    
		$q = $bdd->real_escape_string($_POST['q']);
		$column = $bdd->real_escape_string($_POST['column']);

		if ( ($column == "" ||$column != "refm_exp" && $column != "titre" && $column != "realiser_par" && $column != "specialite" && $column != "emp" && $column != "annee" && $column != "ref_fk")){
    //default column
      $column = "refm_exp";}
      if ($q==""){
echo "empty field";
      }
     
if($q!=""):
        $sql = $bdd->query("SELECT * FROM exemplaireth WHERE $column LIKE '%$q%'"); ?>
       
        <div class="row justify-content-center">
        <h1 style="font-size:40px">Result</h1>
  <table class="table">
    <thead>
      <tr>
      <th>ref_copy</th>
        <th>emp</th>
        <th>title</th>
        <th>realised by</th>
        <th>field</th>
        <th>ref_thesis</th>
        <th>year</th>
        <th colspan="2">action</th>
      </tr>
    </thead>
        
    <?php
    while($row = $sql->fetch_assoc()):
    ?>
    <tr>
    <td><?php echo $row['refm_exp'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre'];?></td>
      <td><?php echo $row['realiser_par'];?></td>
      <td><?php echo $row['specialite'];?></td>
      <td><?php echo $row['ref_fk'];?></td>
      <td><?php echo $row['annee'];?></td>
      
      <td>
       
        <a href="updateexemplaireth.php?edit=<?php echo $row['refm_exp']; ?>" class="btn btn-info" name='edit'>Edit</a>
        

        <?php 
       $ref=$row['refm_exp'];
        $query = "SELECT * FROM emprunt
          where ref_expe='$ref' and genre='memoire'";
$result = mysqli_query($bdd,$query);
if(mysqli_num_rows($result) == 0): ?>

        <a class="btn btn-info" name="delete" value="delete"  onClick="crnexeth(<?php echo $row['refm_exp']; ?> ,<?php echo $row['ref_fk']; ?>)" > Delete </a>
      
        <?php endif;
      if(mysqli_num_rows($result) > 0): 
        echo "this copy is borrowed "?>
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
    