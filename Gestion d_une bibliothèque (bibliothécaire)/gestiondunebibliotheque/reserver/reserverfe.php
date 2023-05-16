<?php
include_once "..\connexion\connexion.php";
include "../book/navigation.html";
$id=$_GET['id'];
$ref=$_GET['ref'];
$genre=$_GET['genre'];
$email=$_GET['email'];
?>

<!DOCTYPE html >
<html style="background-image: linear-gradient(to right top, #ffb900, #ff7730);">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>


  <section class="section-reserve">
         <div class="rowp">
             <div class="reserve">
                 <div class="book__form">

  <form action="reserver.php"  method="POST">

  <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                reserve a document
                            </h2>
                           </div>

  <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">document</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      
                        <input class="input" name="genre" type="text" placeholder="reference" value="<?php echo $genre;?>">
                        
                    </div>  
                  </div>
            </div>
        </div>





        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference_doc</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      
                        <input class="input" name="ref" type="text" placeholder="reference" value="<?php echo $ref;?>">
                       
                    </div>  
                  </div>
            </div>
        </div>

        
        <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">id</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="number" class="input" name="id" type="text" placeholder="id" value="<?php echo $id;?>" required='required'>
                      
                  </div>  
                </div>
</div>
<?php $date=date("Y-m-d");?>
<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">reservation date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                   
                      <input id="number" class="input" name="drs" type="text" placeholder="date de la réservation" value="<?php 
echo date("Y-m-d") ;?>" required='required'>
                      
                  </div>  
                </div>
</div>


<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">email</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="email" class="input" name="email" type="text" placeholder="email" value="<?php echo $email?>" required='required'>
                      
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
                      <button  name="res" class="button is-primary is-rounded is-medium btn">
                        reserve 
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              </form>

              </div>
</div>
</div>
</section>
</body>
</html>


