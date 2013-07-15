<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WebBestGroup Developement Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <meta name="author" content=""><link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less">
	<!-- 
	<link rel="stylesheet" href="themes/style/bootstrap.min.css" />-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
	
	
	<script src="themes/js/less/less.js" type="text/javascript"></script>
		
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40">
<header class="header">
<div class="container">
<div class="row">
	<div class="span6">
    	<a href="index.html" title="WebBestGroup Developement Team">
        	<img src="images/webBest_logo.png" height="50" alt="WebBestGroup Developement Team"/>
       	</a>
   	</div>
	<div class="span6">
    <div class="pull-right">
    	<i class="icon-envelope" style="background-image:none;"></i><a class="pull-right" href="mailto: info@bootstrappage.com">
        	<small>: info@webbestgroup.com</small>
        </a>
        <strong>
        	<small>
            	<br/>
                <i class="icon-phone"></i> Call (24/7) :  070 236 643
           	</small>
        </strong>
  	</div>
</div>
</div>
</div>
</header>
<div class="bannerSection">
  <!-- Navbar
    ================================================== -->
<div class="container">
<div class="navbar">
  <div class="navbar-inner" style="padding:0">
    
    <ul class="nav">
      <li <?php echo !isset($_GET['page'])?"class='active'":"" ?>><a href="index.php">Home</a></li>
      <li <?php echo isset($_GET['page'])&&$_GET['page']=="about"?"class='active'":"" ?>><a href="?page=about">ABOUT US</a></li>
      <li <?php echo isset($_GET['page'])&&$_GET['page']=="services"?"class='active'":"" ?>><a href="?page=services">SERVICE</a></li>
      <li <?php echo isset($_GET['page'])&&$_GET['page']=="contact"?"class='active'":"" ?>><a href="?page=contact">CONTACT US</a></li>
    </ul>
    <ul class="nav pull-right" style="padding-top:5px;">
		<li><a style="padding:0 5px 0 2px;" href="#"><img src="images/facebook_02.png" /></a></li>
        <li><a style="padding:0 5px 0 2px;" href="#"><img src="images/google_plus.png" /></a></li>	
	</ul>
  </div>
</div>
</div>
<!-- ======================================================================================================================== -->

<div class="container">
<div class="row">
<div class="span4">
	<div class="well well-small">
		<h3 class="text-success"> Welcome !</h3>	
		<p>
		We are specialized in web design, development and for different devices such as Desktop, Mobiles and Tablets. 
		Concidering with the resources and ongrowing customers, we recently introduce cheapest and best website design packages.
		This is the most popular and beneficial for everyone.
		</p>
	</div>
</div>
<div class="span8">
<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		  </ol>
		  <!-- Carousel items -->
		<div class="carousel-inner">
		  <div class="active item">
			<img src="images/wbg_banner_02_770x210.png" alt="bootstrappage">
		  </div>
		  <div class="item">
			<img src="images/wbg_banner_03_770x210.png" alt="bootstrappage">
		  </div>
		</div>
	<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
</div>
</div>
</div>
<?php
	if(!isset($_GET['page'])){
		?>
	<div class="row" style="text-align:center">
			<div class="span3">
				<div class="well well-small">
                	<img src="images/design-screen.png" />
					<h4>Web Design</h4>
					<a href="details.html"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			
			<div class="span3">
				<div class="well well-small">
                	<img src="images/web-design-banner.png" />
					<h4>Development</h4>
					<a href="details.html"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
                	<img src="images/banner_web_soloution.png" />
					<h4>Consulting</h4>
					<a href="details.html"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
               		<img src="images/services_banner.png" />
					<h4>Traning</h4>
					<a href="details.html"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			
</div>
<?php
	}
?>
</div>
</div>
<div class="container">

<?php
	if(isset($_GET['page'])){
		?>
        <div class="row">
	<div class="span3">
		<div class="thumbnail">
			<img src="images/responsive.png" title="eCommerce template" alt="eCommerce template">
			<div class="caption">
			  <h5>Manicure &amp; Pedicure</h5>
			  <p> 
				"We provide professional website design and development services for Mobile, Tablet, Desktop and Terminal in affordable rate"

			  </p>
			   
			</div>
		  </div>
	</div>
		
	<div class="span9">
	<!--<ul class="breadcrumb">
			<li><a href="index.html">Home</a> <span class="divider">/</span></li>
			<li class="active">Web development</li>
		</ul>-->
		<div class="thumbnail">
                <?php
					include("pages/".$_GET['page'].".php");
				?>
       </div>
	</div>
</div>
        <?php
		}
		else{
			include("pages/home.php");
			}
		?>

<?php
	//include("pages/about.php");
?>

<div class="row">
	<div class="span2"><img src="images/PHP_codeigniter.png" /></div>
    <div class="span2"><img src="images/Joomla_Logo_Slogan.png" /></div>
    
    <div class="span2"><img src="images/jquery-logo1.png" /></div>
    <div class="span2"><img src="images/wordpress-logo.jpg" /></div>
    <div class="span2"><img src="images/mysql-logo-wallpaper1.jpg" /></div>
    <div class="span2"><img src="images/php-logo.png" /></div>
</div>

</div>
<!-- Footer
================================================== -->
<footer class="footer">
<hr class="soften"/>
<div class="container">
<p>
<a href="index.html">Home</a> - 
<a href="about_us.html">About Us</a> - 
<a href="webdevelopment.html">Service</a> - 
<a href="portfolio.html">Contact Us</a>
</p>
<hr class="soften"/>
<p>&copy; Copyright WebBestGroup Development Team<br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/lib/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
        $('.carousel').carousel({
            interval: 4000
        })
    });

	</script>
  </body>
</html>