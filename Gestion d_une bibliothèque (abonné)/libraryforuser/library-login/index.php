<?php
session_start();
include("../login/checklogin.php");
check_login();
require_once('../login/dbconnection.php');

    
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
 
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>

h1 {
    font-family: 'Raleway', sans-serif;
    text-shadow: 2px 2px 0 black;
    text-transform: uppercase;
    
}
p {
    font-size: 1.3em;
}

/*---------- star rating ----------*/
%flex-display {
    display: flex;
}
.star-rating {
    @extend %flex-display;
    align-items: center;
    font-size: 3em;
    justify-content: center;
    margin-top: 50px;
}
.back-stars {
    @extend %flex-display;
    color: #bb5252;
    position: relative;
    text-shadow: 4px 4px 10px red;
}
.front-stars {
    @extend %flex-display;
    color: #FFBC0B;
    overflow: hidden;
    position: absolute;
    text-shadow: 2px 2px 5px red;
    top: 0;
    transition: all .5s
}

input {
    background: transparent;
    border: solid 2px red;
    color: black;
    font-size: 1.5em;
    height: 50px;
    width: 60px;
    text-align: center;
    margin-top: 50px;
    margin-right: 10px;
    
    &:focus {
        outline: none;
    }    
}

.percent {
    color: red;
    font-size: 1.5em;
}
</style>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg"><br>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="images/nticl.png" alt="image"></a>
                        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                  
                        <li><a class="nav-link" href="booklist/search/search-book.php">Documents</a></li>
                        
						<li><a class="nav-link" href="contact.php">Contact </a></li>
                   <li> <a class="nav-link" href="../login/logout.php">Logout</a> </li>
                <div class="serch-box">
                 
    <li><a href="passwordchange.php"><img src="../library-login/images/us.png" alt="#" width="50px" /></li></a>
                </div>
              
                  </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/ba.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">Student <?php echo  $_SESSION['name']; ?> <?php echo  $_SESSION['fname']; ?>   </span></h3>
                                        <h4>Welcome In Our library </h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="http://univ-constantine2.dz/?lang=en">
 About University</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/ba3.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="slide_text">
                                        <h3><span span class="theme_color">Welcome <?php echo  $_SESSION['fname']; ?> <?php echo  $_SESSION['name']; ?>   </span></h3>
                                        <h4> </h4>
                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" href="courses.html">
 About Univercity</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
				    <ul>
					   <li><a href="#"><span class="icon"><img src="images/i1.png" alt="#" /></span><span>University </span></a></li>
					   <li><a href="#"><span class="icon"></span><span></span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i2.png" alt="#" /></span><span>Graduation</span></a></li>
					   <li><a href="#"><span class="icon"></span><span></span></a></li>
					   <li><a href="https://www.google.com/maps/place/Universite+Constantine+2+Abdelhamid+Mehri/@36.2460493,6.5678176,17z/data=!3m1!4b1!4m5!3m4!1s0x12f1655aaa0d63ab:0xa80cc72a9da3c77b!8m2!3d36.2460493!4d6.5700063"><span class="icon"><img src="images/i5.png" alt="#" /></span><span>Location</span></a></li>
					   <li><a href="https://www.univ-constantine2.dz/contact/"><span class="icon"><img src="images/i7.png" alt="#" /></span><span>Call us</span></a></li>
					
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Welcome To</span> E-learning</h2>
                        </div>
						<div class="full">
						  <p>E-learning system based on formalised teaching but with the help of electronic resources is known as E-learning. While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning. E-learning can also be termed as a network enabled transfer of skills and knowledge, and the delivery of education is made to a large number of recipients at the same or different times. Earlier, it was not accepted wholeheartedly as it was assumed that this system lacked the human element required in learning.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="http://elearning.univ-constantine2.dz/elearning/course/index.php?categoryid=3">About more</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="images/loho.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>User  </span>Activities</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive"  src="images/freservation.png" alt="#" /> 
					   <a href='reservation.php'> <h4> Reservation List</h4></a>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <div class="wrapper">
                            <div class="img-responsive">
                               <?php  $points=$_SESSION['points'];?>
    <div class="container chart"   data-size="350" data-value=" <?php echo $points; ?>" data-arrow="d" ></div></div>

</div>
                    <a href="points System.html">    
						<h4> 
Points System</h4></a>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/chat.png" alt="#" /> <a href="../login/inde.php">    
						<h4>
Messages</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div class="full float-right_img">
                        <br><br><br>
                        <img src="images/library-assi.jpg" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Student Library Assistant Vacancies </h2>
                        </div>
                        <h2> How to Apply?</h2>
						<div class="full">
						  <p>Please review the Student Library Assistant Vacancies. Make sure that you qualify for the position that you are interested in and can work the hours requested.
