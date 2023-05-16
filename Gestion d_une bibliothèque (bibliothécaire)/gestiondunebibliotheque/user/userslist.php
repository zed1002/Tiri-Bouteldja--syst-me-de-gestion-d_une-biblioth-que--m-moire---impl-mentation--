
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion d'une bibliothèque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>



  <body>
 
    <?php
    include_once "..\connexion\connexion.php";
    require_once "..\user/adduser.php";
    include "..\js/file.php";
     include "..\user/header.html";
    $id='';
    $nom='';
    $prenom='';
    $tel='';
    $email='';
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

  <br><br><br><br> <h1 style="font-size:40px">Users list</h1>

    <?php
 //pre_r($result);
 $sql="select * from abonne ";
 $result=mysqli_query($bdd,$sql);
    
    ?>
  


  </br> 
  </br>
<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>last name</th>
        <th>firstname</th>
        <th>phone number</th>
        <th>email</th>
        <th>points</th>
        
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['nom'];?></td>
      <td><?php echo $row['prenom'];?></td>
      <td><?php echo $row['tel'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['points'];?></td>
     

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


<div class="row justify-content-center">
<p>
 
  <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseExample">
  Add user
  </button>
</p>

<div class="collapse" id="form">
  <div class="card card-body">

  
<form id="registration_form" onsubmit="return validate()" action="adduser.php" method="POST">
    
        
            <h1>Add a new user</h1>
        
        
                <div class="form-group row">
                  
                  
                  <label for="form_id" class="col-sm-2 col-form-label">id</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
  
                      <input id="form_id" class="form-control" name="id" type="number" placeholder="id" required='required'>
                      
                       <span class="error_form" id="id_error_message"></span>
                    </div>
                     
                     
                    
                  </div>  
                
             
              

                
                  <label for="form_fname" class="col-sm-2 col-form-label">Last name</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
                      <input id="form_fname" class="form-control" name="nom" type="text" placeholder="Enter the name of user" required='required'>
                      
                       <span class="error_form" id="fname_error_message"></span>
                    </div>
                     
                     
          
                  </div>  
                
                
            

            <label for="form_sname" class="col-sm-2 col-form-label">First name</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
                          <input id="form_sname" class="form-control" name="prenom" type="text" placeholder="Enter the first name of user" required='required' maxlength="20">
                        
                          
                       <span class="error_form" id="sname_error_message"></span>
                    </div>
                    
                     
                   
                  </div> 
                  <div> 
                
</div>

              <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
                        <input id="form_email" class="form-control" name="email" type="email" placeholder="Email" required='required'>
                        
                        
                       <span class="error_form" id="email_error_message"></span> 
                    </div>

                     
                   </div>   
              
              

              <label for="form_tel" class="col-sm-2 col-form-label">phone number</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                       <span class="input-group-text" >
                       +213</span>
                       </div>
                        <input id="form_tel" class="form-control" name="tel" type="number" placeholder="Enter the phone number of user" required='required'>
                        <span class="error_form" id="tel_error_message"></span>
                        
                    </div>
                    
                
             
            
              
              
              

                
                      <button id="ajouter" class="btn btn-primary" type="submit" name="ajouter">
                        Add
                      </button>
                   

      </form>
      </div>

</div>
</div>
   <?php
include "..\js/file.php";

?>
</body>
</html>
