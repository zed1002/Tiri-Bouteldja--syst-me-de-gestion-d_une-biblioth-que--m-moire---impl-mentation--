<?php include "../book/navigation.html";?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right bottom, #d800b4, #9d00db);">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body >
  <section class="section-bookform">
         <div class="rowp">
             <div class="bookform">

             <form class="bkf" action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">


             <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Add a new book
                            </h2>
                           </div>


<div class="field is-horizontal">
    <div class="field-body">
        <div class="field-label is-normal">
            <label class="label">Reference</label>
          </div>
          <div class="field-body">
            <div class="field">

            <input class="input" name="ref" type="number" placeholder="reference" required='required'>
               
            </div>  
          </div>
    </div>

    <div class="field-body">
        <div class="field-label is-normal">
            <label class="label">Emplacement</label>
          </div>
          <div class="field-body">
            <div class="field">

            <input class="input " name="emp" type="text" placeholder="Enter the emplacement of the book" required='required'>
                 
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

            <input class="input" name="titre" type="text" placeholder="Enter the title of the book" required='required'>
                
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

            <input class="input" name="auteur" type="text" placeholder="Enter the name of the author" required='required'>
               
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

                  <input class="input " name="edition" type="text" placeholder="Enter the editio of the book" required='required'>
                      
                  </div>
                  <div class="field-label is-normal">
                    <label class="label">year</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                    <input class="input " name="annee" type="number" placeholder="Enter the year" required='required'>
                        
                    </div>
                </div>
              </div>
              
            </div>


            <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Nbr-copies</label>
                </div>
                <div class="field-body">
                  <div class="field">

                  <input class="input " name="nbrexp" type="text"  value="0" readonly required='required' >
                      
                  </div>
                  <div class="field-label is-normal">
                    <label class="label">Price</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                    <input class="input " name="prix" type="number" placeholder="Enter the price of the book" required='required'>
                       
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

            <button class="button is-primary is-rounded is-medium floated-img" name="ajouter"> 
                Add
              </button>

               <button class="button is-danger is-rounded is-medium floated-img" type="cancel">
         <a style=" color:black;" href="http://localhost/gestiondunebibliotheque/index.php ">cancel </a>
         </button>
              
            </div>
          </div>
        </div>
      </div>
      
</div>

</form>
                 <div class="bkfr">
               
               

      </div>
      </div>
      </div>
      </section>
        </body>
        </html>