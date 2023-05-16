<?php

session_start();
include("checklogin.php");
check_login();
require_once('dbconnection.php');
include 'db.php';
session_start();
$_SESSION['login']=="";






mysqli_query($con, "UPDATE abonne SET status = '0' WHERE email = '$_SESSION[email]' ");
$_SESSION['action1']="You have logged out successfully..!";
unset($_SESSION['email']);
session_destroy();
header( "refresh:0;url=login.php?logout=You Are Successfully Logged out!" ); 




?>
<script language="javascript">
document.location="index.php";
</script>
