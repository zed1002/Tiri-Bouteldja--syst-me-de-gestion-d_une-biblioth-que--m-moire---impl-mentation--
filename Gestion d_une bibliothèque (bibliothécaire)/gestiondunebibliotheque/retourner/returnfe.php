<?php
include_once "..\connexion\connexion.php";
include "../book/navigation.html";
$id=$_GET['id'];
$ref=$_GET['ref'];
$dp=$_GET['dp'];
$dr=$_GET['dr'];
$genre=$_GET['genre'];
$answer=$_GET['answer'];
$ref_fk=$_GET['ref_fk'];
?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right top, #7ed56f, #28b485);">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Return document</title>
  </head>
  <body>

  <section class="section-return">
         <div class="rowp">
             <div class="return">
                 <div class="book__form">

  <form action="returnbe.php"  method="POST">

  <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                return a document
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
                      
                        <input class="input" name="ref" type="text" placeholder="reference" value="<?php echo $ref;?>">
                        
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

<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">boroow date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="number" class="input" name="dp" type="text" placeholder="date du prêt" value="<?php 
echo $dp?>" required='required'>
                      
                  </div>  
                </div>
</div>





<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">expected return date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="number" class="input" name="dr" type="text" placeholder="date du retour" value="<?php echo $dr ;?>" required='required'>
                     
                  </div>  
                </div>
</div>

<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">return date</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    
                      <input id="date" class="input" name="dro" type="text" placeholder="date du retour" value="<?php 
echo date("Y-m-d") ;?>"  required='required'>
                     
                  </div>  
                </div>
</div>

<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">condition</label>
                </div>
                <div class="field-body">
                  <div class="field">
                   
                      <input id="number" class="input" name="etat" type="text" placeholder="id" value="<?php echo $answer;?>" required='required'>
                     
                  </div>  
                </div>
                </div>

<div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">new condition</label>
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
                <div class="field-label is-normal">
                  <label class="label">penalize</label>
                </div>
                <div class="field-body">
                  <div class="field">
<div class="control">
  <label class="radio">
    <input type="radio" name="answer1" value="oui">
    yes
  </label>
  <label class="radio">
    <input type="radio" name="answer1" value="non">
    no
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
                      <button  name="rtn" class="button is-primary is-rounded is-medium btn">
                        return
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

