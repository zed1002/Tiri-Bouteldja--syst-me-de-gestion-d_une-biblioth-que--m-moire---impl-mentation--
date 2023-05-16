
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body >
    <?php
    
    include_once "..\connexion\connexion.php";
    require_once "..\document/addbook.php";
    include "..\js/file.php";
    include "..\user/header.html";
    
    
    $ref='';
    $emp='';
    $titre='';
    $auteur='';
    $edition='';
    $nbrexp='';
    $annee='';
    $prix='';

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

 <br><br><br><br> <h1 style="font-size:40px">books list</h1><br>
  
  
<p>
 
 <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseExample">
 Add a new book
 </button>
</p>

<div class="collapse" id="form">
 <div class="card card-body">



    <div class="row justify-content-center">
    <form onsubmit="return validate()" action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">
   <div class="form-container">
       <div class="form-content">
           <h1>Add a book</h1>
       </div>


       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Reference</label>
                 </div>
                 <div class="field-body">
                   <div class="field">
                     
                       <input  class="input" name="ref" type="number" placeholder="reference" required='required'>
                       
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

                   <input class="input " name="emp" type="text" placeholder="Entrer l'emplacement du livre" >
                        
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
                     
                       <input class="input" name="titre" type="text" placeholder="Entrer the title of the book">
                       
                   </div>  
                 </div>
           </div>
       </div>
       
       <div class="field is-horizontal">
           <div class="field-body">
               <div class="field-label is-normal">
                   <label class="label">Author</label>
                 </div>
                 <div class="field-body">
                   <div class="field">

                   <input class="input" name="auteur" type="text" placeholder="Entrer the author of the book">
                       
                 </div>
             </div>
           </div>
           </div>
       
         
           

                   <div class="field is-horizontal">
                       <div class="field-label is-normal">
                         <label class="label">Edition</label>
                       </div>
                       <div class="field-body">
                         <div class="field">

                         <input class="input " name="edition" type="text" placeholder="Entrer the edition of the book" >
                            
                         </div>
                         <div class="field-label is-normal">
                           <label class="label">year</label>
                         </div>
                         <div class="field-body">
                           <div class="field">

                           <input class="input " name="annee" type="number" placeholder="Entrer the year" >
                               
                           </div>
                       </div>
                     </div>
                     
                   </div>


                   <div class="field is-horizontal">
                       <div class="field-label is-normal">
                         <label class="label">Nbr-copy</label>
                       </div>
                       <div class="field-body">
                         <div class="field">

                         <input class="input " name="nbrexp" type="number" placeholder="Entrer the number of copies" value="0"readonly required='required'>
                            
                         </div>
                         <div class="field-label is-normal">
                           <label class="label">Price</label>
                         </div>
                         <div class="field-body">
                           <div class="field">

                           <input class="input " name="prix" type="number" placeholder="Entrer the price of the book" required='required'>
                               
                           </div>
                       </div>
                     </div>
                     
                   </div>
                   
       
                   <div class="field is-horizontal">
    <div class="field-body">
        <div class="field-label is-normal">
            <label class="label">description</label>
          </div>
          <div class="field-body">
            <div class="field">

            <input class="input" name="des" type="text" placeholder="Enter the description of the book" required='required'>
               
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
       id="img" name="image-bk"
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
                     <button class="button is-primary is-rounded is-medium btn" name="ajouter">
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
    </div>
  
    <?php
 //pre_r($result);
 $sql="select * from livre order by ref";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  



<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>reference</th>
        <th>emplacement</th>
        <th >title</th>
        <th>author</th>
        <th>edition</th>
        <th>nbrcopy</th>
        <th>year</th>
        <th>price</th>
        
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
      <!--
        
      <td>
      <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaire.php?addex=<?php echo $row['ref']; ?>" class="btn btn-info" name='addex'>Add copies</a>
        <a href="updatebook.php?edit=<?php echo $row['ref']; ?>" class="btn btn-warning" name='edit'>Edit</a>
        <a style="color:white" class="btn btn-danger" name="delete" value="delete"  onClick="crnb(<?php echo $row['ref']; ?>)" > Delete </a>
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

        </body>
 

</html>