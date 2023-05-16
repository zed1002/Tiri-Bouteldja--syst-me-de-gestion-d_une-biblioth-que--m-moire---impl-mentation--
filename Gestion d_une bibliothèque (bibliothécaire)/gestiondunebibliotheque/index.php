<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   
} else {
    header('Location: http://localhost/gestiondunebibliotheque/login/login.php');
}?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Library management</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/styles.css" />
  <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/mobile-style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <div class="containers" id="blur">
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
          <i class="fas fa-university "></i>
          Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              
              <a class="nav-link" href="http://localhost/gestiondunebibliotheque/index.php">HOME
                
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
              <a class="nav-link" href=#>Catalogue</a>
           
            <div class="dropdown-content">
              <a href="http://localhost/gestiondunebibliotheque/book/booklist.php"> book</a>
              <a href="http://localhost/gestiondunebibliotheque/thesis/thesislist.php">thesis</a>
              <a href="http://localhost/gestiondunebibliotheque/journal/journallist.php">journal</a>
              <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplairelist.php">copies</a>

                    
            </div>
          </div>
        </li>

            <li class="nav-item">
              <a class="nav-link" href="http://localhost/gestiondunebibliotheque/retourner/return.php">Return</a>
            </li>
            <li class="nav-item">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="fas fa-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu" style="background-color: rgb(115, 0, 153);"></ul>
      </li>
     </ul>
   </li>

     
             
         </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-list"></i></a>
                <div class="dropdown-content">
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaireform.php"><i class="fas fa-plus"> </i> book copies</a>
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaireR.php"><i class="fas fa-plus"> </i> journal copies</a>
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/exemplaireM.php"><i class="fas fa-plus"> </i> thesis copies</a>
                    <div class="dropdown-divider"></div>
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/searchdeleteex.php"><i class="fas fa-edit"></i><i class="fas fa-minus"></i> book copies</a>
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/searchdeleteexj.php"><i class="fas fa-edit"></i><i class="fas fa-minus"></i>journal copies</a>
                    <a href="http://localhost/gestiondunebibliotheque/exemplaire/searchdeleteexjth.php"><i class="fas fa-edit"></i><i class="fas fa-minus"></i>thesis copies</a>
                  </div>
                    
                  </div>
              </li>

            <li class="nav-item">
              <a class= "nav-link" href="#" onclick="toggle()">
                <span class="icon ">
                    <i class="fas fa-book"></i>
                  </span>
                </a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-users"></i></a>
                <div class="dropdown-content">
                  <a href="http://localhost/gestiondunebibliotheque/user/userform.php"><i class="fas fa-user-plus"> </i>  add</a>
                  <a href="http://localhost/gestiondunebibliotheque/user/searchdelete.php"><i class="fas fa-user-minus"> </i>  delete</a>
                  <a href="http://localhost/gestiondunebibliotheque/user/searchupdate.php"><i class="fas fa-user-edit"></i>  update</a>
                  <a href="http://localhost/gestiondunebibliotheque/user/searchuser.php"><i class="fas fa-search"></i>  search</a>
                  <a href="http://localhost/gestiondunebibliotheque/user/userslist.php"><i class="fas fa-users"></i>  users list</a>
                </div>
              </div>
            </li>


            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link"><i class="fas fa-user"></i></a>
                <div class="dropdown-content">
                  <a href="http://localhost/gestiondunebibliotheque/login/chngpsw.php"> change password</a>
                  <a href="http://localhost/gestiondunebibliotheque/login/logout.php" >logout</a>
                  
                </div>
              </div>
            </li>


            
          
          </ul>
        </div>
      </nav>
    </div>

    


   



    <div class="container text-center">
      <div class="row">
        <div class="col-md-5 col-sm-12  h-25">
          <img src="image\knowledge_ (3).svg" alt="Book" />
        </div>

        <div class="col-md-7 col-sm-12  text-white">
          <h6>University constantine 2</h6>
          <h1>Online University Library</h1>
          <p>
            
          </p>
          <button  class="btnn  px-5 py-2 primary-btn">
           <a style="color:black;" href="http://localhost/gestiondunebibliotheque/preter/searchissue.php"> Borrow a document </a>
          </button>
        </div>
        
      </div>
    </div>
  </header>
  
    <main>
      <section class="section-tours" id="section-tours">
          
      
             <div class="row2">
              <div class="col-1-of-3">
                   <div class="card">
                     <div class="card__side card__side--front">
                       <div class="card__picture card__picture--1">
                           <!--empty space in html-->
                           &nbsp;
                        </div>
      
                       <h4 class="card__heading">
                           <span class="card__heading-span card__heading-span--1">borrow list</span>
                       </h4>
      
                       <div class="card__details">
                           
      
                       </div>
      
                     </div>  
      
                     <div class="card__side card__side--back card__side--back-1">
                      <div class="card__cta">
                          <div class="card__price-box">
                              
                              
                          </div>
                          <a href="http://localhost/gestiondunebibliotheque/preter/issuelist.php" class="btn btn--white">check list</a>
                      </div>
                  </div>  
      
                   </div>
              </div>
              <div class="col-1-of-3"> 
                  <div class="card">
                      <div class="card__side card__side--front">
                          <div class="card__picture card__picture--2">
                              <!--empty space in html-->
                              &nbsp;
                           </div>
      
                          <h4 class="card__heading">
                              <span class="card__heading-span card__heading-span--2">reservation list</span>
                          </h4>
      
                          <div class="card__details">
                              
      
                          </div>
      
                       </div>  
      
                       <div class="card__side card__side--back card__side--back-2">
                          <div class="card__cta">
                              <div class="card__price-box">
                                  
                                  
                              </div>
                              <a href="http://localhost/gestiondunebibliotheque/reserver/reservationlist.php" class="btn btn--white">check list</a>
                          </div>
                    </div>  
      
                  </div>
              </div>
              <div class="col-1-of-3"> 
                  <div class="card">
                      <div class="card__side card__side--front">
                          <div class="card__picture card__picture--3">
                              <!--empty space in html-->
                              &nbsp;
                           </div>
      
                          <h4 class="card__heading">
                              <span class="card__heading-span card__heading-span--3">handling events</span>
                          </h4>
      
                          <div class="card__details">
                              
      
                          </div>
      
                       </div>  
      
                       <div class="card__side card__side--back card__side--back-3">
                          <div class="card__cta">
                              <div class="card__price-box">
                                  
                                  
                              </div>
                              <a href="http://localhost/gestiondunebibliotheque/article/article.php" class="btn btn--white">go</a>
                          </div>
                    </div>  
      
                  </div>
              </div>
              
          </div>
      
          
          
      
       </section>

  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">online university library 
          constantine-2- <br> abdelhamid mehri </p>
          <p class="pt-4 text-muted">
            <span> </span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Our socials</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
           <a style="text-decoration:none" target="blank" href="https://mail.google.com/mail/u/1/#inbox"> <i class="fas fa-envelope"></i></a>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
            
            
          </div>
        </div>
      </div>
    </div>
    
  </footer>
