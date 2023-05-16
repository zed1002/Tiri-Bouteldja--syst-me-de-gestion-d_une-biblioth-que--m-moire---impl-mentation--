<?php
 $con = mysqli_connect("localhost", "root", "", "biblio");

if(isset($_POST['submit']))
{
	 $fname=$_SESSION['fname'];
	$name = $_POST['userName'];
	$msg = $_POST['userMsg'];
	$query = "INSERT INTO chat SET name= '$name', msg='$msg' ";
	
	$run = mysqli_query($con, $query);
	// if($run)
	// {
	// 	echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
	// }
}



?>