If the position fits your schedule, please contact us by sending your cv and qualifications 
If you are qualified for a current vacant position, Library Human Resources will contact you via e-mail to set up an interview time and provide information about where to go and with whom you will meet.
After the interviews are complete and a candidate is selected, Library Human Resources will contact the successful candidate to offer the position and to explain the paperwork that will be need to be completed.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="contact.php">Apply</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Reaserch</span></h2>
                        </div>
						<div class="full">
						  <p>Since its creation in 1989 (but approved in 2000 under number 166), the REpartie Computer Laboratory (LIRE) has always contributed actively in the fields of training and research, both at the level national and international.

The members of the laboratory are divided into four teams whose titles are: LIRE<br>

 
                       <h2 style="color:#123E67; font-weight: bold;"> Team 01: </h2>Information Systems and Knowledge Bases (SIBC). <br>

                          
                       <h2 style="color:#123E67; font-weight: bold;"> Team 02: </h2> Software Engineering and Artificial Intelligence (GLIA).<br>

                           <h2 style="color:#123E67; font-weight: bold;"> Team 03: </h2>
                        Software engineering and distributed systems (GLSD).<br>
<h2 style="color:#123E67; font-weight: bold;"> Team 04: </h2> Systems Architecture (AS).<br>

						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="https://www.univ-constantine2.dz/laboratoires/lablire/">See More about laboratory </a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" src="images/search.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span>News</span></h2>
                        </div>
                      </div>
                </div>
              </div>
             <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel"><div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12" style=" display: block;
    margin-left: auto;
    margin-right: auto;">
                                       <div class="full blog_img_popular">
                                          <img class="img-responsive" src="images/newz.jpg" alt="#" />
                                          <h4>Our news </h4>
                                          <p> Please  Scroll the image left or right </p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                        <!-- The slideshow -->
                            <?php
   
