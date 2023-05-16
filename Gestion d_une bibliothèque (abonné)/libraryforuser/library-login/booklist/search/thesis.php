<?php
session_start();
include("../../../login/checklogin.php");
include("../../../login/dbconnection.php");
check_login();

    
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		<meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/book2.css" />
		<script src="js/modernizr.custom.js"></script>
		 <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script-T.js' type='text/javascript'></script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			
			<div class="component">

				<ul class="align">
					<li>
<?php

//fetch_data.php




 //pagination.php  
  


$output = '';


if(isset($_POST["query"]))

{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM memoire
  
  WHERE titre_m LIKE '%".$search."%'
";}
  else
{
 $query = "
  SELECT * FROM memoire
 ";

}

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)  {
	 while($row = mysqli_fetch_array($result)){
	 		
	 	
	 	if ( $_SESSION['points'] >0){
if ($row['nbrexp_m'] > 0){
 $output .='

						<figure class="book">

							<!-- Front -->

							<ul class="paperback_front">
								<li>
								<span class="ribbon">Ref :'.$row['ref_m'].'</span>
									
									<img src="thesis-img/logo.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="ruled_paper">
								<li></li>
								<li>
									<a class="btn" href="#"> <td align="center"><span class="delete" data-id="'.$row['ref_m'].' ">Book Now </span></td></a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class="paperback_back">
								<li>
									<img src="img/bg.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>
							<figcaption>
								<h1>'.$row['titre_m'].'</h1>
								<span> Type of Thesis:'.$row['type'].'</span>
									<span> Year :'.$row['annee_m'].'</span>
								<p> Author : '.$row['realiser_par'].'	</figure>
					</li>
					<li>
						';}
						else {
$output .='

						<figure class="book">

							<!-- Front -->

							<ul class="paperback_front">
								<li>
								<span class="ribbon">Ref :'.$row['ref_m'].'</span>
									
									<img src="thesis-img/logo.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="ruled_paper">
								<li></li>
								<li>
									<a class="btn" href="#"> <td align="center"><span  >this thesis is available NOW </span></td></a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class="paperback_back">
								<li>
									<img src="img/bg.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>
							<figcaption>
								<h1>'.$row['titre_m'].'</h1>
								<span> Type of Thesis:'.$row['type'].'</span>
									<span> Year :'.$row['annee_m'].'</span>
								<p> Author : '.$row['realiser_par'].'	</figure>
					</li>
					<li>
						';
						}}
						else {
							 $output .='

						<figure class="book">

							<!-- Front -->

							<ul class="paperback_front">
								<li>
									
									<img src="thesis-img/logo.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="ruled_paper">
								<li></li>
								<li>
									<a class="btn" href="#"> <td align="center"><span class="deete" data-id="'.$row['ref_m'].' ">Your Points is 0</span></td></a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class="paperback_back">
								<li>
									<img src="img/bg.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>
							<figcaption>
								<h1>'.$row['titre_m'].'</h1>
								<span> Type of Thesis:'.$row['type'].'</span>
									<span> Year :'.$row['annee_m'].'</span>
								<p> Author : '.$row['realiser_par'].'	</figure>
					</li>
					<li>
						';
						}}

					echo $output;
				}					

?>
					
							
						</figure>
					</li>
				</ul>
			</div>








			
		</div><!-- /container -->
	</body>
</html>