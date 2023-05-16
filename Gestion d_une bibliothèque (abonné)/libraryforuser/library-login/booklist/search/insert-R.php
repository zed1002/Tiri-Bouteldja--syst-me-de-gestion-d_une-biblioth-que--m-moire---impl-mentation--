
<?php 
session_start();
include("../../../login/checklogin.php");

check_login();

include "config.php";

$id = 0;
if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($con,$_POST['id']);
}

if($id > 0){
	 $ref=$id;
		  $email=$_SESSION['email'];
		  $idb=$_SESSION['id'];
		  $drs= date("Y-m-d H:i:s");

	// Check record exists
	$checkRecord = mysqli_query($con,"SELECT * FROM revue WHERE ref_r=".$id);
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){

		$query = "INSERT into reserver(`id`, `ref`, `drs`, `genre`, `email`) VALUES('$idb', '$ref', '$drs','REVIEW','$email');";

		mysqli_query($con,$query);
		echo 1;
		exit;
	}else{
        echo 0;
        exit;
    }
}

echo 0;
exit;