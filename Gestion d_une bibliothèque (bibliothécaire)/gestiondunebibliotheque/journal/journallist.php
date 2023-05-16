<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Journals list</title>
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
    $prix='';
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
  <br><br><br><br> <h1 style="font-size:40px">Journals list</h1><br>



  <p>
 
 <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseExample">
 Add journal
 </button>
</p>

<div class="collapse" id="form">
 <div class="card card-body">

<form action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">
   <div class="form-container">
       <div class="form-content">
           <h1>Add a new journal</h1>
       </div>


       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Reference</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input" name="ref_r" type="number" placeholder="reference" required='required'>
                     
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

                   <input class="input " name="emp" type="text" placeholder="Entrer the emplacement of the journal" required='required' >
                         
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

                   <input class="input" name="titre_r" type="text" placeholder="Entrer the title of the journal" required='required'>
                       
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

                 <input class="input" name="annee_r" type="number" placeholder="Entrer the year" required='required'>
                     
                 </div>  
               </div>
         </div>
     </div>
           



     <div class="field is-horizontal">
       <div class="field-body">
           <div class="field-label is-normal">
               <label class="label">price</label>
             </div>
             <div class="field-body">
               <div class="field">

               <input class="input" name="prix" type="number" placeholder="Entrer the price" required='required'>
                 
               </div>  
             </div>
       </div>
   </div>



   <div class="field is-horizontal">
     <div class="field-body">
         <div class="field-label is-normal">
             <label class="label">nbr-copy</label>
           </div>
           <div class="field-body">
             <div class="field">

             <input class="input" name="nbrexp_r" type="number" placeholder="Entrer le nombre d'exemplaire" value="0" readonly required='required'>
                
             </div>  
           </div>
     </div>
 </div>

             
                        
        
    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">image</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                          <input type="file"
       id="img" name="image-r"
       accept="image/png, image/jpeg">
       
                              
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
                     <button class="button is-primary is-rounded is-medium btn" name="ajouterR">
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
 $sql="select * from revue order by ref_r ";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>reference</th>
        <th>emplacement</th>
        <th>title</th>
        <th>nbr-copy</th>
        <th>year</th>
        <th>price</th>
        
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['ref_r'];?></td>
      <td><?php echo $row['emp'];?></td>
      <td><?php echo $row['titre_r'];?></td>
      <td><?php echo $row['nbrexp_r'];?></td>
      <td><?php echo $row['annee_r'];?></td>
      <td><?php echo $row['prix'];?></td>
<!--
      <td>
      <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplairej.php?addex=<?php echo $row['ref_r']; ?>" class="btn btn-info" name='addex'>Add copies</a>
        <a href="updatejournal.php?editR=<?php echo $row['ref_r']; ?>" class="btn btn-warning" name='editR'>Edit</a>
        <a style="color:white" class="btn btn-danger" name="deleteR" value="delete"  onClick="crnj(<?php echo $row['ref_r']; ?>)" > Delete </a>
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
