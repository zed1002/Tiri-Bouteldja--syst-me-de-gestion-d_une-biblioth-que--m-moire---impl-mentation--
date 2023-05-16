<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thesis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
 
    <?php
    include_once "..\connexion\connexion.php";
    require_once "..\document/addbook.php";
    include "..\js/file.php";
    include "../user/header.html";
    
    
    $ref='';
    $emp='';
    $titre='';
    $realiser_par='';
    $specialite='';
    $nbrexp='';
    $annee='';
    

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
<br><br><br>
  <br> <h1 style="font-size:40px">Thesis list</h1><br>

  
<p>
 
 <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseExample">
 Add thesis
 </button>
</p>

<div class="collapse" id="form">
 <div class="card card-body">

<form action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">
   <div class="form-container">
       <div class="form-content">
           <h1>Add a new thesis</h1>
       </div>


       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Reference</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input" name="ref_m" type="number" placeholder="reference" required='required'>
                       
                   </div>  
                 </div>
           </div>
       </div>



       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Emplacement</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input " name="emp_m" type="text" placeholder="Entrer emplacement " required='required'>
                         
                   </div>
               </div>
           </div>
           </div>


       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Title</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input" name="titre_m" type="text" placeholder="Entrer the title of the thesis" required='required'>
                      
                   </div>  
                 </div>
           </div>
       </div>
       
       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Realised by</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input" name="realiser_par" type="text" placeholder="Entrer names " required='required'>
                       
                 </div>
             </div>
           </div>
           </div>
       
         
           

               


                   <div class="field is-horizontal">
                      
                       <div class="field-body">
                         <div class="field-label is-normal">
                           <label class="label">year</label>
                         </div>
                         <div class="field-body">
                           <div class="field">

                           <input class="input " name="annee_m" type="number" placeholder="Entrer year" required='required'>
                              
                           </div>
                       </div>
                     </div>
                     
                   </div>
                   
       

                   <div class="field is-horizontal">
                      
                     <div class="field-body">
                       <div class="field-label is-normal">
                         <label class="label">nbrcopy</label>
                       </div>
                       <div class="field-body">
                         <div class="field">

                         <input class="input " name="nbrexp_m" type="number" placeholder="Entrer the number of copies" value="0" readonly required='required'>
                             
                         </div>
                     </div>
                   </div>
                   
                 </div>


           

                 <div class="field is-horizontal">
                      
                   <div class="field-body">
                     <div class="field-label is-normal">
                       <label class="label">field</label>
                     </div>
                     <div class="field-body">
                       <div class="field">

                       <input class="input " name="specialite" type="text" placeholder="Entrer field" required='required'>
                          
                       </div>
                   </div>
                 </div>
                 
               </div>


               <div class="field is-horizontal">
                      
                      <div class="field-body">
                        <div class="field-label is-normal">
                          <label class="label">type</label>
                        </div>
                        <div class="field-body">
                          <div class="field">
   
                          <input class="input " name="type" type="text" placeholder="Enter the type of thesis (licence, masters...)" required='required'>
                             
                          </div>
                      </div>
                    </div>
                    
                  </div>


           
             <div class="field is-horizontal">
               <div class="field-label">
                 <!-- Left empty for spacing -->
               </div>
               <div class="field-body">
                 <div class="field">
                   <div class="control">
                     <button class="button is-primary is-rounded is-medium btn" name="ajouterM">
                       Add 
                     </button>
                   </div>
                 </div>
               </div>
             </div>
             
       </div>
   
     </form>
</div>
</div>
    <?php
 //pre_r($result);
 $sql="select * from memoire order by ref_m ";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>reference</th>
        <th>emplacement</th>
        <th>title</th>
        <th>realised by</th>
        <th>field</th>
        <th>nbrexp</th>
        <th>year</th>
        <th>type</th>
        
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['ref_m'];?></td>
      <td><?php echo $row['emp_m'];?></td>
      <td><?php echo $row['titre_m'];?></td>
      <td><?php echo $row['realiser_par'];?></td>
      <td><?php echo $row['specialite'];?></td>
      <td><?php echo $row['nbrexp_m'];?></td>
      <td><?php echo $row['annee_m'];?></td>
      <td><?php echo $row['type'];?></td>
      <!--
      <td>
      <a href="http://localhost/gestiondunebibliotheque\exemplaire/exemplaireth.php?addex=<?php echo $row['ref_m']; ?>" class="btn btn-info" name='addex'>Add copies</a>
        <a href="updatethesis.php?editM=<?php echo $row['ref_m']; ?>" class="btn btn-warning" name='editM'>Edit</a>
        <a style="color:white" class="btn btn-danger" name="deleteM" value="delete"  onClick="crnth(<?php echo $row['ref_m']; ?>)" > Delete </a>
      </td>
-->
    </tr>
    <?php endwhile; ?>
  </table>
</div>




<?php
 function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
?>
