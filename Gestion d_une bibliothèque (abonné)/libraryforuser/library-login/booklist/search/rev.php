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
		<title>Animated Books with CSS 3D Transforms - Demo 2</title>
		<meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/book2.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/PseudoElementsImageCaptions/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15806"><span>Back to the Codrops Article</span></a></span>
			</div>
			
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
  SELECT * FROM livre
  
  WHERE titre LIKE '%".$search."%'
  OR edi LIKE '%".$search."%' 
  OR auteur LIKE '%".$search."%'" ;}
  else
{
 $query = "
  SELECT * FROM livre
 ";

}

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)  {
	 while($row = mysqli_fetch_array($result)){
	 	
	 	if ( $_SESSION['points'] >0){

 $output .=
						'<figure class="book">

							<!-- Front -->

							<ul class="paperback_front">
								<li>
									<span class="ribbon">Nº1</span>
									<img src="img/cover.jpg" alt="" width="100%" height="100%">
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="ruled_paper">
								<li></li>
								<li>
									<a class="btn" href="#">Download</a>
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
								<h1>Sketches</h1>
								<span>By Marco Barría for Codrops</span>
								<p>Avocado bell pepper earthnut pea garlic chickpea seakale lotus root salad broccoli zucchini okra scallion daikon. Celtuce salad burdock wattle seed.</p>
							</figcaption>
						</figure>
					</li>
					<li>'
					
					;}
					echo $output;
}}

else
{
 echo 'Data Not Found';
}
?>
						

					
							
						</figure>
					</li>
				</ul>
			</div>








			<p class="note">Please note that this only works in browsers that support CSS 3D Transforms. Also note that IE10 <strong>does not</strong> support <em>preserve-3d</em> which is needed for this demo.</p>
		</div><!-- /container -->
	</body>
</html>