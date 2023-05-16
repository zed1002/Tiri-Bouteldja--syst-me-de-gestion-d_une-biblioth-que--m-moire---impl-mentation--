<?php 

include "..\js/file.php";
?>
  <?php include "../book/navigation.html"?>

<!DOCTYPE html>

<html  style="background-image:linear-gradient(to right top, #e9df56, #fdcc2c);" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/styles.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  
  </head>
  
  <body>
  <section class="section-user">
         <div class="rowp">
             <div class="user">
                 <div class="book__form">
      
      <form  id="registration_form" onsubmit="return validate()" action="adduser.php" method="POST">
    
      <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Add a new user
                            </h2>
                           </div>


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
              
              

              <label for="form_tel" class="col-sm-2 col-form-label">Phone number</label>
                  <div class="col-sm-10">
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                       <span class="input-group-text" >
                       +213</span>
                       </div>
                        <input id="form_tel" class="form-control" name="tel" type="number" placeholder="Enter the phone number of user" required='required'>
                        <span class="error_form" id="tel_error_message"></span>
                        
                    </div>
                    
                
             
            
                    <button class="button is-danger is-rounded is-medium floated-img" type="cancel">
                 <a style=" color:white;" href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>
                 </button>
              
              

                
                      <button id="ajouter" class="button is-primary is-rounded is-medium floated-img" type="submit" name="ajouter">
                        Add
                      </button>

                      
                   

      </form>
</div>

      </div>
</div>
</div>
</section>
   <?php
include "..\js/file.php";
?>
        </body>
        </html>