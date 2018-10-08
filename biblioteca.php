	<?php

	include 'dbconnect.php';


	session_start();
	if(isset($_SESSION['email']) &&  $_SESSION['access']=="true")
	{
		
		//$actiune = mysqli_query($conn,"Select * from carti where categorie = '1'") or die("nu merge");
		//$filmeActiune = mysqli_fetch_row($actiune);
		$denumireCateg = mysqli_query($conn,"Select * from categorie") or die("nu merge");
		$queryAfacere = mysqli_query($conn,"Select * from carti where categorie ='1'") or die ("nu merge");
		$queryBiografie = mysqli_query($conn,"Select * from carti where categorie ='2'") or die ("nu merge");
		$queryCalatorie = mysqli_query($conn,"Select * from carti where categorie ='3'") or die ("nu merge");
		$queryCopilarie = mysqli_query($conn,"Select * from carti where categorie ='4'") or die ("nu merge");

		
		
	}else
	{
		session_destroy();
		header("Location: index.php");
	}

	$conn = mysqli_connect("localhost", "root", "", "books") or die("nu se poate conecta la baza de date");
	//mysqli_select_db($conn,"carti") or die("nu gaseste db");
	$output = '';

	if(isset($_POST['search']))
	{
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
		$query = mysqli_query($conn,"SELECT * FROM carti WHERE titlu LIKE '%$searchq%'") or die("nu poate cauta");
		$count = mysqli_num_rows($query);
		if($count == 0)
		{
			$output = 'Nu a fost gasit nici un rezultat';
		}else{
			while($row = mysqli_fetch_array($query)) {
				$titlu = $row['titlu'];
				$id_carte = $row['id_carte'];
				
				$output .= '<div>'.$titlu.'</div>';
			}
		}
		
	}



	?>


	<!DOCTYPE HTML>
	<html>
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Biblioteca</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		
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

		
		<div id="page">

		
		<!-- <div class="page-inner"> -->
		
		
		<div class="biblioteca">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row firstRowHeader">
						<div id="logo"><a href="www.google.com">Books<em>.</em></a></div>
					
					
					<div id="biblioID"><a href="biblioteca.php">Biblioteca</a></div>
					<div class="logOut"> <?php echo $_SESSION["nume"]; ?> (<a href="logout.php">Deconectare</a>) </div>
			
				</div>
			
			  <form autocomplete="off" action="biblioteca.php" method="POST">
				 <input type="text" name="search" placeholder ="Search books"/>
				 <input type="submit" value="Go" /> 

			  </form>
			
			
			
			</div>
		</nav>
		
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
			<div class="overlay"></div>

		</header>
		
		
		<div id="gtco-features" class="border-bottom">
			<div class="gtco-container">
				<div class="row">
				<label><a href=="https://www.w3schools.com"> Afacere </a></label><br>
				 <div class="categorie">
				

		<?php
		
					 ?>
					 
					
					<?php
					 while($val = mysqli_fetch_array($queryAfacere)) 
					 {   
						$query_autor = mysqli_query($conn,"Select * from autori where id_autor = $val[5]") or die("nu merge");
						$autor = mysqli_fetch_array($query_autor);
						
						echo "<div class='carteCategorie'>";
						echo "<a href='carti.php?id_carte=".$val[0]."'><img src=\".$val[6].\" width='122' height='183' ;/></a><br>";
						
						 echo "<label style='font-size:12px'>".$val[1]."</label><br>" ;
						 			
						 echo " <label>".$autor[1]."<label> <br></div>";
						  
					}
				 ?>
				   <!-- <label> Titlul cartii </label> <br> -->
					<br>			
					
					<?php
					
					/*while($val = mysqli_fetch_array($queryDB)) {
						 
						 echo "<label>".$val[5]."</label>" ;*/
						  
				 //}
					
					?>
					<?php
				 //}
					?>
						 
				 </div>
				 
				<label><a href="https://www.w3schools.com"> Biografii </a></label><br>
				 <div class="categorie">
				
				 
				<?php
					 while($valBiografie = mysqli_fetch_array($queryBiografie)) 
					 {   echo "<div class='carteCategorie'>";
						echo "<a href='carti.php?id_carte=".$valBiografie[0]."'><img src=\".$valBiografie[6].\" width='122' height='183' ;/></a><br>";
						
						 echo "<label>".$valBiografie[1]."</label><br>" ;
						 			
						 echo " <label>".$valBiografie[5]."<label> <br></div>";
						  
					}
				 ?>
			
				 
					<br>			
					
				
				 </div>
				 
				 <label><a href="https://www.w3schools.com"> Calatorie </a></label><br>
				 <div class="categorie">			 
				<?php
					 while($valCalatorie = mysqli_fetch_array($queryCalatorie)) 
					 { 
						
         				echo "<div class='carteCategorie'>";
				 
						echo "<a href='carti.php?id_carte=".$valCalatorie[0]."'><img src=\".$valCalatorie[6].\" width='122' height='183' ;/></a><br>";
						
						echo "<label>".$valCalatorie[1]."</label><br>" ;
						 			
						echo " <label>".$valCalatorie[5]."<label> <br></div>";				  
					}
				 ?>	 
					<br>					
				 </div>
				 
				 
				 <label><a href="https://www.w3schools.com"> Cartile copilariei </a></label><br>
				 <div class="categorie">			 
				<?php
					 while($valCopilarie = mysqli_fetch_array($queryCopilarie)) 
					 { 
         				echo "<div class='carteCategorie'>";
				 
						echo "<a href='carti.php?id_carte=".$valCopilarie[0]."'><img src=\".$valCopilarie[6].\" width='122' height='183' ;/></a><br>";
						
						echo "<label>".$valCopilarie[1]."</label><br>" ;
						 			
						echo " <label>".$valCopilarie[5]."<label> <br></div>";				  
					}
				 ?>	 
					<br>					
				 </div>
				
				<div class="categorii">
				
				
					
		<?php

			   echo "<table > <tr> <h2> Categorii </h2>";
					while($value = mysqli_fetch_array($denumireCateg)){
						echo "<tr>";
						
							echo "<td>".$value[1]."</td>" ;
							
						
						echo "</tr>";
					}
					echo "</table>";
					

		?>
	<!--
					Ultimele carti adaugate in sectiunea: <br/><br/>
					-->
				
					<?php 

					//echo "<table > <tr> <th> Titlu </th> <th> Descriere </th> <th> Rating </th>";
					//while($value = mysqli_fetch_array($actiune)){
						//echo "<tr>";
						
							//echo "<td>".$value[1]."</td>" ;
							
							//echo "<td>".$value[2]."</td>" ;
							
							//echo "<td>".$value[4]."</td>" ;
						
						//echo "</tr>";
					//}
					//echo "</table>";
					 ?>
				
						
					
				</div>
				
			</div>
		</div>


		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">

				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-left">
							<small class="block">&copy; Toate drepturile rezervate.</small> 
						</p>
					</div>
				</div>

			</div>
		</footer>
		<!-- </div> -->
		</div>
		</div>

		<?php print("$output");
		?>
		
		
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
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