$output = '';
$ret= mysqli_query($con,"SELECT * FROM news  ");




    if(mysqli_num_rows($ret) >0)  { 

     while($num = mysqli_fetch_array($ret)){

         $output .='
                        
                            <div class="carousel-item" >
                                <div class="row" >
                                  
                                    <div class="col-lg-6 col-md-6 col-sm-12" style=" display: block;
    margin-left: auto;
    margin-right: auto;">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="images/'.$num['img'].'" alt="#"/>
                                          <h4>'.$num['Titre'].'</h4>
                                          <p>'.$num['dis'].'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';}
                            echo $output;} ?> 
                            </div>


                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>            
           </div>
        </div> 
    <!-- end section -->   





  
                <!-- The slideshow -->
            

	<!-- end section -->
	<!-- section -->
    
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="images/fot-lo.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p> </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						  
						 </div>
				 </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <div class="footer_blog footer_menu white_fonts">
                      
                         </div>
                 </div>
				 
				 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li><img src="images/i5.png"><span>Constantine<br>Ali Mendjeli</span></li>
							   <li><img src="images/i6.png"><span>ouremail@gmail.com</span></li>
							   <li><img src="images/i7.png"><span>+213555370207</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2020</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
    <script>
var Dial = function(container) {
    this.container = container;
    this.size = this.container.dataset.size;
    this.strokeWidth = this.size / 8;
    this.radius = (this.size / 2) - (this.strokeWidth / 2);
    this.value = this.container.dataset.value;
    this.direction = this.container.dataset.arrow;
    this.svg;
    this.defs;
    this.slice;
    this.overlay;
    this.text;
    this.arrow;
    this.create();
}

Dial.prototype.create = function() {
    this.createSvg();
    this.createDefs();
    this.createSlice();
    this.createOverlay();
    this.createText();
    this.createArrow();
    this.container.appendChild(this.svg);
};

Dial.prototype.createSvg = function() {
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute('width', this.size + 'px');
    svg.setAttribute('height', this.size + 'px');
    this.svg = svg;
};

Dial.prototype.createDefs = function() {
    var defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
    var linearGradient = document.createElementNS("http://www.w3.org/2000/svg", "linearGradient");
    linearGradient.setAttribute('id', 'gradient');
    var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
    stop1.setAttribute('stop-color', '#6E4AE2');
    stop1.setAttribute('offset', '0%');
    linearGradient.appendChild(stop1);
    var stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
    stop2.setAttribute('stop-color', '#78F8EC');
    stop2.setAttribute('offset', '100%');
    linearGradient.appendChild(stop2);
    var linearGradientBackground = document.createElementNS("http://www.w3.org/2000/svg", "linearGradient");
    linearGradientBackground.setAttribute('id', 'gradient-background');
    var stop1 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
    stop1.setAttribute('stop-color', 'rgba(0, 0, 0, 0.2)');
    stop1.setAttribute('offset', '0%');
    linearGradientBackground.appendChild(stop1);
    var stop2 = document.createElementNS("http://www.w3.org/2000/svg", "stop");
    stop2.setAttribute('stop-color', 'rgba(0, 0, 0, 0.05)');
    stop2.setAttribute('offset', '100%');
    linearGradientBackground.appendChild(stop2);
    defs.appendChild(linearGradient);
    defs.appendChild(linearGradientBackground);
    this.svg.appendChild(defs);
    this.defs = defs;
};

Dial.prototype.createSlice = function() {
    var slice = document.createElementNS("http://www.w3.org/2000/svg", "path");
    slice.setAttribute('fill', 'none');
    slice.setAttribute('stroke', 'url(#gradient)');
    slice.setAttribute('stroke-width', this.strokeWidth);
    slice.setAttribute('transform', 'translate(' + this.strokeWidth / 2 + ',' + this.strokeWidth / 2 + ')');
    slice.setAttribute('class', 'animate-draw');
    this.svg.appendChild(slice);
    this.slice = slice;
};

Dial.prototype.createOverlay = function() {
    var r = this.size - (this.size / 2) - this.strokeWidth / 2;
    var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
    circle.setAttribute('cx', this.size / 2);
    circle.setAttribute('cy', this.size / 2);
    circle.setAttribute('r', r);
    circle.setAttribute('fill', 'url(#gradient-background)');
    this.svg.appendChild(circle);
    this.overlay = circle;
};

Dial.prototype.createText = function() {
    var fontSize = this.size / 3.5;
    var text = document.createElementNS("http://www.w3.org/2000/svg", "text");
    text.setAttribute('x', (this.size / 2) + fontSize / 7.5);
    text.setAttribute('y', (this.size / 2) + fontSize / 4);
    text.setAttribute('font-family', 'Century Gothic, Lato');
    text.setAttribute('font-size', fontSize);
    text.setAttribute('fill', '#78F8EC');
    text.setAttribute('text-anchor', 'middle');
    var tspanSize = fontSize / 3;
    text.innerHTML = 0 + '<tspan font-size="' + tspanSize + '" dy="' + -tspanSize * 1.2 + '">%</tspan>';
    this.svg.appendChild(text);
    this.text = text;
};

Dial.prototype.createArrow = function() {
    var arrowSize = this.size / 10;
    var arrowYOffset, m;
    if(this.direction === 'up') {
        arrowYOffset = arrowSize / 2;
        m = -1;
    }
    else if(this.direction === 'down') {
        arrowYOffset = 0;
        m = 1;
    }
    var arrowPosX = ((this.size / 2) - arrowSize / 2);
    var arrowPosY = (this.size - this.size / 3) + arrowYOffset;
    var arrowDOffset =  m * (arrowSize / 1.5);
    var arrow = document.createElementNS("http://www.w3.org/2000/svg", "path");
    arrow.setAttribute('d', 'M 0 0 ' + arrowSize + ' 0 ' + arrowSize / 2 + ' ' + arrowDOffset + ' 0 0 Z');
    arrow.setAttribute('fill', '#97F8F0');
    arrow.setAttribute('opacity', '0.6');
    arrow.setAttribute('transform', 'translate(' + arrowPosX + ',' + arrowPosY + ')');
    this.svg.appendChild(arrow);
    this.arrow = arrow;
};

Dial.prototype.animateStart = function() {
    var v = 0;
    var self = this;
    var intervalOne = setInterval(function() {
        var p = +(v / self.value).toFixed(2);
        var a = (p < 0.95) ? 2 - (2 * p) : 0.05;
        v += a;
        if(v >= +self.value) {
            v = self.value;
            clearInterval(intervalOne);
        }
        self.setValue(v);
    }, 10);
};

Dial.prototype.animateReset = function() {
    this.setValue(0);
};

Dial.prototype.polarToCartesian = function(centerX, centerY, radius, angleInDegrees) {
  var angleInRadians = (angleInDegrees-90) * Math.PI / 180.0;
  return {
    x: centerX + (radius * Math.cos(angleInRadians)),
    y: centerY + (radius * Math.sin(angleInRadians))
  };
}

Dial.prototype.describeArc = function(x, y, radius, startAngle, endAngle){
    var start = this.polarToCartesian(x, y, radius, endAngle);
    var end = this.polarToCartesian(x, y, radius, startAngle);
    var largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";
    var d = [
        "M", start.x, start.y, 
        "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y
    ].join(" ");
    return d;       
}

Dial.prototype.setValue = function(value) { 
        var c = (value / 100) * 360;
        if(c === 360)
            c = 359.99;
        var xy = this.size / 2 - this.strokeWidth / 2;
        var d = this.describeArc(xy, xy, xy, 180, 180 + c);
    this.slice.setAttribute('d', d);
    var tspanSize = (this.size / 3.5) / 3;
    this.text.innerHTML = Math.floor(value) + '<tspan font-size="' + tspanSize + '" dy="' + -tspanSize * 1.2 + '">%</tspan>';
};

var containers = document.getElementsByClassName("chart");
var dial = new Dial(containers[0]);
dial.animateStart();
</script>
</body>

</html>