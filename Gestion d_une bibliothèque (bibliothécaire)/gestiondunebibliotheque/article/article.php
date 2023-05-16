<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>articles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/article/article.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

  <?php include "../book/navigation.html"?>

  <body>


<div class="section-artheader">
  <div class="heading-article">
    <h1>NEWS</h1>
    <h6>Add new articles, read and delete articles...</h6>
    <div><a href="#add-article" class="btn btn-primary" style="margin-left: 60%;"> Add article </a></div>
  </div>

  <div class="article-image">
<img class="img-ar" src="http://localhost/gestiondunebibliotheque/image/News-amico.svg" alt="">
</div>
</div>



  <?php
include_once "..\connexion\connexion.php";
include "..\js/file.php";

$sql="select * from news ";
$result=mysqli_query($bdd,$sql);
   
   ?>





<div class="col2of3">
<div class="cards">
<?php
    while($row = $result->fetch_assoc()):
    ?>
  <div class="card">
    <div class="card__image-holder">
    <?php echo '<img class="card__image" src="http://localhost/gestiondunebibliotheque/image/'. $row['img'].'"'. '/>';?>
    </div>
    <div class="card-title">
      
      <h2>
      <?php echo $row['Titre'];?>
          <small><?php echo $row['dis'];?></small>
      </h2>
      <div class="arbtncnt">
      <a href="<?php echo $row['url'];?>" class="btn">Read more</a>
     
      <a class="delete-article" name="delete" value="delete"  onClick="crnar(<?php echo $row['idarticle']; ?>)" > Del </a>
    </div>
    </div>
    
  </div>


 


  <?php endwhile; ?>
  
 
  </div>
  
</div>

<div class="col1of3">

<form id="add-article" method="POST" style="margin-right: 5%;">
<h2 class="heading-secondary" >   Add a new article</h2><br><br>

<div class="article-form-container">


  
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">title</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                          <input name="title" class="titleinput"  type="text" placeholder="Enter the title of the article"  >
                              
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
       id="img" name="img"
       accept="image/png, image/jpeg">
       
                              
                          </div>
                          
                      </div>
                      
                    </div>
  
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">discription</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                          <textarea name="disc" class="description-input" name="txtar" id="" cols="20" rows="16" placeholder="Enter the discription of this article..."></textarea>
                              
                          </div>
                          
                      </div>
                      
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label">url</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                          <input name="url" class="titleinput"  type="text" placeholder="Enter url for more details"  >
                              
                          </div>
                          
                      </div>
                      
                    </div>



                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                          <label class="label"></label>
                        </div>
                        <div class="field-body">
                          <div class="field">
                    
                    <div><input type="submit" class="btn btn-primary" name="add-article" value="Add article"></div>
 
                    </div>
                          
                          </div>
                          
                        </div>
 </div> 
</form>

</div>

<?php
if(isset ($_POST['add-article']) ){
    
    $titre=$_POST['title'];
    $img=$_POST['img'];
    $disc=$_POST['disc'];
    $aurl=$_POST['url'];
    
  
    $sql="INSERT INTO news(Titre,img,dis,url) VALUES('$titre','$img','$disc','$aurl')";

    if(!mysqli_query($bdd,$sql)){
        die('fail:' .$bdd->error);
         
    }
    
   
}?>






</body>

</html>

