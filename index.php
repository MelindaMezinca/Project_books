<?php
include 'dbconnect.php';

$mesaj="";
if(isset($_POST['action']))
{     
	session_start();

	if($_POST['action']=="signup")
	{
		$name =  mysqli_real_escape_string($conn,$_POST["name"]);
		$email =  mysqli_real_escape_string($conn,$_POST["email"]);
		$parola =  mysqli_real_escape_string($conn,$_POST["password"]);
		$parola2 =  mysqli_real_escape_string($conn,$_POST["password2"]);
		
		$query = mysqli_query($conn,"Select count(*) from useri where email ='$email'") or die("nu merge");
		$row = mysqli_fetch_row($query);
		$nr=$row[0];
		
		if(($nr == 0) && ($parola == $parola2)){
			mysqli_query($conn,"Insert into useri(nume, email, parola) values('$name','$email','$parola') ");
			$mesaj = "success";
		}
		else{
		}
	}
	
	if($_POST['action']=="login")
	{
		$email =  mysqli_real_escape_string($conn,$_POST["email"]);
		$parola =  mysqli_real_escape_string($conn,$_POST["password"]);

		
		$query = mysqli_query($conn,"Select count(*) from useri where email ='$email' AND parola='$parola'") or die("nu merge");
		
		$row = mysqli_fetch_row($query);
		$nr=$row[0];

		if($nr == 0){
			
			
			echo "Autentificare esuata! Verificati ca adresa de email si parola sa fie introduse corect!";
			$_SESSION["access"] = "false";
		}else
		{
			$query1 = mysqli_query($conn,"Select * from useri where email ='$email'") or die("nu merge");
			$row1 = mysqli_fetch_row($query1);
			//salveaza username-ul si parola in sesiune
			$_SESSION["id"] = $row1[0];
			$_SESSION["email"] = $row1[2];
			$_SESSION["nume"] = $row1[1];
			$_SESSION["access"] = "true";
			//echo "Autentificarea a fost efectuata cu succes.";
			header("Location: profil.php");
			
		}
	}
	
	
}
?>

<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mezinca Melinda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


<script src="js/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine-ro.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script src="js/mainpage.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Books<em>.</em></a></div>
				</div>

			</div>
			
		</div>
	</nav>

	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to Books Library</span>
							<h1>Meet your next favorite book.</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="login">Autentificare</a></li>
										<li class="gtco-second"><a href="#" data-tab="signup">Inregistrare</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner" data-content="signup">
											<form  id="registerForm" action="" method="post">
												<div class="row form-group">
														<div class="col-md-12">
															<label for="username">Nume</label>
															<input type="text" class="form-control validate[required]" id="name" name="name">
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-12">
															<label for="username">Email</label>
															<input type="text" class="form-control validate[required,custom[email]]" id="email" name="email">
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-12">
															<label for="password">Parola</label>
															<input type="password" class="form-control validate[required]" id="password" name="password">
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-12">
															<label for="password2">Repeta Parola</label>
															<input type="password" class="form-control validate[required, equals[password]]" id="password2" name="password2">
														</div>
													</div>

													<div class="row form-group">
														<div class="col-md-12">
														<input name="action" type="hidden" value="signup" />
														<input type="submit" class="btn btn-primary" value="Inregistrare">
														<label id="registerSucces" style="display:none;">Inregistrare cu succes!</label>
													</div>
													
												</div>
											</form>	
										</div>

										<div class="tab-content-inner active" data-content="login">
										
										 <?php
											if( $mesaj == "success" ){
												echo "<label> Ai fost inregistrat cu success</label>";
											}?> 
										
											<form action="" method="post" id="loginForm">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="text" class="form-control validate[required,custom[email]]" id="email" name="email">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Parola</label>
														<input type="password" class="form-control validate[required]" id="password" name="password">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input name="action" type="hidden" value="login" />
														<input type="submit" class="btn btn-primary" value="Autentificare">
													</div>
													<label> Nu ai cont? <a href="#" id="inregOnClick">Inregistreaza-te!</a> </label>
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	

	
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