</div>

  <div id="popup">
    <button type="button" class="close" aria-label="Close" onclick="toggle()" >
      <span aria-hidden="true">&times;</span>
    </button>
   
    <div> <img class="img floated-img" src="image/memoire1.png" alt=""> </div>
   <div class="floated-img img"><img class="img" src="image/revue1.png" alt=""></div>
   <div class="floated-img img"><img class="img" src="image/book1.png" alt=""></div>
   <div class="clear-fix"></div>
<div class="btn-container">
   <div class="floated-btns btns ">
   <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/book/bookform.php"  >
    <i class="fas fa-plus"></i>
    </a>
  </span>

  <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/book/searchdeleb.php"  >
    <i class="fas fa-minus"></i>
    </a>
  </span>

  <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/book/searchupdateb.php">
    <i class="fas fa-edit"></i>
    </a>
  </span>

  <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/book/searchbook.php">
    <i class="fas fa-search"></i>
    </a>
  </span>
</div>

<div class="floated-btns btns">
  <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/journal/journalform.php">
   <i class="fas fa-plus"></i>
    </a>
 </span>

 <span class="icon ">
  <a href="http://localhost/gestiondunebibliotheque/journal/searchdeletej.php"  >
   <i class="fas fa-minus"></i>
  </a>
 </span>

 <span class="icon">
  <a href="http://localhost/gestiondunebibliotheque/journal/searchupdatej.php"  >
   <i class="fas fa-edit"></i>
   </a>
 </span>

 <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/journal/searchjournal.php">
    <i class="fas fa-search"></i>
    </a>
  </span>

</div>

<div class="floated-btns btns">
  <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/thesis/thesisform.php"  >
   <i class="fas fa-plus"></i>
   </a>
 </span>

 <span class="icon ">
  <a href="http://localhost/gestiondunebibliotheque/thesis/searchdeleteth.php"  >
   <i class="fas fa-minus"></i>
   </a>
 </span>

 <span class="icon ">
  <a href="http://localhost/gestiondunebibliotheque/thesis/searchupdateth.php"  >
   <i class="fas fa-edit"></i>
   </a>
 </span>

 <span class="icon ">
    <a href="http://localhost/gestiondunebibliotheque/thesis/searchthesis.php">
    <i class="fas fa-search"></i>
    </a>
  </span>

</div>
</div>
<div class="clear-fix"></div>

    

<script type="text/javascript">
function toggle(){
var blur=document.getElementById('blur');
blur.classList.toggle('active');
var popup=document.getElementById('popup');
popup.classList.toggle('active');
}
</script>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"http://localhost/gestiondunebibliotheque/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>

  
</div>







  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>