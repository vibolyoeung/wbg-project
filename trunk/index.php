<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WebBestGroup Developement Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <meta name="author" content="">
    <link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less">
	<!-- 
	<link rel="stylesheet" href="themes/style/bootstrap.min.css" />-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" />
	<script src="themes/js/less/less.js" type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <style type="text/css">
	.table td{
		border:none;
		vertical-align:middle;
		}
	.navbar .container{
		width:90%;
		}
	.popover {
    width:auto;
}
	iframe{
		height:300px;
		}
	.media{margin:10px}
	</style>
  </head>
<body data-offset="40">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                <i class="icon-phone"></i> Call (24/7) :  070 236 643<br />
                <i class="icon-phone"></i> Call (24/7) :  077 377 067
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
	<div class="navbar">
      <div class="navbar-inner">
        <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
        	<div class="nav-collapse collapse">
        <ul class="nav">
          <li <?php echo !isset($_GET['page'])?"class='active'":"" ?>><a href="index.php">Home</a></li>
          <li <?php echo isset($_GET['page'])&&$_GET['page']=="about"?"class='active'":"" ?>><a href="?page=about">ABOUT US</a></li>
          <li <?php echo isset($_GET['page'])&&$_GET['page']=="services"?"class='active'":"" ?>><a href="?page=services">SERVICE</a></li>
          <li <?php echo isset($_GET['page'])&&$_GET['page']=="contact"?"class='active'":"" ?>><a href="?page=contact">CONTACT US</a></li>
        </ul>
        <ul class="nav pull-right" style="padding-top:5px;">
        	<li><a style="padding:5px 5px 0 2px;" onclick="return false;" href="">FOLLOW US ON: </a></li>
            <li><a class="my-tooltip" data-toggle="tooltip" target="_blank" title="Facebook Page" style="padding:0 5px 0 2px;" href="https://www.facebook.com/WebBestGroupDevelopment"><img src="images/facebook_02.png" /></a></li>
            <li><a class="my-tooltip" data-toggle="tooltip" target="_blank" title="Google+ Page" style="padding:0 5px 0 2px;" href="https://plus.google.com/111035392892035085454/posts"><img src="images/google_plus.png" /></a></li>	
        </ul>
        </div>
        </div>
      </div>
    </div>
<div class="container">

</div>
<!-- ======================================================================================================================== -->

<div class="container">
<?php
	if(!isset($_GET['page'])){
		?>
<div class="row">
<div class="span4">
	<div class="well well-small">
		<h3 class="text-success" style="line-height:10px;"> Welcome !</h3>	
		<p>
		We are specialized in web design, development and for different devices such as Desktop, Mobiles and Tablets. Webbest understand clearly about client needs and provide the excellence result for their business goal.  We have high commitment to produce high quality products for clients.
		</p>
	</div>
</div>
<div class="span8">
<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <!-- Carousel items -->
		<div class="carousel-inner">
          <div class="active item">
          	<img src="images/0003.png" alt="bootstrappage">
		  </div>
		  <div class="item">
			<img src="images/0002.png" alt="bootstrappage">
		  </div>
		  <div class="item">
			<img src="images/0001.png" alt="bootstrappage">
		  </div>
		</div>
	<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
</div>
</div>
</div>

	<div class="row" style="text-align:center">
			<div class="span3">
				<div class="well well-small">
                	<img src="images/design-screen.png" />
					<h4>Web Design</h4>
					<a href="index.php?page=services"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			
			<div class="span3">
				<div class="well well-small">
                	<img src="images/web-design-banner.png" />
					<h4>Development</h4>
					<a href="index.php?page=services"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
                	<img src="images/banner_web_soloution.png" />
					<h4>Consulting</h4>
					<a href="index.php?page=services"><span class="label label-info">MORE</span></a>
				</div>
			</div>
			<div class="span3">
				<div class="well well-small">
               		<img src="images/services_banner.png" />
					<h4>Traning</h4>
					<a href="index.php?page=services"><span class="label label-info">MORE</span></a>
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
			<img src="images/side_bar_responsive.png" title="eCommerce template" alt="eCommerce template">
			<div class="caption">
            	<hr style="margin:0;" />
			  <h5>Specialize Offer</h5>
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
<br />
	<div class="span9">
    	<div class="row">
        	<div class="span2"><img src="images/PHP_codeigniter.png" /></div>
            <div class="span2"><img src="images/Joomla_Logo_Slogan.png" /></div>
            <div class="span2"><img src="images/jquery-logo1.png" /></div>
            <div class="span2"><img src="images/wordpress-logo.jpg" /></div>
            <div class="span1"><img src="images/php-logo.png" /></div>
        </div>
    </div>
    <div class="span3">
    	<div class="fb-like" data-href="https://www.facebook.com/WebBestGroupDevelopment" data-width="270" data-show-faces="true" data-send="false"></div>
        </div>
    </div>
<!--<div class="row">
	<div class="span9">
    	<div class="row">
        	<div class="span1"><img src="images/PHP_codeigniter.png" /></div>
            <div class="span1"><img src="images/Joomla_Logo_Slogan.png" /></div>
            <div class="span1"><img src="images/jquery-logo1.png" /></div>
            <div class="span1"><img src="images/wordpress-logo.jpg" /></div>
            <div class="span1"><img src="images/mysql-logo-wallpaper1.jpg" /></div>
            <div class="span1"><img src="images/php-logo.png" /></div>
        </div>
        <div class="row">
        	
        </div>
    </div>
    <div class="span3">
    	<div class="fb-like" data-href="https://www.facebook.com/WebBestGroupDevelopment" data-width="270" data-show-faces="true" data-send="false"></div>
        </div>
    </div>-->

<!--<div class="row">
	<br />
    <br />
	<div class="span2"><img src="images/PHP_codeigniter.png" /></div>
    <div class="span2"><img src="images/Joomla_Logo_Slogan.png" /></div>
    
    <div class="span2"><img src="images/jquery-logo1.png" /></div>
    <div class="span2"><img src="images/wordpress-logo.jpg" /></div>
    <div class="span2"><img src="images/mysql-logo-wallpaper1.jpg" /></div>
    <div class="span2"><img src="images/php-logo.png" /></div>
</div>-->
</div>
<!-- Footer
================================================== -->
<footer class="footer">
<hr class="soften"/>
<div class="container">
    <ul class="nav nav-pills">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=about">About Us</a></li>
        <li><a href="index.php?page=services">Service</a></li>
        <li><a href="index.php?page=contact">Contact Us</a></li>
    </ul>
    <hr class="soften"/>
    <p><img src="images/webBest_logo_stand_alone.png" />Copyright © 2012 WebBest. All Rights Reserved.<br/><br/></p>
</div><!-- /container -->
</footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/lib/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
        $('.carousel').carousel({
            interval: 4000
        });
		$('#mypp').popover();
		$('.my-tooltip').tooltip({container: 'body'});
    });

	</script>
  </body>
</html>