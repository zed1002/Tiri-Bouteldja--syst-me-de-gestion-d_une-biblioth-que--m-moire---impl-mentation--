<?php 
include 'db.php';
include 'action.php';
session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		session_destroy();
		header('location: login.php?error=Login to access chat.');
		}

 ?>

	<!-- <script type="text/javascript" src="jquery-3.1.1.min.js"></script> --><?php

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
    <title>Perfect - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="../library-login/image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../library-login/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../library-login/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../library-login/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../library-login/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../library-login/css/custom.css" />
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	    <link rel="stylesheet" type="text/css" href="css/ScrollBar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
	<style type="text/css">
		hr{
			height: 2px;
		}
		.btn{
			height: 24px;
			line-height: 12px;
		}

		
	</style>
	</head>
	
 <body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

              
       
 <header class="top-header" ">
        <nav class="navbar header-nav navbar-expand-lg"><br>
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="../library-login/images/nticl.png" alt="image"></a>
                        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="../library-login/"></a></li>
                          <li><a class="nav-link" href="../library-login/"></a></li>
                            <li><a class="nav-link" href="../library-login/"></a></li>
                              <li><a class="nav-link" href="../library-login/"></a></li>
                                <li><a class="nav-link" href="../library-login/"></a></li>  <li><a class="nav-link" href="../library-login/contact.php"></a></li>  <li><a class="nav-link" href="../library-login/contact.php"></a></li>
                        <li><a class="nav-link" href="../library-login/contact.php">    </a></li> <li><a class="nav-link" href="../library-login/contact.php"> </a></li> <li><a class="nav-link" href="../library-login/contact.php"> </a></li> <li><a class="nav-link" href="../library-login/contact.php"> </a></li>
                        <li><a class="nav-link active" href="../library-login/index.php">Home</a></li>
                  
                        <li><a class="nav-link" href="../library-login/booklist/search/search-book.php">Documents</a></li>
                        
						<li><a class="nav-link" href="../library-login/contact.php">Contact </a></li>
                   <li> <a class="nav-link" href="logout.php">Logout</a> </li>
                <div class="serch-box">
                 
                   <li><img src="../library-login/images/us.png" alt="#" width="50px" /></li>
               
              
                  </ul>
                </div>
            </div>
        </nav>
    </header/>  
      
 
    	<br>
				<br>
				
<div class="container">

	<div class="row">
		<h3  align="center"><font > </font></h3>
				<hr >
<br><br>
		<div class="col-sm-3" >
			<div class="panel panel-success">
				<div class="panel-heading" align="center">Online Members</div>
				<div class="panel-body">
					<div id="Userlog"> 
						<!-- <a href="logout.php" style="float: right;" class="btn btn-danger btn-sm">Logout</a> --></div>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-success">
				<div class="panel-heading" align="center">Chat Room</div>
				<div class="panel-body" style="max-height: 400px; overflow-y: scroll;" class="scrollbar" id="style-2">
					<div id="show"></div>

				</div>
				<div class="panel-footer" id="footer">
					<div class="row">
						<form >
						<input type="hidden" name="name" id="name" value="<?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['name'] ?>"  class="form-control" >
						<div class="col-sm-10"><input type="text" name="msg" id="msg"  class="form-control" ></div>
						<div class="col-sm-2" style="padding-left: 500px; "><br>
							<input type="reset" name="send" id="send" value="Send" class="btn btn-primary " >
						</form>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
  <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="../library-login/images/fot-lo.png" alt="#" />
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
							   <li><img src="../library-login/images/i5.png"><span>Constantine<br>Ali Mendjeli</span></li>
							   <li><img src="../library-login/images/i6.png"><span>ouremail@gmail.com</span></li>
							   <li><img src="../library-login/images/i7.png"><span>+213555370207</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
</body>
</html>
 <script src="../library-login/js/jquery.min.js"></script>
    <script src="../library-login/js/popper.min.js"></script>
    <script src="../library-login/js/bootstrap.min.js"></script>


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

<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#Userlog').load('UserLog.php')
			}, 1000);
		});




	</script>