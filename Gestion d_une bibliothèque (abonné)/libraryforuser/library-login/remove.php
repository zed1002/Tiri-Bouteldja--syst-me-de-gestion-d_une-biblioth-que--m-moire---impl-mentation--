<?php 
include "config.php";


if(isset($_POST['id'])){
   $id = mysqli_real_escape_string($con,$_POST['id']);
}



	// Check record exists



		// Delete record
		$query = "DELETE FROM reserver WHERE idreservation=".$id;
		mysqli_query($con,$query);
		echo 1;
		exit;
	


echo 0;
exit;