<?php
include_once "..\connexion\connexion.php";
include "../book/navigation.html";
$id=$_GET['user'];
$preter=$_GET['preter'];
$ref_fk=$_GET['ref_fk'];
$genre=$_GET['genre'];
?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right top, rgba(41, 152, 255, 0.85), rgba(86, 52, 250, 0.85));">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>borrow a document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>


  <section class="section-book">
         <div class="rowp">
             <div class="book">
                 <div class="book__form">
    
  <form action="preterbe.php"  method="POST">

  <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                borrow a document
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
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      
                        <input class="input" name="ref" type="text" placeholder="reference" value="<?php echo $preter;?>">
                        
                    </div>  
                  </div>
            </div>
        </div>



        <div class="field is-horizontal">
        <div class="field-label is-normal">
                    <label class="label">Reference_doc</label>
                  </div>
            <div class="field-body">
                
                  <div class="field-body">
                    <div class="field">
                      
                        <input class="input" name="ref_fk" type="text" placeholder="reference" value="<?php echo $ref_fk;?>">
                       
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
                  <label class="label">borrow date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="number" class="input" name="dp" type="text" placeholder="date du prêt" value="<?php 
echo date("Y-m-d") ;?>" required='required'>
                      
                  </div>  
                </div>
</div>


<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">return date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="number" class="input" name="dr" type="text" placeholder="date du retour" value="<?php echo date('Y-m-d', strtotime($date. ' + 15 days'));?>" required='required'>
                     
                  </div>  
                </div>
</div>

<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">condition</label>
                </div>
                <div class="field-body">
                  <div class="field">
<div class="control">
  <label class="radio">
    <input type="radio" name="answer" value="good">
    good
  </label>
  <label class="radio">
    <input type="radio" name="answer" value="medium">
    medium
  </label>
  <label class="radio">
    <input type="radio" name="answer" value="bad">
    bad
  </label>
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
                      <button  name="pre" class="button is-primary is-rounded is-medium btn">
                        Borrow 
                      </button>

                      <button class="button is-danger is-rounded is-medium floated-img" type="cancel">
                 <a style=" color:white;" href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>
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


