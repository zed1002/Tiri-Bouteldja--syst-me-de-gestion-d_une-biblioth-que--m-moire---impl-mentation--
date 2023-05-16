
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>copies list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
 
    <?php
    include_once "..\connexion\connexion.php";
    require_once "..\document/addbook.php";
    include "..\js/file.php";
    include "..\user/header.html";
    
    
    $ref_exp='';
    $emp='';
    $titre='';
    $annee='';
    $ref_fk='';

    ?>

<?php include "../book/navigation.html"?>


  <?php
  if (isset($_SESSION['message'])): ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
  <?php endif; ?>
 <br><br><br><br> <h1 style="font-size:40px">Books copies</h1><br>
<?php
 $sql = $bdd->query("SELECT * FROM exemplaire ORDER BY ref_fk"); ?>
       
 <div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>ref_copy</th>
 <th>emp</th>
 <th>title</th>
 <th>author</th>
 <th>edition</th>
 <th>ref_book</th>
 <th>year</th>
 
</tr>
</thead>
 
<?php
while($row = $sql->fetch_assoc()):
?>
<tr>
<td><?php echo $row['ref_exp'];?></td>
<td><?php echo $row['emp'];?></td>
<td><?php echo $row['titre'];?></td>
<td><?php echo $row['auteur'];?></td>
<td><?php echo $row['edi'];?></td>
<td><?php echo $row['ref_fk'];?></td>
<td><?php echo $row['annee'];?></td>



</tr>
<?php endwhile;?>

</table>
</div>


<h1 style="font-size:40px">Thesis copies</h1><br>
<?php
       $sql1 = $bdd->query("SELECT * FROM exemplaireth ORDER BY ref_fk"); ?>
       
       <div class="row justify-content-center">
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
       
     </tr>
   </thead>
       
   <?php
   while($row = $sql1->fetch_assoc()):
   ?>
   <tr>
   <td><?php echo $row['refm_exp'];?></td>
     <td><?php echo $row['emp'];?></td>
     <td><?php echo $row['titre'];?></td>
     <td><?php echo $row['realiser_par'];?></td>
     <td><?php echo $row['specialite'];?></td>
     <td><?php echo $row['ref_fk'];?></td>
     <td><?php echo $row['annee'];?></td>
     
    

   </tr>
   <?php endwhile;?>
   
 </table>
</div>


<h1 style="font-size:40px">Journals copies </h1><br>

    <?php
        $sql = $bdd->query("SELECT * FROM exemplairej ORDER BY ref_fk"); ?>
       
        <div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
      <th>ref_copy</th>
        <th>emp</th>
        <th>title</th>
        <th>ref_journal</th>
        <th>year</th>
       
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
      
   

    </tr>
    <?php endwhile;?>
    
  </table>
</div>






        </body>
 

</html>