<?php session_start();
require_once('../login/dbconnection.php');
if(isset($_POST['login']))
{ 
$password=$_POST['password'];
$useremail=$_POST['uemail'];

$ret= mysqli_query($con,"SELECT * FROM abonne WHERE email='$useremail'" );
$row=mysqli_fetch_array($ret);

if($row>0)
{ 

$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$row['id'];
$_SESSION['name']=$row['prenom'];
$_SESSION['fname']=$row['nom'];
$_SESSION['points']=$row['points'];

$_SESSION['email']=$row['email'];
if(mysqli_num_rows($ret)>0){      
            $query = mysqli_query($con, "UPDATE abonne SET status = '1' WHERE email = '$useremail' ");
            $extra="../library-login/index.php";
            }
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
//forget password 

if(isset($_POST['send']))

{
  $useremail=$_POST['femail'];
$row1=mysqli_query($con,"select email from abonne where email= '$useremail' ");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
require_once('forget-password-mail.php');
 echo "<script>alert('password successfully, we will contact you soon');</script>";}
else
{
echo "<script>alert('Email not register with us');</script>"; 
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body ">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form"  name="login" action="" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Useremail" name="uemail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" name="login" value="LOG IN" class="btn solid" />
            
           
          </form>
          <form action="#" class="sign-up-form"  name="login" action="" method="post">
            <h2 class="title">Rest Password</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Useremail" name="femail" />
            </div>
       
          <input type="submit" name="send" onClick="myFunction()" value="Send " class="btn solid" />
           
            
                     </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Forget password ?</h3>
            <p>
          
Don't worry, click here and we'll call you back immediately
            </p>
            <button class="btn transparent" id="sign-up-btn">
            Reset password
            </button>
          </div>
          <img src="../../library-login/images/fot-lo.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Not you ?</h3>
           
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="../../library-login/images/fot-lo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
