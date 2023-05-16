<?php include "../book/navigation.html";?>

<!DOCTYPE html>
<html style="background-image: linear-gradient(to right top,  rgba(41, 152, 255, 0.85), rgba(86, 52, 250, 0.85));">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new thesis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body >
  <section class="section-bookform">
         <div class="rowp">
             <div class="thesisform">

             <form class="bkf" action="http://localhost/gestiondunebibliotheque/document/addbook.php" method="POST">


             <div class=" u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Add a new thesis
                            </h2>
                           </div>


        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Reference</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                    <input class="input" name="ref_m" type="number" placeholder="Enter the reference" required='required'>
                       
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

                    <input class="input " name="emp_m" type="text" placeholder="Enter the emplacement of thesis" required='required'>
                          
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

                    <input class="input" name="titre_m" type="text" placeholder="Enter the title " required='required'>
                        
                    </div>  
                  </div>
            </div>
        </div>
        
        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field-label is-normal">
                    <label class="label">Realised by</label>
                  </div>
                  <div class="field-body">
                    <div class="field">

                    <input class="input" name="realiser_par" type="text" placeholder="Enter the names" required='required'>
                        
                  </div>
              </div>
            </div>
           
                       
                       <div class="field-body">
                         <div class="field-label is-normal">
                           <label class="label">field</label>
                         </div>
                         <div class="field-body">
                           <div class="field">
   
                           <input class="input " name="specialite" type="text" placeholder="Enter the field" required='required'>
                               
                           </div>
                       </div>
                     </div>
                     
                   </div>
              
                    
        

                    <div class="field is-horizontal">
                       
                      <div class="field-body">
                        <div class="field-label is-normal">
                          <label class="label">nbrcopy</label>
                        </div>
                        <div class="field-body">
                          <div class="field">

                          <input class="input " name="nbrexp_m" type="number" placeholder="Enter the number of copies" value="0" readonly required='required'>
                             
                          </div>
                      </div>
                    </div>


                    <div class="field-body">
                          <div class="field-label is-normal">
                            <label class="label">year</label>
                          </div>
                          <div class="field-body">
                            <div class="field">

                            <input class="input " name="annee_m" type="number" placeholder="Enter year" required='required' >
                                
                            </div>
                        </div>
                      </div>
                    
                  </div>


            
                  <div class="field is-horizontal">
                       
                       <div class="field-body">
                         <div class="field-label is-normal">
                           <label class="label">type</label>
                         </div>
                         <div class="field-body">
                           <div class="field">
   
                           <input class="input " name="type" type="text" placeholder="Enter the type of thesis (license, masters.....)" required='required'>
                               
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

                    <button class="button is-primary is-rounded is-medium floated-img" name="ajouterM">
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