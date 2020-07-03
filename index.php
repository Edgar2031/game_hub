<?php 
	session_start();
	$profil = 0;
	if (isset($_SESSION["profil"])) {
		header("location: profil/profil.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Game HUB</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/webkit.css">
	<link rel="stylesheet" href="css/login/login.css">
	<link rel="icon" type="text/css" href="img/hub.png">
	
	<!--- Icons link ---->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style_2.css"/>
	<style>
		.login_box{
			display: none;
		}
		html,
		body {
			font-family: 'Roboto', sans-serif;
			-webkit-font-smoothing: antialiased;
			font-smoothing: antialiased;
			color: #fff;
			overflow: hidden;
		}

	</style>
</head>
<body>
	
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container_1">
				<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="img/logo.png" alt="" style="height: 42px; margin-top: -10px; width: 50%;">
			</a>
			<div class="user-panel face">
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
			</div>
			<div class="user-panel vk">
				<a href="https://vk.com/"><i class="fab fa-vk"></i></a>
			</div>
			<div class="user-panel inst">
				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel" >
			<div class="hs-item set-bg" data-setbg="img/slider-0.jpg" style="height: 100%;">
				<div class="hs-text">
					<div class="container" style="margin-left: 50px;">
						<h2 class="pb_h2">FORZA <span>HORIZON</span></h2>
						<p class="site-btn" style="border-top-left-radius: 0; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-1.jpg" style="height: 100%;">
				<div class="hs-text">
					<div class="container" style="margin-left: 50px;">
						<h2 class="pb_h2">PUBG</h2>
						<p class="site-btn" style="border-top-left-radius: 0; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg" style="height: 100%; padding-bottom: 50px;">
				<div class="hs-text">
					<div class="container" style="margin-left: 50px;">
						<h2 class="pb_h2">PUBG <span>MOBILE</span></h2>
						<p class="site-btn" style="border-top-left-radius: 0; font-size: 18px;">Play for free anywhere, anytime. PUBG MOBILE offers the most powerful free playback animation in the mobile system.</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-3.jpg" style="height: 100%;">
				<div class="hs-text">
					<div class="container" style="margin-left: 50px;">
						<h2 class="pb_h2">APEX <span>LEGENDS</span></h2>
						<p class="site-btn" style="border-top-left-radius: 0; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-4.jpg" style="height: 100%;">
				<div class="hs-text">
					<div class="container" style="margin-left: 50px;">
						<h2 class="pb_h2">FORNITE</h2>
						<p class="site-btn" style="border-top-left-radius: 0; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
					</div>
				</div>
			</div>
		</div>
		<div style="position: fixed; height: 90%; bottom: 0; right: 40px; z-index: 10; display: flex; justify-content: center; align-items: center;">		
			<div class="box">
				<h2 class="regist">Registration</h2>
				<div class="inputBox" style="display: inline-block; width: 49%">
					<input id="name" type="text" name="name" placeholder="Name">
				</div>
				<div class="inputBox" style="display: inline-block; width: 49%; margin-left: 3px;">
					<input id="surname" type="text" name="surname" placeholder="Surname">
				</div>
				<div class="inputBox">
					<input id="email" type="text" name="email" placeholder="example@email.com">
				</div>
				<div class="inputBox">
					<input id="age" type="text" name="age" placeholder="Age" >
				</div>
				<div class="inputBox" style="display: inline-block; width: 49%">
					<input id="password" type="password" name="password" placeholder="Password">
				</div>
				<div class="inputBox" style="display: inline-block; width: 49%; margin-left: 3px;">
					<input id="password_confirm" type="password" name="password_confirm" placeholder="Repeat password">
				</div>
				<a class="u_log">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Login
				</a>
				<a class="save">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Register
				</a>
			</div>
			<div class="login_box">
				<h1>Login</h1>
				<input class="u_email" type="text" placeholder="Email">
				<input class="u_password" type="password" placeholder="Password">
				<input class="u_registrations" type="submit" value="Register">
				<input class="u_login" type="submit" value="Login">
			</div>
		</div>
	</section>
	<!-- Hero section end -->
		
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/login js/login.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
</html>