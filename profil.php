<?php

include 'dbconnect.php';

session_start();
if(isset($_SESSION['email']) &&  $_SESSION['access']=="true")
{
	
	
}else
{
	session_destroy();
	header("Location: index.php");
}


?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profil utilizator</title>
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
		
	<div class="gtco-loader"></div>	
	<div id="page">
	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row firstRowHeader">
					<div id="logo"><a href="www.google.com">Books<em>.</em></a></div>
				
				
				<div id="biblioID"><a href="biblioteca.php">Biblioteca</a></div>
				<div class="logOut"> <?php echo $_SESSION["nume"]; ?> (<a href="logout.php">Deconectare</a>) </div>
				
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>

	</header>
	
	
	<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				
					TESTINGgggggggggggggggg<br/>
					Before text editors existed, computer text was punched into cards with keypunch machines. Physical boxes of these thin cardboard cards were then inserted into a card-reader.
<br/>			Magnetic tape and disk "card-image" files created from such card decks often had no line-separation characters at all, and assumed fixed-length 80-character records. An alternative to cards was punched paper tape. It could be created by some teleprinters (such as the Teletype), which used special characters to indicate ends of records.

<br/>
The first text editors were "line editors" oriented to teleprinter- or typewriter-style terminals without displays. Commands (often a single keystroke) effected edits to a file at an imaginary insertion point called the "cursor". Edits were verified by typing a command to print a small section of the file, and periodically by printing the entire file. In some line editors, the cursor could be moved by commands that specified the line number in the file, text strings (context) for which to search, and eventually regular expressions. Line editors were major improvements over keypunching. Some line editors could be used by keypunch; editing commands could be taken from a deck of cards and applied to a specified file. Some common line editors supported a "verify" mode in which change commands displayed the altered lines.

<br/>When computer terminals with video screens became available, screen-based text editors (sometimes called just "screen editors") became common. One of the earliest full-screen editors was O26, which was written for the operator console of the CDC 6000 series computers in 1967. Another early full-screen editor was vi. Written in the 1970s, it is still a standard editor[5] on Unix and Linux operating systems. Emacs, one of the first open source and free software projects, is another early full-screen or real-time editor, one that was ported to many systems.[6] A full-screen editor's ease-of-use and speed (compared to the line-based editors) motivated many early purchases of video terminals.[7]

<br/>The core data structure in a text editor is the one that manages the string (sequence of characters) or list of records that represents the current state of the file being edited. While the former could be stored in a single long consecutive array of characters, the desire for text editors that could more quickly insert text, delete text, and undo/redo previous edits led to the development of more complicated sequence data structures.[8] A typical text editor uses a gap buffer, a linked list of lines (as in PaperClip), a piece table, or a rope, as its sequence data structure.
					
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
	</div>

	</div>

	
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

