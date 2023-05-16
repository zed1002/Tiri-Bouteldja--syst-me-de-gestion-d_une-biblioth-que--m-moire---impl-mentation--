<?php include "../book/navigation.html";?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85));">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new journal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <section class="section-bookform">
         <div class="rowp">
             <div class="journalform">
      <form class="bkf" action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">
    
        
        <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Add a new journal
                            </h2>
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

                    <input class="input " name="emp" type="text" placeholder="Enter the emplacement of the journal" required='required'>
                          
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

                    <input class="input" name="titre_r" type="text" placeholder="Enter the title of the journal" required='required'>
                        
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

                  <input class="input" name="annee_r" type="number" placeholder="Enter the year" required='required'>
                      
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

                <input class="input" name="prix" type="number" placeholder="Enter the price" required='required'>
                    
                </div>  
              </div>
        </div>
    </div>



    <div class="field is-horizontal">
      <div class="field-body">
          <div class="field-label is-normal">
              <label class="label">nbrcopies</label>
            </div>
            <div class="field-body">
              <div class="field">

              <input class="input" name="nbrexp_r" type="number" value="0" readonly required='required'>
                 
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
                    <button class="button is-primary is-rounded is-medium floated-img" name="ajouterR">
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