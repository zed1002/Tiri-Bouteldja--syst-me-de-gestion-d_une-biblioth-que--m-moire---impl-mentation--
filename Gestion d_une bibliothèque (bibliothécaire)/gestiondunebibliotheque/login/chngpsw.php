<?php session_start();?>


<!DOCTYPE html>
<html lang="en" style="background-image: linear-gradient(to right bottom, #2998ff, #5634fa);" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>change password</title>

  

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

    <link rel="stylesheet" href="http://localhost/gestiondunebibliotheque/css/searchs.css">
</head>

<?php include "../book/navigation.html"?>

<script type="text/javascript">
function valid()
{
  
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty ");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty ");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty ");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match ");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>



<?php

include_once "..\connexion\connexion.php";
if(isset($_POST['Submit']) )
{
 $oldpass=$_POST['opwd'];
 $user=$_POST['user'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($bdd,"SELECT * FROM bibliothecaire WHERE username='$user' AND pass='$oldpass'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($bdd,"UPDATE bibliothecaire SET pass='$newpassword' where username='$user'");
$_SESSION['message']="Password Changed Successfully ";
$_SESSION['msg_type']="success";
}
else
{
    $_SESSION['message']="username and password doesn't match";
$_SESSION['msg_type']="danger";

}
}
?>

<body style="background-image: linear-gradient(to right bottom, #2998ff, #5634fa);">
<?php
  if (isset($_SESSION['message'])): ?>
  <div class="err-msg alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
  <?php endif; ?>



<div class="cont marg">

<div class="rapper">
    <div class="rightside">
<form class="chngpsw-form" method="POST" onsubmit="return valid()">
    <div class="titles chngpsw-title">
        <h1>change password</h1>
        
    </div>
    <div class="form-group" style="margin-right: 3rem;">
    <input class="form-input" type="text" name="user" id="user" placeholder="username" style="padding-left: 1rem;">
        <div class="input-icon" style="margin-left: 100px;">
            <i class="fas fa-user"></i>
        </div>
    </div>
    <div class="form-group" style="margin-right: 3rem;">
    <input class="form-input" type="password" name="opwd" id="opwd" placeholder="old password" style="padding-left: 1rem;">
        <div class="input-icon" style="margin-left: 100px;">
            <i class="fas fa-user-lock"></i>
        </div>
    </div>
    <div class="form-group" style="margin-right: 3rem;">
    <input class="form-input" type="password" name="npwd" id="npwd" placeholder="new password" style="padding-left: 1rem;">
        <div class="input-icon" style="margin-left: 100px;" >
            <i class="fas fa-user-lock">  </i>
        </div>
    </div>

    <div class="form-group" style="margin-right: 3rem;">
    <input class="form-input" type="password" name="cpwd" id="cpwd" placeholder="confirm new password"
    style="padding-left: 1rem;">
        <div class="input-icon" style="margin-left: 100px;">
            <i class="fas fa-user-lock"></i>
        </div>
    </div>

    <input class="btn btn-psw" type="submit" name="Submit" value="Change Passowrd" />
</form>

</div>
  </div>


<div class="rapper2">
                
<div class="leftside" ><img class="pswimg" src="http://localhost/gestiondunebibliotheque/image/Security On-bro(2).svg" alt=""> </div>

</div>               
                    
                
</div>


</body>

</html>