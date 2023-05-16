<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Documents list</title>
		<meta name="description" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywords" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="author" content="Marco Barría for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/book.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			
			<header>
				<h1>University <span>Documnets List</span></h1>	
				<nav class="codrops-demos">
					<a class="current-demo" href="search-book.php">BOOK</a>
					<a class="current-demo" href="index.html">Review</a>
					<a href="index2.html">thesis</a>
				</nav>
			</header>

<?php

//fetch_data.php

include('database.cnt.php');


 //pagination.php  
  


$output = '';
$newbook = '';

if(isset($_POST["query"]))

{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM book
  WHERE Titres LIKE '%".$search."%'
  OR Titersb LIKE '%".$search."%' 
  OR Auteur LIKE '%".$search."%'" ;}
  else
{
 $query = "
  SELECT * FROM book
 ";

}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0){
	 while($row = mysqli_fetch_array($result)){
	
 $output .=
 '<div class="component">

				<ul class="align">
					<li>
						<figure class="book">

							<!-- Front -->

							<ul class="hardcover_front">
								<li>
									<div class="coverDesign yellow">
										<span class="ribbon">NEW</span>
										<h1>'.$row['Titres'].'</h1>
										<p>'.$row['Titersb'].'</p>
									</div>
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="page">
								<li></li>
								<li>
									<a class="btn" href="#">Book </a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class="hardcover_back">
								<li></li>
								<li></li>
							</ul>
							<ul class="book_spine">
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>CSS </h1>
								<span>By </span>
								<p>BOOK descrption</p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure class="book">

							<!-- Front -->

							<ul class="hardcover_front">
								<li>
									<div class="coverDesign blue">
										<h1>'.$row['Titres'].'</h1>
										<p>'.$row['Titersb'].'</p>
									</div>
								</li>
								<li></li>
							</ul>

							<!-- Pages -->

							<ul class="page">
								<li></li>
								<li>
									<a class="btn" href="#">BOOK</a>
								</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>

							<!-- Back -->

							<ul class="hardcover_back">
								<li></li>
								<li></li>
							</ul>
							<ul class="book_spine">
								<li></li>
								<li></li>
							</ul>
							<figcaption>
								<h1>Storm JS</h1>
								<span>By Marco Barría for Codrops</span>
								<p>Leek winter purslane sierra leone bologi caulie tomatillo soko turnip greens bunya nuts silver beet melon green bean celery. Gram kakadu plum wakame.</p>
							</figcaption>
						</figure>
					</li>'
		;}		
		 
					

echo $output;
}
else
{
 echo 'Data Not Found';
}
?>
	</body>
</html>
