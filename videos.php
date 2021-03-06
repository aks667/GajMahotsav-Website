<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GajMahotsav </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122484832-2"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'UA-122484832-2');
            </script>
        
        
        <!-- Fonts -->
        <!-- Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
        
        <!-- CSS -->

        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        

        <link rel="stylesheet" href="css/themefisher-fonts.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
        <style>
        	::-webkit-scrollbar-track
			{
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
				border-radius: 10px;
				background-color: #141414;
			}

			::-webkit-scrollbar
			{
				width: 10px;
				background-color: #F5F5F5;
			}

			::-webkit-scrollbar-thumb
			{
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
				background-color: #585858;
			}
			.vertical-text {
				transform: rotate(180deg);
				transform-origin: left top 0;
				float: left;
			}

    	</style>
    </head>
    
    <?php
        $conn = new mysqli("server","user","password","db");
        date_default_timezone_set("Asia/Kolkata");
    ?>

    <body id="body">

    	
	    <!-- 
	    Header start
	    ==================== -->
        <div class="container">
            <nav class="navbar navigation " id="top-nav">
                <a class="navbar-brand logo" href="http://www.wti.org.in/">
                   <img src="images/wti.png" height="auto" width="40%"> <!--<h1>Wildlife Trust of India</h1>-->
                </a>
            </nav>
        </div>
        

	    <section class="feature section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="images/logo.png" style="margin-top:-120px" width="50%" height="auto" alt="">
                    </div>
                </div>
                <div class="row">
                    
                    <?php 
                        $print = 0;
                        $query = "SELECT * FROM videos ORDER BY time DESC";
                        $resource = mysqli_query($conn,$query);
                        while($row = $resource->fetch_array(MYSQL_ASSOC)) 
                        {
                            $print++;
                            echo "<div class=\"col-md-4 text-center\"><iframe width=\"350\" height=\"175\" src=\"https://www.youtube.com/embed/".$row['url']."\" frameborder=\"0\" allowfullscreen></iframe></div>";
                            
                        }
                        if($print == 0)
                            echo "<div class=\"col-md-12 text-center\"><i>No video uploaded yet!</i></div>";
                    ?>
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->


        
        



        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <a href="" class="footer-logo">Wildlife Trust of India</a>
                            <ul class="menu">
                                <li class=" active">
                                    <a href="#">rightofpassage@wti.org.in </a>
                                </li>
                                <li class="">
                                    <a href="#">+91 120-4143900</a>
                                </li>
                            </ul>
                            <p class="copyright-text">Copyright &copy; <a href="http://www.wti.org.in">WTI</a>| All right reserved.</p>
                            <p class="copyright-text">Designed & Maintained by</p>
                            <p class="text-center"> <a href="http://www.leopardtechlabs.com"><img src="images/ltl.png" style="height:50px"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="js/vendor/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
