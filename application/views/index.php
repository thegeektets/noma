<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>NOMA SANA </title>
	
    <!-- This file is part of a site template for sale at ThemeForest.net.
         See: http://themeforest.net/user/dilipkumar/portfolio
         Copyright 2012 Dilip Kumar -->

    <!-- CSS-->
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" />

    <!-- GOOGLE WEBFONT-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- FAVICON-->
	<link rel="shortcut icon" href="images/favicon.ico">

    <!-- //SCRIPTS -->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.foundation.reveal.js"></script>
	<script type="text/javascript" src="js/rotate.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script>
	$(function(){
		$('.flexslider').flexslider({
		animation: "fade",
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	});
	</script>

</head>
<body>

<!-- Modal Section -Login -->
<div id="loginform" class="reveal-modal">
	<h3>Members Login</h3>
	<p>Faworki cotton candy sweet cupcake applicake topping liquorice. Gummies cheesecake toffee cake.</p>
	<div class="space20"></div>
	<form>
		<fieldset>
			<label><strong>Username</strong></label>
			<input type="text"/>
			<label><strong>Password</strong></label>
			<input type="text" />
			<div class="space10"></div>
			<a class="radius button" href="#">Login</a>
			<div class="space10"></div>
			<p><a href="#">Forgot password?</a> Click here.</p>
		</fieldset>
</form>

<a class="close-reveal-modal"><i class="foundicon1-remove"></i></a>
</div>
<!-- Modal Section -Login -->

<!-- Modal Section -Register -->
<div id="signupform" class="reveal-modal">
	<h3>Sign up. It's free</h3>
	<p>Register and get premium services for free.</p>
	<div class="space20"></div>
	<form>
		<fieldset>
			<label><strong>Username</strong></label>
			<input type="text"/>
			<label><strong>Password</strong></label>
			<input type="text" />
			<label><strong>Email</strong></label>
			<input type="email" />
			<div class="space10"></div>
			<p>Check our <a href="#">terms and conditions</a> before sign up. If you familiar with our terms, go ahead click register me button.</p>
			<div class="space10"></div>
			<a class="radius button" href="#">Register me</a>
		</fieldset>
	</form>

<a class="close-reveal-modal"><i class="foundicon1-remove"></i></a>
</div>
<!-- Modal Section -Register -->

<!-- Header Section -->
<div id="header">
	<div class="header-wrap row">
		<div class="twelve columns">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt=""/></a></h1>
			</div>

			<div class="login"><a href="#" data-reveal-id="loginform"><i class="foundicon1-unlock login-ico"></i> Login</a></div>
			<div class="register"><a href="#" data-reveal-id="signupform"><i class="foundicon1-people register-ico"></i> Sign Up</a></div>
		</div>
	</div>
</div>
<!-- Header Section -->

<div class="clear"></div>

<!-- Slider section-->
<div class="slider-wrap">
	<div class="row">
		<!-- Slider content-->
		<div class="flexslider eight columns">
			<ul class="slides">
				<li><img src="demo/slides/slide1.png" alt=""/></li>
				<li><img src="demo/slides/slide2.png" alt=""/></li>
			</ul>
		</div>
		<!-- Slider content-->

		<div class="four columns">
			<div class="rsp-caption" >
					<h2>A Perfect template for your app</h2>
					<p>Faworki cotton candy sweet cupcake applicake topping liquorice. Gummies cheesecake toffee cake sesame snaps jelly gingerbread.</p>
		
					<div class="app-ico">
						<span><a href="#"><img src="images/android.png" alt=""/></a></span>
						<span><a href="#"><img src="images/apple.png" alt=""/></a></span>
						<span><a href="#"><img src="images/windows.png" alt=""/></a></span>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- Slider section-->

<div class="clear"></div>
<div class="space70"></div>
<div class="clear"></div>


<!-- Features content section-->
<div class="row">
	<div class="wrap">
		<!-- Features wrap Section -->
		<div class="twelve columns">
			<div class="features-wrap">
				<div class="four columns features-content">
					<div class="features-icon"><i class="foundicon1-people" style="color:#e64030;"></i></div>
					<div class="features-description">
						<h5>User Friendly</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a feugiat sem. Aliquam ullamcorper fermentum semac. </p>
					</div>
				</div>

				<div class="four columns features-content">
					<div class="features-icon"><i class="foundicon1-heart" style="color:#4da9b4;"></i></div>
					<div class="features-description">
						<h5>Designed with love</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a feugiat sem. Aliquam ullamcorper fermentum semac. </p>
					</div>
				</div>

				<div class="four columns features-content">
					<div class="features-icon"><i class="foundicon1-globe" style="color:#836aab;"></i></div>
					<div class="features-description">
						<h5>Easy Install</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a feugiat sem. Aliquam ullamcorper fermentum semac. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- Features wrap Section -->
	</div>
</div>
<!-- Features content section-->

<div class="space40"></div>
<div class="clear"></div>
<div class="space40"></div>

<!-- Wrap2 image section-->
<div class="row">
	<div class="twelve columns">
		<img src="images/iphone-big.png" style="width:100%;height:auto;" alt=""/>
	</div>
</div>
<!-- Wrap2 image section-->

<div class="clear"></div>
<div class="space20"></div>
<div class="clear"></div>

<!-- Wrap2 content section-->
<div class="row">
	<div class="twelve columns">
		<div class="wrap2" >
			<h2>Like our app. Download. it's free</h2>
			<p>Signup to get future news and updates.</p>
			<div class="app-ico2">
				<span><a href="#"><img src="images/android-black.png" alt=""/></a></span>
				<span><a href="#"><img src="images/apple-black.png" alt=""/></a></span>
				<span><a href="#"><img src="images/windows-black.png" alt=""/></a></span>
			</div>
		</div>
	</div>
</div>
<!-- Wrap2 content section-->

<div class="space30"></div>
<div class="clear"></div>
<div class="space30"></div>

<!-- Footer content section-->
<div class="row">
	<div class="footer twelve columns">
		<p>Copyright 2012. Crealand</p>
			<div class="space10"></div>
			<div class="social">
				<ul class="social-networks">
					<li class="icon-twitter"><a href="#">Twitter</a></li>
					<li class="icon-facebook"><a href="#">Facebook</a></li>
					<li class="icon-dribbble"><a href="#">Dribbble</a></li>
					<li class="icon-flickr"><a href="#">Flickr</a></li>
				</ul>
			</div>
	</div>
</div>

<div class="clear"></div>
<!-- Footer content section-->

<!-- Twitter Feed content section-->
<div class="row">
	<div class="twelve columns">
		<div class="twitter-feed">		
			<ul id="twitter_update_list" class="rotate"></ul> 			 		
		</div>
	</div>
</div>
<!-- Twitter Feed content section-->

<div class="clear"></div>

<!-- Script for Twitterfeed-->
<script src="js/twitter-feed.js" type="text/javascript"></script>  
<script src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=envato&amp;include_rts=true&amp;count=4&amp;callback=twitterCallback2" type="text/javascript"></script> 
<!-- Twitter Feed end -->

</body>
</html>