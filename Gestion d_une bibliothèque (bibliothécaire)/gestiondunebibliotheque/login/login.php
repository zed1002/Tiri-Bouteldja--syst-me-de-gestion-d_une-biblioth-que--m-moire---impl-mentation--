<?php
session_start();

 include "..\connexion\connexion.php";
if (isset ($_POST['login'])){

     $username=  $_POST['username'];
      $password=  $_POST['password'];

    $sql = $bdd->query("SELECT * from bibliothecaire where username='$username'and pass='$password'");
    if ($sql->num_rows == 0) {
        echo"wrong user or password";
       
    }
    
      else{
        $_SESSION['loggedin'] = true;
        header("Location: http://localhost/gestiondunebibliotheque/index.php");
}
}

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>


    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Custom Style-->
    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/login/css/login.css">
</head>

<body>

    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-university "></i> Library</h4>

                    <!-- Owl-Carousel -->

                    <div class="owl-carousel owl-theme">
                        <img src="http://localhost/gestiondunebibliotheque/image/Secure%20Server-amico.svg" alt="" class="login_img">
                        <img src="http://localhost/gestiondunebibliotheque/image/Forgot password-rafiki(1).svg" alt="" class="login_img">
                        <img src="http://localhost/gestiondunebibliotheque/image/Login-amico.svg" alt="" class="login_img">
                    </div>

                    <!-- /Owl-Carousel -->

                    
                </div>
                <div class="col login">

                   
                    <form  method="POST">
                        <div class="titles">
                            <h4>Welcome back!</h4>
                            <h1>Manager Login</h1>
                        </div>
                        <div class="form-group">
                        <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <input name="username"type="text" placeholder="Username" class="form-input">
                            
                        </div>
                        <div class="form-group">
                        <div class="input-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <input name="password" type="password" placeholder="Password" class="form-input">
                            
                        </div>

                        <button name="login" type="submit" class="btn btn-login">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
</body>

</html>